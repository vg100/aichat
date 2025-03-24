

<?php $__env->startSection('content'); ?>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">

                <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 my-3 blur blur-rounded shadow py-2 start-0 end-0 mx4">
                    <div class="container-fluid container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="https://soft-ui-dashboard-laravel.creative-tim.com/dashboard">
                            App Name | Admin Panel
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                    </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="">
                                        <i class="fa-solid fa-chart-pie" aria-hidden="true"></i>
                                        Reward Earning created By Teach-team
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="" target="_blank" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Contact Now</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <?php if($errors->any()): ?>
                            <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            <?php echo e($errors->first()); ?></span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        <?php endif; ?>
                        <?php if(session('success')): ?>
                            <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            <?php echo e(session('success')); ?></span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        <?php endif; ?>
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h4 class="mb-0">Forgot your password? Enter your email here</h4>
                        </div>
                        <div class="card-body">
                            <?php if(session('status')): ?>
                                <div class="alert alert-success" role="alert" style="font-size:20px;">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>
                            <form action="<?php echo e(route('password.email')); ?>" method="POST" role="form text-left">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <label for="email">Email</label>
                                    <div class="">
                                        <input id="email" name="email" type="email" value="<?php echo e(old('email')); ?>"  autofocus autocomplete="email" required class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger text-xs mt-2"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Recover your password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url(<?php echo e(asset('assets/template-soft-ui/assets/img/curved-images/curved6.jpg')); ?>)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/owndev/public_html/copy-ai.testerdev.xyz/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>