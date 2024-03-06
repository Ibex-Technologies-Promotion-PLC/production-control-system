<?php if($doLotModal): ?>
    <div x-data="{doLotModal: <?php if ((object) ('doLotModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('doLotModal'->value()); ?>')<?php echo e('doLotModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('doLotModal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'doLotModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

             <?php $__env->slot('header', null, []); ?> 
                <div>
                    <?php echo e($selectedDispatchProduct->product->prd_code); ?>

                    <span class="text-sm">(<?php echo e($selectedDispatchProduct->product->prd_name); ?>)</span>
                </div>
             <?php $__env->endSlot(); ?>

            <?php if($selectedDispatchProduct->product->isInStock): ?>
                <div class="bg-white" wire:key="do_<?php echo e($selectedDispatchProduct->id); ?>">
                    <div class="py-3 px-4 shadow font-bold text-sm flex justify-between">
                        <div>
                            <span><?php echo e(__('dispatchorders.total_covered')); ?>:</span>
                            <span class="text-green-600">
                                <?php echo e($this->coveredAmount()); ?> /
                                <span class="text-ease">
                                    <?php echo e($this->getToBase()['amount']); ?>

                                    <?php echo e($selectedDispatchProduct->product->baseUnit->name); ?>

                                </span>
                            </span>
                        </div>
                        <div>
                            <?php if($this->necessaryAmount() == 0): ?>
                                <span class="text-sm text-green-600">
                                    <i class="checkmark icon"></i>
                                    <?php echo e(__('dispatchorders.resources_are_enough')); ?>

                                </span>
                            <?php else: ?>
                                <span><?php echo e(__('dispatchorders.needed_amount' )); ?>:</span>
                                <span class="text-red-600">
                                    <?php echo e($this->necessaryAmount()); ?>

                                    <?php echo e($selectedDispatchProduct->product->baseUnit->name); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                        <div class="p-6 shadow-md flex flex-col gap-8 md:gap-4">
                            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div wire:key="row_<?php echo e($key); ?>" class="flex flex-col md:flex-row gap-3 border border-dashed p-3 rounded-lg hover:border-orange-400 ease-in-out duration-200">
                                    
                                    <select class="form-select text-sm flex-1" wire:model="rows.<?php echo e($key); ?>.lot_number">
                                        <option value="" selected><?php echo e(__('dispatchorders.select_lot_number')); ?></option>
                                        <?php $__currentLoopData = $selectedDispatchProduct->product->lots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $lot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($lot['lot_number']); ?>" class="text-red-700 font-bold">
                                                <span><?php echo e($lot['lot_number']); ?></span> | 
                                                <span class="text-xs"><?php echo e(__('common.available' )); ?>: <?php echo e($lot['available_amount_string']); ?></span>
                                                <?php if($lot['reserved_amount']): ?>
                                                    | <?php echo e(__('workorders.reserved')); ?>: <?php echo e($lot['reserved_amount_string']); ?>

                                                <?php endif; ?>
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                        
                                    <div class="flex gap-4">
                                        <?php if($this->inputDisabled($key)): ?>
                                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['type' => 'number','model' => 'rows.'.e($key).'.reserved_amount','placeholder' => ''.e(__('common.amount')).'','innerLabel' => ''.e($selectedDispatchProduct->product->baseUnit->name).'','iClass' => 'disabled','noErrors' => true]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => 'reservedamountinput_'.e($key).'','class' => 'ui tiny input flex-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                                        <?php else: ?>
                                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['type' => 'number','model' => 'rows.'.e($key).'.reserved_amount','placeholder' => ''.e(__('common.amount')).'','innerLabel' => ''.e($selectedDispatchProduct->product->baseUnit->name).'','noErrors' => true]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => 'reservedamountinput_'.e($key).'','class' => 'ui tiny input flex-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                                        <?php endif; ?>
                                        <div  class="flex items-center w-1/12 justify-center">
                                            <i wire:click="removeRow(<?php echo e($key); ?>)" class=" cancel red icon <?php if($this->cannotRemoveRow()): ?> disabled <?php else: ?> cursor-pointer link <?php endif; ?>"></i>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="flex p-3">
                            <button wire:click="submitLots()" class="ui mini orange w-full button <?php if($this->cannotSubmit()): ?> disabled <?php endif; ?>">
                                <?php echo e(__('common.save')); ?>

                            </button>
                            <button wire:click="addRow()" class="ui mini icon button <?php if($this->cannotAddRow()): ?> disabled <?php endif; ?>">
                                <i class="orange plus icon"></i>
                            </button>
                        </div>

                        <?php if (isset($component)) { $__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorArea::class, []); ?>
<?php $component->withName('error-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'p-4 shadow-inner']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406)): ?>
<?php $component = $__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406; ?>
<?php unset($__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406); ?>
<?php endif; ?>
                </div>
            <?php else: ?> 
                <div class="p-4 shadow-inner bg-red-500">
                    <i class="text-white exclamation triangle icon"></i>
                    <i class="text-white font-bold"><?php echo e(__('inventory.out_of_stock')); ?></i>
                </div>
            <?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
    </div>
<?php endif; ?><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/web/sections/dispatchorders/daily/prepare/dispatch-lot-picker.blade.php ENDPATH**/ ?>