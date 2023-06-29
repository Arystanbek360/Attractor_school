@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ $action }}">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{isset($category) ? $category->name : ''}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
