


<?php $__env->startSection('extra_css'); ?>
<style type="text/css">
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
                Today Generated Image
            </h3>
        </div> 
      
      <div class="card-body table-responsive">
        <table class="table table-bordered table-striped" id="data_table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Name</th>
              <th>Resolution</th>
              <th>User</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $today_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->id); ?></td>
                <td><img src="<?php echo e(asset('uploads/aiImage/'.$row->image)); ?>" class="mr-2" width="50px" height="50px"></td>
                <td><?php echo e($row->description); ?></td>
                <td><?php echo e($row->resolution); ?></td>
                <td><a href="<?php echo e(url('dashboard/user/'.$row->user->id)); ?>" class="text-primary"><?php echo e($row->user->name); ?></a></td>
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
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ai_for_work\resources\views/backend/todayGeneratedImage.blade.php ENDPATH**/ ?>