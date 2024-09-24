<!--[if BLOCK]><![endif]--><?php if($selectedCompany): ?>
    <div x-data="{showModal: <?php if ((object) ('showModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('showModal'->value()); ?>')<?php echo e('showModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('showModal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'showModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['header' => ''.e(__('companies.company_informations')).'']); ?>
            <div>
                <div class="shadow-md p-4">
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.cmp_name')); ?></label>
                        <span><?php echo e($selectedCompany->cmp_name); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.cmp_phone')); ?></label>
                        <span><?php echo e($selectedCompany->cmp_phone); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    <!--[if BLOCK]><![endif]--><?php if($selectedCompany->cmp_note): ?>
                        <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <label><?php echo e(__('validation.attributes.cmp_note')); ?></label>
                            <span><?php echo e($selectedCompany->cmp_note); ?></span>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="p-5 max-w-full">
                    <?php echo $__env->make('web.sections.addresses.editable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH /var/www/html/resources/views/web/sections/companies/index/show-modal.blade.php ENDPATH**/ ?>