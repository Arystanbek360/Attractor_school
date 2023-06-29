@extends('base')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column">
            <h1 class="mt-2">{{ isset($contact) ?  'Редактирование пользователя' :  'Добавление пользователя'}}</h1>
            @if(isset($contact->picture))
                <img src="{{asset('/storage/' . $contact->picture)}}" alt="{{$contact->picture}}"
                     style="width:600px;height:500px;" class="mb-1">
            @endif
        </div>
        <div
            class="container px-5 my-5 text-center rounded-5 col-6 {{array_rand(['bg-info'=>'bg','bg-warning'=>'bg','bg-success'=>'bg','bg-primary'=>'bg'])}}">
            {{--{{$bg=}}--}}
            <form method="POST"
                  action="{{ isset($contact) ? route('contacts.update', $contact) : route('contacts.store') }}"
                  enctype="multipart/form-data">
                @csrf
                @if (isset($contact))
                    @method('PUT')
                @endif
                <div class="mt-2">
                    <label class="form-label" for="contact">Имя:</label>
                    <input class="form-control text-center" type="text" name="name" id="name"
                           value="{{isset($contact) ? $contact->name : ""}}"
                    >
                    @error('name')
                    <div class="alert alert-danger error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-label" for="number">Номер:</label>
                    <input class="form-control text-center" type="text" name="number" id="number"
                           value="{{isset($contact) ? $contact->number : ""}}"
                           required>
                    @error('number')
                    <div class="alert alert-danger error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="form-label" for="email">Email:</label>
                    <input class="form-control text-center" type="email" name="email" id="email"
                           value="{{isset($contact) ? $contact->email : ""}}">
                    @error('email')
                    <div class="alert alert-danger error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-1">
                    <div class="custom-file">
                        @if(isset($contact->picture))
                            <label class="custom-file-label" for="customFile">Поменяйте аватарку</label>
                            <input type="file" class="form-control form-control-sm" id="customFile" name="picture"
                                   value="{{$contact->picture}}" onchage="preview()">
                        @else
                            <div class="custom-file">
                                <label class="custom-file-label" for="customFile">Выбирете аватарку</label>
                                <input type="file" class="form-control form-control-sm" id="customFile" name="picture">
                            </div>
                        @endif
                    </div>
                </div>
                <div>
                    <button class="btn btn-sm btn-primary mt-2"
                            type="submit">{{ isset($contact) ? 'Обновить' : 'Создать' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
