@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <h3>Название {{$task->caption}}</h3>
            <h3>Описание {{$task->description}}</h3>
        </div>
        <div>
            <a class="btn btn-success" href="{{route('tasks.index')}}">Назад</a>
        </div>
    </div>
@endsection