<div>
    <?php if (isset($component)) { $__componentOriginald033566f468fc7bb3a8d0f946fdab616 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald033566f468fc7bb3a8d0f946fdab616 = $attributes; } ?>
<?php $component = App\View\Components\Content::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Content::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="p-5">
            <div class="<?php echo e($classes['statusClass']); ?> cursor-default">
                <i class="<?php echo e($classes['statusIcon']); ?>"></i>
                <span class="font-bold text-sm">
                    <?php echo e(__("workorders.{$workOrder->getStatus()}")); ?>

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
                <?php if (isset($component)) { $__componentOriginal9265f2c82011405998f0442e028261fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9265f2c82011405998f0442e028261fe = $attributes; } ?>
<?php $component = App\View\Components\Tbody::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Tbody::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $ingredientCards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--[if BLOCK]><![endif]--><?php if($this->isRowReady($index)): ?>
                            <tr wire:key="dp_tablerow_<?php echo e($index); ?>" class="positive">
                        <?php else: ?> 
                            <tr wire:key="dp_tablerow_<?php echo e($index); ?>" class="negative">
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
                                    <span>
                                        <!--[if BLOCK]><![endif]--><?php if($this->isRowReady($index)): ?>
                                            <i class="green check circle icon"></i>
                                            <span class="text-sm"><?php echo e(__('common.ready')); ?></span>
                                        <?php else: ?>
                                            <i class="red clock icon"></i>
                                            <span class="text-sm"><?php echo e(__('dispatchorders.not_prepared_yet')); ?></span>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </span>
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
                                    <span class="font-bold"><?php echo e($card['ingredient']['prd_code']); ?></span>
                                    <span class="text-xs text-ease"><?php echo e($card['ingredient']['prd_name']); ?></span>
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
                                    <span class="font-bold"><?php echo e(number_format($card['amount'], 3)); ?> </span>
                                    <!--[if BLOCK]><![endif]--><?php if(! $card['ingredient']['pivot']['literal']): ?>
                                        ± %<?php echo e($workOrder->product->recipe->tolerance_factor); ?>

                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <span class="text-sm"><?php echo e($card['unit']['name']); ?></span>
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
<?php $component->withAttributes(['class' => 'right aligned']); ?>
                                    <div class="ui mini buttons">
                                        <!--[if BLOCK]><![endif]--><?php if($workOrder->isActive() || $workOrder->isPreparing()): ?>
                                            <!--[if BLOCK]><![endif]--><?php if($this->isRowReady($index)): ?>
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
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <?php else: ?>
                                            <button wire:key="viewModal_<?php echo e($index); ?>" wire:click.prevent="openReservationViewModal(<?php echo e($index); ?>)" class="ui  icon basic orange button ">
                                                <i class="eye icon"></i>
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
<?php if (isset($__attributesOriginal9265f2c82011405998f0442e028261fe)): ?>
<?php $attributes = $__attributesOriginal9265f2c82011405998f0442e028261fe; ?>
<?php unset($__attributesOriginal9265f2c82011405998f0442e028261fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9265f2c82011405998f0442e028261fe)): ?>
<?php $component = $__componentOriginal9265f2c82011405998f0442e028261fe; ?>
<?php unset($__componentOriginal9265f2c82011405998f0442e028261fe); ?>
<?php endif; ?>
        
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

                    <div class="text-xs text-ease <?php echo e($classes['statusClass']); ?>">
                        <i class="triangle exclamation icon"></i>
                        <?php echo e($classes['explanation']); ?>

                    </div>

                    <!--[if BLOCK]><![endif]--><?php if($workOrder->isPreparing()): ?>
                        <!--[if BLOCK]><![endif]--><?php if($workOrder->areAllReady()): ?>
                            <button wire:click.prevent="markAsCompleted()" class="ui mini label green button">
                                <i class="checkmark icon"></i>
                                <?php echo e(__('dispatchorders.mark_as_prepared')); ?>

                            </button>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <?php elseif($workOrder->isPrepared()): ?>
                        <div>
                            <button wire:click.prevent="downgradeToPreparing()" class="ui mini label red button">
                                <i class="undo icon"></i>
                                <?php echo e(__('workorders.edit_sources_before_start')); ?>

                            </button>
                            
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                </div>

             <?php $__env->endSlot(); ?>

        </div>
        

        

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald033566f468fc7bb3a8d0f946fdab616)): ?>
<?php $attributes = $__attributesOriginald033566f468fc7bb3a8d0f946fdab616; ?>
<?php unset($__attributesOriginald033566f468fc7bb3a8d0f946fdab616); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald033566f468fc7bb3a8d0f946fdab616)): ?>
<?php $component = $__componentOriginald033566f468fc7bb3a8d0f946fdab616; ?>
<?php unset($__componentOriginald033566f468fc7bb3a8d0f946fdab616); ?>
<?php endif; ?>



    <!--[if BLOCK]><![endif]--><?php if($reservationViewModal): ?>
        <div x-data="{reservationViewModal: <?php if ((object) ('reservationViewModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('reservationViewModal'->value()); ?>')<?php echo e('reservationViewModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('reservationViewModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'reservationViewModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['header' => ''.e($selectedIngredient->prd_name).'']); ?>
                <?php if (isset($component)) { $__componentOriginalb78862282687d60cbc65d5a37715399f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb78862282687d60cbc65d5a37715399f = $attributes; } ?>
<?php $component = App\View\Components\ReservedStocksTable::resolve(['reservations' => $workOrder->reservationsFor($selectedIngredient->id)->get()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('reserved-stocks-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ReservedStocksTable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb78862282687d60cbc65d5a37715399f)): ?>
<?php $attributes = $__attributesOriginalb78862282687d60cbc65d5a37715399f; ?>
<?php unset($__attributesOriginalb78862282687d60cbc65d5a37715399f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb78862282687d60cbc65d5a37715399f)): ?>
<?php $component = $__componentOriginalb78862282687d60cbc65d5a37715399f; ?>
<?php unset($__componentOriginalb78862282687d60cbc65d5a37715399f); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46)): ?>
<?php $attributes = $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46; ?>
<?php unset($__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46)): ?>
<?php $component = $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46; ?>
<?php unset($__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46); ?>
<?php endif; ?>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    
    <?php echo $__env->make('web.sections.workorders.daily.prepare.work-order-lot-picker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div><?php /**PATH /var/www/html/resources/views/livewire/work-orders/daily/wo-prepare.blade.php ENDPATH**/ ?>