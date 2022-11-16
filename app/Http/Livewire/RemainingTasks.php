<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class RemainingTasks extends Component
{   
    public $tasks;

    public function completeTask($taskId)
    {
        $task = Task::find($taskId);
        $task->completed = true;
        $task->save();

        return redirect('/');
    }
    public function mount(){
        $this->tasks = Task::where('completed', false)->get();
    }

    public function render()
    {
        return view('livewire.remaining-tasks');
    }
}
