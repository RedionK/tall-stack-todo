<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class CompletedTasks extends Component
{   
    public $tasks = [];
    
    public function mount(){
        $this->tasks = Task::where('completed', true)->get();
    }
    
    public function render()
    {
        return view('livewire.completed-tasks');
    }
}
