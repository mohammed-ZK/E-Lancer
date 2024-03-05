@extends('layouts.dashboard')
@section('content')
<h1 class="mb-3">{{$title}} <a href="/categories/create">Create</a></h1>
<?php if ($flahMessage) : ?>
    <div class="alert alert-info">
        <?= $flahMessage ?>
    </div>
<?php endif ?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Parent</th>
            <th>Create_at</th>
            <th></th>
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
                    <td>
                        <form action="/categories/<?= $category->id ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-sm btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

@endsection