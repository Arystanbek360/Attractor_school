<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="name" class="text-white">ФИО фотографа:</label>
        <input type="text" class="form-control text-white bg-secondary" id="name" name="name"
               value="{{isset($photograph) ? $photograph->name : old('name')}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="about" class="text-white">Биография:</label>
        <textarea class="form-control text-white bg-secondary" style="height: 250px" id="about"
                  name="about">{{isset($photograph) ? $photograph->about : old('about')}}</textarea>
        @error('about')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="experience" class="text-white">Опыт:</label>
        <textarea class="form-control text-white bg-secondary" style="height: 250px" id="experience"
                  name="experience">{{isset($photograph) ? $photograph->experience : old('experience')}}</textarea>
        @error('experience')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <label for="number" class="text-white">Сотовый номер:</label>
        <input type="text" class="form-control text-white bg-secondary" id="number" name="number"
               value="{{isset($photograph) ? $photograph->number : old('number')}}">
        @error('number')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email" class="text-white">Электронная почта фотографа:</label>
        <input type="text" class="form-control text-white bg-secondary" id="email" name="email"
               value="{{isset($photograph) ? $photograph->email : old('email')}}">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="address" class="text-white">Адрес фотографа:</label>
        <input type="text" class="form-control text-white bg-secondary" id="address" name="address"
               value="{{isset($photograph) ? $photograph->address : old('address')}}">
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    {{--    Жанры:<br>--}}
    {{--    <div class="btn-group mb-1" role="group" aria-label="Basic checkbox toggle button group">--}}
    {{--        @foreach($genres as $genre)--}}
    {{--            <input type="checkbox" class="btn-check" id="{{$genre->id}}" autocomplete="off"--}}
    {{--                   name="genre[]"--}}
    {{--                   value="{{$genre->id}}"--}}
    {{--            @if(isset($photograph) && $photograph->genres)--}}
    {{--                @foreach($photograph->genres as $photographGenre)--}}
    {{--                    {{($photographGenre?->id === $genre->id)  ? 'checked' : ''}}--}}
    {{--                    @endforeach--}}
    {{--                @endif--}}
    {{--            >--}}
    {{--            <label class="btn btn-outline-primary" for="{{$genre->id}}">{{$genre->name}}</label>--}}
    {{--        @endforeach--}}
    {{--        @error('genre')--}}
    {{--        <div class="alert alert-danger">{{ $message }}</div>--}}
    {{--        @enderror--}}
    {{--    </div>--}}

    {{--    <div class="form-group mb-1">--}}
    {{--        <label for="author_id" class="text-white">Автор:</label>--}}
    {{--        <select class="custom-select form-control text-white bg-secondary" name="author_id" id="author_id">--}}
    {{--            <option value="">No category</option>--}}
    {{--            @foreach($authors as $author)--}}
    {{--                <option value="{{$author->id}}"--}}
    {{--                    {{(isset($photograph) && $photograph->author?->id === $author->id) || $author->id === (int) old('author_id')  ? 'selected' : ''}}--}}
    {{--                >{{$author->name}}</option>--}}
    {{--            @endforeach--}}
    {{--        </select>--}}
    {{--        @error('author_id')--}}
    {{--        <div class="alert alert-danger">{{ $message }}</div>--}}
    {{--        @enderror--}}
    {{--    </div>--}}

    <div class="form-group mb-1">
        <div class="custom-file ">
            <img
                @if (isset($photograph, $photograph->picture))
                    src="{{asset('/storage/' . $photograph->picture)}}" alt="{{$photograph->picture}}"
                @else
                    src="" alt=""
                @endif
                style="max-width:100px;max-height:100px;" class="mb-1" id="picturePreview">
            <input type="file" class="form-control form-control-sm bg-secondary" id="customFile" onchange="preview()"
                   name="picture" value="{{isset($photograph, $photograph->picture) ? $photograph->picture : ''}}"
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
