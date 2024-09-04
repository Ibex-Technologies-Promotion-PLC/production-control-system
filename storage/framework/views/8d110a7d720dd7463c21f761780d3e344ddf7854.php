<div>
    
    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, ['theme' => 'red']); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'balance scale','header' => 'units.header','subheader' => 'units.subheader']); ?>
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
        <div class="p-4 shadow-md">
            <div class="ui small form">
                <div class="equal width fields">
                    <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['label' => ''.e(__('modelnames.product')).'','noErrors' => true,'placeholder' => ''.e(__('common.dropdown_placeholder')).'','model' => 'product_id','dataSourceFunction' => 'getProductsProperty','sId' => 'selectProduct','sClass' => 'search','value' => 'id','text' => 'prd_code,prd_name']); ?>
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
                </div>
            </div>
        </div>


        <?php if($selectedProduct): ?>
            <div class="px-5 pb-5">

                <?php echo $__env->make('web.sections.units.create.units-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="relative rounded-t" style="min-height: 60%">
                    


                    <div class="px-2 py-7">
                        <div class="flex flex-col gap-3">
                            <?php if(!$cards): ?>
                                <div class="ui placeholder segment h-full">
                                    <div class="ui icon header">
                                        <i class="weight icon"></i>
                                        Birim oluşturmak için ekle butonunu kullanın
                                    </div>
                                    <div class="text-sm text-center"></div>
                                </div>
                            <?php else: ?>
                                <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div wire:key="<?php echo e($key); ?>">
                                        
                                        <div>
                                            <?php echo $__env->make('web.sections.units.create.unit-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3)): ?>
<?php $component = $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3; ?>
<?php unset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3); ?>
<?php endif; ?>
    <div x-data="{ 'questionModal': <?php if ((object) ('questionModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('questionModal'->value()); ?>')<?php echo e('questionModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('questionModal'); ?>')<?php endif; ?> }" x-cloak>
        <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['position' => 'center','active' => 'questionModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
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
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
    </div>

    <div x-data="{ 'confirmModal': <?php if ((object) ('confirmModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('confirmModal'->value()); ?>')<?php echo e('confirmModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('confirmModal'); ?>')<?php endif; ?> }" x-cloak>
        <?php if (isset($component)) { $__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Confirm::class, ['active' => $active ?? 'confirmModal','question' => $question ?? '!!! Emin misin?','atConfirm' => 'confirmDelete()','atDeny' => 'denyDelete()']); ?>
<?php $component->withName('confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2)): ?>
<?php $component = $__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2; ?>
<?php unset($__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2); ?>
<?php endif; ?>
    </div>



</div>
<?php /**PATH /var/www/html/resources/views/livewire/units/form.blade.php ENDPATH**/ ?>