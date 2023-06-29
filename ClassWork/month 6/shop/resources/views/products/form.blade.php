@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{$action}}">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{isset($product)?$product->title:''}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description"
                  name="description">{{isset($product)?$product->description:''}}</textarea>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step=".001" class="form-control" id="price" name="price"
               value="{{isset($product) ? number_format($product->price,2):''}}">
    </div>
    <div class="form-group">
        <select class="custom-select" name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}"
                    {{isset($model) && $model->category?->id === $category->id ? 'selected' : ''}}
                >{{$category->name}}</option>
            @endforeach
        </select>
    </div>

    <button type=" submit" class="btn btn-primary">Submit</button>
</form>
