<div <?php echo e($attributes->merge(['class' => 'rounded-t'])); ?>>
    <div class="grid <?php if($right): ?> grid-cols-1 md:grid-cols-2 <?php endif; ?> border-b">
        <div class="p-6 <?php echo e($lClass); ?>">
            <?php echo e($left); ?>

        </div>

        <?php if($right): ?>
        <div class="border-t md:border-t-0 md:border-l p-6 border-dashed border-gray-200 <?php echo e($rClass); ?>">
            <?php echo e($right); ?>

        </div>
        <?php endif; ?>

    </div>
    <?php if($bottom): ?>
    <div class="p-6 shadow-md <?php echo e($bottomClass); ?>">
        <?php echo e($bottom); ?>

    </div>
    <?php endif; ?>
    <?php if(! $noButtons): ?>
    <div class="p-6 rounded-b-md border-t">
        <?php if (isset($component)) { $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormButtons::class, []); ?>
<?php $component->withName('form-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8340eb01f00535543c6958ab683a31712450bfd)): ?>
<?php $component = $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd; ?>
<?php unset($__componentOriginale8340eb01f00535543c6958ab683a31712450bfd); ?>
<?php endif; ?>
    </div>
    <?php endif; ?>

</div>
















<?php /**PATH /var/www/html/resources/views/components/form-divider.blade.php ENDPATH**/ ?>