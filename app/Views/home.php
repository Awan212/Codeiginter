<title>Home</title>

<div class="d-flex flex-nowrap justify-content-center bg-dark p-2 mb-2">
    <h1 class="mr-auto text-light">My Blogs</h1>
    <a href="create" class="ml-auto btn btn-success btn-lg">Add Blog</a>
</div>

<div class="contanier w-75 m-auto">
    <table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Author</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($data as $val): ?>
        <tr>
        <th scope="row"><?= $val['id'] ?></th>
        <td><?= $val['title'] ?></td>
        <td><?= $val['body'] ?></td>
        <td><?= $val['author'] ?></td>
        <td>
            <button class="btn btn-success">Edit</button>
            <button data-id="<?= $val['id'] ?>" class="btn btn-danger">Remove</button>
        </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>
<?php include 'partials/footer.php' ?>
<script>
    $(document).ready(function(){
        alert("sdknjkds");
    });
</script>