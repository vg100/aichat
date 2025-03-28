<!DOCTYPE html>

<?php if(\Request::is('rtl')): ?>
    <html dir="rtl" lang="ar">
    <?php else: ?>
        <html lang="en" >
        <?php endif; ?>

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <?php if(env('IS_DEMO')): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.demo-metas','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('demo-metas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/template-soft-ui/assets/img/apple-icon.png')); ?>">
            <link href="<?php echo e(asset('uploads/'.App\Models\Setting::getSetting('favicon'))); ?>" rel="icon">

            <title>
                <?php echo $__env->yieldContent('title'); ?>
            </title>
            <!--     Fonts and icons     -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
            <!-- Nucleo Icons -->
            <link href="<?php echo e(asset('assets/template-soft-ui/assets/css/nucleo-icons.css')); ?>" rel="stylesheet" />
            <link href="<?php echo e(asset('assets/template-soft-ui/assets/css/nucleo-svg.css')); ?>" rel="stylesheet" />
            <!-- Font Awesome Icons -->
            <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
            <link href="<?php echo e(asset('assets/template-soft-ui/assets/css/nucleo-svg.css')); ?>" rel="stylesheet" />
            <!-- CSS Files -->
            <link id="pagestyle" href="<?php echo e(asset('assets/template-soft-ui/assets/css/soft-ui-dashboard.css?v=1.0.3')); ?>" rel="stylesheet" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>

        <body class="g-sidenav-show  bg-gray-100 <?php echo e((\Request::is('rtl') ? 'rtl' : (Request::is('virtual-reality') ? 'virtual-reality' : ''))); ?> ">

            <?php echo $__env->yieldContent('guest'); ?>

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

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="<?php echo e(asset('assets/template-soft-ui/assets/js/soft-ui-dashboard.min.js?v=1.0.3')); ?>"></script>
        </body>
        <?php echo $__env->yieldContent('script'); ?>
        </html>
<?php /**PATH /home4/khristian/copy-ai.surveysideadmin.com/resources/views/layouts/app_auth.blade.php ENDPATH**/ ?>