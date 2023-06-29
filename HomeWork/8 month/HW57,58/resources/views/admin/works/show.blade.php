@extends('layouts.admin')

@section('content')
    <div class="card bg-secondary text-white">
        <div class="card-header text-white">
            Фотограф - "{{$work->photograph->name}}"
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title">{{$work->photograph->name}}</h5>
                <div class="row col-3">
                    <a href="{{route('admin.works.edit', ['work' => $work])}}"
                       class="btn btn-primary btn-sm">Изменить</a>
                    <a href="{{route('admin.photographs.show',['photograph'=>$work->photograph])}}"
                       class="btn btn-secondary btn-sm">Назад</a>
                </div>
            </div>
            <p class="card-text">
                <strong>Описание фотографии:</strong> {{$work->description}}<br>
            </p>
            <img class="card-img-top" src="{{asset('/storage/' . $work->picture)}}" alt="{{$work->picture}}">
        </div>
    </div>
@endsection
