


<?php $__env->startSection('extra_css'); ?>
<style type="text/css">
.notification {
  position: relative;
  display: inline-flex;
}

@media (max-width: 770px){
  .notification {
    display: block;
  }
}

.notification .badge {
  position: absolute;
  top: -7px;
  right: -7px;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
    <?php endif; ?>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title float-left">
                User Delete Request
            </h3>
            <a data-toggle="modal" data-target="#deleteModal" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger float-right">Delete</a>
        </div> 
      
      <div class="card-body table-responsive">
        <table class="table table-bordered table-striped" id="data_table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Id</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="align-middle"><input type="checkbox" class="delete" name="delete" value="<?php echo e($row->user->id); ?>"></td>
                <td class="align-middle"><?php echo e($row->id); ?></td>
                <td><div class="notification"><img src="<?php if($row->user->image): ?> <?php if(substr($row->user->image, 0, 4)=='http'): ?> <?php echo e($row->user->image); ?> <?php else: ?> <?php echo e(asset('uploads/'.$row->user->image)); ?> <?php endif; ?> <?php else: ?> <?php echo e(asset('assets/images/no-user.jpg')); ?> <?php endif; ?>" class="rounded-circle mr-1" alt="Image" style="height:40px;width:40px; margin-right: 10px"/><a href="<?php echo e(url('dashboard/user/'.$row->user->id)); ?>" class="ml-md-3 mt-2" style="font-size:15px;"><b><?php echo e($row->user->name); ?></b></a></div></td>
                <td class="align-middle">
                    <div class="btn-group">
                        <a data-id="<?php echo e($row->id); ?>" data-bs-toggle="modal" data-bs-target="#myModal" data-toggle="modal" data-target="#myModal" style="cursor:pointer;"><button type="button" class="btn btn-danger ml-2"><span aria-hidden="true" class="fa fa-trash"></span></button></a>
                    </div>
                </td>
                <?php echo Form::open(['url' => 'dashboard/delete-user','method'=>'POST','class'=>'form-horizontal','id'=>'form_'.$row->id]); ?>

                <?php echo Form::hidden("id",$row->user->id); ?>

                <?php echo Form::close(); ?>

            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete</h4>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                  aria-label="Close">X
          </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to Delete ?</p>
      </div>
      <div class="modal-footer">
        <?php if(Auth::user()->user_type == "Demo"): ?>
        <button type="button" class="btn btn-danger ToastrButton">Delete</button>
        <?php else: ?>
        <button id="del_btn" class="btn btn-danger" type="button" data-submit="" style="background-color:#dc3545;">Delete</button>
        <?php endif; ?>
        <button type="button" class="btn btn-default" data-dismiss="modal" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- delete Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close">X
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Delete all Check Record ?</p>
            </div>
            <div class="modal-footer">
                <?php if(Auth::user()->user_type == "Demo"): ?>
                <button type="button" class="btn btn-danger ToastrButton">Delete</button>
                <?php else: ?>
                <form action="<?php echo e(url('dashboard/multi-delete-user')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="deleted_ids" id="deleted_ids">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                <?php endif; ?>
                <button type="button" class="btn btn-default" data-dismiss="modal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- delete Modal -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $("#del_btn").on("click",function(){
        var id=$(this).data("submit");
        $("#form_"+id).submit();
    });

    $('#myModal').on('show.bs.modal', function(e) {
        var id = e.relatedTarget.dataset.id;
        $("#del_btn").attr("data-submit",id);
    });

    $('.ToastrButton').click(function() {
      toastr.error('This Action Not Available Demo User');
    });

    $('#deleteModal').on('show.bs.modal', function(e) {
      var searchIDs = [];

      $("input:checkbox:checked.delete").map(function(){
        searchIDs.push($(this).val());
      });

      document.getElementById('deleted_ids').value = JSON.stringify(searchIDs);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ai_for_work\resources\views/backend/userDeleteRequest.blade.php ENDPATH**/ ?>