<div class="p-4 flex flex-col gap-8">
    
    
    
    <?php if($this->criticalStockProducts->count() > 0): ?>
        <?php if (isset($component)) { $__componentOriginal63c5811fd9a9decfb50b1b6ec74da6ca5a56cd05 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ExpandableArea::class, []); ?>
<?php $component->withName('expandable-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '-mb-4']); ?>
             <?php $__env->slot('header', null, []); ?> 
                <span class="font-bold text-lg text-red-600">
                    <i class="triangle exclamation icon"></i>
                    <?php echo e(__('inventory.critical_stock_warning')); ?>

                </span>
                - <span class="text-sm text-ease"><?php echo e($this->criticalStockProducts->count()); ?> <?php echo e(__('products.product')); ?></span>
             <?php $__env->endSlot(); ?>
            <div class="p-2 rounded shadow-inner flex flex-col gap-3 bg-cool-gray-50">
                <?php $__currentLoopData = $this->criticalStockProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-2 rounded border bg-white shadow-sm">
                        <div>
                            <i class="box icon"></i>
                            <span class="font-bold"><?php echo e($product->prd_code); ?></span>
                            <span class="text-xs text-ease"><?php echo e($product->prd_name); ?></span>
                        </div>
                        <p class="text-sm">
                            <?php echo e(__('inventory.total')); ?> 
                            <span class="text-red-700 font-bold"><?php echo e($product->totalStock['amount_string']); ?>,</span>
                            en az 
                            <u class="text-red-700 font-bold"><?php echo e($product->prd_min_threshold); ?> <?php echo e(strtolower($product->totalStock['unit']->name)); ?></u> 
                            olması gerekiyor
                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal63c5811fd9a9decfb50b1b6ec74da6ca5a56cd05)): ?>
<?php $component = $__componentOriginal63c5811fd9a9decfb50b1b6ec74da6ca5a56cd05; ?>
<?php unset($__componentOriginal63c5811fd9a9decfb50b1b6ec74da6ca5a56cd05); ?>
<?php endif; ?>
    <?php endif; ?>


    
    
    <div class="grid md:grid-cols-3 gap-5">
        <?php if (isset($component)) { $__componentOriginal904584539a7adccc5306ea75e82175905a087cdd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\OverviewCard::class, ['model' => 'woFrq','number' => ''.e(number_format($this->woCountOverview(), 0)).'','text' => ''.e(__('common.production_was_done')).'...','icon' => 'industry','bgColor' => 'bg-orange-500 hover:bg-orange-700','textColor' => 'text-orange-500 hover:text-orange-700']); ?>
<?php $component->withName('overview-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal904584539a7adccc5306ea75e82175905a087cdd)): ?>
<?php $component = $__componentOriginal904584539a7adccc5306ea75e82175905a087cdd; ?>
<?php unset($__componentOriginal904584539a7adccc5306ea75e82175905a087cdd); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal904584539a7adccc5306ea75e82175905a087cdd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\OverviewCard::class, ['model' => 'doFrq','number' => ''.e(number_format($this->doCountOverview(), 0)).'','text' => ''.e(__('common.shipment_has_been_made')).'...','icon' => 'fast shipping','bgColor' => 'bg-teal-500 hover:bg-teal-700','textColor' => 'text-teal-500 hover:text-teal-700']); ?>
<?php $component->withName('overview-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal904584539a7adccc5306ea75e82175905a087cdd)): ?>
<?php $component = $__componentOriginal904584539a7adccc5306ea75e82175905a087cdd; ?>
<?php unset($__componentOriginal904584539a7adccc5306ea75e82175905a087cdd); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal904584539a7adccc5306ea75e82175905a087cdd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\OverviewCard::class, ['model' => 'smFrq','number' => ''.e(number_format($this->smCountOverview(), 0)).'','text' => ''.e(__('common.stock_entry_has_been_made')).'...','icon' => 'warehouse','bgColor' => 'bg-green-500 hover:bg-green-700','textColor' => 'text-green-500 hover:text-green-700']); ?>
<?php $component->withName('overview-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal904584539a7adccc5306ea75e82175905a087cdd)): ?>
<?php $component = $__componentOriginal904584539a7adccc5306ea75e82175905a087cdd; ?>
<?php unset($__componentOriginal904584539a7adccc5306ea75e82175905a087cdd); ?>
<?php endif; ?>
    </div>







    
        <div class="responsive-grid-2 rounded">
            <div class="bg-gray-100 rounded p-2">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('work-orders.live-reports', [])->html();
} elseif ($_instance->childHasBeenRendered('work-orders-live-reports')) {
    $componentId = $_instance->getRenderedChildComponentId('work-orders-live-reports');
    $componentTag = $_instance->getRenderedChildComponentTagName('work-orders-live-reports');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('work-orders-live-reports');
} else {
    $response = \Livewire\Livewire::mount('work-orders.live-reports', []);
    $html = $response->html();
    $_instance->logRenderedChild('work-orders-live-reports', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
            <div class="bg-gray-100 rounded p-2">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dispatch-orders.live-reports', [])->html();
} elseif ($_instance->childHasBeenRendered('dispatch-orders-live-reports')) {
    $componentId = $_instance->getRenderedChildComponentId('dispatch-orders-live-reports');
    $componentTag = $_instance->getRenderedChildComponentTagName('dispatch-orders-live-reports');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dispatch-orders-live-reports');
} else {
    $response = \Livewire\Livewire::mount('dispatch-orders.live-reports', []);
    $html = $response->html();
    $_instance->logRenderedChild('dispatch-orders-live-reports', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    
    

</div>
<?php /**PATH /var/www/html/resources/views/livewire/dashboard/dashboard.blade.php ENDPATH**/ ?>