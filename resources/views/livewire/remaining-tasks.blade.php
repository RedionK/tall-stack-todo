<div>
    @foreach ($tasks as $task)
        <div class="flex">
            <p>{{$task->title}}</p>
            <input type="checkbox">
        </div>
        
    @endforeach
</div>
