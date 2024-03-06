<div>
    <div class="text-orange-500 cursor-default">
        <i class="shipping fast icon"></i>
        <span class="font-bold text-sm">
            <?php echo e(__('dispatchorders.products_preparing', ['number' => $dispatchOrder->dispatchProducts->count()])); ?>

        </span>
    </div>

    <?php if (isset($component)) { $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Table::class, []); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'single line selectable']); ?>
        <?php $__currentLoopData = $dispatchOrder->dispatchProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr wire:key="dp_tablerow_<?php echo e($key); ?>" class="<?php if($dp->isReady()): ?> warning <?php else: ?> negative <?php endif; ?>">
                    
                <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.table-by-states.common.prepare-table-rows', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'right aligned']); ?>
                    <div class="ui mini buttons">
                        <?php if($dp->isReady()): ?>
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
                        <?php endif; ?>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>

            </tr>    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6)): ?>
<?php $component = $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6; ?>
<?php unset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6); ?>
<?php endif; ?>
        
    
    
     <?php $__env->slot('bottom', null, []); ?> 
        <div class="flex items-center justify-between shadow rounded p-2 bg-white">
            <div class="text-xs text-ease ">
                <i class="yellow triangle exclamation icon"></i>
                <?php echo e(__('dispatchorders.whenever_products_prepared_or_loaded_on_vehicle_then_it_must_be_marked_as_ready')); ?>

            </div>
            <?php if($dispatchOrder->isAllReady()): ?>
                <button wire:click.prevent="markAsCompleted()" class="ui mini label green button">
                    <i class="checkmark icon"></i>
                    <?php echo e(__('dispatchorders.mark_as_prepared')); ?>

                </button>
            <?php endif; ?>
        </div>
     <?php $__env->endSlot(); ?>
</div>
<?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/web/sections/dispatchorders/daily/prepare/table-by-states/prepare-inprogress.blade.php ENDPATH**/ ?>