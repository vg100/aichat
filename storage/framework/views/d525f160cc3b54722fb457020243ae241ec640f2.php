

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Add User</h3>
        </div>

        <div class="card-body">
          <?php echo Form::open(['route' => 'user.store','method'=>'post','files'=>true]); ?>

          <?php echo Form::hidden('user_id',Auth::user()->id); ?>

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

                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <?php echo Form::label('name','Name', ['class' => 'col-sm-2 col-form-label']); ?>

                      <div class="col-sm-6">
                        <?php echo Form::text('name', null,['class' => 'form-control','required']); ?>

                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <?php echo Form::label('email','Email', ['class' => 'col-sm-2 col-form-label']); ?>

                      <div class="col-sm-6">
                        <?php echo Form::email('email',null,['class'=>'form-control','required']); ?>

                      </div>
                    </div>
                  </div>
                </div>

                <!-- <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <?php echo Form::label('mobile_no','Mobile No', ['class' => 'col-sm-2 col-form-label']); ?>

                      <div class="col-sm-6">
                        <?php echo Form::number('mobile_no', null,['class' => 'form-control','required']); ?>

                      </div>
                    </div>
                  </div>
                </div> -->

                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <?php echo Form::label('password', 'Password', ['class' => 'col-sm-2 col-form-label']); ?>

                      <div class="col-sm-6">
                        <?php echo Form::password('password', ['class' => 'form-control','required']); ?>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <?php echo Form::label('image','Select Image', ['class' => 'col-sm-2 col-form-label']); ?>

                      <div class="col-sm-6">
                        <input class="form-control" type="file" id="image" name="image" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2"></div>
                      <div class="col-6" id="preview"><img type="image" class="shadow bg-white rounded" src="<?php echo e(asset('assets/images/no-user.jpg')); ?>" alt="Image" style="width: 120px;height: 120px" /></div>  
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <?php if(Auth::user()->user_type == "Demo"): ?>
              <button type="button" class="btn btn-success ToastrButton">Save</button>
              <?php else: ?>
              <?php echo Form::submit('Save', ['class' => 'btn btn-success']); ?>

              <?php endif; ?>
            </div>
          </div>
          <?php echo Form::close(); ?>

          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>
<script type="text/javascript">
  function imagePreview(fileInput) 
  { 
      if (fileInput.files && fileInput.files[0]) 
      {
          var fileReader = new FileReader();
          fileReader.onload = function (event) 
          {
              $('#preview').html('<img src="'+event.target.result+'" class="shadow bg-white rounded" width="120px" alt="Select Image" height="120px"/>');
          };
          fileReader.readAsDataURL(fileInput.files[0]);
      }
  }

  $("#image").change(function () {
      imagePreview(this);
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ai_for_work\resources\views/user/create.blade.php ENDPATH**/ ?>