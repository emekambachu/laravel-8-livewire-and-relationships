<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('todos', [TodoController::class
, 'index']);

Route::get('todos/create', [TodoController::class
    , 'create']);

Route::post('todos/submit', [TodoController::class
    , 'store'])->name('todos.submit');

Route::get('todos/edit', [TodoController::class
    , 'edit']);
