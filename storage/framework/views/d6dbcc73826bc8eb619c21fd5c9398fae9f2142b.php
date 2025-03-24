


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

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.notification {
  position: relative;
  display: inline-block;
}

.notification .badge {
  position: absolute;
  top: -7px;
  right: -7px;
}

.fa-google-plus {
  color: blue;
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
            Templates
        </h3>
      </div> 

      <div class="card-body table-responsive table-bordered table-striped">
        <table class="table" id="data_table">
          <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Type</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="align-middle"><?php echo e($row->id); ?></td>
                <td><img src="<?php if($row->image): ?> <?php echo e(asset('assets/images/social/'.$row->image)); ?> <?php else: ?> <?php echo e(asset('assets/images/no-image.png')); ?> <?php endif; ?>" class="mr-2" alt="Image" width="40" height="40"></div> <b><?php echo e($row->title); ?></b></td>
                <td class="align-middle"><?php echo e($row->type); ?></td>
                <td style="align-middle">
                    <label class="switch mt-2">
                        <input type="checkbox" name="status" data-id="<?php echo e($row->id); ?>" value="1" class="status" <?php if($row->status==1): ?> checked <?php endif; ?>>
                        <span class="slider round"></span>
                    </label>
                </td>
                <td class="align-middle">
                    <div class="btn-group">
                        <a href="<?php echo e(url('dashboard/template/'.$row->id.'/edit-template')); ?>"><button type="button" class="btn btn-success"><span aria-hidden="true" class="fa fa-edit"></span></button></a>
                    </div>
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  $('.ToastrButton').click(function() {
    toastr.error('This Action Not Available Demo User');
  });

  $(".status").change(function(){
    var checked = $(this).is(':checked');
    var id = $(this).data("id");
    
    $.ajax({
      type: "POST",
      url: "<?php echo e(url('dashboard/template-status')); ?>",
      data: { checked : checked , id : id},
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      success: function(data) {
        new PNotify({
          title: 'Success!',
          text: "Template Status Has Been Changed.",
          type: 'success'
        });
      },
    });
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/owndev/public_html/copy-ai.testerdev.xyz/resources/views/backend/adminTemplate.blade.php ENDPATH**/ ?>