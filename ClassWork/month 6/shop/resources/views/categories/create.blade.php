@extends('base')

@section('content')
    <h1>Create category</h1>

    @include('categories.form', ['action' => route('categories.store')])
@endsection
