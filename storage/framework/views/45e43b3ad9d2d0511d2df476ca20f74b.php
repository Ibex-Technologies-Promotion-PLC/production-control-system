<div>
    <?php if (isset($component)) { $__componentOriginald033566f468fc7bb3a8d0f946fdab616 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald033566f468fc7bb3a8d0f946fdab616 = $attributes; } ?>
<?php $component = App\View\Components\Content::resolve(['theme' => 'green'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\PageHeader::resolve(['icon' => 'settings','header' => 'workorders.daily_work_orders'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('buttons', null, []); ?> 
                    <button wire:click="openWoFormModal" class="ui icon mini teal button"
                        data-tooltip="<?php echo e(__('common.add_new')); ?>" data-variation="mini">
                        <i class="white plus icon"></i>
                    </button>
                 <?php $__env->endSlot(); ?>
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
        <div class="p-4">
            
            
            
                <div class="flex justify-between">
                    <div class="font-bold text-sm">
                        <!--[if BLOCK]><![endif]--><?php if($this->inProgress): ?>
                            <span data-tooltip="<?php echo e(__('workorders.production_continues')); ?>" data-variation="mini">
                                <i class="<?php echo e($this->inProgress->statusColor); ?> link circle icon animate-pulse"></i>
                            </span>
                            <span><?php echo e($this->inProgress->product->prd_name); ?> - </span>
                            <span class="text-ease"><?php echo e(__('workorders.started_at_time', ['time' => $this->inProgress->startedAt()->diffForHumans()])); ?></span>
                        <?php else: ?>
                            <i class="red  circle icon"></i>
                            <span class="text-gray-400 cursor-default"><?php echo e(__('workorders.on_hold')); ?></span>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $workOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $workOrder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <!--[if BLOCK]><![endif]--><?php switch($workOrder):
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
                        <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="10">
                                <?php if (isset($component)) { $__componentOriginal031f7343d586feb3a69898f559e89477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal031f7343d586feb3a69898f559e89477 = $attributes; } ?>
<?php $component = App\View\Components\Placeholder::resolve(['icon' => 'blue settings','header' => ''.e(__('workorders.daily_production')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Placeholder::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php echo e(__('workorders.there_is_no_any_schuled_work_today')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal031f7343d586feb3a69898f559e89477)): ?>
<?php $attributes = $__attributesOriginal031f7343d586feb3a69898f559e89477; ?>
<?php unset($__attributesOriginal031f7343d586feb3a69898f559e89477); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal031f7343d586feb3a69898f559e89477)): ?>
<?php $component = $__componentOriginal031f7343d586feb3a69898f559e89477; ?>
<?php unset($__componentOriginal031f7343d586feb3a69898f559e89477); ?>
<?php endif; ?>
                            </td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>

            </table>
        </div>
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

    


    
    <?php echo $__env->make('web.sections.workorders.daily.modals.reserved-sources', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.sections.workorders.daily.modals.finalize', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!--[if BLOCK]><![endif]--><?php if($detailsModal): ?>
        <div wire:key="detailsModal" x-data="{detailsModal: <?php if ((object) ('detailsModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('detailsModal'->value()); ?>')<?php echo e('detailsModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('detailsModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'detailsModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['header' => ''.e(__('workorders.details.header')).'']); ?>
                <?php if (isset($component)) { $__componentOriginal4811c3bbb97f240830405e0164dec86f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4811c3bbb97f240830405e0164dec86f = $attributes; } ?>
<?php $component = App\View\Components\WorkorderDetails::resolve(['workOrder' => $modalSelectedWorkOrder] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('workorder-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\WorkorderDetails::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'workorderdetailsmodal']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4811c3bbb97f240830405e0164dec86f)): ?>
<?php $attributes = $__attributesOriginal4811c3bbb97f240830405e0164dec86f; ?>
<?php unset($__attributesOriginal4811c3bbb97f240830405e0164dec86f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4811c3bbb97f240830405e0164dec86f)): ?>
<?php $component = $__componentOriginal4811c3bbb97f240830405e0164dec86f; ?>
<?php unset($__componentOriginal4811c3bbb97f240830405e0164dec86f); ?>
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

    <!--[if BLOCK]><![endif]--><?php if($approvalModal): ?>
        <div wire:key="approvalModal" x-data="{approvalModal: <?php if ((object) ('approvalModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('approvalModal'->value()); ?>')<?php echo e('approvalModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('approvalModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'approvalModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['header' => ''.e(__('workorders.details.header')).'']); ?>
                <?php if (isset($component)) { $__componentOriginal4811c3bbb97f240830405e0164dec86f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4811c3bbb97f240830405e0164dec86f = $attributes; } ?>
<?php $component = App\View\Components\WorkorderDetails::resolve(['workOrder' => $approvalWorkOrder] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('workorder-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\WorkorderDetails::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'workorderapprovalmodal']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4811c3bbb97f240830405e0164dec86f)): ?>
<?php $attributes = $__attributesOriginal4811c3bbb97f240830405e0164dec86f; ?>
<?php unset($__attributesOriginal4811c3bbb97f240830405e0164dec86f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4811c3bbb97f240830405e0164dec86f)): ?>
<?php $component = $__componentOriginal4811c3bbb97f240830405e0164dec86f; ?>
<?php unset($__componentOriginal4811c3bbb97f240830405e0164dec86f); ?>
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

    <?php echo $__env->make('web.helpers.deletable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('web.sections.workorders.daily.form-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    


</div><?php /**PATH /var/www/html/resources/views/livewire/work-orders/wo-daily.blade.php ENDPATH**/ ?>