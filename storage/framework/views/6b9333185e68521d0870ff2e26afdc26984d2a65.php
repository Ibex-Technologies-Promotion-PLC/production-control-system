<div>
    <?php if (isset($component)) { $__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorArea::class, []); ?>
<?php $component->withName('error-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406)): ?>
<?php $component = $__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406; ?>
<?php unset($__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, ['theme' => 'purple']); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <?php if($editMode): ?>
                <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'project diagram','header' => 'workorders.edit.header']); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('buttons', null, []); ?> 
                        <div class="ui mini icon buttons">
                            <?php if($workOrder->isSuspended()): ?>
                                <button wire:key="unsuspend" wire:click.prevent="unsuspend()" class="ui mini basic button"
                                    data-tooltip="<?php echo e(__('common.suspended')); ?>" data-variation="mini"
                                    data-position="bottom right">
                                    <i class="gray circle icon"></i>
                                </button>
                            <?php elseif($workOrder->isCompleted()): ?>
                                <button class="ui mini basic button"
                                    data-tooltip="<?php echo e(__('workorders.production_is_completed')); ?>" data-variation="mini"
                                    data-position="bottom right">
                                    <i class="green checkmark icon"></i>
                                </button>
                            <?php elseif($workOrder->isInProgress()): ?>
                                <button class="ui mini basic button"
                                    data-tooltip="<?php echo e(__('workorders.production_continues')); ?>" data-variation="mini"
                                    data-position="bottom right">
                                    <i class="orange loading cog icon"></i>
                                </button>
                            <?php else: ?>
                                <button wire:key="suspend" wire:click.prevent="suspend()" class="ui mini basic button"
                                    data-tooltip="<?php echo e(__('common.active')); ?>" data-variation="mini"
                                    data-position="bottom right">
                                    <i class="green circle icon"></i>
                                </button>
                            <?php endif; ?>
                            <?php if(!$workOrder->isInProgress()): ?>
                                <button wire:click.prevent="openDeleteModal()" class="ui mini basic button"
                                    data-tooltip="<?php echo e(__('workorders.wo_delete')); ?>" data-variation="mini"
                                    data-position="bottom right">
                                    <i class="red trash icon"></i>
                                </button>
                            <?php endif; ?>
                        </div>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707)): ?>
<?php $component = $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707; ?>
<?php unset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707); ?>
<?php endif; ?>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'project diagram','header' => 'workorders.create.header','subheader' => 'workorders.create.subheader']); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707)): ?>
<?php $component = $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707; ?>
<?php unset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707); ?>
<?php endif; ?>
            <?php endif; ?>
         <?php $__env->endSlot(); ?>
        <form class="ui tiny form" wire:submit.prevent="submit">
            <?php if (isset($component)) { $__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormDivider::class, []); ?>
<?php $component->withName('form-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

                 <?php $__env->slot('left', null, []); ?> 
                    <?php if($editMode): ?>
                        <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['model' => 'product_id','triggerOnEvent' => 'new_work_order_created','dataSourceFunction' => 'getProductsProperty','sClass' => 'disabled search','sId' => 'selectProduct','value' => 'id','text' => 'prd_code,prd_name','label' => ''.e(__('validation.attributes.product_id')).'','placeholder' => ''.e(__('units.unit')).'']); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['model' => 'product_id','triggerOnEvent' => 'new_work_order_created','dataSourceFunction' => 'getProductsProperty','sClass' => 'search','sId' => 'selectProduct','value' => 'id','text' => 'prd_code,prd_name','label' => ''.e(__('validation.attributes.product_id')).'','placeholder' => ''.e(__('units.unit')).'']); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <!-- <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['model' => 'wo_lot_no','noErrors' => true,'label' => ''.e(__('validation.attributes.wo_lot_no')).'','placeholder' => ''.e(__('validation.attributes.wo_lot_no')).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required field']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?> -->
                    <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['action' => true,'model' => 'wo_lot_no','label' => 'validation.attributes.wo_lot_no','placeholder' => 'validation.attributes.wo_lot_no']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required mini']); ?>
                         <?php $__env->slot('action', null, []); ?> 
                            <button wire:click.prevent="suggestLotCode" class="ui teal mini right labeled icon button ">
                                <i class="icon random"></i>
                                <?php echo e(__('recipes.suggest_code')); ?>

                            </button>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['iModel' => 'wo_amount','iPlaceholder' => ''.e(__('validation.attributes.wo_amount')).'','label' => ''.e(__('validation.attributes.wo_amount')).'','model' => 'unit_id','triggerOnEvent' => 'woProductChanged','dataSource' => 'units','sId' => 'workOrderUnits','sClass' => 'basic','value' => 'id','text' => 'name','placeholder' => ''.e(__('units.unit')).'']); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Datepicker::class, ['model' => 'wo_datetime','initialDate' => $wo_datetime,'label' => __('validation.attributes.wo_datetime')]); ?>
<?php $component->withName('datepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['noErrors' => true,'class' => 'required field']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172)): ?>
<?php $component = $__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172; ?>
<?php unset($__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['noErrors' => true,'model' => 'wo_code','label' => ''.e(__('validation.attributes.wo_code')).'','placeholder' => ''.e(__('validation.attributes.wo_code')).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required field']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['noErrors' => true,'model' => 'wo_queue','label' => ''.e(__('validation.attributes.wo_queue')).'','placeholder' => ''.e(__('validation.attributes.wo_queue')).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required field']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>



                 <?php $__env->slot('right', null, []); ?> 
                    <?php if($this->productSelected()): ?>

                        <div class="rounded shadow-lg h-full border md:h-30-rem md:overflow-x-hidden">
                            
                            <?php if($selectedProduct->recipe->ingredients->isEmpty()): ?>
                                <?php if (isset($component)) { $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Placeholder::class, ['icon' => 'red exclamation']); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                    <div class="text-sm">
                                        <div><?php echo e(__('recipes.no_recipe_ingredients_found')); ?></div>
                                        <div>
                                            <?php echo e(__('workorders.recipe_ingredients_must_be_correct_for_keep_inventory_flawless')); ?>

                                        </div>
                                        <div class="pt-5">
                                            <button wire:click.prevent="redirectForAddIngredients()"
                                                class="ui mini button">
                                                <?php echo e(__('recipes.add_recipe_ingredients')); ?>

                                            </button>
                                        </div>
                                    </div>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71)): ?>
<?php $component = $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71; ?>
<?php unset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71); ?>
<?php endif; ?>
                            <?php else: ?>
                                <?php if (isset($component)) { $__componentOriginalf0787f5b78207f2bb2e8fbea3d6ce2fd93f71803 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\NecessaryIngredients::class, ['product' => $selectedProduct,'amount' => $wo_amount,'unitId' => $unit_id,'noHeader' => true]); ?>
<?php $component->withName('necessary-ingredients'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                    
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf0787f5b78207f2bb2e8fbea3d6ce2fd93f71803)): ?>
<?php $component = $__componentOriginalf0787f5b78207f2bb2e8fbea3d6ce2fd93f71803; ?>
<?php unset($__componentOriginalf0787f5b78207f2bb2e8fbea3d6ce2fd93f71803); ?>
<?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Placeholder::class, ['icon' => 'primary tasks']); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                            <span class="text-sm">
                                <?php echo e(__('workorders.necessary_items_and_amounts_will_be_shown_here')); ?>...
                            </span>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71)): ?>
<?php $component = $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71; ?>
<?php unset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71); ?>
<?php endif; ?>
                    <?php endif; ?>
                 <?php $__env->endSlot(); ?>



                 <?php $__env->slot('bottom', null, []); ?> 
                    <div x-data="{ addNote: false }">
                        <div x-show="!addNote" class="text-ease">
                            <i class="write icon"></i>
                            <span class="cursor-pointer pt-1 text-sm font-bold"
                                @click="addNote = true"><?php echo e(__('common.add_note')); ?></span>
                        </div>
                        <div x-show="addNote" class="field">
                            <label><i class="write icon"></i><?php echo e(__('validation.attributes.wo_note')); ?></label>
                            <textarea wire:model.lazy="wo_note" rows="6"></textarea>
                        </div>
                    </div>
                 <?php $__env->endSlot(); ?>


             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00)): ?>
<?php $component = $__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00; ?>
<?php unset($__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00); ?>
<?php endif; ?>
        </form>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3)): ?>
<?php $component = $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3; ?>
<?php unset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3); ?>
<?php endif; ?>

    <?php if($editMode && $workOrder): ?>
        <div x-data="{ deleteModal: <?php if ((object) ('deleteModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('deleteModal'->value()); ?>')<?php echo e('deleteModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('deleteModal'); ?>')<?php endif; ?> }" x-cloak>
            <?php if (isset($component)) { $__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Confirm::class, ['atConfirm' => 'confirmDelete()','active' => 'deleteModal','color' => 'red','confirm' => ''.e(__('common.delete')).'','deny' => ''.e(__('common.cancel')).'']); ?>
<?php $component->withName('confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php if($workOrder->isCompleted()): ?>
                    <div class="pb-3"><i class="large red exclamation icon"></i></div>
                    <div><?php echo e(__('common.are_you_sure_you_want_to_delete')); ?></div>
                    <div class="text-xs text-ease-red pt-5">
                        <?php echo e(__('workorders.all_stock_moves_will_be_deleted_which_is_added_by_this_wo')); ?></div>
                <?php else: ?>
                    <div><?php echo e(__('common.are_you_sure_you_want_to_delete')); ?></div>
                <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2)): ?>
<?php $component = $__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2; ?>
<?php unset($__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

</div>
<?php /**PATH /var/www/html/resources/views/livewire/work-orders/form.blade.php ENDPATH**/ ?>