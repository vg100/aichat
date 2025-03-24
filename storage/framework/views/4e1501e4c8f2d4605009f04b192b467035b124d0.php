


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
                Inquiry
            </h3>
        </div> 
      
      <div class="card-body table-responsive table-bordered table-striped">
        <table class="table" id="data_table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="align-middle"><?php echo e($row->id); ?></td>
              <td class="align-middle"><?php echo e($row->name); ?></td>
              <td class="align-middle"><?php echo e($row->email); ?></td>
              <td class="align-middle"><?php echo e($row->subject); ?></td>
              <td class="align-middle"><?php echo e((strlen($row->message) >= 20)?substr_replace($row->message, "...", 20):$row->message); ?> <?php if(strlen($row->message) >= 20): ?><a href="#" data-bs-toggle="modal" class="text-primary" data-value="<?php echo e($row); ?>" data-bs-target="#detailModal">More</a><?php endif; ?></td>
              <td class="align-middle"><?php echo e($row->created_at->format('d/m/Y')); ?></td>
              <td>
                <div class="btn-group">
                  <a data-id="<?php echo e($row->id); ?>" data-toggle="modal" data-target="#myModal" data-bs-toggle="modal" data-bs-target="#myModal"><button type="button" class="btn btn-danger ml-2"><span aria-hidden="true" class="fa fa-trash"></span></button></a>
                </div>
                <?php echo Form::open(['url' => 'dashboard/contact-list/'.$row->id,'method'=>'DELETE','class'=>'form-horizontal','id'=>'form_'.$row->id]); ?>

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

  <!-- Detail Modal -->
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Details</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                  aria-label="Close">X
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-4">
              <label class="control-label">Name</label>
            </div>
            <div class="col-sm-8">
              <span id="d_name"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label class="control-label">Email</label>
            </div>
            <div class="col-sm-8">
              <span id="d_email"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label class="control-label">Subject</label>
            </div>
            <div class="col-sm-8">
              <span id="d_subject"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label class="control-label">Message</label>
            </div>
            <div class="col-sm-8">
              <span id="d_message"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Detail Modal -->
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

    $('#detailModal').on('show.bs.modal', function(e) {
        var detail = JSON.parse(e.relatedTarget.dataset.value);
        $('#d_name').text(detail['name']);
        $('#d_email').text(detail['email']);
        $('#d_subject').text(detail['subject']);
        $('#d_message').text(detail['message']);
    });

    $('.ToastrButton').click(function() {
      toastr.error('This Action Not Available Demo User');
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/owndev/public_html/copy-ai.testerdev.xyz/resources/views/backend/inquiry.blade.php ENDPATH**/ ?>