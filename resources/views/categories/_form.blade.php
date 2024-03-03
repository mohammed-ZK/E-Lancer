<div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{old('name',$category->name)}}" class="form-control">
    <!-- @if($errors->has('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                @endif -->
    @error('name')
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" id="description" name="description" value="{{old('description',$category->description)}}" class="form-control @error('description') is-invalid @enderror">

    @error('description')
    <p class="invalid-feedback">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label for="parent_id">Perant</label>
    <select id="parent_id" name="parent_id" class="form-control">
        <option value="">No parent</option>
        @foreach ($perants as $perant)
        <option value="{{$perant->id}}" @if($perant->id == $category->perant_id) selected @endif >{{$perant->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="art">Art-file</label>
    <input type="file" id="art" name="art" class="form-control">
</div>
<div class="form-group">
    <button class="btn btn-primary">Save</button>
</div>