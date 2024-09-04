<div>
    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, []); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        
        <div>
            <div class="m-4 p-5 border rounded-sm shadow-lg relative bg-teal-1000">
                <div class="flex justify-between border-b border-white text-ease pb-2">
                    <div>
                        <h5 class="">
                            <?php echo e($dispatchOrder->company->cmp_name); ?>

                        </h5>
                    </div>
                    <div>
                        <span class="text-xs"><?php echo e(__('dispatchorders.dispatch')); ?></span>:
                        <span class="">
                            <?php echo e($dispatchOrder->do_number); ?>

                        </span>
                    </div>
                </div>

                <div>
                    <div class="flex flex-col py-2 gap-2 text-ease">
                        <span><?php echo e($dispatchAddress); ?></span>
                        <div><?php echo e(__('validation.attributes.adr_phone')); ?>: <?php echo e($dispatchOrder->address->adr_phone); ?></div>
                    </div>
                    <?php if($dispatchOrder->do_note): ?>
                        <div class="mt-4 p-2 border rounded shadow">
                            <i class="comment alternate outline flipped icon"></i>
                            <i class="text-green-700">“<?php echo e($dispatchOrder->do_note); ?>”</i>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            

            <div class="p-5">
                <?php switch($dispatchOrder):
                    case ($dispatchOrder->isApproved()): ?>
                        <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.table-by-states.prepare-approved', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ($dispatchOrder->isCompleted()): ?>
                        <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.table-by-states.prepare-completed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ($dispatchOrder->isInProgress()): ?>
                        <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.table-by-states.prepare-inprogress', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ($dispatchOrder->isActive()): ?>
                        <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.table-by-states.prepare-active', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ($dispatchOrder->isSuspended()): ?>
                        <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.table-by-states.prepare-suspended', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php default: ?>
                <?php endswitch; ?>
            </div>
        </div>


     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3)): ?>
<?php $component = $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3; ?>
<?php unset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3); ?>
<?php endif; ?>


    <?php if($reservationViewModal): ?>
        <div x-data="{reservationViewModal: <?php if ((object) ('reservationViewModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('reservationViewModal'->value()); ?>')<?php echo e('reservationViewModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('reservationViewModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'reservationViewModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => 'test']); ?>
                <?php if (isset($component)) { $__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ReservedStocksTable::class, ['reservations' => $selectedDispatchProduct->reservedStocks]); ?>
<?php $component->withName('reserved-stocks-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'p-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e)): ?>
<?php $component = $__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e; ?>
<?php unset($__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    
    <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.dispatch-lot-picker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div><?php /**PATH /var/www/html/resources/views/livewire/dispatch-orders/daily/do-prepare.blade.php ENDPATH**/ ?>