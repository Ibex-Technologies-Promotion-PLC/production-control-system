<div>
    <?php if (isset($component)) { $__componentOriginald033566f468fc7bb3a8d0f946fdab616 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald033566f468fc7bb3a8d0f946fdab616 = $attributes; } ?>
<?php $component = App\View\Components\Content::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Content::ignoredParameterNames()); ?>
<?php endif; ?>
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
                    <!--[if BLOCK]><![endif]--><?php if($dispatchOrder->do_note): ?>
                        <div class="mt-4 p-2 border rounded shadow">
                            <i class="comment alternate outline flipped icon"></i>
                            <i class="text-green-700">“<?php echo e($dispatchOrder->do_note); ?>”</i>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>


            <div class="p-5">
                <!--[if BLOCK]><![endif]--><?php switch($dispatchOrder):
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
                <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
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


    <!--[if BLOCK]><![endif]--><?php if($reservationViewModal): ?>
        <div x-data="{reservationViewModal: <?php if ((object) ('reservationViewModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('reservationViewModal'->value()); ?>')<?php echo e('reservationViewModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('reservationViewModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'reservationViewModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['header' => 'test']); ?>
                <?php if (isset($component)) { $__componentOriginalb78862282687d60cbc65d5a37715399f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb78862282687d60cbc65d5a37715399f = $attributes; } ?>
<?php $component = App\View\Components\ReservedStocksTable::resolve(['reservations' => $selectedDispatchProduct] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('reserved-stocks-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ReservedStocksTable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb78862282687d60cbc65d5a37715399f)): ?>
<?php $attributes = $__attributesOriginalb78862282687d60cbc65d5a37715399f; ?>
<?php unset($__attributesOriginalb78862282687d60cbc65d5a37715399f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb78862282687d60cbc65d5a37715399f)): ?>
<?php $component = $__componentOriginalb78862282687d60cbc65d5a37715399f; ?>
<?php unset($__componentOriginalb78862282687d60cbc65d5a37715399f); ?>
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

    
    <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.dispatch-lot-picker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div><?php /**PATH /var/www/html/resources/views/livewire/dispatch-orders/daily/do-prepare.blade.php ENDPATH**/ ?>