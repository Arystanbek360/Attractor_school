<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <input type="hidden" name="photograph_id" value="{{isset($photograph)?$photograph->id:$work->photograph->id}}">
    <input type="hidden" name="rating" value="{{isset($work) ? $work->rating : 1}}">
    <div class="form-group">
        <label for="description" class="text-white">Описание:</label>
        <textarea class="form-control text-white bg-secondary" style="height: 250px" id="description"
                  name="description">{{isset($work) ? $work->description : old('description')}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <div class="custom-file ">
            <img
                @if (isset($work, $work->picture))
                    src="{{asset('/storage/' . $work->picture)}}" alt="{{$work->picture}}"
                @else
                    src="" alt=""
                @endif
                style="max-width:100px;max-height:100px;" class="mb-1" id="picturePreview">
            <input type="file" class="form-control form-control-sm bg-secondary" id="customFile" onchange="preview()"
                   name="picture" value="{{isset($work, $work->picture) ? $work->picture : ''}}"
            >
            @error('picture')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button onclick="clearImage()" class="btn btn-danger mt-3">Убрать фотографию</button>
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
