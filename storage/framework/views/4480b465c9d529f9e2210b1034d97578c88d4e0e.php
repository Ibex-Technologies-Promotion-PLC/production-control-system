<div>
    <?php if (isset($component)) { $__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorArea::class, []); ?>
<?php $component->withName('error-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406)): ?>
<?php $component = $__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406; ?>
<?php unset($__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406); ?>
<?php endif; ?>
    

    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, []); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <?php if($editMode): ?>
                <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'truck','header' => ''.e(__('dispatchorders.edit_dispatchorder')).'']); ?>
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
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'truck','header' => ''.e(__('dispatchorders.create_dispatchorder')).'']); ?>
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
        <form class="ui mini form" wire:submit.prevent="submit">
            <?php if (isset($component)) { $__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormDivider::class, ['bottomClass' => 'bg-gray-100 shadow-inner']); ?>
<?php $component->withName('form-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

                 <?php $__env->slot('left', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['model' => 'company_id','collection' => $this->companies,'value' => 'id','text' => 'cmp_name,cmp_current_code','sClass' => 'search','noErrors' => true,'label' => ''.e(__('dispatchorders.customer')).'','placeholder' => ''.e(__('dispatchorders.customer')).'','sId' => 'do_company']); ?>
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
    
                    <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['model' => 'address_id','dataSource' => 'companyAddresses','value' => 'id','text' => 'adr_name,adr_province,adr_phone','triggerOnEvent' => 'do_company_selected','sClass' => 'search','label' => ''.e(__('dispatchorders.dispatch_address')).'','placeholder' => ''.e(__('dispatchorders.dispatch_address')).'','sId' => 'do_address','noErrors' => true]); ?>
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
                    
                    
                    
                    <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['defer' => true,'model' => 'do_number','label' => ''.e(__('validation.attributes.do_number')).'','placeholder' => ''.e(__('validation.attributes.do_number')).'','noErrors' => true]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>

                    
                    <?php if (isset($component)) { $__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Datepicker::class, ['model' => 'do_planned_datetime','initialDate' => ''.e($do_planned_datetime).'','label' => ''.e(__('validation.attributes.do_planned_datetime')).'']); ?>
<?php $component->withName('datepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required field']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172)): ?>
<?php $component = $__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172; ?>
<?php unset($__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172); ?>
<?php endif; ?>
                
                    
                    <div x-data="{salesTypeModal: false}" class="equal width fields">
                        <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['model' => 'sales_type_id','triggerOnEvent' => 'st_updated','dataSourceFunction' => 'getSalesTypesProperty','value' => 'id','text' => 'st_abbr,st_name','sClass' => 'search','label' => ''.e(__('validation.attributes.sales_type_id')).'','placeholder' => ''.e(__('validation.attributes.sales_type_id')).'','sId' => 'sales_type_id','noErrors' => true]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required']); ?>
                             <?php $__env->slot('right', null, []); ?> 
                                <div class="pt-0.5 flex justify-end gap-2 items-center" id="BUTTONS">
                                    <?php if($sales_type_id): ?>
                                        <span wire:key="stDelete" wire:click.prevent="stDelete(<?php echo e($sales_type_id); ?>)" class="cursor-pointer text-red-400 hover:text-red-600 " data-tooltip="<?php echo e(__('common.delete')); ?>" data-variation="mini">
                                            <i class="trash icon"></i>
                                        </span>
                                        <span wire:key="stEdit" wire:click.prevent="stEdit(<?php echo e($sales_type_id); ?>)" @click="salesTypeModal = true" class="cursor-pointer text-yellow-400 hover:text-yellow-600 " data-tooltip="<?php echo e(__('common.edit')); ?>" data-variation="mini">
                                            <i class="edit icon"></i>
                                        </span>
                                    <?php endif; ?>
                                    <span wire:key="stAdd" @click="salesTypeModal = true" class=" cursor-pointer text-blue-400 ease-in-out duration-200 hover:text-blue-600" data-tooltip="<?php echo e(__('common.add')); ?>" data-variation="mini">
                                        <i class="plus icon"></i>
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
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'salesTypeModal','theme' => 'green']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => ''.e(__('dispatchorders.add_sales_type')).'']); ?>
                            <?php echo $__env->make('web.sections.salestype.baseform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
                    </div>

                    
                 <?php $__env->endSlot(); ?>
                

                 <?php $__env->slot('right', null, []); ?> 
                    <div x-data="{extrasField: <?php if ((object) ('extrasField') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('extrasField'->value()); ?>')<?php echo e('extrasField'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('extrasField'); ?>')<?php endif; ?>}" class="h-full">

                        <div class="w-full h-full border bg-gray-100 rounded flex items-center justify-center" x-show="!extrasField">
                            <div class="text-center">
                                <button wire:click.prevent @click="extrasField = true" class="ui primary label button">
                                    <?php echo e(__('dispatchorders.enter_extra_information')); ?>

                                </button>
                                <div class="pt-2 text-xs text-ease"><?php echo e(__('dispatchorders.plate_number_driver_expenses_etc')); ?></div>
                            </div>
                        </div>
                        

                        <div x-show="extrasField">
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['defer' => true,'model' => 'de_license_plate','label' => ''.e(__('validation.attributes.de_license_plate')).'','placeholder' => ''.e(__('validation.attributes.de_license_plate')).'','noErrors' => true]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['defer' => true,'model' => 'de_driver_name','label' => ''.e(__('validation.attributes.de_driver_name')).'','placeholder' => ''.e(__('validation.attributes.de_driver_name')).'','noErrors' => true]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['defer' => true,'model' => 'de_driver_phone','label' => ''.e(__('validation.attributes.de_driver_phone')).'','placeholder' => ''.e(__('validation.attributes.de_driver_phone')).'','noErrors' => true]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['defer' => true,'model' => 'de_dispatch_expense','label' => ''.e(__('validation.attributes.de_dispatch_expense')).'','placeholder' => ''.e(__('validation.attributes.de_dispatch_expense')).'','noErrors' => true]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['defer' => true,'model' => 'de_handling_expense','label' => ''.e(__('validation.attributes.de_handling_expense')).'','placeholder' => ''.e(__('validation.attributes.de_handling_expense')).'','noErrors' => true]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                            <div x-data="{addNote: false}" class="pt-2">
                                <div x-show="!addNote">
                                    <i class="write icon"></i>
                                    <span class="cursor-pointer pt-1 text-gray-400 text-sm font-bold ease-in-out duration-200 hover:text-gray-600" @click="addNote = true"><?php echo e(__('common.add_note')); ?></span>
                                </div>
                                <div x-show="addNote" class="field" x-cloak>
                                    <label><i class="write icon"></i><?php echo e(__('validation.attributes.do_note' )); ?></label>
                                    <textarea wire:model.lazy="do_note" rows="1"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                 <?php $__env->endSlot(); ?>



                 <?php $__env->slot('bottom', null, []); ?> 
                    <?php echo $__env->make('web.sections.dispatchorders.create.specify-products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    


</div><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/livewire/dispatch-orders/form.blade.php ENDPATH**/ ?>