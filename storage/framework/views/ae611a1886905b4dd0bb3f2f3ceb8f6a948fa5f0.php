<div>
    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, []); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <?php if($editMode): ?>
                <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'briefcase','header' => ''.e(__('companies.edit_company')).'']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'briefcase','header' => ''.e(__('companies.create_company')).'']); ?>
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
        <form wire:submit.prevent="submit" class="ui tiny form">
            <?php if (isset($component)) { $__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormDivider::class, []); ?>
<?php $component->withName('form-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>


                 <?php $__env->slot('left', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['defer' => true,'model' => 'cmp_name','label' => 'validation.attributes.cmp_name','placeholder' => 'validation.attributes.cmp_name']); ?>
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
                     <?php $__env->endSlot(); ?>


                 <?php $__env->slot('right', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['defer' => true,'model' => 'cmp_phone','label' => 'validation.attributes.cmp_phone','placeholder' => 'validation.attributes.cmp_phone']); ?>
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
                    <div class="pt-1">
                        <div class="px-2 py-1 border border-dashed">
                            <span class="text-ease text-xs"><?php echo e(__('companies.a_company_can_be_either_a_supplier_and_a_customer')); ?>.</span>
                            <div class="py-1 flex gap-10">
                                <?php if (isset($component)) { $__componentOriginal65b96498117216404ff6afa327e63156e5f49168 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Checkbox::class, ['model' => 'cmp_supplier','label' => ''.e(__('validation.attributes.cmp_supplier')).'']); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65b96498117216404ff6afa327e63156e5f49168)): ?>
<?php $component = $__componentOriginal65b96498117216404ff6afa327e63156e5f49168; ?>
<?php unset($__componentOriginal65b96498117216404ff6afa327e63156e5f49168); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal65b96498117216404ff6afa327e63156e5f49168 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Checkbox::class, ['model' => 'cmp_customer','label' => ''.e(__('validation.attributes.cmp_customer')).'']); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
                    <div x-data="{addExplanation: false}">
                        <div x-show="!addExplanation">
                            <i class="write icon"></i>
                            <span class="cursor-pointer pt-1 text-gray-400 text-sm font-bold ease-in-out duration-200 hover:text-gray-600" @click="addExplanation = true"><?php echo e(__('common.add_explanation')); ?></span>
                        </div>
                        <div x-show="addExplanation" class="field">
                            <label><i class="write icon"></i><?php echo e(__('validation.attributes.cmp_note' )); ?></label>
                            <textarea wire:model.lazy="cmp_note" rows="3"></textarea>
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
</div>
<?php /**PATH /var/www/html/resources/views/livewire/companies/form.blade.php ENDPATH**/ ?>