<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="title" class="text-white">Название книги:</label>
        <input type="text" class="form-control text-white bg-secondary" id="title" name="title"
               value="{{isset($book) ? $book->title : old('title')}}">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description" class="text-white">Описание:</label>
        <textarea class="form-control text-white bg-secondary" style="height: 250px" id="description"
                  name="description">{{isset($book) ? $book->description : old('description')}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <label for="price" class="text-white">Цена:</label>
        <input type="number" step=".001" class="form-control text-white bg-secondary" id="price" name="price"
               value="{{isset($book) ? number_format($book->price, 2) : old('price')}}">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    Жанры:<br>
    <div class="btn-group mb-1" role="group" aria-label="Basic checkbox toggle button group">
        @foreach($genres as $genre)
            <input type="checkbox" class="btn-check" id="{{$genre->id}}" autocomplete="off"
                   name="genre[]"
                   value="{{$genre->id}}"
            @if(isset($book) && $book->genres)
                @foreach($book->genres as $bookGenre)
                    {{($bookGenre?->id === $genre->id)  ? 'checked' : ''}}
                    @endforeach
                @endif
            >
            <label class="btn btn-outline-primary" for="{{$genre->id}}">{{$genre->name}}</label>
        @endforeach
        @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <label for="author_id" class="text-white">Автор:</label>
        <select class="custom-select form-control text-white bg-secondary" name="author_id" id="author_id">
            <option value="">No category</option>
            @foreach($authors as $author)
                <option value="{{$author->id}}"
                    {{(isset($book) && $book->author?->id === $author->id) || $author->id === (int) old('author_id')  ? 'selected' : ''}}
                >{{$author->name}}</option>
            @endforeach
        </select>
        @error('author_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <div class="custom-file ">
            <img
                @if (isset($book, $book->picture))
                    src="{{asset('/storage/' . $book->picture)}}" alt="{{$book->picture}}"
                @else
                    src="" alt=""
                @endif
                style="max-width:100px;max-height:100px;" class="mb-1" id="picturePreview">
            <input type="file" class="form-control form-control-sm bg-secondary" id="customFile" onchange="preview()"
                   name="picture" value="{{isset($book, $book->picture) ? $book->picture : ''}}"
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
