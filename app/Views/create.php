<title>Awan</title>

<div class="d-flex flex-nowrap justify-content-center bg-dark p-2 mb-5">
    <h1 class="mr-auto text-light">My Blogs</h1>
    <a href="/" class="ml-auto btn btn-success btn-lg">Back</a>
</div>
<div class="w-50 m-auto mt-5">
    <hr>
    <h1 class="text-center">Add Blog</h1>
    <?php if(isset($validator)) : ?>   
    <?= $validator  ?>
    <?php endif; ?>
    <?php if(isset($message)) : ?>   
    <p class="alert alert-success"><?= $message  ?></p>
    <?php endif; ?>
    <form action="create" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control form-control-lg" value="<?php echo $title;  ?>">
        <label for="body">Body</label>
        <input type="text" name="body" class="form-control form-control-lg" value="<?php echo $body;  ?>">
        <label for="author">Author</label>
        <input type="text" name="author" class="form-control form-control-lg" value="<?php echo $author;  ?>">
        <button class="btn btn-success mt-2 w-25">Save</button>
    </form>
    <hr>
</div>