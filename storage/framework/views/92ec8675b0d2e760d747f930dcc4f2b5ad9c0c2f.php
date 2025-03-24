


<?php $__env->startSection('extra_css'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
<style type="text/css">
.select2-container {
    display: block;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route' =>['membership.update',$plan->id],'method'=>'PATCH','files'=>true]); ?>

    <?php echo Form::hidden('user_id',Auth::user()->id); ?>

    <?php echo Form::hidden('id',$plan->id); ?>

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
                    <h3 class="card-title">Update Plan</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <?php echo Form::label('plan_name','Plan Name', ['class' => 'col-sm-3 col-form-label']); ?>

                                <div class="col-sm-4">
                                    <?php echo Form::text('plan_name',$plan->plan_name,['class' => 'form-control','required','placeholder'=>'Enter Plan Name']); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <?php echo Form::label('plan_price','Plan Price', ['class' => 'col-sm-3 col-form-label']); ?>

                                <div class="col-sm-4">
                                    <?php echo Form::number('plan_price',$plan->plan_price,['class' => 'form-control','required','placeholder'=>'Enter Plan Price']); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <?php echo Form::label('total_words','Total Words included in Plan', ['class' => 'col-sm-3 col-form-label']); ?>

                                <div class="col-sm-4">
                                    <?php echo Form::number('total_words', $plan->total_words,['class' => 'form-control','required','placeholder'=>'Enter Total Words']); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <?php echo Form::label('number_of_images','Number of Images included in Plan', ['class' => 'col-sm-3 col-form-label']); ?>

                                <div class="col-sm-4">
                                    <?php echo Form::number('number_of_images',$plan->number_of_images,['class' => 'form-control','required','placeholder'=>'Enter Number of Images']); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="rewarded_enable" class="col-form-label">Remove Ads</label><br>
                                    <small class="text-primary">* If you Enable Remove Ads in This Plan, the User can not Show Ads in the App from the Selected Period.</small>
                                </div>
                                <div class="col-sm-4">
                                    <label class="cl-switch cl-switch-blue mt-2">
                                        <input type="checkbox" id="rewarded_enable" value="1" name="rewarded_enable" <?php if($plan->rewarded_enable == 1): ?> checked <?php endif; ?>>
                                        <span class="switcher"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row reward-duration" style="<?php if($plan->rewarded_enable == 0): ?>display:none;<?php endif; ?>">
                        <div class="col-12">
                            <div class="form-group row">
                                <?php echo Form::label('duration','Duration', ['class' => 'col-sm-3 col-form-label']); ?>

                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="form-control" value="<?php echo e($plan->duration); ?>" id="duration" placeholder="Enter Duration" name="duration" type="number" <?php if($plan->rewarded_enable == 1): ?> required <?php endif; ?>>
                                        </div>
                                        <div class="col-6">
                                            <select id="duration_type" name="duration_type" class="form-control" <?php if($plan->rewarded_enable == 1): ?> required <?php endif; ?>>
                                                <option value="">Select Type</option>
                                                <option value="Day" <?php if($plan->duration_type == "Day"): ?> selected <?php endif; ?>>Day</option>
                                                <option value="Week" <?php if($plan->duration_type == "Week"): ?> selected <?php endif; ?>>Week</option>
                                                <option value="Month" <?php if($plan->duration_type == "Month"): ?> selected <?php endif; ?>>Month</option>
                                                <option value="Year" <?php if($plan->duration_type == "Year"): ?> selected <?php endif; ?>>Year</option>
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
                                <?php echo Form::label('google_product_enable','Google In Purchases', ['class' => 'col-sm-3 col-form-label']); ?>

                                <div class="col-sm-4">
                                    <label class="cl-switch cl-switch-blue mt-2">
                                        <input type="checkbox" id="google_product_enable" value="1" name="google_product_enable" <?php if($plan->google_product_enable == 1): ?> checked <?php endif; ?>>
                                        <span class="switcher"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row google-product" style="<?php if($plan->google_product_enable == 0): ?>display:none;<?php endif; ?>">
                        <div class="col-12">
                            <div class="form-group row">
                                <?php echo Form::label('google_product_id','Google In-app Product Id', ['class' => 'col-sm-3 col-form-label']); ?>

                                <div class="col-sm-4">
                                    <input class="form-control" value="<?php echo e($plan->google_product_id); ?>" id="google_product_id" placeholder="Enter Google In-app Product Id" name="google_product_id" type="text" <?php if($plan->google_product_enable == 1): ?> required <?php endif; ?>>
                                </div>
                            </div>
                            <div class="form-group">
                                <small class="text-primary">* Must be the plan price the same as in the Play console in-app purchase pricing template creation.</small>
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
            <button type="button" class="btn btn-success ToastrButton">Update</button>
            <?php else: ?>
            <?php echo Form::submit('Update', ['class' => 'btn btn-success']); ?>

            <?php endif; ?>
        </div>
    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#duration_type').select2();

        $('#google_product_enable').change(function(){
            if($(this).is(':checked'))
            {
                $(".google-product").css("display","block");
                $("#google_product_id").prop('required',true);
            }
            else
            {
                $(".google-product").css("display","none");
                $("#google_product_id").prop('required',false);
            }
        });

        $('#rewarded_enable').change(function(){
            if($(this).is(':checked'))
            {
                $(".reward-duration").css("display","block");
                $("#duration").prop('required',true);
                $("#duration_type").prop('required',true);
            }
            else
            {
                $(".reward-duration").css("display","none");
                $("#duration").prop('required',false);
                $("#duration_type").prop('required',false);
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/owndev/public_html/copy-ai.testerdev.xyz/resources/views/plan/edit.blade.php ENDPATH**/ ?>