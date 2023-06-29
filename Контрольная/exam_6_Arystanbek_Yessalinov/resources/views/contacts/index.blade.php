@extends('base')


@section('content')

    @if(count($contacts)<1)
    <h1>Список контактов пуст</h1>
    @else
        <div class="text-center mb-5">
            <h1>Список контактов</h1>
        </div>
        <div class="d-flex row justify-content-evenly">
            @foreach($contacts as $contact)
                <div class="card m-2 col-5 bg-info-subtle">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div class="col-8">
                                <h5 class="card-title">Имя:
                                    {{is_null($contact->name) ? "Контакт не подписан" : $contact->name}}
                                </h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Телефон:
                                    <a href="{{route('contacts.show', ['contact' => $contact])}}">
                                        {{$contact->number}}
                                    </a>
                                </h6>
                                <p class="card-text">
                                    Email: {{is_null($contact->email) ? "Email не указан" : $contact->email}}</p>
                            </div>
                            @if($contact->picture)
                                <img src="{{asset('/storage/' . $contact->picture)}}" alt="{{$contact->picture}}"
                                     width="100" height="100">
                            @else
                                <img
                                    src="data:image/png;base64,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"
                                    width="100" height="100" class="">
                            @endif

                            <div class="d-flex flex-column ml-3 align-items-center justify-content-evenly col-1">
                                <a class="navbar-brand" href="{{route('contacts.edit', ['contact' => $contact])}}">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4792/4792960.png" alt="create"
                                         width="30"
                                         height="24">
                                </a>
                                <form method="post" action="{{route('contacts.destroy', ['contact' => $contact])}}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="navbar-brand btn btn-link"><img
                                            src="https://cdn-icons-png.flaticon.com/512/4441/4441955.png" alt="delete"
                                            width="30"
                                            height="24"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
