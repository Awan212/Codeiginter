<title>Category</title>

<div class="d-flex flex-nowrap justify-content-center p-2 mb-2 bg-dark">
    <h1 class="text-light mr-auto">Categories</h1>
    <a href="category/create" class="btn btn-success btn-lg ml-auto">Add Category</a>
</div>


<div class="contanier w-75 m-auto">
    <?php if(session()->getFlashData('message')): ?>   
        <p class="alert alert-success"><?= session()->getFlashData('message');  ?></p>
    <?php endif; ?>
    <table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Category</th>
        <th scope="col">Type</th>
        <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($data as $val): ?>
        <tr>
        <th scope="row"><?= $val['id'] ?></th>
        <td><?= $val['category'] ?></td>
        <td><?= $val['category_type'] ?></td>
        <td class="text-center">
            <button data-id="<?= $val['id'] ?>" data-category="<?= $val['category'] ?>" data-category-type="<?= $val['category_type'] ?>" class="btn btn-success btn-edit">Edit</button>
            <button data-id="<?= $val['id'] ?>" class="btn btn-danger btn-delete">Remove</button>
        </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Please Confirm to delete?</p>
        <form method="POST" action='delete'>
        <input type="hidden" name="category_id" id="category_id">
        <button class="btn btn-danger">Remove</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action='update'>
        <label for="category">Category</label>
        <input type="text" name="category" id="category" class="form-control form-control-file">
        <label for="category_type">Category Type</label>
        <input type="text" name="category_type" id="category_type" class="form-control form-control-file">
        <input type="hidden" name="category_id" id="category_id_edit">
        <button class="btn btn-success mt-3">Update</button>
        <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        $(".btn-delete").on('click',function(){
            var category_id = $(this).attr('data-id');
            $('#category_id').val(category_id);
            $("#deleteModal").modal('show');
        });

        $(".btn-edit").on('click',function(){
            var category_id = $(this).attr('data-id');
            var category = $(this).attr('data-category');
            var category_type = $(this).attr('data-category-type');
            $('#category').val(category);
            $('#category_type').val(category_type);
            $('#category_id_edit').val(category_id);
            $("#editModal").modal('show');
        });
    });
</script>