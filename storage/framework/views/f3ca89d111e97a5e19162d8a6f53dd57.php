<div>
    <div class="text-red-600 cursor-default">
        <i class="shipping fast icon"></i>
        <span class="font-bold text-sm">
            <?php echo e(__('dispatchorders.there_are_number_of_products_that_need_to_be_prepared', ['number' => $dispatchOrder->dispatchProducts->count()])); ?>

        </span>
    </div>
    <?php if (isset($component)) { $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f = $attributes; } ?>
<?php $component = App\View\Components\Table::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Table::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'single line selectable']); ?>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $dispatchOrder->dispatchProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr wire:key="dp_tablerow_<?php echo e($key); ?>" class="<?php if($dp->isReady()): ?> positive <?php else: ?> negative <?php endif; ?>">
                    
                <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.table-by-states.common.prepare-table-rows', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                    <div class="ui mini buttons">
                        <button wire:click.prevent="openDoLotModal(<?php echo e($dp->id); ?>)" class="ui mini red button ">
                            <i class="dolly icon"></i>
                            <?php echo e(__('dispatchorders.select_products')); ?>

                        </button>
                    </div>
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

            </tr>    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $attributes = $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $component = $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>
    

    
     <?php $__env->slot('bottom', null, []); ?> 
        <div class="flex items-center justify-between shadow rounded p-2 bg-white">
            <div class="text-xs text-ease ">
                <i class="yellow triangle exclamation icon"></i>
                <?php echo e(__('dispatchorders.whenever_products_prepared_or_loaded_on_vehicle_then_it_must_be_marked_as_ready')); ?>

            </div>
        </div>
     <?php $__env->endSlot(); ?>
</div>
<?php /**PATH /var/www/html/resources/views/web/sections/dispatchorders/daily/prepare/table-by-states/prepare-active.blade.php ENDPATH**/ ?>