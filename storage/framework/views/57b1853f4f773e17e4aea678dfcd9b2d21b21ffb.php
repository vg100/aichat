

<?php $__env->startSection('extra_css'); ?>
<style type="text/css">

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
                Transactions
            </h3>
        </div> 
      
      <div class="card-body table-responsive table-bordered table-striped">
        <table class="table" id="data_table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Total Paid</th>
              <th>Payment Id</th>
              <th>Payment Type</th>
              <th>Date</th>
              <th>Status</th>
              <th>Invoice</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($row->id); ?></td>
              <td><a href="<?php echo e(url('admin/user/'.$row->user->id)); ?>" style="font-size:15px;"><b><?php echo e($row->user->name); ?></b></a></td>
              <td><?php echo e($row->total_paid); ?> USD</td>
              <td><?php echo e($row->payment_id); ?></td>
              <td><?php echo e($row->payment_type); ?></td>
              <td><?php echo e(date('d M, y',strtotime($row->date))); ?></td>
              <?php if($row->status == "Completed"): ?>
                <td><?php echo e($row->status); ?></td>
              <?php else: ?>
                <?php if(Auth::user()->user_type == "Demo"): ?>
                <td><button type="button" class="btn btn-secondary ToastrButton">Completed</button></td>
                <?php else: ?>
                <td><a class="btn btn-secondary" href="<?php echo e(url('admin/payment-completed/'.$row->id)); ?>" role="button">Completed</a></td>
                <?php endif; ?>
              <?php endif; ?>
              <td><a class="btn btn-primary" href="<?php echo e(url('admin/invoice-download/'.$row->payment_id)); ?>" role="button">Invoice</a></td>
              <td>
                <a data-id="<?php echo e($row->id); ?>" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-danger ml-2"><span aria-hidden="true" class="fa fa-trash"></span></button></a>
                
                <?php echo Form::open(['url' => 'admin/transaction-delete','method'=>'POST','class'=>'form-horizontal','id'=>'form_'.$row->id]); ?>

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
        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp8_1\htdocs\copy_ai\resources\views/backend/transaction.blade.php ENDPATH**/ ?>