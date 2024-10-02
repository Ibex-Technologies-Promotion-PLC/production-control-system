<div>
    <?php if (isset($component)) { $__componentOriginal4a63ad0d167ab3819822720b5e2e9bc4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a63ad0d167ab3819822720b5e2e9bc4 = $attributes; } ?>
<?php $component = App\View\Components\TableToolbar::resolve(['perPage' => $perPage] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-toolbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TableToolbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('filters', null, []); ?> 
            <div class="responsive-grid-3-4">
                <div>
                    <label for="wofilterselect-product">Product: </label>
                    <select wire:model="filterProduct" id="wofilterselect-product" class="basic-select text-xs">
                        <option value="" selected><?php echo e(__('common.all')); ?></option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($product->id); ?>">
                                <?php echo e($product->prd_name); ?> (<?php echo e($product->prd_code); ?> )
                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
            </div>
            <div class="responsive-grid-3-4">
                <div>
                    <label for="wofilterselect-status"><?php echo e(__('common.type')); ?>: </label>
                    <select wire:model="filterType" id="wofilterselect-status" class="basic-select text-xs">
                        <option value="" selected><?php echo e(__('common.all')); ?></option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type); ?>">
                                <?php echo e(ucwords(str_replace('_', ' ', $type))); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
            </div>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a63ad0d167ab3819822720b5e2e9bc4)): ?>
<?php $attributes = $__attributesOriginal4a63ad0d167ab3819822720b5e2e9bc4; ?>
<?php unset($__attributesOriginal4a63ad0d167ab3819822720b5e2e9bc4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a63ad0d167ab3819822720b5e2e9bc4)): ?>
<?php $component = $__componentOriginal4a63ad0d167ab3819822720b5e2e9bc4; ?>
<?php unset($__componentOriginal4a63ad0d167ab3819822720b5e2e9bc4); ?>
<?php endif; ?>
    <div>
        <table class="ui celled sortable table tablet stackable very compact">
            <thead>
                <tr>
                    <?php if (isset($component)) { $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $attributes; } ?>
<?php $component = App\View\Components\TheadItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('common.no')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $attributes = $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $component = $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $attributes; } ?>
<?php $component = App\View\Components\TheadItem::resolve(['sortBy' => 'type'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('stockmoves.type')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $attributes = $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $component = $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $attributes; } ?>
<?php $component = App\View\Components\TheadItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('products.name')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $attributes = $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $component = $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $attributes; } ?>
<?php $component = App\View\Components\TheadItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('stockmoves.amount')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $attributes = $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $component = $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $attributes; } ?>
<?php $component = App\View\Components\TheadItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('common.total')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $attributes = $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $component = $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $attributes; } ?>
<?php $component = App\View\Components\TheadItem::resolve(['sortBy' => 'lot_number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('stockmoves.lot_number')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $attributes = $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $component = $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $attributes; } ?>
<?php $component = App\View\Components\TheadItem::resolve(['sortBy' => 'datetime'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('common.datetime')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $attributes = $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $component = $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $attributes; } ?>
<?php $component = App\View\Components\TheadItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $attributes = $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0)): ?>
<?php $component = $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0; ?>
<?php unset($__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0); ?>
<?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $stockMove): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="<?php if($stockMove->direction): ?> positive <?php else: ?> negative <?php endif; ?>">
                        <td class="collapsing center aligned"><?php echo e($key + 1); ?></td>
                        <td class="one wide center aligned">
                            
                            <!--[if BLOCK]><![endif]--><?php if($stockMove->isProduction()): ?>
                                <a href="<?php echo e(route('work-orders.show', ['work_order' => $stockMove->stockable->id])); ?>"
                                    style="color: inherit;">
                                    <div
                                        class="p-1 bg-white rounded-md shadow hover:shadow-md font-bold leading-5 transition ease-in-out duration-200 hover:bg-gray-50">
                                        <?php echo e(__('stockmoves.production')); ?>

                                    </div>
                                </a>
                            <?php else: ?>
                                <span><?php echo e(__('stockmoves.manual')); ?></span>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </td>
                        <td class="font-bold">
                            <span><?php echo e($stockMove->product->prd_name); ?></span>
                            <span class="text-sm text-ease">(<?php echo e($stockMove->product->prd_code); ?>)</span>
                        </td>
                        <td class="cursor-default">
                            <!--[if BLOCK]><![endif]--><?php if($stockMove->direction): ?>
                                <span data-tooltip="<?php echo e(__('stockmoves.stock_entry')); ?>" data-variation="mini"><i
                                        class="green plus icon"></i></span>
                            <?php else: ?>
                                <span data-tooltip="<?php echo e(__('stockmoves.stock_decrease')); ?>" data-variation="mini"><i
                                        class="red minus icon"></i></span>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <span class="font-bold"><?php echo e($stockMove->base_amount); ?></span>
                            <span class="text-sm"><?php echo e($stockMove->unitName); ?></span>
                            
                        </td>
                        <td><?php echo e($stockMove->total); ?> Br</td>
                        <td><?php echo e($stockMove->lot_number); ?></td>
                        <td class="text-sm"><?php echo e($stockMove->datetime); ?></td>

                        <td class="collapsing">
                            <?php if (isset($component)) { $__componentOriginaleec1da765ed3218d03288cbfb54cb4e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5 = $attributes; } ?>
<?php $component = App\View\Components\Span::resolve(['tooltip' => ''.e(__('common.see_details')).'','position' => 'left center'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Span::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <!--[if BLOCK]><![endif]--><?php if($stockMove->isProduction()): ?>
                                    <a href="<?php echo e(route('work-orders.show', ['work_order' => $stockMove->stockable])); ?>">
                                        <i class="purple project diagram link icon"></i>
                                    </a>
                                <?php elseif($stockMove->isDispatch()): ?>
                                    <a
                                        href="<?php echo e(route('dispatchorders.prepare', ['dispatchOrder' => $stockMove->stockable])); ?>">
                                        <i class="teal truck link icon"></i>
                                    </a>
                                <?php elseif($stockMove->isTypeManual()): ?>
                                    <i class="eye link icon"></i>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5)): ?>
<?php $attributes = $__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5; ?>
<?php unset($__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleec1da765ed3218d03288cbfb54cb4e5)): ?>
<?php $component = $__componentOriginaleec1da765ed3218d03288cbfb54cb4e5; ?>
<?php unset($__componentOriginaleec1da765ed3218d03288cbfb54cb4e5); ?>
<?php endif; ?>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="10">
                            <?php if (isset($component)) { $__componentOriginal031f7343d586feb3a69898f559e89477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal031f7343d586feb3a69898f559e89477 = $attributes; } ?>
<?php $component = App\View\Components\Placeholder::resolve(['icon' => 'truck packing'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Placeholder::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php echo e(__('common.no_results')); ?>

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
            <tfoot>
                <tr>
                    <td colspan="4" class="text-right font-bold"><?php echo e(__('common.balance')); ?></td>
                    <td class="font-bold"><?php echo e($this->calculateBalance($data)); ?> Br</td>
                    <td colspan="3"></td>
                </tr>
            </tfoot>
        </table>

    </div>

    <?php echo e($data->links('components.tailwind-pagination')); ?>


</div>
<?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/livewire/stock-moves/datatable.blade.php ENDPATH**/ ?>