@extends('layouts.app')
@section('content')

    <h2>Список задач</h2>
    <div class="row">
        <table class="table table table-bordered">
            <thead>
            <tr class="table-secondary">
                <th scope="col">#</th>
                <th scope="col">Задача</th>
                <th scope="col">Готовность</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                @if($task->state_id=='1')
                    <tr class="table-danger bg-opacity-75">
                        <td>{{$task->id}}</td>
                        <td>{{$task->name}}</td>
                        <td>Новая</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <form action="{{route('tasks.upgrade',['id'=>$task->id])}}" method="PUT">
                                    <input type="hidden" name="state_id" value="2">
                                    <button type="submit" class="btn btn-link">Приступить к выполнению</button>
                                </form>
                                |
                                <form action="{{route('tasks.delete',['id'=>$task->id])}}" method="DELETE">
                                    <button type="submit" class="btn btn-link">Удалить</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @elseif($task->state_id=='2')
                    <tr class="bg-warning bg-opacity-50">
                        <td>{{$task->id}}</td>
                        <td>{{$task->name}}</td>
                        <td>Выполняется</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <form action="{{route('tasks.upgrade',['id'=>$task->id])}}" method="PUT">
                                    <input type="hidden" name="state_id" value="3">
                                    <button type="submit" class="btn btn-link">Завершить выполнение</button>
                                </form>
                                |
                                <form action="{{route('tasks.delete',['id'=>$task->id])}}" method="DELETE">
                                    <button type="submit" class="btn btn-link">Удалить</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @else
                    <tr class="bg-success bg-opacity-50">
                        <td>{{$task->id}}</td>
                        <td>
                            <del>{{$task->name}}</del>
                        </td>
                        <td>Выполнена</td>
                        <td>
                            <form action="{{route('tasks.delete',['id'=>$task->id])}}" method="DELETE">
                                <button type="submit" class="btn btn-link">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

