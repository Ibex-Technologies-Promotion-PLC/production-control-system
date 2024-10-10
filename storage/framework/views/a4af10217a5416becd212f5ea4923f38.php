<div class="shadow p-2 rounded border border-gray-400 bg-white">
    <div class="font-bold flex justify-between">
        <div>
            <i class="red circle icon animate-pulse"></i>
            <span class="text-ease"><?php echo e(__('dispatchorders.live_dispatch_reports')); ?></span>
        </div>
        <a href="<?php echo e(route('dispatchorders.daily')); ?>">
            <i class="fast shipping icon"></i>
            <span class="text-xs"> <?php echo e(__('common.see_all')); ?></span>
        </a>
    </div>
    <div class="pt-1">
        <div class="flex flex-col gap-2 p-2 border rounded shadow-inner">
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $this->liveReports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="p-2 flex justify-between hover:bg-gray-100 hover:shadow-md">
                <div>
                    <!--[if BLOCK]><![endif]--><?php if( !$report['status']): ?>
                    <i class="<?php echo e($report['status'] ? $report['status']['icon'] : ""); ?>"></i>

                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <span class="font-semibold"><?php echo e($report['dispatchOrder']->company->cmp_name); ?></span>
                    <span class="text-xs text-ease">(<?php echo e($report['dispatchOrder']->address->adr_name); ?>)</span>
                    <span class="text-sm font-semibold <?php echo e($report['status'] ? $report['status']['textColor'] : ""); ?>"><?php echo e($report['status'] ? $report['status']['explanation'] : ""); ?></span>
                </div>
                <div wire:click="openDoDetailsModal(<?php echo e($report['dispatchOrder']->id); ?>)" class="cursor-pointer hover:text-blue-600">
                    <span class="font-bold text-sm"><?php echo e($report['dispatchOrder']->do_number); ?></span>
                    <span class="pl-2">
                        <i class="blue search link icon"></i>
                    </span>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="text-sm text-ease font-bold">
                <i class="info icon"></i>
                <?php echo e(__('common.no_shipments_are_currently_available')); ?> ...
            </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>


    <!--[if BLOCK]><![endif]--><?php if($doDetailsModal): ?>
    <div wire:key="doDetailsModal" x-data="{doDetailsModal: <?php if ((object) ('doDetailsModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('doDetailsModal'->value()); ?>')<?php echo e('doDetailsModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('doDetailsModal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'doDetailsModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginalcca0a1cf89c29d6ed1e6a27f28c99e35 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcca0a1cf89c29d6ed1e6a27f28c99e35 = $attributes; } ?>
<?php $component = App\View\Components\DispatchorderDetails::resolve(['dispatchOrder' => $modalSelectedDispatchOrder] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dispatchorder-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DispatchorderDetails::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcca0a1cf89c29d6ed1e6a27f28c99e35)): ?>
<?php $attributes = $__attributesOriginalcca0a1cf89c29d6ed1e6a27f28c99e35; ?>
<?php unset($__attributesOriginalcca0a1cf89c29d6ed1e6a27f28c99e35); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcca0a1cf89c29d6ed1e6a27f28c99e35)): ?>
<?php $component = $__componentOriginalcca0a1cf89c29d6ed1e6a27f28c99e35; ?>
<?php unset($__componentOriginalcca0a1cf89c29d6ed1e6a27f28c99e35); ?>
<?php endif; ?>
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
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div><?php /**PATH /var/www/html/resources/views/livewire/dispatch-orders/live-reports.blade.php ENDPATH**/ ?>