
<?php $__env->startSection('title'); ?>
    Login
<?php $__env->stopSection(); ?>
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
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <p>Nice to see you again</p>
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                    <p>Welcome to our AI writing tools business! Our cutting-edge technology enables you to create high-quality content with ease.</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="EMAIL" id="email" name="email" value="<?php echo e(old('email')); ?>" autofocus required aria-label="Email" aria-describedby="email-addon">
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
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="PASSWORD" id="password" name="password" required aria-label="Password" aria-describedby="password-addon">
                                            <?php $__errorArgs = ['password'];
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
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe"  >
                                            <label class="form-check-label" for="rememberMe">Keep me signed in </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <small class="text-muted">Forgot Password?
                                        <a href="<?php echo e(route('password.request')); ?>" class="text-info text-gradient font-weight-bold">here</a>
                                    </small>
                                    
                                    
                                    
                                    
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
        </section>
    </main>
    <footer class="footer py-5">
        <div class="container">

            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright © Creative Team <script>
                            document.write(new Date().getFullYear())
                        </script> All rights reserved.

                    </p>
                </div>
            </div>
        </div>
    </footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ai_for_work\resources\views/auth/login.blade.php ENDPATH**/ ?>