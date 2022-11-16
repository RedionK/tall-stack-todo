<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Psy\Readline\Hoa\Exception;

class AddTask extends Component
{   
    public $title;

    public function createTask()
    {   
        
        $validatedInput = $this->validate([
                'title' => 'required'
        ]);
        
        Task::create($validatedInput);

        return redirect('/');
    }

    public function render()
    {   
        return view('livewire.add-task');
    }
}
