<div class="pt-10 px-10">
    <div class="text-slate-400">
        TO-DO
    </div>
    <div class="border-2 border-slate-1000 divide-y divide-slate-1000 rounded-lg">
        @foreach ($tasks as $task)
            <div class="flex justify-between p-3">
                <p>{{$task->title}}</p>
                <input 
                    class="rounded ml-3" 
                    wire:click="completeTask({{$task->id}})" 
                    type="checkbox">
            </div>
        @endforeach
    </div>
</div>
