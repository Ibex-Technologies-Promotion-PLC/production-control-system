<div>
    

    <?php if (isset($component)) { $__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorArea::class, []); ?>
<?php $component->withName('error-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406)): ?>
<?php $component = $__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406; ?>
<?php unset($__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, ['theme' => 'orange']); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

         <?php $__env->slot('header', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'mortar pestle','header' => ''.e($this->headerText()['main']).'','subheader' => ''.e($this->headerText()['sub']).'']); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('buttons', null, []); ?> 
                    <div class="ui mini icon buttons">
                        <?php if($this->isLocked()): ?>
                            <button wire:click.prevent="unlock()" class="ui mini gray basic button"
                                data-tooltip="<?php echo e(__('common.unlock')); ?>" data-variation="mini"
                                data-position="bottom right">
                                <i class="orange lock icon"></i>
                            </button>
                        <?php else: ?>
                            <?php if($this->isRestorable()): ?>
                                <button wire:click.prevent="restoreForm()" class="ui mini basic  button"
                                    data-tooltip="<?php echo e(__('common.undo_changes')); ?>" data-variation="mini"
                                    data-position="bottom right">
                                    <i class="green undo alternate icon"></i>
                                </button>
                            <?php endif; ?>
                            <?php if($recipeExists): ?>
                                <button wire:click.prevent="openDeleteConfirmModal()" class="ui mini basic button"
                                    data-tooltip="<?php echo e(__('recipes.delete_recipe')); ?>" data-variation="mini"
                                    data-position="bottom right">
                                    <i class="red trash icon"></i>
                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707)): ?>
<?php $component = $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707; ?>
<?php unset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>

        
        <div class="p-6 shadow-md">
            <form class="ui mini form">
                <div class="equal width fields">
                    

                    <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['model' => 'product_id','label' => 'recipes.recipe_product','sId' => 'selectProduct','sClass' => 'search','collection' => $this->producibles,'value' => 'id','text' => 'prd_code,prd_name']); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                    <div class="<?php if($this->isLocked()): ?> disabled <?php endif; ?> field">
                        <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['action' => true,'model' => 'rcp_code','label' => 'validation.attributes.rcp_code','placeholder' => 'validation.attributes.rcp_code']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required mini']); ?>
                             <?php $__env->slot('action', null, []); ?> 
                                <button wire:click.prevent="suggestCode"
                                    class="ui teal mini right labeled icon button <?php if(!$selectedProduct): ?> disabled <?php endif; ?>">
                                    <i class="icon random"></i>
                                    <?php echo e(__('recipes.suggest_code')); ?>

                                </button>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                    </div>
                </div>
                <?php if($this->producibles->count() <= 0): ?>
                    <div class="pt-2 font-semibold text-sm">!!! There are no products in the list, please <a
                            class="text-red-600" href="<?php echo e(route('products.create')); ?>">Start Here</a>...</div>
                <?php endif; ?>
            </form>
        </div>
        





        
        <?php if($selectedProduct): ?>
            <div x-data="{ materials: false }" class="p-6 pb-8 shadow-md">
                <?php echo $__env->make('web.sections.recipes.create.sub-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="p-4 rounded-md border border-blue-200">
                    <?php if(!$this->isCardsExists()): ?>
                        <?php echo $__env->make('web.sections.recipes.create.recipe-placeholder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                        
                        <div class="flex flex-col gap-6 fields">
                            <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div wire:key="wire_card<?php echo e($key); ?>"
                                    class="relative flex border shadow rounded-lg bg-white border-blue-100 hover:border-blue-300">

                                    

                                    


                                    <div
                                        class="flex flex-col justify-center items-center w-3/12 md:w-16 rounded-l-lg shadow-md">
                                        <?php if($this->isLocked()): ?>
                                            <span wire:key="locked.<?php echo e($key); ?>"
                                                data-tooltip="<?php echo e($this->literalTooltip($key)); ?>" data-variation="mini"
                                                data-position="top left">
                                                <i class="<?php echo e($this->literalClass($key)); ?>"></i>
                                            </span>
                                        <?php else: ?>
                                            <span wire:key="unlocked.<?php echo e($key); ?>"
                                                wire:click="toggleLiteral(<?php echo e($key); ?>)"
                                                data-tooltip="<?php echo e($this->literalTooltip($key)); ?>" data-variation="mini"
                                                data-position="top left" class="cursor-pointer">
                                                <i class="<?php echo e($this->literalClass($key)); ?>"></i>
                                            </span>
                                        <?php endif; ?>
                                    </div>



                                    <div
                                        class="p-3 flex-1 flex flex-col md:flex-row md:items-center gap-3 justify-between">

                                        <div class="flex flex-col">
                                            <div class="flex gap-2 items-center">
                                                <div class="font-bold"><?php echo e($card['ingredient']['prd_name']); ?></div>
                                                <div class="text-sm text-ease">(<?php echo e($card['ingredient']['prd_code']); ?>)
                                                </div>
                                            </div>
                                            <div
                                                class="text-sm font-semibold text-green-500 hover:text-green-700 ease-in-out duration-200 cursor-default">
                                                <span><?php echo e($this->calculatedUnit($card)); ?></span>
                                                <i wire:loading.class="animate-spin orange circle notch icon"
                                                    wire:target="cards.<?php echo e($key); ?>.unit_id, cards.<?php echo e($key); ?>.amount"></i>
                                            </div>
                                        </div>


                                        <?php if($this->isLocked()): ?>
                                            <div
                                                class="text-xl border p-2 border-dashed text-green-500 hover:text-green-600 cursor-default ease-in-out duration-200 font-bold">
                                                <span class=""><?php echo e($card['amount']); ?></span>
                                                <span
                                                    class="text-sm"><?php echo e($this->getIngredientUnit($card)['name']); ?></span>
                                            </div>
                                        <?php else: ?>
                                            <div class="flex gap-2 items-center">
                                                <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['iModel' => 'cards.'.e($key).'.amount','iPlaceholder' => ''.e(__('validation.attributes.amount')).'','iType' => 'number','model' => 'cards.'.e($key).'.unit_id','dataSource' => 'cards.'.e($key).'.units','sId' => 'unit' . $key,'sClass' => 'basic','value' => 'id','text' => 'name','placeholder' => ''.e(__('units.unit')).'']); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                                            </div>
                                        <?php endif; ?>


                                    </div>


                                    <?php if(!$this->isLocked()): ?>
                                        <button wire:click.prevent="removeCard(<?php echo e($key); ?>)"
                                            class="absolute top-0 right-0 -mt-2 -mr-3 bg-white focus:outline-none opacity-75 hover:opacity-100">
                                            <i class="red shadow rounded-full cancel icon"></i>
                                        </button>
                                    <?php endif; ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                    <?php endif; ?>
                </div>

                
                <?php echo $__env->make('web.sections.recipes.create.materials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        <?php endif; ?>
        





        <?php if($selectedProduct && !$this->isLocked()): ?>
            <?php if (isset($component)) { $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormButtons::class, ['submit' => 'submit()']); ?>
<?php $component->withName('form-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'p-4 pt-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8340eb01f00535543c6958ab683a31712450bfd)): ?>
<?php $component = $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd; ?>
<?php unset($__componentOriginale8340eb01f00535543c6958ab683a31712450bfd); ?>
<?php endif; ?>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3)): ?>
<?php $component = $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3; ?>
<?php unset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3); ?>
<?php endif; ?>

    <?php echo $__env->make('web.sections.recipes.create.recipe-modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/recipes/form.blade.php ENDPATH**/ ?>