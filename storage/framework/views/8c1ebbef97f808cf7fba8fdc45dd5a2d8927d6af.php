<?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'materials','padding' => true]); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'sitemap','header' => 'recipes.add_ingredients','subheader' => 'recipes.add_recipe_ingredients']); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707)): ?>
<?php $component = $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707; ?>
<?php unset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>
    <div class="p-4">
        <div class="border border-dashed flex flex-col justify-center">
            <?php $__currentLoopData = $this->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hover:bg-gray-100  rounded-t border-b last:border-0" x-data="{ caret: false }">

                    <div @click="caret = !caret" class="p-3 flex justify-between items-center cursor-pointer">
                        <div>
                            <i class="layer group icon"></i>
                            <span class="font-bold"><?php echo e($category->ctg_name); ?></span>
                            <span class="text-xs text-ease"><?php echo e(__('categories.category')); ?></span>
                            <div class="text-xs text-ease">
                                <?php echo e($category->products->count()); ?> <?php echo e(ucfirst(__('products.product'))); ?>

                            </div>
                        </div>
                        <div class="text-right">
                            <i :class="{ 'caret down text-teal-800 icon': caret, 'caret right icon': !caret }"></i>
                        </div>
                    </div>

                    <div x-show.transition="caret" class="border-t">
                        <div class="border-l ml-5 hover:border-teal-400">
                            <div class="p-2">
                                <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div wire:click.prevent="addCard(<?php echo e($product); ?>)"
                                        class="flex gap-2 items-center hover:bg-teal-100 rounded px-2 py-1 cursor-pointer">
                                        <div>
                                            <i class="box icon"></i>
                                        </div>
                                        <div class="flex flex-1 justify-between items-center">
                                            <div>
                                                <div class="font-bold text-sm"><?php echo e($product->prd_name); ?></div>
                                                <div class="font-semibold text-xs text-ease "><?php echo e($product->prd_code); ?>

                                                </div>
                                            </div>

                                            <?php if($this->isInCard($product->id)): ?>
                                                <div class="text-green-600 font-bold">
                                                    <span><?php echo e(__('common.added')); ?></span>
                                                    <i class="checkmark icon"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/web/sections/recipes/create/materials.blade.php ENDPATH**/ ?>