@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список заданий</div>
                    <div class="card-body">
                        <div>
                            <table class="table">
                                <thead class="table-primary">
                                <tr>
                                    <td>Название</td>
                                    <td>Описание</td>
                                    <td>Выполнен</td>
                                    <td colspan="3">Операции</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tasks as $task)
                                    <tr>
                                        <td>{{$task->caption}}</td>
                                        <td>{{$task->description}}</td>
                                        <td>{{ $task->completed ? 'Да' : 'Нет'}}</td>
                                        <td>
                                            <a class="btn-sm btn-warning" href="{{route('tasks.edit',$task->id)}}"><span class="oi oi-pencil"></span></a>
                                        </td>
                                        <td>
                                            <a class="btn-sm btn-danger"><span class="oi oi-minus"></span></a>
                                        </td>
                                        <td>
                                            <a class="btn-sm btn-success"><span
                                                        class="oi oi-magnifying-glass"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{route('tasks.create')}}" class="btn btn-danger">Добавить задачу</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
