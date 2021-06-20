<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $field = [];

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function increaseField()
    {
        $this->field[] = count($this->field)+1;
    }

    public function decreaseField($index)
    {
        unset($this->field[$index]);
        $this->field--;
    }

    public function countTodos()
    {
        Todo::count();
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
