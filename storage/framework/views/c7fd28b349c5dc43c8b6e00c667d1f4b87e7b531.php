

<?php $__env->startSection('guest'); ?>
        <?php echo $__env->yieldContent('content'); ?>        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/khristian/copy-ai.surveysideadmin.com/resources/views/layouts/user_type/guest.blade.php ENDPATH**/ ?>