<div>
    <div>
        TO-DO
    </div>
    @foreach ($tasks as $task)
        <div class="flex">
            <p>{{$task->title}}</p>
            <input wire:click="completeTask({{$task->id}})" type="checkbox">
        </div>
        
    @endforeach
</div>
