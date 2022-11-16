<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class CompletedTasks extends Component
{   
    public $tasks;

    public function deleteCompletedTask($taskId)
    {
        $task = Task::find($taskId);
        $task->delete();
        
        return redirect('/');
    }

    public function removeTaskFromDone($taskId)
    {
        $task = Task::find($taskId);
        $task->completed = false;
        $task->save();

        return redirect('/');
    }
    public function mount(){
        $this->tasks = Task::where('completed', true)->get();
    }
    
    public function render()
    {
        return view('livewire.completed-tasks');
    }
}
