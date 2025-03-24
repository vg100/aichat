<?php $__env->startSection('extra_css'); ?>
<style type="text/css">
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 25px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
.mr-1{
  margin-right: 0.5em;
}
/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

img {
  display: inline-block;
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
                Plan
            </h3>
            <a href="<?php echo e(route('membership.create')); ?>" class="btn btn-success float-right">Add New</a>
        </div> 
      
      <div class="card-body table-responsive table-bordered table-striped">
        <table class="table" id="data_table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Plan Name</th>
              <th>Plan Price</th>
              <th>Number Of Word</th>
              <th>Number Of Image</th>
              <th>Created</th>
              <th>Status</th>
              <th>Most Popular</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="align-middle"><?php echo e($row->id); ?></td>
              <td class="align-middle"><b><?php echo e($row->plan_name); ?></b></td>
              <td class="align-middle"><?php echo e($row->plan_price); ?> USD</td>
              <td class="align-middle"><?php echo e($row->total_words); ?></td>
              <td class="align-middle"><?php echo e($row->number_of_images); ?></td>
              <td class="align-middle"><?php echo e(date('d/m/Y', strtotime($row->created_at))); ?></td>
              <td class="align-middle">
                <label class="switch">
                    <input type="checkbox" name="status" data-id="<?php echo e($row->id); ?>" value="1" class="status" <?php if($row->status==1): ?> checked <?php endif; ?>>
                    <span class="slider round"></span>
                </label>
              </td>
              <td class="align-middle">
                <label class="switch">
                    <input type="checkbox" name="most_popular" data-id="<?php echo e($row->id); ?>" value="1" class="most_popular" <?php if($row->most_popular==1): ?> checked <?php endif; ?>>
                    <span class="slider round"></span>
                </label>
              </td>
              <td class="align-middle">
                <div class="btn-group">
                  <a class="mr-1" href="<?php echo e(route('membership.edit',$row->id)); ?>"><button type="button" class="btn btn-success"><span aria-hidden="true" class="fa fa-edit"></span></button></a>
                  <a data-id="<?php echo e($row->id); ?>"  data-bs-toggle="modal" data-bs-target="#myModal" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-danger ml-2"><span aria-hidden="true" class="fa fa-trash"></span></button></a>
                </div>
                <?php echo Form::open(['url' => 'dashboard/membership/'.$row->id,'method'=>'DELETE','class'=>'form-horizontal','id'=>'form_'.$row->id]); ?>

                <?php echo Form::hidden("id",$row->id); ?>

                <?php echo Form::close(); ?>

              </td>
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
          <button id="del_btn" class="btn btn-danger" type="button" data-submit="">Delete</button>
          <?php endif; ?>
          <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
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

    $(".status").change(function(){
      var checked = $(this).is(':checked');
      var id = $(this).data("id");
     
      $.ajax({
        type: "POST",
        url: "<?php echo e(url('dashboard/plan-status')); ?>",
        data: { checked : checked , id : id},
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function(data) {
          new PNotify({
            title: 'Success!',
            text: "Subscription Plan Status Has Been Changed.",
            type: 'success'
          });
        },
      });
    });

    $(".most_popular").change(function(){
      var checked = $(this).is(':checked');
      var id = $(this).data("id");
     
      $.ajax({
        type: "POST",
        url: "<?php echo e(url('dashboard/plan-most-popular')); ?>",
        data: { checked : checked , id : id},
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function(data) {
          location.reload();
        },
      });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/khristian/copy-ai.surveysideadmin.com/resources/views/plan/index.blade.php ENDPATH**/ ?>