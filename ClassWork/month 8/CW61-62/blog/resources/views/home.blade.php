@extends('layouts.base')
@section('content')
    @include('partials.notifications.alert')
    <h1>Hello, {{auth_user()->name}}!</h1>
    <form action="{{route('sessions.logout')}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-outline-danger btn-sm">Logout</button>
    </form>
@endsection
