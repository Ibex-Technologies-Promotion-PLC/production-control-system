<div>
    
    <?php if (isset($component)) { $__componentOriginald033566f468fc7bb3a8d0f946fdab616 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald033566f468fc7bb3a8d0f946fdab616 = $attributes; } ?>
<?php $component = App\View\Components\Content::resolve(['theme' => 'red'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Content::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal522a3c8aadb4ccbcc229d59265244da1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal522a3c8aadb4ccbcc229d59265244da1 = $attributes; } ?>
<?php $component = App\View\Components\PageHeader::resolve(['icon' => 'balance scale','header' => 'units.header','subheader' => 'units.subheader'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal522a3c8aadb4ccbcc229d59265244da1)): ?>
<?php $attributes = $__attributesOriginal522a3c8aadb4ccbcc229d59265244da1; ?>
<?php unset($__attributesOriginal522a3c8aadb4ccbcc229d59265244da1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal522a3c8aadb4ccbcc229d59265244da1)): ?>
<?php $component = $__componentOriginal522a3c8aadb4ccbcc229d59265244da1; ?>
<?php unset($__componentOriginal522a3c8aadb4ccbcc229d59265244da1); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
        <div class="p-4 shadow-md">
            <div class="ui small form">
                <div class="equal width fields">
                    <?php if (isset($component)) { $__componentOriginal4a0aa0dbff261054ba83150e9d676aae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae = $attributes; } ?>
<?php $component = App\View\Components\Dropdown::resolve(['label' => ''.e(__('modelnames.product')).'','noErrors' => true,'placeholder' => ''.e(__('common.dropdown_placeholder')).'','model' => 'product_id','dataSourceFunction' => 'getProductsProperty','sId' => 'selectProduct','sClass' => 'search','value' => 'id','text' => 'prd_code,prd_name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                </div>
            </div>
        </div>


        <!--[if BLOCK]><![endif]--><?php if($selectedProduct): ?>
            <div class="px-5 pb-5">

                <?php echo $__env->make('web.sections.units.create.units-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="relative rounded-t" style="min-height: 60%">
                    


                    <div class="px-2 py-7">
                        <div class="flex flex-col gap-3">
                            <!--[if BLOCK]><![endif]--><?php if(!$cards): ?>
                                <div class="ui placeholder segment h-full">
                                    <div class="ui icon header">
                                        <i class="weight icon"></i>
                                        Birim oluşturmak için ekle butonunu kullanın
                                    </div>
                                    <div class="text-sm text-center"></div>
                                </div>
                            <?php else: ?>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div wire:key="<?php echo e($key); ?>">
                                        
                                        <div>
                                            <?php echo $__env->make('web.sections.units.create.unit-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                </div>

            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
    <div x-data="{ 'questionModal': <?php if ((object) ('questionModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('questionModal'->value()); ?>')<?php echo e('questionModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('questionModal'); ?>')<?php endif; ?> }" x-cloak>
        <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['position' => 'center','active' => 'questionModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <div class="p-5 flex flex-col gap-5">
                <div class="text-center">
                    <span class="font-bold text-ease text-xl"> Formda değişiklikler var, kaydedilsin mi?</span>
                </div>
                <div class="ui tiny buttons">
                    <button wire:click.prevent="modalCancel()" class="ui basic button">Hayır</button>
                    <button wire:click.prevent="modalSaveEdited()" class="ui primary button">Kaydet</button>
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

    <div x-data="{ 'confirmModal': <?php if ((object) ('confirmModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('confirmModal'->value()); ?>')<?php echo e('confirmModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('confirmModal'); ?>')<?php endif; ?> }" x-cloak>
        <?php if (isset($component)) { $__componentOriginalc03504754ab0dd3dd37ca30b514b3449 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc03504754ab0dd3dd37ca30b514b3449 = $attributes; } ?>
<?php $component = App\View\Components\Confirm::resolve(['active' => $active ?? 'confirmModal','question' => $question ?? '!!! Emin misin?','atConfirm' => 'confirmDelete()','atDeny' => 'denyDelete()'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Confirm::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc03504754ab0dd3dd37ca30b514b3449)): ?>
<?php $attributes = $__attributesOriginalc03504754ab0dd3dd37ca30b514b3449; ?>
<?php unset($__attributesOriginalc03504754ab0dd3dd37ca30b514b3449); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc03504754ab0dd3dd37ca30b514b3449)): ?>
<?php $component = $__componentOriginalc03504754ab0dd3dd37ca30b514b3449; ?>
<?php unset($__componentOriginalc03504754ab0dd3dd37ca30b514b3449); ?>
<?php endif; ?>
    </div>



</div>
<?php /**PATH /var/www/html/resources/views/livewire/units/form.blade.php ENDPATH**/ ?>