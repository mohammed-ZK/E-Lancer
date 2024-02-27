<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('app.name') ?></title>
    <link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container">
        <h1>
            create Category
        </h1>
        <form action="/categories" method="post">
            <!-- <input type="hidden" name="_token" value="<?= csrf_token()  ?>"> -->
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="parent_id">Perant</label>
                <select id="parent_id" name="parent_id" class="form-control">
                    <option value="">No parent</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group">
                <label for="art">Art-file</label>
                <input type="file" id="art" name="art" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</body>

</html>