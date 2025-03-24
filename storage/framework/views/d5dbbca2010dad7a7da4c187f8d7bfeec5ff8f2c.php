

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Update Template</h3>
        </div>

        <div class="card-body">
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php echo Form::open(['url' =>['dashboard/template-update'],'method'=>'POST','files'=>true]); ?>

        <?php echo Form::hidden('id',$data->id); ?>

        <div class="row">
            <div class="col-12">
                <div class="form-group row">
                    <?php echo Form::label('title','Title', ['class' => 'col-sm-2 col-form-label']); ?>

                    <div class="col-sm-4">
                        <?php echo Form::text('title',$data->title,['class' => 'form-control','required','readonly']); ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group row">
                    <?php echo Form::label('description','Description', ['class' => 'col-sm-2 col-form-label']); ?>

                    <div class="col-sm-4">
                        <?php echo Form::textarea('description',$data->description,['class' => 'form-control','rows'=> 5,'required']); ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 m-3 text-center">
            <?php if(Auth::user()->user_type == "Demo"): ?>
            <button type="button" class="btn btn-success ToastrButton">Update</button>
            <?php else: ?>
            <?php echo Form::submit('Update', ['class' => 'btn btn-success']); ?>

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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ai_for_work\resources\views/backend/adminTemplateEdit.blade.php ENDPATH**/ ?>