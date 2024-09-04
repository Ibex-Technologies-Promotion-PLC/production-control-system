<div>
    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, ['theme' => 'green']); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'settings','header' => 'workorders.daily_work_orders']); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('buttons', null, []); ?> 
                    <button wire:click="openWoFormModal" class="ui icon mini teal button"
                        data-tooltip="<?php echo e(__('common.add_new')); ?>" data-variation="mini">
                        <i class="white plus icon"></i>
                    </button>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707)): ?>
<?php $component = $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707; ?>
<?php unset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
        <div class="p-4">
            
            
            
                <div class="flex justify-between">
                    <div class="font-bold text-sm">
                        <?php if($this->inProgress): ?>
                            <span data-tooltip="<?php echo e(__('workorders.production_continues')); ?>" data-variation="mini">
                                <i class="<?php echo e($this->inProgress->statusColor); ?> link circle icon animate-pulse"></i>
                            </span>
                            <span><?php echo e($this->inProgress->product->prd_name); ?> - </span>
                            <span class="text-ease"><?php echo e(__('workorders.started_at_time', ['time' => $this->inProgress->startedAt()->diffForHumans()])); ?></span>
                        <?php else: ?>
                            <i class="red  circle icon"></i>
                            <span class="text-gray-400 cursor-default"><?php echo e(__('workorders.on_hold')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div>
                        
                        <span class="font-bold text-gray-500"><?php echo e($todayDate); ?></span>
                    </div>
                </div>
            

            

            <table class="ui sortable compact unstackable table basic">

                <thead>
                    <tr>
                        <th><?php echo e(__('validation.attributes.wo_status')); ?></th>
                        <th><?php echo e(__('validation.attributes.prd_name')); ?></th>
                        <th><?php echo e(__('validation.attributes.wo_amount')); ?></th>
                        <th><?php echo e(__('validation.attributes.wo_lot_no')); ?></th>
                        <th><?php echo e(__('validation.attributes.wo_queue')); ?></th>
                        <th><?php echo e(__('validation.attributes.wo_code')); ?></th>
                        <th></th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $workOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $workOrder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php switch($workOrder):
                            case ($workOrder->isApproved()): ?>
                                <?php echo $__env->make('web.sections.workorders.daily.table-rows.wo-case-approved', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case ($workOrder->isCompleted()): ?>
                                <?php echo $__env->make('web.sections.workorders.daily.table-rows.wo-case-completed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case ($workOrder->isInProgress()): ?>
                                <?php echo $__env->make('web.sections.workorders.daily.table-rows.wo-case-inprogress', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case ($workOrder->isPrepared()): ?>
                                <?php echo $__env->make('web.sections.workorders.daily.table-rows.wo-case-prepared', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case ($workOrder->isPreparing()): ?>
                                <?php echo $__env->make('web.sections.workorders.daily.table-rows.wo-case-preparing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case ($workOrder->isActive()): ?>
                                <?php echo $__env->make('web.sections.workorders.daily.table-rows.wo-case-active', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case ($workOrder->isSuspended()): ?>
                                <?php echo $__env->make('web.sections.workorders.daily.table-rows.wo-case-suspended', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                        <?php endswitch; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="10">
                                <?php if (isset($component)) { $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Placeholder::class, ['icon' => 'blue settings','header' => ''.e(__('workorders.daily_production')).'']); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                    <?php echo e(__('workorders.there_is_no_any_schuled_work_today')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71)): ?>
<?php $component = $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71; ?>
<?php unset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71); ?>
<?php endif; ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3)): ?>
<?php $component = $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3; ?>
<?php unset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3); ?>
<?php endif; ?>

    


    
    <?php echo $__env->make('web.sections.workorders.daily.modals.reserved-sources', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.sections.workorders.daily.modals.finalize', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if($detailsModal): ?>
        <div wire:key="detailsModal" x-data="{detailsModal: <?php if ((object) ('detailsModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('detailsModal'->value()); ?>')<?php echo e('detailsModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('detailsModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'detailsModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => ''.e(__('workorders.details.header')).'']); ?>
                <?php if (isset($component)) { $__componentOriginal5d8d50d203871c4b758451e23c3fb1d63533f0f1 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\WorkorderDetails::class, ['workOrder' => $modalSelectedWorkOrder]); ?>
<?php $component->withName('workorder-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => 'workorderdetailsmodal']); ?>
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

    <?php if($approvalModal): ?>
        <div wire:key="approvalModal" x-data="{approvalModal: <?php if ((object) ('approvalModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('approvalModal'->value()); ?>')<?php echo e('approvalModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('approvalModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'approvalModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => ''.e(__('workorders.details.header')).'']); ?>
                <?php if (isset($component)) { $__componentOriginal5d8d50d203871c4b758451e23c3fb1d63533f0f1 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\WorkorderDetails::class, ['workOrder' => $approvalWorkOrder]); ?>
<?php $component->withName('workorder-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => 'workorderapprovalmodal']); ?>
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

    <?php echo $__env->make('web.helpers.deletable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('web.sections.workorders.daily.form-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    


</div><?php /**PATH /var/www/html/resources/views/livewire/work-orders/wo-daily.blade.php ENDPATH**/ ?>