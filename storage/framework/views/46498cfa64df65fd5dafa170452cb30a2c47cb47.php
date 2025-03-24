<!DOCTYPE html>

<?php if(\Request::is('rtl')): ?>
    <html dir="rtl" lang="ar">
    <?php else: ?>
        <html lang="en" >
        <?php endif; ?>

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
            <title>Admin Dashboard - <?php echo e(App\Models\Setting::getSetting('app_name')); ?></title>
            <link href="<?php echo e(asset('uploads/'.App\Models\Setting::getSetting('favicon'))); ?>" rel="icon">

            <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/template-soft-ui/assets/img/apple-icon.png')); ?>">
            <link href="<?php echo e(asset('uploads/'.App\Models\Setting::getSetting('favicon'))); ?>" rel="icon">
            <!--     Fonts and icons     -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
            <!-- Nucleo Icons -->
            <link href="<?php echo e(asset('assets/template-soft-ui/assets/css/nucleo-icons.css')); ?>" rel="stylesheet" />
            <link href="<?php echo e(asset('assets/template-soft-ui/assets/css/nucleo-svg.css')); ?>" rel="stylesheet" />
            <!-- Font Awesome Icons -->
            <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
            <link href="<?php echo e(asset('assets/template-soft-ui/assets/css/nucleo-svg.css')); ?>" rel="stylesheet" />
            <!-- CSS Files -->
            <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

            <link id="pagestyle" href="<?php echo e(asset('assets/template-soft-ui/assets/css/soft-ui-dashboard.css?v=1.0.3')); ?>" rel="stylesheet" />
            <?php echo $__env->yieldContent('style'); ?>
            <?php echo $__env->yieldContent('extra_css'); ?>
            <style>
                .navbar-vertical.navbar-expand-xs .navbar-collapse {
                    height: calc(100vh);
                }
            </style>
        </head>

        <body class="g-sidenav-show  bg-gray-100 <?php echo e((\Request::is('rtl') ? 'rtl' : (Request::is('virtual-reality') ? 'virtual-reality' : ''))); ?> ">
        <?php if(auth()->guard()->check()): ?>
            <?php echo $__env->yieldContent('auth'); ?>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
            <?php echo $__env->yieldContent('guest'); ?>
        <?php endif; ?>

        <?php if(session()->has('success')): ?>
            <div x-data="{ show: true}"
                 x-init="setTimeout(() => show = false, 4000)"
                 x-show="show"
                 class="position-fixed bg-success rounded right-3 text-sm py-2 px-4">
                <p class="m-0"><?php echo e(session('success')); ?></p>
            </div>
        <?php endif; ?>

        <!--   Core JS Files   -->
        <script src="<?php echo e(asset('assets/template-soft-ui/assets/js/core/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/template-soft-ui/assets/js/core/bootstrap.min.js')); ?>"></script>


        <script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/cdn/jquery.dataTables.min.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo e(asset('assets/js/jquery-ui.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/plugins/select2/select2.full.min.js')); ?>"></script>

        <script type="text/javascript" src="<?php echo e(asset('assets/js/cdn/dataTables.buttons.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/template-soft-ui/assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/template-soft-ui/assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/template-soft-ui/assets/js/plugins/fullcalendar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/template-soft-ui/assets/js/plugins/chartjs.min.js')); ?>"></script>

        <?php echo $__env->yieldPushContent('rtl'); ?>
        <?php echo $__env->yieldPushContent('dashboard'); ?>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <script type="text/javascript" src="<?php echo e(asset('assets/js/pnotify.custom.min.js')); ?>"></script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="<?php echo e(asset('assets/template-soft-ui/assets/js/soft-ui-dashboard.min.js?v=1.0.3')); ?>"></script>
        </body>
        <?php echo $__env->yieldContent('script'); ?>
        </html>
<?php /**PATH /home1/owndev/public_html/copy-ai.testerdev.xyz/resources/views/layouts/app.blade.php ENDPATH**/ ?>