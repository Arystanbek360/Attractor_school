<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>To-Do list</title>
</head>

<body>
<div class="container">
    @if(session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    @yield('content')
    <form action="{{route('tasks.garbage')}}" method="DELETE" class="d-grid gap-2 mb-4">
        <button class="btn bg-opacity-50 bg-danger text-start text-danger-emphasis" type="submit">Удалить все
            выполненые
        </button>
    </form>

    <h2>Добавить новую задачу</h2>
    <div class="row">
        <form action="{{action([App\Http\Controllers\PagesController::class, 'create'])}}" method="POST">
            {{ csrf_field() }}
            <div class="input-group mb-0">
                <input type="text" class="form-control col-12" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-default" placeholder="Нужно сделать:" id="new_task"
                       name="name">
                <p class="text-secondary fs-6 col-12">Создай задачу,что нужно сделать...</p>
                <button class="btn btn-primary" type="submit">Добавить</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>


</html>


