<div class="p-4 flex flex-col gap-8">


    
    <!--[if BLOCK]><![endif]--><?php if($this->criticalStockProducts->count() > 0): ?>
        <?php if (isset($component)) { $__componentOriginal663ecdfbfff27da930088482b50dcda4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal663ecdfbfff27da930088482b50dcda4 = $attributes; } ?>
<?php $component = App\View\Components\ExpandableArea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('expandable-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ExpandableArea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '-mb-4']); ?>
             <?php $__env->slot('header', null, []); ?> 
                <span class="font-bold text-lg text-red-600">
                    <i class="triangle exclamation icon"></i>
                    <?php echo e(__('inventory.critical_stock_warning')); ?>

                </span>
                - <span class="text-sm text-ease"><?php echo e($this->criticalStockProducts->count()); ?>

                    <?php echo e(__('products.product')); ?></span>
             <?php $__env->endSlot(); ?>
            <div class="p-2 rounded shadow-inner flex flex-col gap-3 bg-cool-gray-50">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->criticalStockProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-2 rounded border bg-white shadow-sm">
                        <div>
                            <i class="box icon"></i>
                            <span class="font-bold"><?php echo e($product->prd_code); ?></span>
                            <span class="text-xs text-ease"><?php echo e($product->prd_name); ?></span>
                        </div>
                        <p class="text-sm">
                            <?php echo e(__('inventory.total')); ?>

                            <span class="text-red-700 font-bold"><?php echo e($product->totalStock['amount_string']); ?>,</span>
                            <?php echo e(__('products.at_least_needed_amount', ['amount' => "{$product->prd_min_threshold} {$product->totalStock['unit']->name}"])); ?>

                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal663ecdfbfff27da930088482b50dcda4)): ?>
<?php $attributes = $__attributesOriginal663ecdfbfff27da930088482b50dcda4; ?>
<?php unset($__attributesOriginal663ecdfbfff27da930088482b50dcda4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal663ecdfbfff27da930088482b50dcda4)): ?>
<?php $component = $__componentOriginal663ecdfbfff27da930088482b50dcda4; ?>
<?php unset($__componentOriginal663ecdfbfff27da930088482b50dcda4); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->



    
    <div class="grid md:grid-cols-3 gap-5">
        <?php if (isset($component)) { $__componentOriginale7d18354e86b44e80e460ee6f2107eb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7d18354e86b44e80e460ee6f2107eb5 = $attributes; } ?>
<?php $component = App\View\Components\OverviewCard::resolve(['model' => 'woFrq','number' => ''.e(number_format($this->woCountOverview(), 0)).'','text' => ''.e(__('common.production_was_done')).'...','icon' => 'industry','bgColor' => 'bg-orange-500 hover:bg-orange-700','textColor' => 'text-orange-500 hover:text-orange-700'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('overview-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\OverviewCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7d18354e86b44e80e460ee6f2107eb5)): ?>
<?php $attributes = $__attributesOriginale7d18354e86b44e80e460ee6f2107eb5; ?>
<?php unset($__attributesOriginale7d18354e86b44e80e460ee6f2107eb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7d18354e86b44e80e460ee6f2107eb5)): ?>
<?php $component = $__componentOriginale7d18354e86b44e80e460ee6f2107eb5; ?>
<?php unset($__componentOriginale7d18354e86b44e80e460ee6f2107eb5); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginale7d18354e86b44e80e460ee6f2107eb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7d18354e86b44e80e460ee6f2107eb5 = $attributes; } ?>
<?php $component = App\View\Components\OverviewCard::resolve(['model' => 'doFrq','number' => ''.e(number_format($this->doCountOverview(), 0)).'','text' => ''.e(__('common.shipment_has_been_made')).'...','icon' => 'fast shipping','bgColor' => 'bg-teal-500 hover:bg-teal-700','textColor' => 'text-teal-500 hover:text-teal-700'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('overview-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\OverviewCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7d18354e86b44e80e460ee6f2107eb5)): ?>
<?php $attributes = $__attributesOriginale7d18354e86b44e80e460ee6f2107eb5; ?>
<?php unset($__attributesOriginale7d18354e86b44e80e460ee6f2107eb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7d18354e86b44e80e460ee6f2107eb5)): ?>
<?php $component = $__componentOriginale7d18354e86b44e80e460ee6f2107eb5; ?>
<?php unset($__componentOriginale7d18354e86b44e80e460ee6f2107eb5); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginale7d18354e86b44e80e460ee6f2107eb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7d18354e86b44e80e460ee6f2107eb5 = $attributes; } ?>
<?php $component = App\View\Components\OverviewCard::resolve(['model' => 'smFrq','number' => ''.e(number_format($this->smCountOverview(), 0)).'','text' => ''.e(__('common.stock_entry_has_been_made')).'...','icon' => 'warehouse','bgColor' => 'bg-green-500 hover:bg-green-700','textColor' => 'text-green-500 hover:text-green-700'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('overview-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\OverviewCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7d18354e86b44e80e460ee6f2107eb5)): ?>
<?php $attributes = $__attributesOriginale7d18354e86b44e80e460ee6f2107eb5; ?>
<?php unset($__attributesOriginale7d18354e86b44e80e460ee6f2107eb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7d18354e86b44e80e460ee6f2107eb5)): ?>
<?php $component = $__componentOriginale7d18354e86b44e80e460ee6f2107eb5; ?>
<?php unset($__componentOriginale7d18354e86b44e80e460ee6f2107eb5); ?>
<?php endif; ?>
    </div>







    
    <div class="responsive-grid-2 rounded">
        <div class="bg-gray-100 rounded p-2">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('work-orders.live-reports', []);

$__html = app('livewire')->mount($__name, $__params, 'work-orders-live-reports', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <div class="bg-gray-100 rounded p-2">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('dispatch-orders.live-reports', []);

$__html = app('livewire')->mount($__name, $__params, 'dispatch-orders-live-reports', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
    


</div>
<?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/livewire/dashboard/dashboard.blade.php ENDPATH**/ ?>