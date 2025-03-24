<?php $__env->startSection('heading'); ?>
<div class="mt-5">Add Plan</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_css'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
<style type="text/css">
.select2-container {
    display: block;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route' => 'language.store','method'=>'post','files'=>false]); ?>

    <?php echo Form::hidden('user_id',Auth::user()->id); ?>

    <div class="row mt-5">
        <div class="col-12">
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Language</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <?php echo Form::label('name','Name', ['class' => 'col-sm-3 col-form-label']); ?>

                                <div class="col-sm-4">
                                    <?php echo Form::text('name', null,['class' => 'form-control','required','placeholder'=>'Enter Name']); ?>

                                </div>
                            </div>
                        </div>
                    </div>

        
                    <div class="row reward-duration">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class='col-sm-3 col-form-label'>Direction</div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <select id="direction" name="direction" class="form-control">
                                                <option value="LTR">LTR (Left-to-Right)</option>
                                                <option value="RTL">RTL (Right-to-Left)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <?php echo Form::label('word_json','Words in JSON', ['class' => 'col-sm-3 col-form-label']); ?>

                                <div class="col-sm-4">
                                    <?php echo Form::textarea('word_json','{&#013;    "login":"Login",&#013;    "register":"Register",&#013;    "terms_of_service":"Terms of Service",&#013;}',['class' => 'form-control',"rows"=>10,'required']); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 m-3 text-center">
        <?php if(Auth::user()->user_type == "Demo"): ?>
        <button type="button" class="btn btn-success ToastrButton">Save</button>
        <?php else: ?>
        <?php echo Form::submit('Save', ['class' => 'btn btn-success']); ?>

        <?php endif; ?>
        </div>
    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/khristian/copy-ai.surveysideadmin.com/resources/views/language/create.blade.php ENDPATH**/ ?>