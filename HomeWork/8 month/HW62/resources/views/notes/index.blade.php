@extends('layouts.base')
@section('content')
    <div class="d-flex">
        <form class="col-3 me-5 mt-5" action="{{route('notes.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="noteBody" class="form-label">Создайте заметку</label>
                <textarea name="body" id="noteBody" class="col-12 bg-info text-center align-text-center"
                          style="height: 500px"
                          placeholder="Это ваша заметка"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
        <div class="d-none">{{$i=1}}</div>
        <div class="row">
            @foreach($notes as $note)
                <div class="card
                        {{'text-bg-'.array_rand(['primary'=>'','info'=>'','secondary'=>'','success'=>'','danger'=>'','warning'=>''])}}
                        m-3"
                     style="">
                    <div class="card-header">{{$note->user->name}}</div>
                    <div class="card-body">
                        <h5 class="card-title">Записка {{$i++}}</h5>
                        <p class="card-text fs-5">{{$note->body}}</p>
                        <form action="{{route('notes.destroy',compact('note'))}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
