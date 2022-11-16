<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RemainingTasks extends Component
{   
    public $tasks;

    public function mount(){
        
    }
    public function render()
    {
        return view('livewire.remaining-tasks');
    }
}
