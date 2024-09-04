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
    <form class="ui mini form" wire:submit.prevent="submit">
        <?php if (isset($component)) { $__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormDivider::class, []); ?>
<?php $component->withName('form-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

             <?php $__env->slot('left', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['noErrors' => true,'model' => 'prd_name','label' => ''.e(__('validation.attributes.prd_name')).'','placeholder' => ''.e(__('validation.attributes.prd_name')).'']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['noErrors' => true,'model' => 'prd_code','label' => ''.e(__('validation.attributes.prd_code')).'','placeholder' => 'PROD_***']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['action' => true,'model' => 'prd_barcode','label' => 'validation.attributes.prd_barcode','placeholder' => 'validation.attributes.prd_barcode']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required mini']); ?>
                     <?php $__env->slot('action', null, []); ?> 
                        <button wire:click.prevent="suggestProdBarCode" class="ui teal mini right labeled icon button">
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

                <div x-data="{categoryModal: <?php if ((object) ('categoryModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('categoryModal'->value()); ?>')<?php echo e('categoryModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('categoryModal'); ?>')<?php endif; ?>}" class="equal width fields">
                    <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['model' => 'category_id','dataSourceFunction' => 'getCategoriesProperty','value' => 'id','text' => 'ctg_name','sId' => 'categories','sClass' => 'search','triggerOnEvent' => 'categoryUpdated','label' => ''.e(__('modelnames.category')).'','placeholder' => ''.e(__('categories.select_a_category')).'','transition' => 'slide down']); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('right', null, []); ?> 
                            <div class="pt-1 flex gap-2 justify-end items-center" id="BUTTONS">
                                <?php if($selectedCategory): ?>
                                <span wire:key="ctg-delete" wire:click.prevent="ctgDelete()" class="cursor-pointer text-red-400 hover:text-red-600 " data-tooltip="<?php echo e(__('common.delete')); ?>" data-variation="mini">
                                    <i class="trash icon"></i>
                                </span>
                                <span wire:key="ctg-edit" wire:click.prevent="ctgEdit()" class="cursor-pointer text-yellow-400 hover:text-yellow-600 " data-tooltip="<?php echo e(__('common.edit')); ?>" data-variation="mini">
                                    <i class="edit icon"></i>
                                </span>
                                <?php endif; ?>
                                <span wire:click="ctgAdd()" class="cursor-pointer text-blue-400 ease-in-out duration-200 hover:text-blue-600" data-tooltip="<?php echo e(__('categories.add_new_category')); ?>" data-variation="mini">
                                    <i class="green plus icon"></i>
                                </span>
                            </div>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'categoryModal','theme' => 'green']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('header', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'small layer group','header' => 'categories.create_category']); ?>
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
                         <?php $__env->endSlot(); ?>
                        
                        <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'categoryModal','theme' => 'green']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => ''.e(__('categories.add_category')).'']); ?>
                            <?php echo $__env->make('web.sections.categories.ctg-baseform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
                </div>
             <?php $__env->endSlot(); ?>


             <?php $__env->slot('right', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['model' => 'unit_id','collection' => $this->units,'value' => 'id','text' => 'name','sId' => 'units','label' => 'units.unit','placeholder' => 'units.unit','transition' => 'slide down']); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required field']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['noErrors' => true,'model' => 'prd_shelf_life','label' => ''.e(__('validation.attributes.prd_shelf_life')).'','placeholder' => ''.e(__('validation.attributes.prd_shelf_life')).'']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['noErrors' => true,'model' => 'prd_min_threshold','label' => ''.e(__('validation.attributes.prd_min_threshold')).'','placeholder' => ''.e(__('validation.attributes.prd_min_threshold')).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'field']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['noErrors' => true,'model' => 'prd_cost','label' => ''.e(__('validation.attributes.prd_cost')).'','placeholder' => ''.e(__('validation.attributes.prd_cost')).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'field']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>

                <div class="pt-4">
                    <div class="px-2 py-1 border border-dashed">
                        
                        <div class="py-1 flex gap-10">
                            <?php if (isset($component)) { $__componentOriginal65b96498117216404ff6afa327e63156e5f49168 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Checkbox::class, ['model' => 'prd_producible','label' => ''.e(__('validation.attributes.prd_producible')).'']); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data-tooltip' => ''.e(__('products.expresses_the_product_will_be_produced')).'','data-position' => 'top left','data-variation' => 'mini']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65b96498117216404ff6afa327e63156e5f49168)): ?>
<?php $component = $__componentOriginal65b96498117216404ff6afa327e63156e5f49168; ?>
<?php unset($__componentOriginal65b96498117216404ff6afa327e63156e5f49168); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal65b96498117216404ff6afa327e63156e5f49168 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Checkbox::class, ['model' => 'prd_is_active','label' => ''.e(__('validation.attributes.prd_is_active')).'']); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data-tooltip' => ''.e(__('products.will_be_invisible_in_some_modules_such_as_workorder')).'','data-position' => 'top left','data-variation' => 'mini']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65b96498117216404ff6afa327e63156e5f49168)): ?>
<?php $component = $__componentOriginal65b96498117216404ff6afa327e63156e5f49168; ?>
<?php unset($__componentOriginal65b96498117216404ff6afa327e63156e5f49168); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
             <?php $__env->endSlot(); ?>


             <?php $__env->slot('bottom', null, []); ?> 
                <div x-data="{addNote: false}">
                    <div x-show="!addNote">
                        <i class="write icon"></i>
                        <span class="cursor-pointer pt-1 text-gray-400 text-sm font-bold ease-in-out duration-200 hover:text-gray-600" @click="addNote = true"><?php echo e(__('common.add_note')); ?></span>
                    </div>
                    <div x-show="addNote" class="field">
                        <label><i class="write icon"></i><?php echo e(__('common.note' )); ?></label>
                        <textarea wire:model.lazy="note" rows="3"></textarea>
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
</div><?php /**PATH /var/www/html/resources/views/livewire/products/form.blade.php ENDPATH**/ ?>