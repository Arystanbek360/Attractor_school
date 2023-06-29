@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{isset($product) ? $product->title : old('title')}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description">{{isset($product) ? $product->description : old('description')}}</textarea>
    </div>
    <div class="form-group mb-1">
        <label for="price">Price</label>
        <input type="number" step=".001" class="form-control" id="price" name="price" max="999"
               value="{{isset($product) ? number_format($product->price, 2) : old('price')}}" >
    </div>
    <div class="form-group mb-1">
        <select class="custom-select" name="category_id">
            <option value="">No category</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}"
                    {{(isset($product) && $product->category?->id === $category->id) || $category->id === (int) old('category_id')  ? 'selected' : ''}}
                >{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-1">
        <div class="custom-file">
            <img
                @if (isset($product, $product->picture))
                    src="{{asset('/storage/' . $product->picture)}}" alt="{{$product->picture}}"
                @else
                    src="" alt=""
                @endif
                 style="max-width:100px;max-height:100px;" class="mb-1" id="picturePreview">
            <input type="file" class="form-control form-control-sm" id="customFile" onchange="preview()"
                   name="picture" value="{{isset($product, $product->picture) ? $product->picture : ''}}"
            >
            <button onclick="clearImage()" class="btn btn-danger mt-3">Clear image</button>
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
