<div>
    <?php if (isset($component)) { $__componentOriginal53f6c610a00cc9dfd2c2e2228060e10f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53f6c610a00cc9dfd2c2e2228060e10f = $attributes; } ?>
<?php $component = App\View\Components\FormDivider::resolve(['noButtons' => true,'bottomClass' => ''.e($classes['bottomClass']).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FormDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('left', null, []); ?> 
            <div class="p-4 shadow-lg border rounded <?php echo e($classes['borderColor']); ?>">
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
                    <span><?php echo e(__('validation.attributes.prd_name')); ?></span>
                    <span><?php echo e($workOrder->product->prd_name); ?></span>
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
                    <span><?php echo e(__('validation.attributes.wo_lot_no')); ?></span>
                    <span><?php echo e(ucfirst($workOrder->wo_lot_no)); ?></span>
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
                    <span><?php echo e(__('validation.attributes.wo_amount')); ?></span>
                    <span><?php echo e($workOrder->wo_amount); ?> <?php echo e($workOrder->unit->name); ?></span>
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
                    <span><?php echo e(__('validation.attributes.wo_datetime')); ?></span>
                    <span><?php echo e($workOrder->wo_datetime); ?></span>
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
                    <span><?php echo e(__('validation.attributes.wo_code')); ?></span>
                    <span><?php echo e($workOrder->wo_code); ?></span>
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
                    <span><?php echo e(__('validation.attributes.wo_queue')); ?></span>
                    <span><?php echo e($workOrder->wo_queue); ?></span>
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
                <!--[if BLOCK]><![endif]--><?php if($workOrder->isInProgress()): ?>
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
                        <span><?php echo e(__('validation.attributes.wo_started_at')); ?></span>
                        <span><?php echo e($workOrder->wo_started_at); ?></span>
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
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('right', null, []); ?> 
            <!--[if BLOCK]><![endif]--><?php if($workOrder->isCompleted() || $workOrder->isApproved()): ?>
                <div class="border rounded text-center">

                    <div class="shadow p-2">
                        <span class="text-green-700"><?php echo e($workOrder->productionResults['total']); ?></span> -
                        <span class="text-red-700"><?php echo e($workOrder->productionResults['waste']); ?></span> =
                        <span class="text-green-700 font-bold"><?php echo e($workOrder->productionResults['net']); ?></span>
                        <span> 
                            <?php echo e(strtolower($workOrder->product->baseUnit->name)); ?> 
                            <span class="font-bold"><?php echo e($workOrder->product->prd_name); ?></span> added to stock.
                        </span>
                    </div>

                    <div class="p-2 pt-4">
                        <div class="font-bold"><?php echo e(__('common.materials_used_in_production')); ?>:</div>
                        <div class="pt-2">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $workOrder->ingredientMoves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stockMove): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <div>
                                        <span><?php echo e($stockMove->product->prd_code); ?></span>
                                        <span class="text-xs">(<?php echo e($stockMove->lot_number); ?>)</span>
                                    </div>
                                    <span><?php echo e($stockMove->base_amount); ?> <?php echo e($stockMove->product->baseUnit->name); ?></span>
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>

                </div>
            <?php else: ?>
                <div class="flex flex-col gap-3">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $workOrder->product->recipe->calculateNecessaryIngredients($workOrder->wo_amount, $workOrder->unit_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div x-data="{lotNumbers: false}" @click="lotNumbers = ! lotNumbers" class="border p-4 <?php echo e($classes['borderColor']); ?> rounded hover:bg-cool-gray-50 border-dashed cursor-pointer">
                            <div class="flex justify-between">
                                <span class="font-bold"><?php echo e($item['ingredient']->prd_name); ?></span>
                                <div>
                                    <span><?php echo e(number_format($item['amount'],2)); ?> <?php echo e($item['unit']->name); ?></span>
                                    <span x-show="!lotNumbers" class="pl-6"><i class="caret right icon"></i></span>
                                    <span x-show="lotNumbers" class="pl-6"><i class="caret down icon"></i></span>
                                </div>
                            </div>
                            <div x-show="lotNumbers" class="pt-2">
                                <?php if (isset($component)) { $__componentOriginalb78862282687d60cbc65d5a37715399f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb78862282687d60cbc65d5a37715399f = $attributes; } ?>
<?php $component = App\View\Components\ReservedStocksTable::resolve(['reservations' => $workOrder->reservationsFor($item['ingredient']['id'])->get(),'noHead' => true,'noProduct' => true,'emptyMessage' => 'dispatchorders.not_ready_yet'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('reserved-stocks-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ReservedStocksTable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('bottom', null, []); ?> 
            <div class="text-white">
                <div class="flex justify-between items-center">
                    <div>
                        <i class="<?php echo e($classes['icon']); ?>"></i>
                        <span class="font-bold">
                            <?php echo e(__("workorders.{$workOrder->wo_status}")); ?>

                        </span>
                        <span class="text-xs">- <?php echo e($classes['explanation']); ?></span>
                    </div>
                    <!--[if BLOCK]><![endif]--><?php if($viewOnly === false && $workOrder->isCompleted()): ?>
                        <div>
                            <button wire:click.prevent="woDeny(<?php echo e($workOrder->id); ?>)" class="ui mini white button" data-tooltip="<?php echo e(__('workorders.wo_will_fallback_to_inprogress_state')); ?>" data-variation="mini" data-position="top right" >
                                <i class="red ban icon"></i>
                                <?php echo e(__('common.deny')); ?>

                            </button>
                            <button wire:click.prevent="woApprove(<?php echo e($workOrder->id); ?>)" class="ui mini white button" data-tooltip="<?php echo e(__('workorders.production_results_will_be_added_to_stock')); ?>" data-variation="mini" data-position="top right">
                                <i class="green checkmark icon"></i>
                                <?php echo e(__('common.confirm')); ?>

                            </button>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <!--[if BLOCK]><![endif]--><?php if($workOrder->wo_note): ?>
                    <div class="mt-4 p-2 border rounded shadow">
                        <i class="comment alternate outline flipped icon"></i>
                        <i class=""><?php echo e($workOrder->wo_note); ?></i>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
         <?php $__env->endSlot(); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53f6c610a00cc9dfd2c2e2228060e10f)): ?>
<?php $attributes = $__attributesOriginal53f6c610a00cc9dfd2c2e2228060e10f; ?>
<?php unset($__attributesOriginal53f6c610a00cc9dfd2c2e2228060e10f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53f6c610a00cc9dfd2c2e2228060e10f)): ?>
<?php $component = $__componentOriginal53f6c610a00cc9dfd2c2e2228060e10f; ?>
<?php unset($__componentOriginal53f6c610a00cc9dfd2c2e2228060e10f); ?>
<?php endif; ?>
</div>

<?php /**PATH /var/www/html/resources/views/components/workorder-details.blade.php ENDPATH**/ ?>