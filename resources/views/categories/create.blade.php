@extends('layouts.dashboard')
@section('content')
<h1>
    create Category
</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}} </li>
        @endforeach
    </ul>
</div>
@endif
<form action="/categories" method="post">
    <!-- <input type="hidden" name="_token" value="<?= csrf_token()  ?>"> -->
    <!-- <?= csrf_field() ?> -->
    @csrf
    @include('categories._form')
</form>
@endsection