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
        <h1 class="mb-3"><?= $title ?> <a href="/categories/create">Create</a></h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Parant</th>
                    <th>Create_at</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category) : ?>
                        <tr>
                            <td><?= $category->id ?></td>
                            <td><a href="/categories/show/<?= $category->id ?>"><?= $category->name ?></a></td>
                            <td><?= $category->slug ?></td>
                            <td><?= $category->parent_id ?></td>
                            <td><?= $category->created_at ?></td>
                            <td><a href="/categories/<?= $category->id ?>/edit" class="btn btn-sm btn-dark">Edit</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>