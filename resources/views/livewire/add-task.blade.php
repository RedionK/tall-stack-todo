<div>
    <form wire:submit.prevent="createTask">
        <div class="flex">
            <input wire:model="input" type="text" preview="Enter a task">
            <button type="submit">Add Task</button>
        </div>
        
    </form>
    
</div>
