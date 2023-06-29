<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="name" class="text-white">Название Жанра:</label>
        <input type="text" class="form-control text-white bg-secondary" id="name" name="name"
               value="{{isset($genre) ? $genre->name : old('name')}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description" class="text-white">Описание:</label>
        <textarea class="form-control text-white bg-secondary" style="height: 250px" id="description"
                  name="description">{{isset($genre) ? $genre->description : old('description')}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
