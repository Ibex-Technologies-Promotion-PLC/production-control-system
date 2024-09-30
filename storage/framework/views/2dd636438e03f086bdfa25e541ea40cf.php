<div <?php echo e($attributes->merge(['class' => 'rounded-t'])); ?>>
    <div class="grid <?php if($right): ?> grid-cols-1 md:grid-cols-2 <?php endif; ?> border-b">
        <div class="p-6 <?php echo e($lClass); ?>">
            <?php echo e($left); ?>

        </div>

        <!--[if BLOCK]><![endif]--><?php if($right): ?>
        <div class="border-t md:border-t-0 md:border-l p-6 border-dashed border-gray-200 <?php echo e($rClass); ?>">
            <?php echo e($right); ?>

        </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    </div>
    <!--[if BLOCK]><![endif]--><?php if($bottom): ?>
    <div class="p-6 shadow-md <?php echo e($bottomClass); ?>">
        <?php echo e($bottom); ?>

    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if(! $noButtons): ?>
    <div class="p-6 rounded-b-md border-t">
        <?php if (isset($component)) { $__componentOriginalaec4e6c11b019d144a9ab2982f3b684f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f = $attributes; } ?>
<?php $component = App\View\Components\FormButtons::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FormButtons::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f)): ?>
<?php $attributes = $__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f; ?>
<?php unset($__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaec4e6c11b019d144a9ab2982f3b684f)): ?>
<?php $component = $__componentOriginalaec4e6c11b019d144a9ab2982f3b684f; ?>
<?php unset($__componentOriginalaec4e6c11b019d144a9ab2982f3b684f); ?>
<?php endif; ?>
    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div>
















<?php /**PATH /var/www/html/resources/views/components/form-divider.blade.php ENDPATH**/ ?>