<?= $this->extend('partials/base') ?>
<?= $this->section('title') ?>
Upload
<?= $this->endSection()  ?>


<?= $this->section('content') ?>
<div class="container">
    <h1>Uplod App</h1>
    <hr>
    <?php if(empty($data)): ?>
    <p>Please add categories First <a href='category'>click here</a></p>
    <?php else: ?>
    <form action="upload" method="post" enctype="multipart/form-data">
    <?= $validator ?>    
    <label>App Type:</label>
        <select class="form-select form-control form-control-lg mb-2" name='app_type'>
               <option value='app'>App</option>
               <option value="game">Game</option>
        </select>
        <label for="">App Category:</label>
        <select class="form-select form-control" name='app_category'>
                <?php foreach($data as $cat): ?>
                    <option value="<?= $cat['category'] ?>"><?= $cat['category'] ?></option>
                <?php endforeach; ?>
        </select>
        <label for="">App Name:</label>
        <input type="text" name="app_name" id="" class="form-control form-control-lg" placeholder=''>
        <label for="">App Path:</label>
        <input type="file" name="app_path" id="" class="form-control form-control-lg" placeholder=''>
        <label for="">App Icon:</label>
        <input type="file" name="app_icon" id="" class="form-control form-control-lg form-control-file" placeholder=''>
        <label for="">Description:</label>
        <input type="text" name="app_description" id="" class="form-control form-control-lg" placeholder=''>
        <label for="">Body:</label>
        <textarea name="app_detail"  class="form-control form-control-lg" ></textarea>
        <label for="">App Thumbnails:</label>
        <input type="file" name="app_thumbnails" id="" class="form-control form-control-lg form-control-file"  multiple>
        <button class="btn btn-lg btn-success w-25 mt-2">Upload</button>
    </form>
    <hr>

                <?php endif; ?>
</div>
<?= $this->endSection()  ?>

