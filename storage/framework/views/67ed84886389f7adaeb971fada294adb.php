<?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'two wide']); ?>
    <!--[if BLOCK]><![endif]--><?php if($dp->isReady()): ?>
        <span>
            <i class="green check circle icon"></i>
            <span class="text-sm"><?php echo e(__('common.ready')); ?></span>
        </span>
    <?php else: ?>
        <span>
            <i class="red clock icon"></i>
            <span class="text-sm"><?php echo e(__('dispatchorders.not_prepared_yet')); ?></span>
        </span>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'three wide']); ?>
    <span class="font-bold"><?php echo e($dp->product->prd_code); ?></span>
    <span class="text-xs text-ease"><?php echo e($dp->product->prd_name); ?></span>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '']); ?>
    <span class="font-bold"><?php echo e((float)$dp->dp_amount); ?> </span>
    <span class="text-sm"><?php echo e($dp->unit->name); ?></span>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/dispatchorders/daily/prepare/table-by-states/common/prepare-table-rows.blade.php ENDPATH**/ ?>