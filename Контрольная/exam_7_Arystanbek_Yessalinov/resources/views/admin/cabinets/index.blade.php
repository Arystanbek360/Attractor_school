@extends('layouts.admin')

@section('content')
    <div style="padding-bottom: 30px;">
        <div class="d-flex">
            <h1 class="col-2 me-4 text-white">Кабинеты</h1>
            <a href="{{route('admin.cabinets.create')}}" type="button" class="btn btn-outline-light btn-lg">
                Создать новый кабинет
            </a>
        </div>
    </div>

    <table class="table table-dark table-striped table-bordered border-white" style="padding-top: 30px">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Номер кабинета</th>
            <th scope="col">Название кабинета</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cabinets as $cabinet)
            <tr>
                <td class="col-2">
                    {{$cabinet->number}}
                </td>
                <td>
                    <a href="{{route('admin.cabinets.show', ['cabinet' => $cabinet])}}" class="text-white">
                        {{$cabinet->name}}
                    </a>
                </td>
                <td class="col-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{route('admin.cabinets.edit', ['cabinet' => $cabinet])}}" class="text-white">
                            Редактировать
                        </a>
                        <form method="post" action="{{route('admin.cabinets.destroy', ['cabinet' => $cabinet])}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-link text-white">Удалить</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
