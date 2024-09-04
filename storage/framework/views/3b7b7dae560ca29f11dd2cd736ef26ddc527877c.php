<?php if($finalizeModal): ?>
    <div x-data="{finalizeModal: <?php if ((object) ('finalizeModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('finalizeModal'->value()); ?>')<?php echo e('finalizeModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('finalizeModal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'finalizeModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => ''.e($finalizeWorkOrder->product->prd_name).'']); ?>

            <form class="ui tiny form shadow-md" wire:submit.prevent="woComplete()">
                <?php if (isset($component)) { $__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormDivider::class, ['noButtons' => true]); ?>
<?php $component->withName('form-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

                     <?php $__env->slot('left', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['label' => ''.e(__('common.total')).'','iModel' => 'production_total','iPlaceholder' => ''.e(__('stockmoves.total_produced_amount')).'','sClass' => 'basic','model' => 'unit_id','value' => 'id','text' => 'name','collection' => $finalizeWorkOrder->product->units,'placeholder' => ''.e(__('modelnames.unit')).'']); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['label' => ''.e(__('stockmoves.waste')).'','model' => 'production_waste','placeholder' => ''.e(__('stockmoves.waste_amount')).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                             <?php $__env->slot('innerLabel', null, []); ?> 
                                <?php if(!empty($selectedUnit)): ?> <?php echo e($selectedUnit->abbreviation); ?> <?php else: ?> ... <?php endif; ?>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
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
                            <?php if($production_total): ?>
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
                            <?php endif; ?>
                        </div>
                        <div class="pt-5">
                            <button class="ui primary mini button w-full">
                                <?php echo e(__('common.do_complete')); ?>

                            </button>
                        </div>
                     <?php $__env->endSlot(); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00)): ?>
<?php $component = $__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00; ?>
<?php unset($__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00); ?>
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
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
    </div>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/workorders/daily/modals/finalize.blade.php ENDPATH**/ ?>