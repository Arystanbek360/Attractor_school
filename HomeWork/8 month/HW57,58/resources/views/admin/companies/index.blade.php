@extends('layouts.admin')

@section('content')
    <div style="padding-bottom: 30px;">
        <div class="d-flex">
            <h1 class="me-4 text-white">Компания "{{$company->name}}"</h1>
        </div>
    </div>

    <table class="table table-dark table-striped table-bordered border-white" style="padding-top: 30px">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название комании</th>
            <th scope="col">Адресс компании</th>
            <th scope="col">сот.номер компании</th>
            <th scope="col">Эл.почта компании</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$company->id}}</th>
            <td>
                {{$company->name}}
            </td>
            <td>
                {{$company->address}}
            </td>
            <td>{{is_null($company->number) ? "Номер не указан" : $company->number}}</td>
            <td>{{$company->email}}</td>
            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{route('admin.company.edit', ['company' => $company])}}" class="text-white">
                        Изменить
                    </a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
