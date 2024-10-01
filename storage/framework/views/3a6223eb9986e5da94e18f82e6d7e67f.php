<!--[if BLOCK]><![endif]--><?php if($finalizeModal): ?>
    <div x-data="{finalizeModal: <?php if ((object) ('finalizeModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('finalizeModal'->value()); ?>')<?php echo e('finalizeModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('finalizeModal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'finalizeModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['header' => ''.e($finalizeWorkOrder->product->prd_name).'']); ?>

            <form class="ui tiny form shadow-md" wire:submit.prevent="woComplete()">
                <?php if (isset($component)) { $__componentOriginal53f6c610a00cc9dfd2c2e2228060e10f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53f6c610a00cc9dfd2c2e2228060e10f = $attributes; } ?>
<?php $component = App\View\Components\FormDivider::resolve(['noButtons' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FormDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

                     <?php $__env->slot('left', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginal4a0aa0dbff261054ba83150e9d676aae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae = $attributes; } ?>
<?php $component = App\View\Components\Dropdown::resolve(['label' => ''.e(__('common.total')).'','iModel' => 'production_total','iPlaceholder' => ''.e(__('stockmoves.total_produced_amount')).'','sClass' => 'basic','model' => 'unit_id','value' => 'id','text' => 'name','collection' => $finalizeWorkOrder->product->units,'placeholder' => ''.e(__('modelnames.unit')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a0aa0dbff261054ba83150e9d676aae)): ?>
<?php $attributes = $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae; ?>
<?php unset($__attributesOriginal4a0aa0dbff261054ba83150e9d676aae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a0aa0dbff261054ba83150e9d676aae)): ?>
<?php $component = $__componentOriginal4a0aa0dbff261054ba83150e9d676aae; ?>
<?php unset($__componentOriginal4a0aa0dbff261054ba83150e9d676aae); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal786b6632e4e03cdf0a10e8880993f28a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a = $attributes; } ?>
<?php $component = App\View\Components\Input::resolve(['label' => ''.e(__('stockmoves.waste')).'','model' => 'production_waste','placeholder' => ''.e(__('stockmoves.waste_amount')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                             <?php $__env->slot('innerLabel', null, []); ?> 
                                <!--[if BLOCK]><![endif]--><?php if(!empty($selectedUnit)): ?> <?php echo e($selectedUnit->abbreviation); ?> <?php else: ?> ... <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                             <?php $__env->endSlot(); ?>
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
                     <?php $__env->endSlot(); ?>


                     <?php $__env->slot('right', null, []); ?> 
                        <div class="h-full">
                            <div class="h-full p-6 flex items-center justify-around flex-col border border-green-200 rounded-sm shadow-inner bg-cool-gray-50">
                                <?php echo e(__('common.other_wastages_will_come_here')); ?>

                            </div>
                        </div>
                     <?php $__env->endSlot(); ?>
                    
                    
                     <?php $__env->slot('bottom', null, []); ?> 
                        <div class="h-full p-6 flex items-center justify-around flex-col border border-green-200 rounded-sm shadow-inner bg-cool-gray-50">
                            <!--[if BLOCK]><![endif]--><?php if($production_total): ?>
                                <div class="text-xl font-bold">
                                    <span class="text-ease"><?php echo e((float)$production_total ?? 0); ?></span>
                                    <span class="text-ease-red">- <?php echo e((float)$production_waste ?? 0); ?></span>
                                </div>
                                <div class="text-2xl font-extrabold text-green-800 p-2">
                                    <?php echo e(__('common.stock')); ?>:
                                    <?php echo e((float)$production_total - (int)$production_waste); ?>

                                    <?php echo e($selectedUnit['name']); ?>

                                </div>
                            <?php else: ?>
                                <div class="text-ease p-10"><i class="big calculator icon"></i></div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <div class="pt-5">
                            <button class="ui primary mini button w-full">
                                <?php echo e(__('common.do_complete')); ?>

                            </button>
                        </div>
                     <?php $__env->endSlot(); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53f6c610a00cc9dfd2c2e2228060e10f)): ?>
<?php $attributes = $__attributesOriginal53f6c610a00cc9dfd2c2e2228060e10f; ?>
<?php unset($__attributesOriginal53f6c610a00cc9dfd2c2e2228060e10f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53f6c610a00cc9dfd2c2e2228060e10f)): ?>
<?php $component = $__componentOriginal53f6c610a00cc9dfd2c2e2228060e10f; ?>
<?php unset($__componentOriginal53f6c610a00cc9dfd2c2e2228060e10f); ?>
<?php endif; ?>
            </form>

            <div class="p-4 text-sm text-ease-red" x-data="{woAbortConfirmation: false}">
                <div x-show="!woAbortConfirmation">
                    <span @click="woAbortConfirmation = true" class="cursor-pointer">
                        <?php echo e(__('workorders.abort_this_work_order')); ?>

                    </span>
                    <span data-tooltip="<?php echo e(__('workorders.production_results_will_not_be_processed')); ?>" data-variation="mini" data-position="bottom center">
                        <i class="small circular question mark icon"></i>
                    </span>
                </div>
                <div x-show="woAbortConfirmation" wire:click="woAbort(<?php echo e($finalizeWorkOrder->id); ?>)" 
                        class="font-extrabold bg-red-200 text-center border-red-300 text-red-600 cursor-pointer p-2 rounded hover:bg-red-500 ease-in-out hover:text-white duration-200">
                    <?php echo e(__('common.abort')); ?>?
                </div>
            </div>

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
<?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH /var/www/html/resources/views/web/sections/workorders/daily/modals/finalize.blade.php ENDPATH**/ ?>