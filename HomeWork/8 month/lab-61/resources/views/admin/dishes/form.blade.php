<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <input type="hidden" value="    {{isset($dish) ? $dish->institution->id : $institution->id}}" name="institution_id">
    <div class="form-group">
        <label for="name" class="text-white">Название блюда:</label>
        <input type="text" class="form-control text-white bg-secondary" id="name" name="name"
               value="{{isset($dish) ? $dish->name : old('name')}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description" class="text-white">Описание блюда:</label>
        <textarea class="form-control text-white bg-secondary" style="height: 250px" id="description"
                  name="description">{{isset($dish) ? $dish->description : old('description')}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price" class="text-white">Цена блюда:</label>
        <input type="number" class="form-control text-white bg-secondary mb-1" id="price"
               name="price" value="{{isset($dish) ? $dish->price : old('price')}}">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    Тип блюда:<br>
    <div class="btn-group mb-1" role="group" aria-label="Basic checkbox toggle button group">
        @foreach($types as $type)
            <input type="radio" class="btn-check" id="{{$type->id}}" autocomplete="off"
                   name="type_id"
                   value="{{$type->id}}"
            @if(isset($dish) && $dish->type_id)
                {{($dish->type_id === $type->id)  ? 'checked' : ''}}
                @endif
            >
            <label class="btn btn-outline-primary" for="{{$type->id}}">{{$type->name}}</label>
        @endforeach
        @error('type_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <label for="kitchen_id" class="text-white">Какой кухне принадлежит:</label>
        <select class="custom-select form-control text-white bg-secondary" name="kitchen_id" id="kitchen_id">
            <option value="">Кухня не указана</option>
            @foreach($kitchens as $kitchen)
                <option value="{{$kitchen->id}}"
                    {{(isset($dish) && $dish->kitchen->id === $kitchen->id) || $kitchen->id === (int) old('kitchen_id')  ? 'selected' : ''}}
                >{{$kitchen->name}}</option>
            @endforeach
        </select>
        @error('kitchen_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-1">
        <div class="custom-file ">
            <img
                @if (isset($dish, $dish->picture))
                    src="{{asset('/storage/' . $dish->picture)}}" alt="{{$dish->picture}}"
                @else
                    src="" alt=""
                @endif
                style="max-width:100px;max-height:100px;" class="mb-1" id="picturePreview">
            <input type="file" class="form-control form-control-sm bg-secondary" id="customFile" onchange="preview()"
                   name="picture" value="{{isset($dish, $dish->picture) ? $dish->picture : ''}}"
            >
            <label class="custom-file-label btn btn-secondary mt-3" for="customFile">Выбрать изображение</label>
            @error('picture')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button onclick="clearImage()" class="btn btn-danger mt-3">Отчистить картинку</button>
        </div>
    </div>

    <div class="form-group mb-1">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@section('script')
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
@endsection
