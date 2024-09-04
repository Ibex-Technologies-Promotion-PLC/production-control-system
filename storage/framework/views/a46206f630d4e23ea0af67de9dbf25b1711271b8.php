<div>
    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, []); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

        <div class="p-5">
            <div class="<?php echo e($classes['statusClass']); ?> cursor-default">
                <i class="<?php echo e($classes['statusIcon']); ?>"></i>
                <span class="font-bold text-sm">
                    <?php echo e(__("workorders.{$workOrder->getStatus()}")); ?>

                </span>
            </div>
        
            <?php if (isset($component)) { $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Table::class, []); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'single line selectable']); ?>       
                <?php if (isset($component)) { $__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tbody::class, []); ?>
<?php $component->withName('tbody'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <?php $__currentLoopData = $ingredientCards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($this->isRowReady($index)): ?>
                            <tr wire:key="dp_tablerow_<?php echo e($index); ?>" class="positive">
                        <?php else: ?> 
                            <tr wire:key="dp_tablerow_<?php echo e($index); ?>" class="negative">
                        <?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'two wide']); ?>
                                    <span>
                                        <?php if($this->isRowReady($index)): ?>
                                            <i class="green check circle icon"></i>
                                            <span class="text-sm"><?php echo e(__('common.ready')); ?></span>
                                        <?php else: ?>
                                            <i class="red clock icon"></i>
                                            <span class="text-sm"><?php echo e(__('dispatchorders.not_prepared_yet')); ?></span>
                                        <?php endif; ?>
                                    </span>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'three wide']); ?>
                                    <span class="font-bold"><?php echo e($card['ingredient']['prd_code']); ?></span>
                                    <span class="text-xs text-ease"><?php echo e($card['ingredient']['prd_name']); ?></span>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '']); ?>
                                    <span class="font-bold"><?php echo e(number_format($card['amount'], 3)); ?> </span>
                                    <?php if(! $card['ingredient']['pivot']['literal']): ?>
                                        ± %<?php echo e($workOrder->product->recipe->tolerance_factor); ?>

                                    <?php endif; ?>
                                    <span class="text-sm"><?php echo e($card['unit']['name']); ?></span>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'right aligned']); ?>
                                    <div class="ui mini buttons">
                                        <?php if($workOrder->isActive() || $workOrder->isPreparing()): ?>
                                            <?php if($this->isRowReady($index)): ?>
                                                <button wire:key="empty_<?php echo e($index); ?>" wire:click.prevent="emptyIngredientReserveds(<?php echo e($index); ?>)"  class="ui mini orange basic icon button" data-tooltip="<?php echo e(__('dispatchorders.unload_products')); ?>" data-position="left center" data-variation="mini">
                                                    <i class="red trash alternate link icon"></i>
                                                </button>
                                                <button wire:key="viewModal_<?php echo e($index); ?>" wire:click.prevent="openReservationViewModal(<?php echo e($index); ?>)" class="ui  icon basic orange button ">
                                                    <i class="eye icon"></i>
                                                </button>
                                                <button wire:click.prevent="openWoLotPickerModal(<?php echo e($index); ?>)" class="ui mini orange button ">
                                                    <i class="open box icon"></i>
                                                    <?php echo e(__('common.look_over')); ?>

                                                </button>
                                            <?php else: ?>
                                                <button wire:click.prevent="openWoLotPickerModal(<?php echo e($index); ?>)" class="ui mini red button ">
                                                    <i class="box icon"></i>
                                                    <?php echo e(__('dispatchorders.select_products')); ?>

                                                </button>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <button wire:key="viewModal_<?php echo e($index); ?>" wire:click.prevent="openReservationViewModal(<?php echo e($index); ?>)" class="ui  icon basic orange button ">
                                                <i class="eye icon"></i>
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
<?php if (isset($__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954)): ?>
<?php $component = $__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954; ?>
<?php unset($__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954); ?>
<?php endif; ?>
        
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6)): ?>
<?php $component = $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6; ?>
<?php unset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6); ?>
<?php endif; ?>
                

             <?php $__env->slot('bottom', null, []); ?> 

                <div class="flex items-center justify-between shadow rounded p-2 bg-white">

                    <div class="text-xs text-ease <?php echo e($classes['statusClass']); ?>">
                        <i class="triangle exclamation icon"></i>
                        <?php echo e($classes['explanation']); ?>

                    </div>

                    <?php if($workOrder->isPreparing()): ?>
                        <?php if($workOrder->areAllReady()): ?>
                            <button wire:click.prevent="markAsCompleted()" class="ui mini label green button">
                                <i class="checkmark icon"></i>
                                <?php echo e(__('dispatchorders.mark_as_prepared')); ?>

                            </button>
                        <?php endif; ?>

                    <?php elseif($workOrder->isPrepared()): ?>
                        <div>
                            <button wire:click.prevent="downgradeToPreparing()" class="ui mini label red button">
                                <i class="undo icon"></i>
                                <?php echo e(__('workorders.edit_sources_before_start')); ?>

                            </button>
                            
                        </div>
                    <?php endif; ?>

                </div>

             <?php $__env->endSlot(); ?>

        </div>
        

        

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3)): ?>
<?php $component = $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3; ?>
<?php unset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3); ?>
<?php endif; ?>



    <?php if($reservationViewModal): ?>
        <div x-data="{reservationViewModal: <?php if ((object) ('reservationViewModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('reservationViewModal'->value()); ?>')<?php echo e('reservationViewModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('reservationViewModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'reservationViewModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => ''.e($selectedIngredient->prd_name).'']); ?>
                <?php if (isset($component)) { $__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ReservedStocksTable::class, ['reservations' => $workOrder->reservationsFor($selectedIngredient->id)->get()]); ?>
<?php $component->withName('reserved-stocks-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'p-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e)): ?>
<?php $component = $__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e; ?>
<?php unset($__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>
    
    <?php echo $__env->make('web.sections.workorders.daily.prepare.work-order-lot-picker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div><?php /**PATH /var/www/html/resources/views/livewire/work-orders/daily/wo-prepare.blade.php ENDPATH**/ ?>