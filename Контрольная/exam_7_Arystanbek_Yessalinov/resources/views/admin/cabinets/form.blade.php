<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="number" class="text-white">Номер кабинета:</label>
        <input type="number" class="form-control text-white bg-secondary mb-1" id="number"
               name="number" value="{{isset($admin) ? $admin->number : old('number')}}">
        @error('number')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="name" class="text-white">Название кабинета:</label>
        <input type="text" class="form-control text-white bg-secondary mb-4" id="name" name="name"
               value="{{isset($admin) ? $admin->name : old('name')}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
</form>
