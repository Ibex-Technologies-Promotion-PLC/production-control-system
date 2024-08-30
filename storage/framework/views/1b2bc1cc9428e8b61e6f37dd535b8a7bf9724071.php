<div class="shadow p-2 rounded border border-gray-400 bg-white">
    <div class="font-bold flex justify-between">
        <div>
            <i class="red circle icon animate-pulse"></i>
            <span class="text-ease"><?php echo e(__('workorders.live_production_reports')); ?></span>
        </div>
        <a href="<?php echo e(route('work-orders.daily')); ?>">
            <i class="industry icon"></i>
            <span class="text-xs"><?php echo e(__('common.see_all')); ?></span>
        </a>
    </div>
    <div class="pt-1">
        <div class="flex flex-col gap-2 p-2 border rounded shadow-inner">
            <?php $__empty_1 = true; $__currentLoopData = $this->liveReports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="p-2 flex justify-between hover:bg-gray-100 hover:shadow-md">
                    <div>
                        <i class="<?php echo e($report['status']['icon']); ?>"></i>
                        <span class="font-semibold"><?php echo e($report['workOrder']->product->prd_name); ?></span>
                        <span class="text-xs text-ease">(<?php echo e($report['workOrder']->product->prd_code); ?>)</span>
                        <span class="text-sm font-semibold <?php echo e($report['status']['textColor']); ?>"><?php echo e($report['status']['explanation']); ?></span>
                    </div>
                    <div wire:click="openWoDetailsModal(<?php echo e($report['workOrder']->id); ?>)" class="cursor-pointer hover:text-blue-600">
                        <span class="font-bold text-sm"><?php echo e($report['workOrder']->wo_lot_no); ?></span>
                        <span class="pl-2">
                            <i class="blue search link icon"></i>
                        </span>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="text-sm text-ease font-bold">
                    <i class="info icon"></i>
                   <?php echo e(__('common.there_is_currently_no_production')); ?>...
                </div>
            <?php endif; ?>
        </div>
    </div>



    <?php if($woDetailsModal): ?>
        <div wire:key="woDetailsModal" x-data="{woDetailsModal: <?php if ((object) ('woDetailsModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('woDetailsModal'->value()); ?>')<?php echo e('woDetailsModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('woDetailsModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'woDetailsModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => ''.e(__('workorders.details.header')).'']); ?>
                <?php if (isset($component)) { $__componentOriginal5d8d50d203871c4b758451e23c3fb1d63533f0f1 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\WorkorderDetails::class, ['viewOnly' => true,'workOrder' => $modalSelectedWorkOrder]); ?>
<?php $component->withName('workorder-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d8d50d203871c4b758451e23c3fb1d63533f0f1)): ?>
<?php $component = $__componentOriginal5d8d50d203871c4b758451e23c3fb1d63533f0f1; ?>
<?php unset($__componentOriginal5d8d50d203871c4b758451e23c3fb1d63533f0f1); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>
    
</div><?php /**PATH /var/www/html/resources/views/livewire/work-orders/live-reports.blade.php ENDPATH**/ ?>