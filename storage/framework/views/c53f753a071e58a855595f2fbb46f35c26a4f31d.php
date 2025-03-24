

<?php $__env->startSection('extra_css'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/clean-switch.css')); ?>">
    <style type="text/css">
        .panel-title {
            cursor:pointer;
        }
        h4.tab-title
        {
            font-family: "avenirheavy", Helvetica, Arial, "sans-serif";
            font-weight: normal;
            font-size: 22px;
            color: #ffffff;
        }
        .vertab-content ul, .vertab-content ol {
            padding-left: 15px;
        }
        .select2-container{
            display: inline;
        }
        .vertab-menu{
            min-height: fit-content !important;
        }
        .vertab-menu>div{
            display: flex;
            flex-direction: row;
            justify-content: center;
            box-shadow: 0 1px 5px 0 rgba(0,0,0,0.25) !important;
            border-radius: 100px;
            padding: 1em !important;
        }
        #accordion{
            margin-top: 30px;
        }
        @media (min-width:768px) {
            .vertab-container {
                z-index: 10;
                background-color: #fff;
                padding: 0 !important;
                margin-top: 20px;
                background-clip: padding-box;
                opacity: 0.97;
                filter: alpha(opacity=97);
                margin-bottom: 50px;
            }
            .vertab-menu {
                padding-right: 0;
                padding-left: 0;
                padding-bottom: 0;
                display: block;
                background-color: #ffff;
            }
            .vertab-menu .list-group {
                margin-bottom: 0;
            }
            .vertab-menu .list-group>a {
                margin-bottom: 0;
                border-radius: 0;
            }
            .vertab-menu .list-group>a, .vertab-menu .list-group>a {
                color: #818181;
                background-image: none;
                border-radius: 0;
                box-sizing: border-box;
                border: none;
                padding: 0px 10px;
                margin: 0 10px;
                width: fit-content;
            }
            .vertab-menu .list-group>a.active, .vertab-menu .list-group>a:hover, .vertab-menu .list-group>a:focus {
                position: relative;
                border: none;
                border-radius: 0;
                border-bottom: 1px solid #7952b3;
                background-image: none;
                background-color: #fff;
                color: #7952b3;
            }
            .vertab-content {
                padding-left: 20px;
                padding-top: 10px;
                color: #000;
            }
            .vertab-accordion .vertab-content:not(.active) {
                display: none;
            }
            .vertab-accordion .vertab-content.active .collapse {
                display: block;
            }
            .vertab-container .panel-heading {
                display: none;
            }
            .vertab-container .panel-body {
                border-top: none !important;
            }
        }

        /* If the tc_breakpoint variable is changed, this breakpoint should be changed as well */
        @media (max-width:767px) {
            .vertab-container {
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .vertab-container .vertab-menu {
                display: none;
            }
            .vertab-container .panel-heading {
                background-color: #F6F6F6;
                color: #818181;
                padding: 15px;
                border-bottom: 1px solid #F6F6F6;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-left: 5px solid #F6F6F6;
            }
            .vertab-container .panel-heading:hover, .vertab-container .panel-heading:focus, .vertab-container .panel-heading.active {
                border-left: 5px solid #7952b3;
                border-bottom: 1px solid #7952b3;
            }
            .vertab-content {
                border-bottom: 1px solid #CACACA;
            }
            .vertab-container .panel-title a:focus, .vertab-container .panel-title a:hover, .vertab-container .panel-title a:active {
                color: #818181;
                text-decoration: none;
            }
            .panel-collapse.collapse, .panel-collapse.collapsing {
                background-color: #ffffff !important;
                color: #000;
            }
            .vertab-container .panel-collapse .panel-body {
                border-top: none !important;
            }
        }
        .list-group-item+.list-group-item.active {
            margin-top: 0px;
        }
        img{
            display: inline;
        }
        .mr-2{
            margin-right: 5px;
        }
        .mr-1{
            margin-right: 5px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <div class="container-fluid">
                            <div class="row vertab-container">
                                <div class="col-12 vertab-menu ">
                                    <div class="list-group card card-body shadow-blur">
                                        <a href="#" class="list-group-item text-left"><i class="fas fa-receipt fa-md mr-2 text-primary"></i>Invoice Setting</a>
                                        <a href="#" class="list-group-item text-left"><img type="image" class="mr-2" src="<?php echo e(asset('assets/images/Setting Icon/App Upadate Popup.svg')); ?>" alt="Image">App Update Popup</a>
                                        <a href="#" class="list-group-item text-left"><i class="fa fa-info-circle fa-md mr-2 text-primary"></i>About Us</a>
                                        <a href="#" class="list-group-item text-left"><img type="image" class="mr-2" src="<?php echo e(asset('assets/images/Setting Icon/Privacy Policy.svg')); ?>" alt="Image">Privacy Policy</a>
                                        <a href="#" class="list-group-item text-left"><img type="image" class="mr-2" src="<?php echo e(asset('assets/images/Setting Icon/Refund Policy.svg')); ?>" alt="Image">Refund Policy</a>
                                        <a href="#" class="list-group-item text-left"><img type="image" class="mr-2" src="<?php echo e(asset('assets/images/Setting Icon/Terms & Condition.svg')); ?>" alt="Image">Terms & Condition</a>
                                    </div>
                                </div>
                                <div id="accordion" class="col-lg-10 col-md-9 col-sm-12 vertab-accordion panel-group">
                                    <div class="vertab-content">
                                        <div class="panel-heading">
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
                                                Invoice Setting
                                            </h4>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo Form::open(['url' =>'dashboard/invoice-setting','method'=>'POST','files'=>true]); ?>

                                            
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('invoice_logo','Invoice Logo', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <div class="row">
                                                                    <div class="col-xl-5"><input class="form-control" type="file" id="invoice_logo" name="name[invoice_logo]"></div>
                                                                    <div class="col-xl-7" id="preview3"><img type="image" class="shadow bg-white rounded" src="<?php if(App\Models\InvoiceSetting::getInvoiceSetting('invoice_logo')): ?><?php echo e(asset('uploads/'.App\Models\InvoiceSetting::getInvoiceSetting('invoice_logo'))); ?><?php else: ?><?php echo e(asset('assets/images/no-image.png')); ?><?php endif; ?>" alt="Image" style="width: 100px;height: 100px" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <?php echo Form::label('invoice_prefix', 'Invoice Prefix', ['class' => 'col-form-label']); ?>

                                                            <?php echo Form::text('name[invoice_prefix]',App\Models\InvoiceSetting::getInvoiceSetting('invoice_prefix'),['class' => 'form-control','id'=>'invoice_prefix','required']); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <?php echo Form::label('invoice_number_digit', 'Invoice Nnumber Digits', ['class' => 'col-form-label']); ?>

                                                            <?php echo Form::number('name[invoice_number_digit]',App\Models\InvoiceSetting::getInvoiceSetting('invoice_number_digit'),['class' => 'form-control','id'=>'invoice_number_digit','required']); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="invoice_number_example" class="col-form-label">Invoice Number Example</label>
                                                            <input type="text" class="form-control" id="invoice_number_example" readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('terms_and_conditions', 'Terms and Conditions', ['class' => 'col-form-label']); ?>

                                                            <?php echo Form::textarea('name[terms_and_conditions]',App\Models\InvoiceSetting::getInvoiceSetting('terms_and_conditions'),['class' => 'form-control',"rows"=>3,'required']); ?>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <?php if(Auth::user()->user_type == "Demo"): ?>
                                                        <button type="button" class="btn btn-success ToastrButton mb-3 mb-md-0">Save</button>
                                                        <?php else: ?>
                                                        <?php echo Form::submit('Save', ['class' => 'btn btn-success mb-3 mb-md-0']); ?>

                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php echo Form::close(); ?>

                                            </div>      
                                        </div>
                                    </div>
                                    <div class="vertab-content">
                                        <div class="panel-heading">
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse8">
                                                App Update Popup
                                            </h4>
                                        </div>
                                        <div id="collapse8" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo Form::open(['url' =>'dashboard/app-update-setting','method'=>'POST','files'=>true]); ?>


                                                <div class="row mt-3">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('update_popup_show','App Update Popup Show/Hide', ['class' => 'col-xl-3 col-md-4 col-form-label']); ?>

                                                            <div class="col-xl-5 col-md-8">
                                                                <label class="cl-switch cl-switch-blue">
                                                                    <input type="checkbox" id="update_popup_show" value="1" name="name[update_popup_show]" <?php if(App\Models\AppUpdateSetting::getAppUpdateSetting('update_popup_show')==1): ?> checked <?php endif; ?>>
                                                                    <span class="switcher"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('new_app_version_code','New App Version Code', ['class' => 'col-xl-3 col-md-4 col-form-label']); ?>

                                                            <div class="col-xl-5 col-md-8">
                                                                <?php echo Form::text('name[new_app_version_code]',App\Models\AppUpdateSetting::getAppUpdateSetting('new_app_version_code'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('description','Description', ['class' => 'col-xl-3 col-md-4 col-form-label']); ?>

                                                            <div class="col-xl-5 col-md-8">
                                                                <?php echo Form::textarea('name[description]',App\Models\AppUpdateSetting::getAppUpdateSetting('description'),['class' => 'form-control','rows'=>7,'required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('app_link','App Link', ['class' => 'col-xl-3 col-md-4 col-form-label']); ?>

                                                            <div class="col-xl-5 col-md-8">
                                                                <?php echo Form::text('name[app_link]',App\Models\AppUpdateSetting::getAppUpdateSetting('app_link'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('cancel_option','Cancel Option', ['class' => 'col-xl-3 col-md-4 col-form-label']); ?>

                                                            <div class="col-xl-5 col-md-8">
                                                                <label class="cl-switch cl-switch-blue">
                                                                    <input type="checkbox" id="cancel_option" value="1" name="name[cancel_option]" <?php if(App\Models\AppUpdateSetting::getAppUpdateSetting('cancel_option')==1): ?> checked <?php endif; ?>>
                                                                    <span class="switcher"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                    <?php if(Auth::user()->user_type == "Demo"): ?>
                                                    <button type="button" class="btn btn-success ToastrButton mb-3 mb-md-0">Save</button>
                                                    <?php else: ?>
                                                    <?php echo Form::submit('Save', ['class' => 'btn btn-success mb-3 mb-md-0']); ?>

                                                    <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php echo Form::close(); ?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertab-content">
                                        <div class="panel-heading">
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse5">
                                                About Us
                                            </h4>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo Form::open(['url' =>'dashboard/other-setting','method'=>'POST','files'=>true]); ?>


                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('about_us','About Us', ['class' => 'col-md-2 col-form-label']); ?>

                                                            <div class="col-md-10">
                                                                <textarea name="name[about_us]" id="about_us" class="form-control" required><?php echo e(App\Models\OtherSetting::getOtherSetting('about_us')); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                    <?php if(Auth::user()->user_type == "Demo"): ?>
                                                    <button type="button" class="btn btn-success ToastrButton mb-3 mb-md-0">Save</button>
                                                    <?php else: ?>
                                                    <?php echo Form::submit('Save', ['class' => 'btn btn-success mb-3 mb-md-0']); ?>

                                                    <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php echo Form::close(); ?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertab-content">
                                        <div class="panel-heading">
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse5A">
                                                Privacy Policy
                                            </h4>
                                        </div>
                                        <div id="collapse5A" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo Form::open(['url' =>'dashboard/other-setting','method'=>'POST','files'=>true]); ?>


                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('privacy_policy','Privacy Policy', ['class' => 'col-md-2 col-form-label']); ?>

                                                            <div class="col-md-10">
                                                                <textarea name="name[privacy_policy]" id="privacy_policy" class="form-control" required><?php echo e(App\Models\OtherSetting::getOtherSetting('privacy_policy')); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                    <?php if(Auth::user()->user_type == "Demo"): ?>
                                                    <button type="button" class="btn btn-success ToastrButton mb-3 mb-md-0">Save</button>
                                                    <?php else: ?>
                                                    <?php echo Form::submit('Save', ['class' => 'btn btn-success mb-3 mb-md-0']); ?>

                                                    <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php echo Form::close(); ?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertab-content">
                                        <div class="panel-heading">
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse6">
                                                Refund Policy
                                            </h4>
                                        </div>
                                        <div id="collapse6" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo Form::open(['url' =>'dashboard/other-setting','method'=>'POST','files'=>true]); ?>


                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('refund_policy','Refund Policy', ['class' => 'col-md-2 col-form-label']); ?>

                                                            <div class="col-md-10">
                                                                <textarea name="name[refund_policy]" id="refund_policy" class="form-control" required><?php echo e(App\Models\OtherSetting::getOtherSetting('refund_policy')); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                    <?php if(Auth::user()->user_type == "Demo"): ?>
                                                    <button type="button" class="btn btn-success ToastrButton mb-3 mb-md-0">Save</button>
                                                    <?php else: ?>
                                                    <?php echo Form::submit('Save', ['class' => 'btn btn-success mb-3 mb-md-0']); ?>

                                                    <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php echo Form::close(); ?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertab-content">
                                        <div class="panel-heading">
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse7">
                                                Terms & Condition
                                            </h4>
                                        </div>
                                        <div id="collapse7" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo Form::open(['url' =>'dashboard/other-setting','method'=>'POST','files'=>true]); ?>


                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('terms_condition','Terms & Condition', ['class' => 'col-md-2 col-form-label']); ?>

                                                            <div class="col-md-10">
                                                                <textarea name="name[terms_condition]" id="terms_condition" class="form-control" required><?php echo e(App\Models\OtherSetting::getOtherSetting('terms_condition')); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                    <?php if(Auth::user()->user_type == "Demo"): ?>
                                                    <button type="button" class="btn btn-success ToastrButton mb-3 mb-md-0">Save</button>
                                                    <?php else: ?>
                                                    <?php echo Form::submit('Save', ['class' => 'btn btn-success mb-3 mb-md-0']); ?>

                                                    <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php echo Form::close(); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
<script type="text/javascript">
    // $('#rewarded_display_type').select2();
    // $('#banner_display_type').select2();
    // $('#interstitial_display_type').select2();
    // $('#native_display_type').select2();
    $('#currency').select2();
    $('#openai_model').select2();
    $('#encryption').select2();
    $('#default_currency').select2();

    $('#about_us').summernote({
        placeholder: '',
        tabsize: 2,
        height: 400
    });

    $('#privacy_policy').summernote({
        placeholder: '',
        tabsize: 2,
        height: 400
    });

    $('#refund_policy').summernote({
        placeholder: '',
        tabsize: 2,
        height: 400
    });

    $('#terms_condition').summernote({
        placeholder: '',
        tabsize: 2,
        height: 400
    });

    $('#bank_detail').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200
    });

    $('#footer_text').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200
    });

    $(".addBtn").click(function(){
      var name = $('#model_name').val();
     
      $.ajax({
        type: "POST",
        url: "<?php echo e(url('dashboard/check-model-available')); ?>",
        data: {name : name},
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function(data) {
          if(data == 1)
          {
            $("#model-form").submit();
          }
          if(data == 0)
          {
            $('.error-msg').empty();
            $('.error-msg').append('<div class="alert alert-danger"><span>This model not available this API key</span></div>');
          }
        },
      });
    });

    function imagePreview(fileInput) 
    { 
        if (fileInput.files && fileInput.files[0]) 
        {
            var fileReader = new FileReader();
            fileReader.onload = function (event) 
            {
                $('#preview').html('<img src="'+event.target.result+'" class="shadow bg-white rounded" width="200px" alt="Select Image" height="100px"/>');
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }

    $("#black_logo").change(function () {
        imagePreview(this);
    });

    function imagePreview1(fileInput) 
    { 
        if (fileInput.files && fileInput.files[0]) 
        {
            var fileReader = new FileReader();
            fileReader.onload = function (event) 
            {
                $('#preview1').html('<img src="'+event.target.result+'" class="shadow bg-white rounded" width="200px" alt="Select Image" height="100px"/>');
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }

    $("#white_logo").change(function () {
        imagePreview1(this);
    });

    function imagePreview2(fileInput) 
    { 
        if (fileInput.files && fileInput.files[0]) 
        {
            var fileReader = new FileReader();
            fileReader.onload = function (event) 
            {
                $('#preview2').html('<img src="'+event.target.result+'" class="shadow bg-white rounded" width="50px" alt="Select Image" height="50px"/>');
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }

    $("#favicon").change(function () {
        imagePreview2(this);
    });

    function imagePreview3(fileInput) 
    { 
        if (fileInput.files && fileInput.files[0]) 
        {
            var fileReader = new FileReader();
            fileReader.onload = function (event) 
            {
                $('#preview3').html('<img src="'+event.target.result+'" class="shadow bg-white rounded" width="100px" alt="Select Image" height="100px"/>');
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }

    $("#invoice_logo").change(function () {
        imagePreview3(this);
    });

    $("#invoice_prefix").keyup(function() {
        var invoice_prefix = $("#invoice_prefix").val();
        var invoice_number_digit = $("#invoice_number_digit").val();

        $("#invoice_number_example").val(invoice_prefix+'#'+('0'.repeat(invoice_number_digit) + 1).slice(-invoice_number_digit));
    });

    $("#invoice_number_digit").keyup(function() {
        var invoice_prefix = $("#invoice_prefix").val();
        var invoice_number_digit = $("#invoice_number_digit").val();

        $("#invoice_number_example").val(invoice_prefix+'#'+('0'.repeat(invoice_number_digit) + 1).slice(-invoice_number_digit));
    });

    $(document).ready(function() {
        var invoice_prefix = $("#invoice_prefix").val();
        var invoice_number_digit = $("#invoice_number_digit").val();

        $("#invoice_number_example").val(invoice_prefix+'#'+('0'.repeat(invoice_number_digit) + 1).slice(-invoice_number_digit));
    });
</script>

<script>
// Screen-width breakpoint
var tc_breakpoint = 767;

jQuery(document).ready(function() 
{
	"use strict";
	
	// Switch tabs and update panels classes - Adjust container height
    jQuery(".vertab-container .vertab-menu .list-group a").click(function(e) 
	{ 
        var index = jQuery(this).index();
		var container = jQuery(this).parents('.vertab-container');
		var accordion = container.find('.vertab-accordion');
		var contents = accordion.find(".vertab-content");
		
		e.preventDefault();
		
        jQuery(this).addClass("active");
        jQuery(this).siblings('a.active').removeClass("active");
        
		contents.removeClass("active");
        contents.eq(index).addClass("active");
		container.data('current',index);

		//Adjust container height
		//jQuery(this).parents('.vertab-menu').css('min-height',jQuery(container).children('.vertab-accordion').height());
    });
	
	// Collapse accordion panels (except the one the user just opened) and add "active" class to the panel heading 
	jQuery('.vertab-accordion').on('show.bs.collapse','.collapse', function() 
	{
		var accordion, container, current, index;
		
		accordion = jQuery(this).parents('.vertab-accordion');
		container = accordion.parents('.vertab-container');
		
		accordion.find('.collapse.in').each(function()
		{
			jQuery(this).collapse('hide');
		});		
		
		jQuery(this).siblings('.panel-heading').addClass('active');
		
		current = accordion.find('.panel-heading.active');
		index = accordion.find('.panel-heading').index(current);
		
		container.data('current',index);
	});
								   
	// Remove "active" class from heading when collapsing the current panel 
	jQuery('.vertab-accordion .panel-collapse').on('hide.bs.collapse', function () {
		jQuery(this).siblings('.panel-heading').removeClass('active');
	});	
	
	// Manage resize / rotation events
	jQuery( window ).on( "resize orientationchange",function() 
	{
		resize_vertical_accordions();
	});
	
	// Scroll accordion to show the current panel
	jQuery(".vertab-accordion .panel-heading").click(function () 
	{
		var el = this;
		setTimeout(function(){jQuery("html, body").animate({scrollTop: jQuery(el).offset().top - 10 }, 1000);},500);
		
		return true;
	});
	
	//Initial Panels setup
	resize_vertical_accordions();
});

function resize_vertical_accordions() 
{
	"use strict";
	jQuery('.vertab-container').each(function(i, e)
	{
		var index, menu, contents; 
		var container = jQuery(this);
		
		// Setup current tab/panel (default to first tab/panel)
		index = jQuery(this).data('current');
		if(index === undefined)
		{
			jQuery(this).data('index',0);
			index = 0;
		}
		
		// If using a desktop-size screen, manage as tabbed panels
		if( jQuery( window ).width() > tc_breakpoint)
		{
			// Reset panels heights (Bootstrap's accordions sets heights to zero)
			jQuery(this).find('.panel-collapse.collapse').css('height','auto');
			
			// Clean tab-navigation styles
			menu = jQuery(this).find('.vertab-menu .list-group a');
			menu.removeClass("active");

			// Clean tab-panels styles
			contents = jQuery(this).find(".vertab-accordion .vertab-content");
			contents.removeClass("active");
			
			// Update tab navigation and panels styles
			menu.eq(index).addClass('active');			
			contents.eq(index).addClass("active");
			
			// Update tab navigation's height to match current tab
			jQuery(this).children('.vertab-menu').css('min-height',jQuery(this).children('.vertab-accordion').height());			
		}
		else // If using a mobile device (phone + tablets), manage as accordion
		{
			// Close all panels
			jQuery(this).find('.vertab-content .panel-collapse.collapse').collapse('hide');
			
			// Clean styles from headings
			jQuery(this).find('.vertab-content .panel-heading').removeClass('active');
			
			// Wait until all panels have collapsed and mark the one the user selected as active.
			setTimeout(function()
			{
				jQuery(container).find('.vertab-content .panel-heading').eq(index).addClass("active");
				jQuery(container).find('.vertab-content .panel-collapse.collapse').eq(index).collapse('show');				
			},1000);

		}	
	});	
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/khristian/copy-ai.surveysideadmin.com/resources/views/backend/multi-setting.blade.php ENDPATH**/ ?>