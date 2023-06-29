<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="name" class="text-white">Название оборудования:</label>
        <input type="text" class="form-control text-white bg-secondary" id="name" name="name"
               value="{{isset($item) ? $item->name : old('name')}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description" class="text-white">Описание:</label>
        <textarea class="form-control text-white bg-secondary" style="height: 250px" id="description"
                  name="description">{{isset($item) ? $item->description : old('description')}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    Типы:<br>
    <div class="btn-group mb-1" role="group" aria-label="Basic checkbox toggle button group">
        @foreach($types as $type)
            <input type="radio" class="btn-check" id="{{$type->id}}" autocomplete="off"
                   name="type_id"
                   value="{{$type->id}}"
            @if(isset($item) && $item->type_id)
                {{($item->type_id === $type->id)  ? 'checked' : ''}}
                @endif
            >
            <label class="btn btn-outline-primary" for="{{$type->id}}">{{$type->name}}</label>
        @endforeach
        @error('type_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <label for="cabinet_id" class="text-white">Кабинет:</label>
        <select class="custom-select form-control text-white bg-secondary" name="cabinet_id" id="cabinet_id">
            <option value="">No cabinet</option>
            @foreach($cabinets as $cabinet)
                <option value="{{$cabinet->id}}"
                    {{(isset($item) && $item->cabinet?->id === $cabinet->id) || $cabinet->id === (int) old('cabinet_id')  ? 'selected' : ''}}
                >{{$cabinet->number}}</option>
            @endforeach
        </select>
        @error('cabinet_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <div class="custom-file ">
            <img
                @if (isset($item, $item->picture))
                    src="{{asset('/storage/' . $item->picture)}}" alt="{{$item->picture}}"
                @else
                    src="" alt=""
                @endif
                style="max-width:100px;max-height:100px;" class="mb-1" id="picturePreview">
            <input type="file" class="form-control form-control-sm bg-secondary" id="customFile" onchange="preview()"
                   name="picture" value="{{isset($item, $item->picture) ? $item->picture : ''}}"
            >
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
