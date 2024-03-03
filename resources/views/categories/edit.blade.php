<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
    <div class="container">
        <h1>Edit Category</h1>
        <form action="/categories/{{$category->id}}" method="post">
            <!-- <?= csrf_field() ?> -->
            @csrf
            <!-- <input type="hidden" name="_method" value="put"> -->
            @method('put')
            @include('categories._form')
        </form>
    </div>
</body>

</html>