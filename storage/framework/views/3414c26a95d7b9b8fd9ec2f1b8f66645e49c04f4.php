

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

.fa-google-plus {
  color: blue;
}

img {
  display: inline-block;
}

.table-bordered {
    border: 1px solid #dee2e6 !important;
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
            User
        </h3>
        <a href="<?php echo e(route('user.create')); ?>" class="btn btn-success float-right">Add New</a>
      </div> 

      <div class="card-body table-responsive">
        <form method="GET" action="" class="form-inline float-right" style="margin-bottom:15px;">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" value="<?php if(isset($search)): ?><?php echo e($search); ?><?php endif; ?>">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>

        <table class="table table-bordered table-striped" id="data_table_user1">
          <thead class="thead-inverse">
            <tr>
              <th>User</th>
              <th>Email</th>
              <th>Entry</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($row->email != "demo2023@gmail.com"): ?>
            <tr>
              <td><div class="notification"><img src="<?php if($row->image): ?> <?php if(substr($row->image, 0, 4)=='http'): ?> <?php echo e($row->image); ?> <?php else: ?> <?php echo e(asset('uploads/'.$row->image)); ?> <?php endif; ?> <?php else: ?> <?php echo e(asset('assets/images/no-user.jpg')); ?> <?php endif; ?>" class="rounded-circle" <?php if($row->is_subscribe): ?> style="border: 3px solid red;" <?php endif; ?> alt="Image" width="40" height="40"/></div><a href="<?php echo e(url('admin/user/'.$row->id)); ?>" class="ml-md-3" style="font-size:15px;"><b><?php echo e($row->name); ?></b></a></td>
              <td class="align-middle"><?php echo e($row->email); ?></td>
              <td class="align-middle"><?php echo e(date('d/m/Y g:i a',strtotime($row->created_at))); ?></td>
              <td class="align-middle">
                <label class="switch">
                    <input type="checkbox" name="status" data-id="<?php echo e($row->id); ?>" value="1" class="status" <?php if($row->status==1): ?> checked <?php endif; ?>>
                    <span class="slider round"></span>
                </label>
              </td>
              <td class="align-middle">
                <div class="btn-group">
                  <a href="<?php echo e(url('admin/user/'.$row->id)); ?>"><button type="button" class="btn btn-warning"><span aria-hidden="true" class="fa fa-eye"></span></button></a>
                  <?php if($row->user_type != "Super Admin"): ?><a data-id="<?php echo e($row->id); ?>" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-danger ml-2"><span aria-hidden="true" class="fa fa-trash"></span></button></a><?php endif; ?>
                </div>
                <?php echo Form::open(['url' => 'admin/user/'.$row->id,'method'=>'DELETE','class'=>'form-horizontal','id'=>'form_'.$row->id]); ?>

                <?php echo Form::hidden("id",$row->id); ?>

                <?php echo Form::close(); ?>

              </td>
            </tr>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php if(count($data) == 0): ?>
            <tr class="text-center">
              <td colspan="5">No data available in table</td>
            </tr>
          <?php endif; ?>
          </tbody>
        </table>
        <div class="d-md-flex justify-content-center mt-3"><?php echo e($data->appends(request()->input())->onEachSide(1)->links()); ?></div>
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

<!-- Modal -->
<div id="changepass" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Change Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <?php echo Form::open(['url'=>url('admin/change_password'),'id'=>'changepass_form']); ?>

        <form id="change" action="<?php echo e(url('admin/change_password')); ?>" method="POST">

          <?php echo Form::hidden('user_id',"",['id'=>'user_id']); ?>

       <div class="form-group">
        <?php echo Form::label('passwd','Password',['class'=>"form-label"]); ?>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-lock"></i></span></div>
        <?php echo Form::password('passwd',['class'=>"form-control",'id'=>'passwd','required']); ?>

        </div>
      </div>
      <div class="modal-footer">
        <?php if(Auth::user()->user_type == "Demo"): ?>
        <button type="button" class="btn btn-info ToastrButton">Change Password</button>
        <?php else: ?>
        <button id="password" class="btn btn-info" type="submit">Change Password</button>
        <?php endif; ?>
      </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  $('#changepass').on('show.bs.modal', function(e) {
    var id = e.relatedTarget.dataset.id;
    $("#user_id").val(id);
  });

  $("#changepass_form").on("submit",function(e){
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function(data){

       new PNotify({
            title: 'Success!',
            text: "Password Has Been Changed.",
            type: 'info'
        });
      },

      dataType: "html"
    });
    $('#changepass').modal("hide");
    e.preventDefault();
  });

  $("#del_btn").on("click",function(){
    var id=$(this).data("submit");
    $("#form_"+id).submit();
  });

  $('#myModal').on('show.bs.modal', function(e) {
    var id = e.relatedTarget.dataset.id;
    $("#del_btn").attr("data-submit",id);
  });

  $(".status").change(function(){
    var checked = $(this).is(':checked');
    var id = $(this).data("id");
    
    $.ajax({
      type: "POST",
      url: "<?php echo e(url('admin/user-status')); ?>",
      data: { checked : checked , id : id},
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      success: function(data) {
        new PNotify({
          title: 'Success!',
          text: "User Status Has Been Changed.",
          type: 'success'
        });
      },
    });
  });

  $(document).ready(function() {
    var table = $('#data_table_user').DataTable({
      "ordering": false,
      // individual column search
      "initComplete": function() {
              table.columns().every( function () {
                  var that = this;
                  $('input', this.footer()).on('keyup change', function () {
                    // console.log($(this).parent().index());
                      that.search(this.value).draw();
                  });
                });
              }
    });
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp8_1\htdocs\copy_ai\resources\views/user/index.blade.php ENDPATH**/ ?>