<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddTask extends Component
{   
    public $input = '';

    public function createTask()
    {
        Task::create($this->input);
    }

    public function render()
    {   
        return view('livewire.add-task');
    }
}
