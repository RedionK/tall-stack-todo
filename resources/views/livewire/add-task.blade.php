<div>
    <!-- There is a problem with the below code block. It shows an error message if the user enters an empty task and the error message disappears after 3 seconds. If 
    the user tries to enter a subsequent empty task the error message does not come back (it's supposed to). I suspect it has to do something with how I'm using the
    error blade directive with alpine and livewire. -->
    
    @error('title')
        <div 
            x-data="{show: true}" 
            x-show="show" 
            x-init="setTimeout(() => show = false, 3000)" 
            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded"
        >
            <span class="block sm:inline">Did you try to add an empty task? GENIUS!!</span>
        </div>
    @enderror
    
    <p class="text-gray-400 uppercase"> New task: </p>
    <form wire:submit.prevent="createTask">
        <div class="flex justify-between">
            <input 
                class="w-full appearance-none rounded-lg border-2 border-slate-300" 
                wire:model="title" 
                type="text"
            >
            <button 
                class="flex-no-shrink p-1 ml-3 border-2 rounded text-green-500 border-green-500" 
                type="submit"
            >ADD TASK</button>
        </div>
    </form>
</div>
