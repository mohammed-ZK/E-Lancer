@props([
    'id','label','name','value','type'=>'text'
])

<label for={{$id}}>{{$label}}</label>
<input type={{$type}} id={{$id}} name={{$name}} value="{{old($name,$value)}}" class="form-control" {{$attributes ->class(['form-control','is-invalid'=>$errors->has($name)])}}>
<!-- @if($errors->has('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                @endif -->
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror