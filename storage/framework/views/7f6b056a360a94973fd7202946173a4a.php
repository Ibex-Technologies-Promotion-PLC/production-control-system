<div class="bg-white rounded-lg shadow">

    <div class="flex gap-2 font-bold p-2 border-b shadow bg-gray-800 rounded-t">
        <button wire:click.prevent="tabDefinition" class="p-2 focus:outline-none rounded font-bold hover:bg-gray-500 text-white <?php if($currentTab == 'definition'): ?> bg-orange-500 <?php endif; ?>">Ürün tanımı</button>
        <button wire:click.prevent="tabStocks" class="p-2 focus:outline-none rounded font-bold hover:bg-gray-500 text-white <?php if($currentTab == 'stocks'): ?> bg-orange-500 <?php endif; ?>">Stok durumu</button>
        <!--[if BLOCK]><![endif]--><?php if($product->isProducible()): ?>
            <button wire:click.prevent="tabProduction" class="p-2 focus:outline-none rounded font-bold hover:bg-gray-500 text-white <?php if($currentTab == 'production'): ?> bg-orange-500 <?php endif; ?>">Üretim</button>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <button wire:click.prevent="tabDispatch" class="p-2 focus:outline-none rounded font-bold hover:bg-gray-500 text-white <?php if($currentTab == 'dispatch'): ?> bg-orange-500 <?php endif; ?>">Sevkiyat</button>
    </div>

    <div class="p-4">
        <div class="ui segment" wire:loading.class="loading">

            <!--[if BLOCK]><![endif]--><?php if($currentTab == 'definition'): ?>
                <div class="border border-green-200 rounded-md ease">
        
                    <div class="flex shadow">
                        <div class="w-0 hidden md:w-28 md:flex shadow-md items-center justify-center">
                            <i class="big box icon"></i>
                        </div>
                        <div class="p-4 flex flex-1 justify-between">
                            
                            <div class="flex flex-col justify-between">
                                <div>
                                    <div class="text-xl font-bold text-green-700"><?php echo e($product->prd_name); ?></div>
                                    <div class="font-semibold text-gray-700"><?php echo e($product->prd_code); ?></div>
                                </div>
                                <div class="pt-3 font-semibold text-sm text-gray-500">
                                    <i class="barcode icon"></i>
                                    <span><?php echo e($product->prd_barcode ?? __('products.no_barcode_defined')); ?></span>
                                </div>
                            </div>
            
                            <div class="flex flex-col justify-between text-right">
                                
                                <div>
                                    <span class="text-sm font-sans text-gray-500" data-tooltip="<?php echo e(__('modelnames.category')); ?>" data-variation="mini"><?php echo e(optional($product->category)->ctg_name ?? __('products.category_not_defined')); ?></span>
                                    <i class="layer group  small icon grey"></i>
                                </div>
            
                                
            
                                <!--[if BLOCK]><![endif]--><?php if($product->prd_producible): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($product->recipe): ?>
                                    <div data-tooltip="<?php echo e(__('recipes.see_recipe')); ?>" data-variation="mini">
                                        <a href="<?php echo e(route('recipes.show', ['recipe' => $product->recipe->id])); ?>" class="pt-2 font-semibold text-sm text-green-600" ><?php echo e($product->recipe->rcp_code); ?></a>
                                        <i class="mortar pestle icon"></i>
                                    </div>
                                    <?php else: ?>
                                    <div data-tooltip="<?php echo e(__('products.products_with_no_recipes_cannot_be_manufactured')); ?>" data-variation="mini" data-position="top right">
                                        <span class="font-semibold text-sm text-orange-400"><?php echo e(__('recipes.no_recipe_defined_for_this_product')); ?></span>
                                        <i class="circular tiny question mark icon link"></i>
                                    </div>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php else: ?>
                                    <div>
                                        <span class="pt-2 font-semibold text-sm text-red-500"><?php echo e(__('products.this_product_cannot_be_manufactured')); ?></span>
                                    </div>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            
                            </div>
                        </div>
                    </div>
            
            
                    <div class="px-6">
                        <div class="py-14 grid md:grid-cols-2 items-center gap-8">
                            
                            <div class="flex gap-8">
                                <div>
                                    <label class="text-gray-600 font-bold"><?php echo e(__('products.shelf_life')); ?></label>
                                    <div class="flex gap-1 items-center">
                                        <i class="calendar alternate teal icon"></i>
                                        <p><?php echo e(__('products.count_years', ['count' => $product->prd_shelf_life ])); ?></p>
                                    </div>
                                    
                                </div>
                                <div>
                                    <label class="text-gray-600 font-bold"><?php echo e(__('validation.attributes.prd_min_threshold')); ?></label>
                                    <!--[if BLOCK]><![endif]--><?php if($product->prd_min_threshold): ?>
                                        <div class="flex gap-1 items-center font-bold text-red-800">
                                            <i class="calculator icon"></i>
                                            <p><?php echo e($product->prd_min_threshold); ?> <!--[if BLOCK]><![endif]--><?php if($product->baseUnit): ?> <?php echo e($product->baseUnit->name); ?> <?php else: ?> <strong class="text-red-600">Birim tanımlanmamış</strong> <?php endif; ?><!--[if ENDBLOCK]><![endif]--> </p>
                                        </div>
                                    <?php else: ?>
                                        <div class="text-red-800"><?php echo e(__('common.not_defined')); ?></div>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div>
                                    <label class="text-gray-600 font-bold"><?php echo e(__('inventory.in_stock')); ?></label>
                                    <div class="flex gap-1 items-center">
                                        <i class="warehouse icon"></i>
                                        <p><?php echo e($product->totalStock['amount_string']); ?></p>
                                    </div>
                                </div>
                            </div>
            
                            <div class="md:justify-end flex gap-8">
                                <div class="flex flex-col items-center">
                                    <label class="text-gray-600 font-bold"><?php echo e(__('products.is_active')); ?></label>
                                    <!--[if BLOCK]><![endif]--><?php if($product->prd_is_active): ?>
                                        <i class="green checkmark icon"></i>
                                    <?php else: ?>
                                        <i class="red times icon"></i>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div class="flex flex-col items-center">
                                    <label class="text-gray-600 font-bold"><?php echo e(__('products.producible')); ?></label>
                                    <!--[if BLOCK]><![endif]--><?php if($product->prd_producible): ?>
                                        <i class="green checkmark icon"></i>
                                    <?php else: ?>
                                        <i class="red times icon"></i>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </div>
                        </div>
                
                        <?php if (isset($component)) { $__componentOriginal2f80e7ef429a5dd45d6ac2dcece59d1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f80e7ef429a5dd45d6ac2dcece59d1c = $attributes; } ?>
<?php $component = App\View\Components\ProductUnits::resolve(['product' => $product] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-units'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ProductUnits::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f80e7ef429a5dd45d6ac2dcece59d1c)): ?>
<?php $attributes = $__attributesOriginal2f80e7ef429a5dd45d6ac2dcece59d1c; ?>
<?php unset($__attributesOriginal2f80e7ef429a5dd45d6ac2dcece59d1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f80e7ef429a5dd45d6ac2dcece59d1c)): ?>
<?php $component = $__componentOriginal2f80e7ef429a5dd45d6ac2dcece59d1c; ?>
<?php unset($__componentOriginal2f80e7ef429a5dd45d6ac2dcece59d1c); ?>
<?php endif; ?>
                    </div>
                </div>
            <?php elseif($currentTab == 'stocks'): ?>
                <?php if (isset($component)) { $__componentOriginal0e3693b876eb65771779c07ae226153f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e3693b876eb65771779c07ae226153f = $attributes; } ?>
<?php $component = App\View\Components\ProductLots::resolve(['product' => $product] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-lots'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ProductLots::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0e3693b876eb65771779c07ae226153f)): ?>
<?php $attributes = $__attributesOriginal0e3693b876eb65771779c07ae226153f; ?>
<?php unset($__attributesOriginal0e3693b876eb65771779c07ae226153f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e3693b876eb65771779c07ae226153f)): ?>
<?php $component = $__componentOriginal0e3693b876eb65771779c07ae226153f; ?>
<?php unset($__componentOriginal0e3693b876eb65771779c07ae226153f); ?>
<?php endif; ?>
            <?php elseif($currentTab == 'production' && $product->isProducible()): ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('work-orders.datatable', ['product' => $product]);

$__html = app('livewire')->mount($__name, $__params, 'production-details', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php elseif($currentTab == 'dispatch'): ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('dispatch-orders.datatable', ['product' => $product]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4088143943-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        </div>
    </div>

</div>
<?php /**PATH /var/www/html/resources/views/livewire/products/details-component.blade.php ENDPATH**/ ?>