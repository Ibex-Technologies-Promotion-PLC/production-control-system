<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <div class="bg-white md:m-6">
    <?php if (isset($component)) { $__componentOriginal5d8d50d203871c4b758451e23c3fb1d63533f0f1 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\WorkorderDetails::class, ['viewOnly' => true,'workOrder' => $workOrder]); ?>
<?php $component->withName('workorder-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d8d50d203871c4b758451e23c3fb1d63533f0f1)): ?>
<?php $component = $__componentOriginal5d8d50d203871c4b758451e23c3fb1d63533f0f1; ?>
<?php unset($__componentOriginal5d8d50d203871c4b758451e23c3fb1d63533f0f1); ?>
<?php endif; ?>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/workorders/show/index.blade.php ENDPATH**/ ?>