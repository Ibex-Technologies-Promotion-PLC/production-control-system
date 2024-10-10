<?php if (isset($component)) { $__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3 = $attributes; } ?>
<?php $component = App\View\Components\TableRow::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TableRow::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?>
        <?php if (isset($component)) { $__componentOriginaleec1da765ed3218d03288cbfb54cb4e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5 = $attributes; } ?>
<?php $component = App\View\Components\Span::resolve(['tooltip' => ''.e(__('dispatchorders.waiting_for_dispatch')).'','position' => 'top left'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Span::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <i class="large primary clock outline icon"></i>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5)): ?>
<?php $attributes = $__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5; ?>
<?php unset($__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleec1da765ed3218d03288cbfb54cb4e5)): ?>
<?php $component = $__componentOriginaleec1da765ed3218d03288cbfb54cb4e5; ?>
<?php unset($__componentOriginaleec1da765ed3218d03288cbfb54cb4e5); ?>
<?php endif; ?>
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

    <?php echo $__env->make('web.sections.dispatchorders.daily.table-rows.do-row-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'right aligned']); ?>
        <a href="<?php echo e(route('dispatchorders.prepare', ['dispatchOrder' => $dispatchOrder])); ?>" class="ui blue label button">
            <i class="box icon"></i>
            <?php echo e(__('common.prepare')); ?>

        </a>
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
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3)): ?>
<?php $attributes = $__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3; ?>
<?php unset($__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3)): ?>
<?php $component = $__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3; ?>
<?php unset($__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/dispatchorders/daily/table-rows/do-case-active.blade.php ENDPATH**/ ?>