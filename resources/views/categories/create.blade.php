<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
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
    </div>
</body>

</html>