<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Dotenv\Validator;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){

        return view('todos.index');
    }

    public function create(){

        return view('todos.create');
    }

    public function store(Request $request){

        $rules = [
            'title' => 'required|max:255',
        ];

        $messages = [
            'title.max' => 'Todo title should not be greater than 255',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Todo::create($request->all());

        $todo = auth()->user()->todos()->create($request->all());
        if($request->field){
            foreach($request->field as $f){
                $todo->fields()->create(['name' => $f]);
            }
        }

        return redirect()->back()->with('message', 'Completed');
    }

    public function edit(){

        return view('todos.edit');
    }

    public function destroy($id){

        $todo = Todo::findOrFail($id);

        // Delete relations first (fields)
        $todo->fields->each->delete();

        // Then delete main
        $todo->delete();
    }
}
