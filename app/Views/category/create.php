<title>Add Category</title>

<div class="d-flex flex-nowrap justify-content-center bg-dark p-2 mb-5">
    <h1 class="mr-auto text-light">My Blogs</h1>
    <a href="../category" class="ml-auto btn btn-success btn-lg">Back</a>
</div>
<div class="w-50 m-auto mt-5">
    <hr>
    <h1 class="text-center">Add Category</h1>
    <?php if(isset($validatior)) : ?>   
    <?= $validatior  ?>
    <?php endif; ?>
        

    <?php if(session()->getFlashData('message')): ?>   
    <p class="alert alert-success"><?= session()->getFlashData('message');  ?></p>
    <?php endif; ?>

    
    <form action="create" method="POST">
        <label for="category">Category Name</label>
        <input type="text" name="category" id="category" class="form-control form-control-lg mb-2" placeholder="Category Name" value="<?php if(isset($category)) { echo $category; } ?>" >
        <label for="cat_type">Category Type</label>
        <input type="text" name="category_type" id="category_type" class="form-control form-control-lg mb-2" placeholder="Category Type" value="<?php if(isset($category_type)) { echo $category_type; } ?>">
        <button class="btn btn-success mt-2 w-25">Save</button>
    </form>
    <hr>
</div>