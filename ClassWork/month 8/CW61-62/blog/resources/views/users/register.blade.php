@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-6 offset-3 align-self-center">
            @include('partials.notifications.alert')
            <h1 class="text-center">Register</h1>
            <hr>
            <form action="{{route('users.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="email" value="{{old('email')}}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Confirm password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-outline-primary">Register</button>
            </form>
        </div>
    </div>
@endsection
