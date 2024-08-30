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
            <?php $__empty_1 = true; $__currentLoopData = $this->liveReports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="p-2 flex justify-between hover:bg-gray-100 hover:shadow-md">
                    <div>
                        <i class="<?php echo e($report['status']['icon']); ?>"></i>
                        <span class="font-semibold"><?php echo e($report['dispatchOrder']->company->cmp_name); ?></span>
                        <span class="text-xs text-ease">(<?php echo e($report['dispatchOrder']->address->adr_name); ?>)</span>
                        <span class="text-sm font-semibold <?php echo e($report['status']['textColor']); ?>"><?php echo e($report['status']['explanation']); ?></span>
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
            <?php endif; ?>
        </div>
    </div>


    <?php if($doDetailsModal): ?>
        <div wire:key="doDetailsModal" x-data="{doDetailsModal: <?php if ((object) ('doDetailsModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('doDetailsModal'->value()); ?>')<?php echo e('doDetailsModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('doDetailsModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'doDetailsModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal39aff823325c1303dd3364c1dbf2da585bd9cd88 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DispatchorderDetails::class, ['dispatchOrder' => $modalSelectedDispatchOrder]); ?>
<?php $component->withName('dispatchorder-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39aff823325c1303dd3364c1dbf2da585bd9cd88)): ?>
<?php $component = $__componentOriginal39aff823325c1303dd3364c1dbf2da585bd9cd88; ?>
<?php unset($__componentOriginal39aff823325c1303dd3364c1dbf2da585bd9cd88); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

</div><?php /**PATH /var/www/html/resources/views/livewire/dispatch-orders/live-reports.blade.php ENDPATH**/ ?>