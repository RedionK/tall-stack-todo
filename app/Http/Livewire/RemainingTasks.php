<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class RemainingTasks extends Component
{   
    public $tasks;

    public function mount(){
        $this->tasks = Task::where('completed', false);
    }
    public function render()
    {
        return view('livewire.remaining-tasks');
    }
}
