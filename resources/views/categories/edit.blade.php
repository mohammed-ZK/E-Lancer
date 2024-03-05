@extends('layouts.dashboard')
@section('content')
<h1>Edit Category</h1>
<form action="/categories/{{$category->id}}" method="post">
    <!-- <?= csrf_field() ?> -->
    @csrf
    <!-- <input type="hidden" name="_method" value="put"> -->
    @method('put')
    @include('categories._form')
</form>
@endsection