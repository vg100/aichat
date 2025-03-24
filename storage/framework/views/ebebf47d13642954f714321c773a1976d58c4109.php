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
    width: fit-content;
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
.mr-1{
  margin-right: 0.5em;
}
/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

img {
  display: inline-block;
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
                                        <a href="#" class="list-group-item text-left"><img type="image" class="mr-2" src="<?php echo e(asset('assets/images/Setting Icon/App Setting.svg')); ?>" alt="Image">App Setting</a>
                                        <a href="#" class="list-group-item text-left"><i class="fas fa-ad fa-lg mr-1 text-primary"></i>Ads Setting</a>
                                        <a href="#" class="list-group-item text-left"><i class="fas fa-shield-alt fa-md mr-2 text-primary"></i>OpenAI Setting</a>
                                        <a href="#" class="list-group-item text-left"><img type="image" class="mr-2" src="<?php echo e(asset('assets/images/Setting Icon/Payment Setting.svg')); ?>" alt="Image">Payment Setting</a>
                                        <a href="#" class="list-group-item text-left"><img type="image" class="mr-2" src="<?php echo e(asset('assets/images/Setting Icon/Email Setting.svg')); ?>" alt="Image">Email Setting</a>
                                        <a href="#" class="list-group-item text-left"><i class="fas fa-wrench fa-md mr-2 text-primary"></i>Popup Setting</a>
                                    </div>
                                </div>
                                <div id="accordion" class="col-12 vertab-accordion panel-group">
                                    <div class="vertab-content">
                                        <div class="panel-heading">
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
                                                App Setting
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo Form::open(['url' =>'dashboard/app-setting','method'=>'POST','files'=>true]); ?>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('black_logo','Black Logo', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <div class="row">
                                                                    <div class="col-xl-4"><input class="form-control" type="file" id="black_logo" name="name[black_logo]"></div>
                                                                    <div class="col-xl-8" id="preview"><img type="image" class="shadow bg-white rounded" src="<?php if(App\Models\Setting::getSetting('black_logo')): ?><?php echo e(asset('uploads/'.App\Models\Setting::getSetting('black_logo'))); ?><?php else: ?><?php echo e(asset('assets/images/no-image.png')); ?><?php endif; ?>" alt="Image" style="width: auto;height: 70px" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('white_logo','White Logo', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <div class="row">
                                                                    <div class="col-xl-4"><input class="form-control" type="file" id="white_logo" name="name[white_logo]"></div>
                                                                    <div class="col-xl-8" id="preview1"><img type="image" class="shadow bg-white rounded" src="<?php if(App\Models\Setting::getSetting('white_logo')): ?><?php echo e(asset('uploads/'.App\Models\Setting::getSetting('white_logo'))); ?><?php else: ?><?php echo e(asset('assets/images/no-image.png')); ?><?php endif; ?>" alt="Image"  style="width: auto;height: 70px" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('favicon','Favicon', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <div class="row">
                                                                    <div class="col-xl-4"><input class="form-control" type="file" id="favicon" name="name[favicon]"></div>
                                                                    <div class="col-xl-8" id="preview2"><img type="image" class="shadow bg-white rounded" src="<?php if(App\Models\Setting::getSetting('favicon')): ?><?php echo e(asset('uploads/'.App\Models\Setting::getSetting('favicon'))); ?><?php else: ?><?php echo e(asset('assets/images/no-image.png')); ?><?php endif; ?>" alt="Image" style="width: 50px;height: 50px" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('app_name', 'Name', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::text('name[app_name]',App\Models\Setting::getSetting('app_name'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('email', 'Email', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::email('name[email]',App\Models\Setting::getSetting('email'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('phone_no', 'Phone No', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::number('name[phone_no]',App\Models\Setting::getSetting('phone_no'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('address','Address', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <textarea name="name[address]" id="address" class="form-control" cols="5" required><?php echo App\Models\Setting::getSetting('address'); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('description','Description', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <textarea name="name[description]" id="desc_text" class="form-control" rows="5" required><?php echo App\Models\Setting::getSetting('description'); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                              
                                                <?php if(Auth::user()->user_type != "Demo"): ?>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('api_key', 'Api Key', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::text('name[api_key]',App\Models\Setting::getSetting('api_key'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>me
                                                    </div>
                                                </div>
                                                <?php endif; ?>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('facebook', 'Facebook', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::text('name[facebook]',App\Models\Setting::getSetting('facebook'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('twitter', 'Twitter', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::text('name[twitter]',App\Models\Setting::getSetting('twitter'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('instagram', 'Instagram', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::text('name[instagram]',App\Models\Setting::getSetting('instagram'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('linkedin', 'Linkedin', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::text('name[linkedin]',App\Models\Setting::getSetting('linkedin'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('youtube', 'Youtube', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::text('name[youtube]',App\Models\Setting::getSetting('youtube'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('header_script', 'Header Script', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::textarea('name[header_script]',App\Models\Setting::getSetting('header_script'),['class' => 'form-control','rows'=>4,'required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <?php echo Form::label('footer_text', 'Footer', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                    <div class="col-xl-6 col-md-4">
                                                        <?php echo Form::textarea('name[footer_text]',App\Models\Setting::getSetting('footer_text'),['class' => 'form-control','id'=>'footer_text','rows'=>5,'required']); ?>

                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('register_user_default_word','New User Default Word', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::number('name[register_user_default_word]',App\Models\Setting::getSetting('register_user_default_word'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('register_user_default_image','New User Default Image', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::number('name[register_user_default_image]',App\Models\Setting::getSetting('register_user_default_image'),['class' => 'form-control','required']); ?>

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
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse11">
                                                Ads Setting
                                            </h4>
                                        </div>
                                        <div id="collapse11" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo Form::open(['url' =>'dashboard/ads-setting','method'=>'POST','files'=>true]); ?>


                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <div class="card card-success">
                                                            <div class="card-header">
                                                                <span>AdMob Settings</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="admob_publisher_id">AdMob Publisher Id</label>
                                                                    <input type="text" class="form-control" name="name[admob_publisher_id]" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('admob_publisher_id')); ?>" id="admob_publisher_id" placeholder="Enter AdMob Publisher Id">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="admob_app_id">AdMob App Id</label>
                                                                    <input type="text" class="form-control" name="name[admob_app_id]" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('admob_app_id')); ?>" id="admob_app_id" placeholder="Enter AdMob App Id">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card card-success">
                                                            <div class="card-header">
                                                                <span>APP Opens Ads</span>
                                                                <label class="cl-switch cl-switch-blue float-right">
                                                                    <input type="checkbox" id="app_opens_ads_enable" value="1" name="name[app_opens_ads_enable]" <?php if(App\Models\AdsSetting::getAdsSetting('app_opens_ads_enable')==1): ?> checked <?php endif; ?>>
                                                                    <span class="switcher"></span>
                                                                </label>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="app_open_ads_id">App Open Ads ID</label>
                                                                    <input type="text" class="form-control" name="name[app_open_ads_id]" id="app_open_ads_id" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('app_open_ads_id')); ?>" placeholder="Enter App Open Ads Id">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <div class="card card-success">
                                                            <div class="card-header">
                                                                <span>Ad Native</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="native_id">Native Id</label>
                                                                    <input type="text" class="form-control" name="name[native_id]" id="native_id" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('native_id')); ?>" placeholder="Enter Native Id">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="native_display_type">Native Display Type</label>
                                                                    <select id="native_display_type" name="name[native_display_type]" class="form-control" required>
                                                                        <option value="FALSE" <?php if(App\Models\AdsSetting::getAdsSetting('native_display_type') == "FALSE"): ?> selected <?php endif; ?>>Disable Ad Native</option>
                                                                        <option value="ADMOB" <?php if(App\Models\AdsSetting::getAdsSetting('native_display_type') == "ADMOB"): ?> selected <?php endif; ?>>Google AdMob Ad Native</option>
                                                                        <option value="MAX" <?php if(App\Models\AdsSetting::getAdsSetting('native_display_type') == "MAX"): ?> selected <?php endif; ?>>AppLovin Max Ad Native</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-6">
                                                        <div class="card card-success">
                                                            <div class="card-header">
                                                                <span>Ad Banner</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="banner_id">Banner ID</label>
                                                                    <input type="text" class="form-control" name="name[banner_id]" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('banner_id')); ?>" id="banner_id" placeholder="Enter Banner Id">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="banner_display_type">Banner Display Type</label>
                                                                    <select id="banner_display_type" name="name[banner_display_type]" class="form-control" required>
                                                                        <option value="FALSE" <?php if(App\Models\AdsSetting::getAdsSetting('banner_display_type') == "FALSE"): ?> selected <?php endif; ?>>Disable Ad Banner</option>
                                                                        <option value="ADMOB" <?php if(App\Models\AdsSetting::getAdsSetting('banner_display_type') == "ADMOB"): ?> selected <?php endif; ?>>Google AdMob Ad Banner</option>
                                                                        <option value="MAX" <?php if(App\Models\AdsSetting::getAdsSetting('banner_display_type') == "MAX"): ?> selected <?php endif; ?>>AppLovin Max Ad Banner</option>
                                                                        <option value="APPLOVIN" <?php if(App\Models\AdsSetting::getAdsSetting('banner_display_type') == "APPLOVIN"): ?> selected <?php endif; ?>>AppLovin Ad Banner</option>
                                                                        <option value="ironSource" <?php if(App\Models\AdsSetting::getAdsSetting('banner_display_type') == "ironSource"): ?> selected <?php endif; ?>>ironSource Ad Banner</option>
                                                                        <option value="unity" <?php if(App\Models\AdsSetting::getAdsSetting('banner_display_type') == "unity"): ?> selected <?php endif; ?>>Unity Ad Banner</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <div class="card card-success">
                                                            <div class="card-header">
                                                                <span>Ad Rewarded</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="rewarded_id">Rewarded Id</label>
                                                                    <input type="text" class="form-control" name="name[rewarded_id]" id="rewarded_id" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('rewarded_id')); ?>" placeholder="Enter Rewarded Id">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="rewarded_display_type">Rewarded Display Type</label>
                                                                    <select id="rewarded_display_type" name="name[rewarded_display_type]" class="form-control" required>
                                                                        <option value="FALSE" <?php if(App\Models\AdsSetting::getAdsSetting('rewarded_display_type') == "FALSE"): ?> selected <?php endif; ?>>Disable Ad Rewarded</option>
                                                                        <option value="ADMOB" <?php if(App\Models\AdsSetting::getAdsSetting('rewarded_display_type') == "ADMOB"): ?> selected <?php endif; ?>>Google AdMob Ad Rewarded</option>
                                                                        <option value="MAX" <?php if(App\Models\AdsSetting::getAdsSetting('rewarded_display_type') == "MAX"): ?> selected <?php endif; ?>>AppLovin Max Ad Rewarded</option>
                                                                        <option value="APPLOVIN" <?php if(App\Models\AdsSetting::getAdsSetting('rewarded_display_type') == "APPLOVIN"): ?> selected <?php endif; ?>>AppLovin Ad Rewarded</option>
                                                                        <option value="ironSource" <?php if(App\Models\AdsSetting::getAdsSetting('rewarded_display_type') == "ironSource"): ?> selected <?php endif; ?>>ironSource Ad Rewarded</option>
                                                                        <option value="unity" <?php if(App\Models\AdsSetting::getAdsSetting('rewarded_display_type') == "unity"): ?> selected <?php endif; ?>>Unity Ad Rewarded</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="daily_limit_rewarded">Daily Limit in Rewarded</label>
                                                                    <input type="number" class="form-control" name="name[daily_limit_rewarded]" id="daily_limit_rewarded" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('daily_limit_rewarded')); ?>" placeholder="Enter Daily Limit in Rewarded">
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-6">
                                                                        <label for="rewarded_word">Rewarded Word</label>
                                                                        <input type="number" class="form-control" name="name[rewarded_word]" id="rewarded_word" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('rewarded_word')); ?>" placeholder="Enter Rewarded Word">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="rewarded_image">Rewarded Image</label>
                                                                        <input type="number" class="form-control" name="name[rewarded_image]" id="rewarded_image" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('rewarded_image')); ?>" placeholder="Enter Rewarded Image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card card-success">
                                                            <div class="card-header">
                                                                <span>Ad Interstitial</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="interstitial_id">Interstitial Id</label>
                                                                    <input type="text" class="form-control" name="name[interstitial_id]" id="interstitial_id" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('interstitial_id')); ?>" placeholder="Enter Interstitial Id">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="interstitial_display_type">Interstitial Display Type</label>
                                                                    <select id="interstitial_display_type" name="name[interstitial_display_type]" class="form-control" required>
                                                                        <option value="FALSE" <?php if(App\Models\AdsSetting::getAdsSetting('interstitial_display_type') == "FALSE"): ?> selected <?php endif; ?>>Disable Ad Interstitial</option>
                                                                        <option value="ADMOB" <?php if(App\Models\AdsSetting::getAdsSetting('interstitial_display_type') == "ADMOB"): ?> selected <?php endif; ?>>Google AdMob Ad Interstitial</option>
                                                                        <option value="MAX" <?php if(App\Models\AdsSetting::getAdsSetting('interstitial_display_type') == "MAX"): ?> selected <?php endif; ?>>AppLovin Max Ad Interstitial</option>
                                                                        <option value="APPLOVIN" <?php if(App\Models\AdsSetting::getAdsSetting('interstitial_display_type') == "APPLOVIN"): ?> selected <?php endif; ?>>AppLovin Ad Interstitial</option>
                                                                        <option value="ironSource" <?php if(App\Models\AdsSetting::getAdsSetting('interstitial_display_type') == "ironSource"): ?> selected <?php endif; ?>>ironSource Ad Interstitial</option>
                                                                        <option value="unity" <?php if(App\Models\AdsSetting::getAdsSetting('interstitial_display_type') == "unity"): ?> selected <?php endif; ?>>Unity Ad Interstitial</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="click_interstitial_ad">Click between Interstitial Ad</label>
                                                                    <input type="number" class="form-control" name="name[click_interstitial_ad]" id="click_interstitial_ad" value="<?php echo e(App\Models\AdsSetting::getAdsSetting('click_interstitial_ad')); ?>">
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

                                    <div class="vertab-content">
                                        <div class="panel-heading">
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse02">
                                                OpenAI Setting
                                            </h4>
                                        </div>
                                        <div id="collapse02" class="panel-collapse collapse">
                                            <div class="panel-body">
                                            <?php echo Form::open(['url' =>'dashboard/openai-setting','method'=>'POST','files'=>true]); ?>


                                            <?php if(Auth::user()->user_type != "Demo"): ?>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('openai_key', 'OpenAl Api Key', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <?php echo Form::text('name[openai_key]',App\Models\Setting::getSetting('openai_key'),['class' => 'form-control','required']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <?php echo Form::label('openai_model','OpenAI Model', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                        <div class="col-xl-6 col-md-9">
                                                            <?php $model = App\Models\OpenaiModel::get(); ?>
                                                            <select id="openai_model" name="name[openai_model]" class="form-control" required>
                                                                <?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($m->name); ?>" <?php if(App\Models\Setting::getSetting('openai_model') == $m->name): ?> selected <?php endif; ?>><?php echo e($m->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-12 text-center">
                                                <?php if(Auth::user()->user_type == "Demo"): ?>
                                                <button type="button" class="btn btn-success ToastrButton mb-3 mb-md-0">Save</button>
                                                <?php else: ?>
                                                <?php echo Form::submit('Save', ['class' => 'btn btn-success mb-3 mb-md-0']); ?>

                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <?php echo Form::close(); ?>


                                            <?php echo Form::open(['url' =>'dashboard/add-openai-model','method'=>'POST','id'=>'model-form']); ?>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <?php echo Form::label('model_name', 'Add New Model', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                        <div class="col-xl-6 col-md-4">
                                                            <?php echo Form::text('model_name',null,['class' => 'form-control','id'=>'model_name','required']); ?>

                                                        </div>
                                                    </div>
                                                    <div class="error-msg"></div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                <?php if(Auth::user()->user_type == "Demo"): ?>
                                                <button type="button" class="btn btn-success ToastrButton mb-3 mb-md-0">Save</button>
                                                <?php else: ?>
                                                <button type="button" class="btn btn-success mb-3 mb-md-0 addBtn">Save</button>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <?php echo Form::close(); ?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertab-content">
                                        <div class="panel-heading">
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse55">
                                                Payment Setting
                                            </h4>
                                        </div>
                                        <div id="collapse55" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo Form::open(['url' =>'dashboard/payment-setting','method'=>'POST','files'=>true]); ?>


                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('currency','Currency', ['class' => 'col-xl-2 col-md-3 col-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4 col-9">
                                                                <select class="form-control" id="currency" name="name[currency]" required>
                                                                    <option value="INR" <?php if(App\Models\PaymentSetting::getPaymentSetting('currency') == "INR"): ?> selected <?php endif; ?>>INR</option>
                                                                    <option value="USD" <?php if(App\Models\PaymentSetting::getPaymentSetting('currency') == "USD"): ?> selected <?php endif; ?>>USD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card card-primary">
                                                            <div class="card-header">
                                                                <span>Razorpay</span>
                                                                <label class="cl-switch cl-switch-blue float-right">
                                                                    <input type="checkbox" id="razorpay_enable" value="1" name="name[razorpay_enable]" <?php if(App\Models\PaymentSetting::getPaymentSetting('razorpay_enable')==1): ?> checked <?php endif; ?>>
                                                                    <span class="switcher"></span>
                                                                </label>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="razorpay_key_id">Razorpay Key Id</label>
                                                                    <input type="text" class="form-control" name="name[razorpay_key_id]" id="razorpay_key_id" value="<?php echo e(App\Models\PaymentSetting::getPaymentSetting('razorpay_key_id')); ?>" placeholder="Enter Razorpay Key Id">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="razorpay_key_secret">Razorpay Secret Key</label>
                                                                    <input type="text" class="form-control" name="name[razorpay_key_secret]" id="razorpay_key_secret" value="<?php echo e(App\Models\PaymentSetting::getPaymentSetting('razorpay_key_secret')); ?>" placeholder="Enter Razorpay Secret Key">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card card-primary">
                                                            <div class="card-header">
                                                                <span>Stripe</span>
                                                                <label class="cl-switch cl-switch-blue float-right">
                                                                    <input type="checkbox" id="stripe_enable" value="1" name="name[stripe_enable]" <?php if(App\Models\PaymentSetting::getPaymentSetting('stripe_enable')==1): ?> checked <?php endif; ?>>
                                                                    <span class="switcher"></span>
                                                                </label>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="stripe_publishable_Key">Stripe Publishable Key</label>
                                                                    <input type="text" class="form-control" name="name[stripe_publishable_Key]" id="stripe_publishable_Key" value="<?php echo e(App\Models\PaymentSetting::getPaymentSetting('stripe_publishable_Key')); ?>" placeholder="Enter Stripe Publishable Key">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="stripe_secret_key">Stripe Secret Key</label>
                                                                    <textarea rows="3" class="form-control" name="name[stripe_secret_key]" id="stripe_secret_key"><?php echo e(App\Models\PaymentSetting::getPaymentSetting('stripe_secret_key')); ?></textarea>
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

                                    <div class="vertab-content">
                                        <div class="panel-heading">
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2">
                                                Email Setting
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                            <?php echo Form::open(['url' =>'dashboard/email-setting','method'=>'POST','files'=>true]); ?>


                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <?php echo Form::label('smtp_host','SMTP Host', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                        <div class="col-xl-5 col-md-9">
                                                            <?php echo Form::text('name[smtp_host]',App\Models\EmailSetting::getEmailSetting('smtp_host'),['class' => 'form-control','required']); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <?php echo Form::label('username','Username', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                        <div class="col-xl-5 col-md-9">
                                                            <?php echo Form::text('name[username]',App\Models\EmailSetting::getEmailSetting('username'),['class' => 'form-control','required']); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <?php echo Form::label('password','Password', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                        <div class="col-xl-5 col-md-9">
                                                            <?php echo Form::text('name[password]',null,['class' => 'form-control']); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <?php echo Form::label('password','SMTP Secure', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                        <div class="col-xl-5 col-md-9">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <select id="encryption" name="name[encryption]" class="form-control" required>
                                                                        <option value="ssl" <?php if(App\Models\EmailSetting::getEmailSetting('encryption') == "ssl"): ?> selected <?php endif; ?>>SSL</option>
                                                                        <option value="tls" <?php if(App\Models\EmailSetting::getEmailSetting('encryption') == "tls"): ?> selected <?php endif; ?>>TLS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-6">
                                                                    <?php echo Form::number('name[port]',App\Models\EmailSetting::getEmailSetting('port'),['class' => 'form-control','required']); ?>

                                                                </div>
                                                            </div>
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
                                            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2">
                                                Popup Setting
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                            <?php echo Form::open(['url' =>'dashboard/popup-setting','method'=>'POST','files'=>true]); ?>


                                            <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <?php echo Form::label('popup_image','Popup Image', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                            <div class="col-xl-6 col-md-4">
                                                                <div class="row">
                                                                    <div class="col-xl-4"><input class="form-control" type="file" id="popup_image" name="name[popup_image]"></div>
                                                                    <div class="col-xl-8" id="preview4"><img type="image" class="shadow bg-white rounded" src="<?php if(App\Models\PopupSetting::getPopupSetting('popup_image')): ?><?php echo e(asset('uploads/'.App\Models\PopupSetting::getPopupSetting('popup_image'))); ?><?php else: ?><?php echo e(asset('assets/images/no-image.png')); ?><?php endif; ?>" alt="Image" style="width: 50px;height: 50px" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <?php echo Form::label('link','Link', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                        <div class="col-xl-5 col-md-9">
                                                            <?php echo Form::text('name[link]',App\Models\PopupSetting::getPopupSetting('link'),['class' => 'form-control','required']); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <?php echo Form::label('button_text','Button Text', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                        <div class="col-xl-5 col-md-9">
                                                            <?php echo Form::text('name[button_text]',App\Models\PopupSetting::getPopupSetting('button_text'),['class' => 'form-control','required']); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <?php echo Form::label('enabled','Enabled', ['class' => 'col-xl-2 col-md-3 col-form-label']); ?>

                                                        <label class="cl-switch cl-switch-blue float-right">
                                                            <input type="checkbox" id="enabled" value="1" name="name[enabled]" <?php if(App\Models\PopupSetting::getPopupSetting('enabled')==1): ?> checked <?php endif; ?>>
                                                            <span class="switcher"></span>
                                                        </label>
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

    $("#popup_image").change(function () {
        imagePreview4(this);
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
    
    function imagePreview4(fileInput) 
    { 
        if (fileInput.files && fileInput.files[0]) 
        {
            var fileReader = new FileReader();
            fileReader.onload = function (event) 
            {
                $('#preview4').html('<img src="'+event.target.result+'" class="shadow bg-white rounded" width="100px" alt="Select Image" height="100px"/>');
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
<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/owndev/public_html/copy-ai.testerdev.xyz/resources/views/backend/setting.blade.php ENDPATH**/ ?>