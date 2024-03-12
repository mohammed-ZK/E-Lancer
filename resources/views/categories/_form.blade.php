<div class="form-group">
    <x-form.input type="text" id="name" name="name" label="Category Name" :value="$category->name" />
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" id="description" name="description" value="{{old('description',$category->description)}}" class="form-control @error('description') is-invalid @enderror">

    @error('description')
    <p class="invalid-feedback">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <x-form.select id="parent_id" name="parent_id" label="Perant" :options="$perants->pluck('name','id')" :selected="$category->perant_id"/>
    <!-- <label for="parent_id">Perant</label>
    <select id="parent_id" name="parent_id" class="form-control">
        <option value="">No parent</option>
        @foreach ($perants as $perant)
        <option value="{{$perant->id}}" @if($perant->id == $category->parent_id) selected @endif >{{$perant->name}}</option>
        @endforeach
    </select> -->
</div>
<div class="form-group">
    <label for="art">Art-file</label>
    <input type="file" id="art" name="art" class="form-control">
</div>
<div class="form-group">
    <button class="btn btn-primary">Save</button>
</div>