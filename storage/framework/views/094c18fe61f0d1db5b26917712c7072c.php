<div>
    <div class="text-orange-500 cursor-default">
        <i class="shipping fast icon"></i>
        <span class="font-bold text-sm">
            <?php echo e(__('dispatchorders.products_preparing', ['number' => $dispatchOrder->dispatchProducts->count()])); ?>

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
            <tr wire:key="dp_tablerow_<?php echo e($key); ?>" class="<?php if($dp->isReady()): ?> warning <?php else: ?> negative <?php endif; ?>">
                    
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
                        <!--[if BLOCK]><![endif]--><?php if($dp->isReady()): ?>
                            <button wire:key="empty_<?php echo e($key); ?>" wire:click.prevent="emptyDpReserveds(<?php echo e($dp->id); ?>)"  class="ui mini orange basic icon button" data-tooltip="<?php echo e(__('dispatchorders.unload_products')); ?>" data-position="top right" data-variation="mini">
                                <i class="red trash alternate link icon"></i>
                            </button>
                            <button wire:key="viewModal_<?php echo e($key); ?>" wire:click.prevent="openReservationViewModal(<?php echo e($dp->id); ?>)" class="ui  icon basic orange button ">
                                <i class="eye icon"></i>
                            </button>
                            <button wire:key="doLotModal_<?php echo e($key); ?>" wire:click.prevent="openDoLotModal(<?php echo e($dp->id); ?>)" class="ui mini orange button ">
                                <i class="dolly icon"></i>
                                <?php echo e(__('common.edit')); ?>

                            </button>
                        <?php else: ?> 
                            <button wire:key="doLotModal2_<?php echo e($key); ?>" wire:click.prevent="openDoLotModal(<?php echo e($dp->id); ?>)" class="ui mini red button ">
                                <i class="dolly icon"></i>
                                <?php echo e(__('dispatchorders.select_products')); ?>

                            </button>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
            <!--[if BLOCK]><![endif]--><?php if($dispatchOrder->isAllReady()): ?>
                <button wire:click.prevent="markAsCompleted()" class="ui mini label green button">
                    <i class="checkmark icon"></i>
                    <?php echo e(__('dispatchorders.mark_as_prepared')); ?>

                </button>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
     <?php $__env->endSlot(); ?>
</div>
<?php /**PATH /var/www/html/resources/views/web/sections/dispatchorders/daily/prepare/table-by-states/prepare-inprogress.blade.php ENDPATH**/ ?>