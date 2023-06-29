<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="name" class="text-white">Название заведения:</label>
        <input type="text" class="form-control text-white bg-secondary mb-4" id="name" name="name"
               value="{{isset($institution) ? $institution->name : old('name')}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description" class="text-white">Описание:</label>
        <textarea class="form-control text-white bg-secondary" style="height: 250px" id="description"
                  name="description">{{isset($institution) ? $institution->description : old('description')}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="delivery" class="text-white">Цена доставки:</label>
        <input type="number" class="form-control text-white bg-secondary mb-1" id="delivery"
               name="delivery" value="{{isset($institution) ? $institution->delivery : old('delivery')}}">
        @error('delivery')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    Категория заведения:<br>
    <div class="btn-group mb-1" role="group" aria-label="Basic checkbox toggle button group">
        @foreach($categories as $category)
            <input type="radio" class="btn-check" id="{{$category->id}}" autocomplete="off"
                   name="category_id"
                   value="{{$category->id}}"
            @if(isset($institution) && $institution->category)
                {{($institution->category_id === $category->id)  ? 'checked' : ''}}
                @endif
            >
            <label class="btn btn-outline-primary" for="{{$category->id}}">{{$category->name}}</label>
        @endforeach
        @error('category_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-1">
        <div class="custom-file">
            <img
                @if (isset($institution, $institution->picture))
                    src="{{asset('/storage/' . $institution->picture)}}" alt="{{$institution->picture}}"
                @else
                    src="" alt=""
                @endif
                style="max-width:100px;max-height:100px;" class="mb-1" id="picturePreview">
            <input type="file" class="form-control form-control-sm bg-secondary" id="customFile" onchange="preview()"
                   name="picture" value="{{isset($institution, $institution->picture) ? $institution->picture : ''}}"
            >
            <label class="custom-file-label btn btn-secondary mt-3" for="customFile">Выбрать изображение</label>
            @error('picture')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button onclick="clearImage()" class="btn btn-danger mt-3">Отчистить картинку</button>
        </div>
    </div>

    <div class="form-group mb-1 mt-3">
        <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
</form>

<script>
    function preview() {
        picturePreview.src = URL.createObjectURL(event.currentTarget.files[0]);
    }

    function clearImage() {
        event.preventDefault();
        customFile.value = null;
        picturePreview.src = '';
        picturePreview.alt = '';
    }
</script>
