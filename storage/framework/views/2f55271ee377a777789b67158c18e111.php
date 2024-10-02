<div>

    <?php if (isset($component)) { $__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55 = $attributes; } ?>
<?php $component = App\View\Components\ErrorArea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('error-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ErrorArea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55)): ?>
<?php $attributes = $__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55; ?>
<?php unset($__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55)): ?>
<?php $component = $__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55; ?>
<?php unset($__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginald033566f468fc7bb3a8d0f946fdab616 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald033566f468fc7bb3a8d0f946fdab616 = $attributes; } ?>
<?php $component = App\View\Components\Content::resolve(['theme' => 'orange'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\PageHeader::resolve(['icon' => 'mortar pestle','header' => ''.e($this->headerText()['main']).'','subheader' => ''.e($this->headerText()['sub']).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('buttons', null, []); ?> 
                    <div class="ui mini icon buttons">
                        <!--[if BLOCK]><![endif]--><?php if($this->isLocked()): ?>
                            <button wire:click.prevent="unlock()" class="ui mini gray basic button"
                                data-tooltip="<?php echo e(__('common.unlock')); ?>" data-variation="mini"
                                data-position="bottom right">
                                <i class="orange lock icon"></i>
                            </button>
                        <?php else: ?>
                            <!--[if BLOCK]><![endif]--><?php if($this->isRestorable()): ?>
                                <button wire:click.prevent="restoreForm()" class="ui mini basic  button"
                                    data-tooltip="<?php echo e(__('common.undo_changes')); ?>" data-variation="mini"
                                    data-position="bottom right">
                                    <i class="green undo alternate icon"></i>
                                </button>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <!--[if BLOCK]><![endif]--><?php if($recipeExists): ?>
                                <button wire:click.prevent="openDeleteConfirmModal()" class="ui mini basic button"
                                    data-tooltip="<?php echo e(__('recipes.delete_recipe')); ?>" data-variation="mini"
                                    data-position="bottom right">
                                    <i class="red trash icon"></i>
                                </button>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
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

        
        <div class="p-6 shadow-md">
            <form class="ui mini form">
                <div class="equal width fields">
                  
                    <?php if (isset($component)) { $__componentOriginal4a0aa0dbff261054ba83150e9d676aae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae = $attributes; } ?>
<?php $component = App\View\Components\Dropdown::resolve(['model' => $model ?? 'product_id','label' => $label ?? 'recipes.recipe_product','sId' => $sId ?? 'selectProduct','sClass' => $sClass ?? 'search','collection' => $this->producibles ?? [],'value' => $value ?? 'id','text' => $text ?? 'prd_code,prd_name','key' => $key ?? null] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a0aa0dbff261054ba83150e9d676aae)): ?>
<?php $attributes = $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae; ?>
<?php unset($__attributesOriginal4a0aa0dbff261054ba83150e9d676aae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a0aa0dbff261054ba83150e9d676aae)): ?>
<?php $component = $__componentOriginal4a0aa0dbff261054ba83150e9d676aae; ?>
<?php unset($__componentOriginal4a0aa0dbff261054ba83150e9d676aae); ?>
<?php endif; ?>
                    <div class="<?php if($this->isLocked()): ?> disabled <?php endif; ?> field">
                        <?php if (isset($component)) { $__componentOriginal786b6632e4e03cdf0a10e8880993f28a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a = $attributes; } ?>
<?php $component = App\View\Components\Input::resolve(['action' => true,'model' => 'rcp_code','label' => 'validation.attributes.rcp_code','placeholder' => 'validation.attributes.rcp_code'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
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
<?php if (isset($__attributesOriginal786b6632e4e03cdf0a10e8880993f28a)): ?>
<?php $attributes = $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a; ?>
<?php unset($__attributesOriginal786b6632e4e03cdf0a10e8880993f28a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal786b6632e4e03cdf0a10e8880993f28a)): ?>
<?php $component = $__componentOriginal786b6632e4e03cdf0a10e8880993f28a; ?>
<?php unset($__componentOriginal786b6632e4e03cdf0a10e8880993f28a); ?>
<?php endif; ?>
                    </div>
                </div>
                <!--[if BLOCK]><![endif]--><?php if($this->producibles->count() <= 0): ?>
                    <div class="pt-2 font-semibold text-sm">!!! There are no products in the list, please <a
                            class="text-red-600" href="<?php echo e(route('products.create')); ?>">Start Here</a>...</div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </form>
        </div>
        





        
        <!--[if BLOCK]><![endif]--><?php if($selectedProduct): ?>
            <div x-data="{ materials: false }" class="p-6 pb-8 shadow-md">
                <?php echo $__env->make('web.sections.recipes.create.sub-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="p-4 rounded-md border border-blue-200">
                    <!--[if BLOCK]><![endif]--><?php if(!$this->isCardsExists()): ?>
                        <?php echo $__env->make('web.sections.recipes.create.recipe-placeholder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                        
                        <div class="flex flex-col gap-6 fields">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div wire:key="wire_card<?php echo e($key); ?>"
                                    class="relative flex border shadow rounded-lg bg-white border-blue-100 hover:border-blue-300">

                               

                                    <div
                                        class="flex flex-col justify-center items-center w-3/12 md:w-16 rounded-l-lg shadow-md">
                                        <!--[if BLOCK]><![endif]--><?php if($this->isLocked()): ?>
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
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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


                                        <!--[if BLOCK]><![endif]--><?php if($this->isLocked()): ?>
                                            <div
                                                class="text-xl border p-2 border-dashed text-green-500 hover:text-green-600 cursor-default ease-in-out duration-200 font-bold">
                                                <span class=""><?php echo e($card['amount']); ?></span>
                                                <span
                                                    class="text-sm"><?php echo e($this->getIngredientUnit($card)['name']); ?></span>
                                            </div>
                                        <?php else: ?>
                                            <div class="flex gap-2 items-center">
                                                <?php if (isset($component)) { $__componentOriginal4a0aa0dbff261054ba83150e9d676aae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae = $attributes; } ?>
<?php $component = App\View\Components\Dropdown::resolve(['iModel' => 'cards.'.e($key).'.amount','iPlaceholder' => ''.e(__('validation.attributes.amount')).'','iType' => 'number','model' => 'cards.'.e($key).'.unit_id','dataSource' => 'cards.'.e($key).'.units','sId' => 'unit' . $key,'sClass' => 'basic','value' => 'id','text' => 'name','placeholder' => ''.e(__('units.unit')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a0aa0dbff261054ba83150e9d676aae)): ?>
<?php $attributes = $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae; ?>
<?php unset($__attributesOriginal4a0aa0dbff261054ba83150e9d676aae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a0aa0dbff261054ba83150e9d676aae)): ?>
<?php $component = $__componentOriginal4a0aa0dbff261054ba83150e9d676aae; ?>
<?php unset($__componentOriginal4a0aa0dbff261054ba83150e9d676aae); ?>
<?php endif; ?>
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                                    </div>


                                    <!--[if BLOCK]><![endif]--><?php if(!$this->isLocked()): ?>
                                        <button wire:click.prevent="removeCard(<?php echo e($key); ?>)"
                                            class="absolute top-0 right-0 -mt-2 -mr-3 bg-white focus:outline-none opacity-75 hover:opacity-100">
                                            <i class="red shadow rounded-full cancel icon"></i>
                                        </button>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                        
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                
                <?php echo $__env->make('web.sections.recipes.create.materials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        





        <!--[if BLOCK]><![endif]--><?php if($selectedProduct && !$this->isLocked()): ?>
            <?php if (isset($component)) { $__componentOriginalaec4e6c11b019d144a9ab2982f3b684f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f = $attributes; } ?>
<?php $component = App\View\Components\FormButtons::resolve(['submit' => 'submit()'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FormButtons::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-4 pt-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f)): ?>
<?php $attributes = $__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f; ?>
<?php unset($__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaec4e6c11b019d144a9ab2982f3b684f)): ?>
<?php $component = $__componentOriginalaec4e6c11b019d144a9ab2982f3b684f; ?>
<?php unset($__componentOriginalaec4e6c11b019d144a9ab2982f3b684f); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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

    <?php echo $__env->make('web.sections.recipes.create.recipe-modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/livewire/recipes/form.blade.php ENDPATH**/ ?>