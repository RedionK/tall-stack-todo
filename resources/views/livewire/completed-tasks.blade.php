<div class="p-10">
    <div class="text-slate-400">COMPLETED</div>
    <div class="border-2 border-slate-1000 divide-y divide-slate-200 rounded-lg">
        @foreach ($tasks as $task)
            <div class="flex justify-between items-center p-3">
                <p class="line-through">{{$task->title}}</p>
                <div class="flex ml-3">
                    <button 
                        class="flex-no-shrink p-1 ml-1 border-2 rounded text-gray-500 border-gray-500" 
                        wire:click="removeTaskFromDone({{$task->id}})">NOT DONE</button>
                    <button 
                        class="flex-no-shrink p-1 ml-3 border-2 rounded text-red-500 border-red-500" 
                        wire:click="deleteCompletedTask({{$task->id}})">DELETE</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
