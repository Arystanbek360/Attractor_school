<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="name" class="text-white">Название компании:</label>
        <input type="text" class="form-control text-white bg-secondary" id="name" name="name"
               value="{{isset($company) ? $company->name : old('name')}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="address" class="text-white">Адрес компании:</label>
        <input type="text" class="form-control text-white bg-secondary" id="address" name="address"
               value="{{isset($company) ? $company->address : old('address')}}">
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <label for="number" class="text-white">Сотовый номер:</label>
        <input type="text" class="form-control text-white bg-secondary" id="number" name="number"
               value="{{isset($company) ? $company->number : old('number')}}">
        @error('number')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email" class="text-white">Электронная почта фотографа:</label>
        <input type="text" class="form-control text-white bg-secondary" id="email" name="email"
               value="{{isset($company) ? $company->email : old('email')}}">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

