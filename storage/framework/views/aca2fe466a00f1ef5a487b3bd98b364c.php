<!--[if BLOCK]><![endif]--><?php if($doLotModal): ?>
    <div x-data="{doLotModal: <?php if ((object) ('doLotModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('doLotModal'->value()); ?>')<?php echo e('doLotModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('doLotModal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'doLotModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

             <?php $__env->slot('header', null, []); ?> 
                <div>
                    <?php echo e($selectedDispatchProduct->product->prd_code); ?>

                    <span class="text-sm">(<?php echo e($selectedDispatchProduct->product->prd_name); ?>)</span>
                </div>
             <?php $__env->endSlot(); ?>

            <!--[if BLOCK]><![endif]--><?php if($selectedDispatchProduct->product->isInStock): ?>
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
                            <!--[if BLOCK]><![endif]--><?php if($this->necessaryAmount() == 0): ?>
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
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>

                        <div class="p-6 shadow-md flex flex-col gap-8 md:gap-4">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div wire:key="row_<?php echo e($key); ?>" class="flex flex-col md:flex-row gap-3 border border-dashed p-3 rounded-lg hover:border-orange-400 ease-in-out duration-200">
                                    
                                    <select class="form-select text-sm flex-1" wire:model="rows.<?php echo e($key); ?>.lot_number">
                                        <option value="" selected><?php echo e(__('dispatchorders.select_lot_number')); ?></option>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $selectedDispatchProduct->product->lots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $lot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($lot['lot_number']); ?>" class="text-red-700 font-bold">
                                                <span><?php echo e($lot['lot_number']); ?></span> | 
                                                <span class="text-xs"><?php echo e(__('common.available' )); ?>: <?php echo e($lot['available_amount_string']); ?></span>
                                                <!--[if BLOCK]><![endif]--><?php if($lot['reserved_amount']): ?>
                                                    | <?php echo e(__('workorders.reserved')); ?>: <?php echo e($lot['reserved_amount_string']); ?>

                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                    </select>
                                        
                                    <div class="flex gap-4">
                                        <!--[if BLOCK]><![endif]--><?php if($this->inputDisabled($key)): ?>
                                            <?php if (isset($component)) { $__componentOriginal786b6632e4e03cdf0a10e8880993f28a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a = $attributes; } ?>
<?php $component = App\View\Components\Input::resolve(['type' => 'number','model' => 'rows.'.e($key).'.reserved_amount','placeholder' => ''.e(__('common.amount')).'','innerLabel' => ''.e($selectedDispatchProduct->product->baseUnit->name).'','iClass' => 'disabled','noErrors' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'reservedamountinput_'.e($key).'','class' => 'ui tiny input flex-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal786b6632e4e03cdf0a10e8880993f28a)): ?>
<?php $attributes = $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a; ?>
<?php unset($__attributesOriginal786b6632e4e03cdf0a10e8880993f28a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal786b6632e4e03cdf0a10e8880993f28a)): ?>
<?php $component = $__componentOriginal786b6632e4e03cdf0a10e8880993f28a; ?>
<?php unset($__componentOriginal786b6632e4e03cdf0a10e8880993f28a); ?>
<?php endif; ?>
                                        <?php else: ?>
                                            <?php if (isset($component)) { $__componentOriginal786b6632e4e03cdf0a10e8880993f28a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a = $attributes; } ?>
<?php $component = App\View\Components\Input::resolve(['type' => 'number','model' => 'rows.'.e($key).'.reserved_amount','placeholder' => ''.e(__('common.amount')).'','innerLabel' => ''.e($selectedDispatchProduct->product->baseUnit->name).'','noErrors' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'reservedamountinput_'.e($key).'','class' => 'ui tiny input flex-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal786b6632e4e03cdf0a10e8880993f28a)): ?>
<?php $attributes = $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a; ?>
<?php unset($__attributesOriginal786b6632e4e03cdf0a10e8880993f28a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal786b6632e4e03cdf0a10e8880993f28a)): ?>
<?php $component = $__componentOriginal786b6632e4e03cdf0a10e8880993f28a; ?>
<?php unset($__componentOriginal786b6632e4e03cdf0a10e8880993f28a); ?>
<?php endif; ?>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <div  class="flex items-center w-1/12 justify-center">
                                            <i wire:click="removeRow(<?php echo e($key); ?>)" class=" cancel red icon <?php if($this->cannotRemoveRow()): ?> disabled <?php else: ?> cursor-pointer link <?php endif; ?>"></i>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <div class="flex p-3">
                            <button wire:click="submitLots()" class="ui mini orange w-full button <?php if($this->cannotSubmit()): ?> disabled <?php endif; ?>">
                                <?php echo e(__('common.save')); ?>

                            </button>
                            <button wire:click="addRow()" class="ui mini icon button <?php if($this->cannotAddRow()): ?> disabled <?php endif; ?>">
                                <i class="orange plus icon"></i>
                            </button>
                        </div>

                        <?php if (isset($component)) { $__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55 = $attributes; } ?>
<?php $component = App\View\Components\ErrorArea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('error-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ErrorArea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-4 shadow-inner']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55)): ?>
<?php $attributes = $__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55; ?>
<?php unset($__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55)): ?>
<?php $component = $__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55; ?>
<?php unset($__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55); ?>
<?php endif; ?>
                </div>
            <?php else: ?> 
                <div class="p-4 shadow-inner bg-red-500">
                    <i class="text-white exclamation triangle icon"></i>
                    <i class="text-white font-bold"><?php echo e(__('inventory.out_of_stock')); ?></i>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

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
<?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH /var/www/html/resources/views/web/sections/dispatchorders/daily/prepare/dispatch-lot-picker.blade.php ENDPATH**/ ?>