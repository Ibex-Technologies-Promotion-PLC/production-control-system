<?php if($selectedCompany): ?>
    <div x-data="{showModal: <?php if ((object) ('showModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showModal'->value()); ?>')<?php echo e('showModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showModal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'showModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => ''.e(__('companies.company_informations')).'']); ?>
            <div>
                <div class="shadow-md p-4">
                    <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.cmp_name')); ?></label>
                        <span><?php echo e($selectedCompany->cmp_name); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
                    
                    <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.cmp_phone')); ?></label>
                        <span><?php echo e($selectedCompany->cmp_phone); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
                    <?php if($selectedCompany->cmp_note): ?>
                        <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                            <label><?php echo e(__('validation.attributes.cmp_note')); ?></label>
                            <span><?php echo e($selectedCompany->cmp_note); ?></span>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
                    <?php endif; ?>
                </div>

                <div class="p-5 max-w-full">
                    <?php echo $__env->make('web.sections.addresses.editable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
    </div>
<?php endif; ?><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/web/sections/companies/index/show-modal.blade.php ENDPATH**/ ?>