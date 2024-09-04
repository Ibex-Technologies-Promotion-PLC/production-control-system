<div>
    <div class="text-red-600 cursor-default">
        <i class="shipping fast icon"></i>
        <span class="font-bold text-sm">
            <?php echo e(__('dispatchorders.there_are_number_of_products_that_need_to_be_prepared', ['number' => $dispatchOrder->dispatchProducts->count()])); ?>

        </span>
    </div>

    <?php if (isset($component)) { $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Table::class, []); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'single line selectable']); ?>
        <?php $__currentLoopData = $dispatchOrder->dispatchProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr wire:key="dp_tablerow_<?php echo e($key); ?>" class="<?php if($dp->isReady()): ?> positive <?php else: ?> negative <?php endif; ?>">
                    
                <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.table-by-states.common.prepare-table-rows', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'right aligned']); ?>
                    <div class="ui mini buttons">
                        <button wire:click.prevent="openDoLotModal(<?php echo e($dp->id); ?>)" class="ui mini red button ">
                            <i class="dolly icon"></i>
                            <?php echo e(__('dispatchorders.select_products')); ?>

                        </button>
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
        </div>
     <?php $__env->endSlot(); ?>
</div>
<?php /**PATH /var/www/html/resources/views/web/sections/dispatchorders/daily/prepare/table-by-states/prepare-active.blade.php ENDPATH**/ ?>