<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{   
    public $todos;
    public $task = '';

    function mount() {
        $this->fetchTodos();
    }

    function fetchTodos(){
        $this->todos = Todo::all()->reverse();
    }

    function addTodo() {
        if ($this->task != '') {
            $todos = new Todo();
            $todos->task = $this->task;
            // dd($todos);
            $todos->save();
            $this->task = '';
            $this->fetchTodos();
        }
    }

    function markAsDone(Todo $todo){
        $todo->status = 'done';
        $todo->save();
        $this->fetchTodos();
    }

    function remove(Todo $todo) {
        $todo->delete();
        $this->fetchTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
