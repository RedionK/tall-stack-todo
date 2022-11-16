<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTask extends Component
{   
    public $input = '';

    public function createTask()
    {
        Task::create(['title' => $this->input]);

        return redirect('/');
    }

    public function render()
    {   
        return view('livewire.add-task');
    }
}
