<?php $__env->startSection('title', __('Page Not Found')); ?>
<?php $__env->startSection('code', '404'); ?>
<?php $__env->startSection('message'); ?>
<p><?php echo e(__('Page Not Found')); ?></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/errors/404.blade.php ENDPATH**/ ?>