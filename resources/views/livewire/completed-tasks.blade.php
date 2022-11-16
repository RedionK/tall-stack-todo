<div>
    <div>
        COMPLETED
    </div>
    @foreach ($tasks as $task)
        <div class="flex">
            <p class="line-through">{{$task->title}}</p>
        </div>
        
    @endforeach
</div>
