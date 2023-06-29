@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <h1 class="mt-5">{{ isset($user) ?  'Редактирование пользователя' :  'Добавление пользователя'}}</h1>
        <div
            class="container px-5 my-2 text-center rounded-5 col-6 {{array_rand(['bg-info'=>'bg','bg-warning'=>'bg','bg-success'=>'bg','bg-primary'=>'bg'])}}">
            {{--{{$bg=}}--}}
            <form method="POST" action="{{ isset($user) ? route('update', $user) : route('store') }}">
                @csrf
                @if (isset($user))
                    @method('PUT')
                @endif
                <div class="mt-2">
                    <label class="form-label" for="first_name">Имя:</label>
                    <input class="form-control text-center" type="text" name="first_name" id="first_name"
                           value="{{isset($user) ? $user->first_name : ""}}"
                           required>
                    @error('first_name')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-label" for="last_name">Фамилия:</label>
                    <input class="form-control text-center" type="text" name="last_name" id="last_name"
                           value="{{isset($user) ? $user->last_name : ""}}"
                           required>
                    @error('last_name')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-label" for="email">Email:</label>
                    <input class="form-control text-center" type="email" name="email" id="email"
                           value="{{isset($user) ? $user->email : ""}}" required>
                    @error('email')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-label" for="url">URL личной странички в интернете:</label>
                    <input class="form-control text-center" type="url" name="url" id="url"
                           value="{{isset($user) ? $user->url : ""}}">
                    @error('url')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-label" for="born">Дата рождения:</label>
                    <input class="form-control text-center" type="date" id="born" name="born"
                           value="{{isset($user) ? $user->born : ""}}">
                    @error('born')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-label" for="password">Пароль:</label>
                    <input class="form-control text-center" type="password" name="password" id="password"
                           value="{{isset($user) ? $user->password : ""}}"
                           required>
                    @error('password')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-label" for="description">Описание:</label>
                    <textarea class="form-control text-center" name="description" id="description"
                              required>{{isset($user) ? $user->description : ""}}</textarea>
                    @error('description')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-check-label">Пол:</label>
                    <label>
                        <input type="radio" name="gender"
                               value='M' {{ ((isset($user) ? $user->gender : '') == 'M') ? 'checked' : ''}} >Мужской
                    </label>
                    <label>
                        <input type="radio" name="gender"
                               value='F' {{ ((isset($user) ? $user->gender : '') == 'F') ? 'checked' : '' }}>Женский
                    </label>
                    @error('gender')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-check-label" for="city">Город:</label>
                    <select name="city" id="city">
                        <option value="">Выберите город</option>
                        <option value="Moscow" {{ ((isset($user) ? $user->city : '') == 'Moscow') ? 'selected' : '' }}>
                            Москва
                        </option>
                        <option
                            value="Almaty" {{ ((isset($user) ? $user->city : '') == 'Almaty') ? 'selected' : '' }}>
                            Алматы
                        </option>
                        <option value="Astana" {{ ((isset($user) ? $user->city : '') == 'Astana') ? 'selected' : '' }}>
                            Астана
                        </option>
                        <option
                            value="Shymkent" {{ ((isset($user) ? $user->city : '') == 'Shymkent') ? 'selected' : '' }}>
                            Шымкент
                        </option>
                        <option
                            value="New-York" {{ ((isset($user) ? $user->city : '') == 'New-York') ? 'selected' : '' }}>
                            Нью-Йорк
                        </option>
                    </select>
                    @error('city')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-check-label">Пользователь активен:</label>
                    <label>
                        <input type="radio" name="active"
                               value="1" {{ ((isset($user) ? $user->active : '') == 1) ? 'checked' : '' }}>Да
                    </label>
                    <label>
                        <input type="radio" name="active"
                               value="0" {{ ((isset($user) ? $user->active : '') == 0) ? 'checked' : '' }}>Нет
                    </label>
                </div>
                <div>
                    <button class="btn btn-sm btn-primary mt-2"
                            type="submit">{{ isset($user) ? 'Обновить' : 'Создать' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
