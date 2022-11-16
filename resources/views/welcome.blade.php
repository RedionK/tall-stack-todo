@extends('layouts.app')

@section('content')
        @livewire('title')
        @livewire('remaining-tasks')
        @livewire('completed-tasks')
        @livewire('add-task')    
@endsection