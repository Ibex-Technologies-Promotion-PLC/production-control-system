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
<?php $component = App\View\Components\Content::resolve(['theme' => 'purple'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Content::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <!--[if BLOCK]><![endif]--><?php if($editMode): ?>
            <?php if (isset($component)) { $__componentOriginal522a3c8aadb4ccbcc229d59265244da1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal522a3c8aadb4ccbcc229d59265244da1 = $attributes; } ?>
<?php $component = App\View\Components\PageHeader::resolve(['icon' => 'project diagram','header' => 'workorders.edit.header'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('buttons', null, []); ?> 
                    <div class="ui mini icon buttons">
                        <!--[if BLOCK]><![endif]--><?php if($workOrder->isSuspended()): ?>
                        <button wire:key="unsuspend" wire:click.prevent="unsuspend()" class="ui mini basic button"
                            data-tooltip="<?php echo e(__('common.suspended')); ?>" data-variation="mini"
                            data-position="bottom right">
                            <i class="gray circle icon"></i>
                        </button>
                        <?php elseif($workOrder->isCompleted()): ?>
                        <button class="ui mini basic button"
                            data-tooltip="<?php echo e(__('workorders.production_is_completed')); ?>" data-variation="mini"
                            data-position="bottom right">
                            <i class="green checkmark icon"></i>
                        </button>
                        <?php elseif($workOrder->isInProgress()): ?>
                        <button class="ui mini basic button"
                            data-tooltip="<?php echo e(__('workorders.production_continues')); ?>" data-variation="mini"
                            data-position="bottom right">
                            <i class="orange loading cog icon"></i>
                        </button>
                        <?php else: ?>
                        <button wire:key="suspend" wire:click.prevent="suspend()" class="ui mini basic button"
                            data-tooltip="<?php echo e(__('common.active')); ?>" data-variation="mini"
                            data-position="bottom right">
                            <i class="green circle icon"></i>
                        </button>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <!--[if BLOCK]><![endif]--><?php if(!$workOrder->isInProgress()): ?>
                        <button wire:click.prevent="openDeleteModal()" class="ui mini basic button"
                            data-tooltip="<?php echo e(__('workorders.wo_delete')); ?>" data-variation="mini"
                            data-position="bottom right">
                            <i class="red trash icon"></i>
                        </button>
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
            <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal522a3c8aadb4ccbcc229d59265244da1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal522a3c8aadb4ccbcc229d59265244da1 = $attributes; } ?>
<?php $component = App\View\Components\PageHeader::resolve(['icon' => 'project diagram','header' => 'workorders.create.header','subheader' => 'workorders.create.subheader'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
         <?php $__env->endSlot(); ?>
        <form class="ui tiny form" wire:submit.prevent="submit">
            <?php if (isset($component)) { $__componentOriginal53f6c610a00cc9dfd2c2e2228060e10f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53f6c610a00cc9dfd2c2e2228060e10f = $attributes; } ?>
<?php $component = App\View\Components\FormDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FormDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

                 <?php $__env->slot('left', null, []); ?> 
                    <!--[if BLOCK]><![endif]--><?php if($editMode): ?>
                    <?php if (isset($component)) { $__componentOriginal4a0aa0dbff261054ba83150e9d676aae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae = $attributes; } ?>
<?php $component = App\View\Components\Dropdown::resolve(['model' => 'product_id','triggerOnEvent' => 'new_work_order_created','dataSourceFunction' => 'getProductsProperty','sClass' => 'disabled search','sId' => 'selectProduct','value' => 'id','text' => 'prd_code,prd_name','label' => ''.e(__('validation.attributes.product_id')).'','placeholder' => ''.e(__('units.unit')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginal4a0aa0dbff261054ba83150e9d676aae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae = $attributes; } ?>
<?php $component = App\View\Components\Dropdown::resolve(['model' => 'product_id','triggerOnEvent' => 'new_work_order_created','dataSourceFunction' => 'getProductsProperty','sClass' => 'search','sId' => 'selectProduct','value' => 'id','text' => 'prd_code,prd_name','label' => ''.e(__('validation.attributes.product_id')).'','placeholder' => ''.e(__('units.unit')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php if (isset($component)) { $__componentOriginal786b6632e4e03cdf0a10e8880993f28a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a = $attributes; } ?>
<?php $component = App\View\Components\Input::resolve(['action' => true,'model' => 'wo_lot_no','label' => 'validation.attributes.wo_lot_no','placeholder' => 'validation.attributes.wo_lot_no'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required mini']); ?>
                         <?php $__env->slot('action', null, []); ?> 
                            <button wire:click.prevent="suggestLotCode" class="ui teal mini right labeled icon button ">
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
                    <?php if (isset($component)) { $__componentOriginal4a0aa0dbff261054ba83150e9d676aae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae = $attributes; } ?>
<?php $component = App\View\Components\Dropdown::resolve(['iModel' => 'wo_amount','iPlaceholder' => ''.e(__('validation.attributes.wo_amount')).'','label' => ''.e(__('validation.attributes.wo_amount')).'','model' => 'unit_id','triggerOnEvent' => 'woProductChanged','dataSource' => 'units','sId' => 'workOrderUnits','sClass' => 'basic','value' => 'id','text' => 'name','placeholder' => ''.e(__('units.unit')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                    <?php if (isset($component)) { $__componentOriginalef9a8bac6e25ee60184eacd3a683aaa4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef9a8bac6e25ee60184eacd3a683aaa4 = $attributes; } ?>
<?php $component = App\View\Components\Datepicker::resolve(['model' => 'wo_datetime','initialDate' => $wo_datetime,'label' => __('validation.attributes.wo_datetime')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('datepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Datepicker::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['noErrors' => true,'class' => 'required field']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef9a8bac6e25ee60184eacd3a683aaa4)): ?>
<?php $attributes = $__attributesOriginalef9a8bac6e25ee60184eacd3a683aaa4; ?>
<?php unset($__attributesOriginalef9a8bac6e25ee60184eacd3a683aaa4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef9a8bac6e25ee60184eacd3a683aaa4)): ?>
<?php $component = $__componentOriginalef9a8bac6e25ee60184eacd3a683aaa4; ?>
<?php unset($__componentOriginalef9a8bac6e25ee60184eacd3a683aaa4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal786b6632e4e03cdf0a10e8880993f28a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a = $attributes; } ?>
<?php $component = App\View\Components\Input::resolve(['noErrors' => true,'model' => 'wo_code','label' => ''.e(__('validation.attributes.wo_code')).'','placeholder' => ''.e(__('validation.attributes.wo_code')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required field']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal786b6632e4e03cdf0a10e8880993f28a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a = $attributes; } ?>
<?php $component = App\View\Components\Input::resolve(['noErrors' => true,'model' => 'wo_queue','label' => ''.e(__('validation.attributes.wo_queue')).'','placeholder' => ''.e(__('validation.attributes.wo_queue')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required field']); ?>
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
                 <?php $__env->endSlot(); ?>
    

                 <?php $__env->slot('right', null, []); ?> 
                    <!--[if BLOCK]><![endif]--><?php if($this->productSelected()): ?>

                    <div class="rounded shadow-lg h-full border md:h-30-rem md:overflow-x-hidden">
                        
                        <!--[if BLOCK]><![endif]--><?php if($selectedProduct->recipe->ingredients->isEmpty()): ?>
                        <?php if (isset($component)) { $__componentOriginal031f7343d586feb3a69898f559e89477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal031f7343d586feb3a69898f559e89477 = $attributes; } ?>
<?php $component = App\View\Components\Placeholder::resolve(['icon' => 'red exclamation'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Placeholder::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="text-sm">
                                <div><?php echo e(__('recipes.no_recipe_ingredients_found')); ?></div>
                                <div>
                                    <?php echo e(__('workorders.recipe_ingredients_must_be_correct_for_keep_inventory_flawless')); ?>

                                </div>
                                <div class="pt-5">
                                    <button wire:click.prevent="redirectForAddIngredients()"
                                        class="ui mini button">
                                        <?php echo e(__('recipes.add_recipe_ingredients')); ?>

                                    </button>
                                </div>
                            </div>
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
                        <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginala2ef4f2d0302d83b454003da4e45f975 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala2ef4f2d0302d83b454003da4e45f975 = $attributes; } ?>
<?php $component = App\View\Components\NecessaryIngredients::resolve(['product' => $selectedProduct,'amount' => $wo_amount,'unitId' => $unit_id,'noHeader' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('necessary-ingredients'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NecessaryIngredients::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala2ef4f2d0302d83b454003da4e45f975)): ?>
<?php $attributes = $__attributesOriginala2ef4f2d0302d83b454003da4e45f975; ?>
<?php unset($__attributesOriginala2ef4f2d0302d83b454003da4e45f975); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala2ef4f2d0302d83b454003da4e45f975)): ?>
<?php $component = $__componentOriginala2ef4f2d0302d83b454003da4e45f975; ?>
<?php unset($__componentOriginala2ef4f2d0302d83b454003da4e45f975); ?>
<?php endif; ?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php else: ?>
<?php if (isset($component)) { $__componentOriginal031f7343d586feb3a69898f559e89477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal031f7343d586feb3a69898f559e89477 = $attributes; } ?>
<?php $component = App\View\Components\Placeholder::resolve(['icon' => 'primary tasks'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Placeholder::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <span class="text-sm">
        <?php echo e(__('workorders.necessary_items_and_amounts_will_be_shown_here')); ?>...
    </span>
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
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
 <?php $__env->endSlot(); ?>



 <?php $__env->slot('bottom', null, []); ?> 
    <div x-data="{ addNote: false }">
        <div x-show="!addNote" class="text-ease">
            <i class="write icon"></i>
            <span class="cursor-pointer pt-1 text-sm font-bold"
                @click="addNote = true"><?php echo e(__('common.add_note')); ?></span>
        </div>
        <div x-show="addNote" class="field">
            <label><i class="write icon"></i><?php echo e(__('validation.attributes.wo_note')); ?></label>
            <textarea wire:model.lazy="wo_note" rows="6"></textarea>
        </div>
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
</form>

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

<!--[if BLOCK]><![endif]--><?php if($editMode && $workOrder): ?>
<div x-data="{ deleteModal: <?php if ((object) ('deleteModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('deleteModal'->value()); ?>')<?php echo e('deleteModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('deleteModal'); ?>')<?php endif; ?> }" x-cloak>
    <?php if (isset($component)) { $__componentOriginalc03504754ab0dd3dd37ca30b514b3449 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc03504754ab0dd3dd37ca30b514b3449 = $attributes; } ?>
<?php $component = App\View\Components\Confirm::resolve(['atConfirm' => 'confirmDelete()','active' => 'deleteModal','color' => 'red','confirm' => ''.e(__('common.delete')).'','deny' => ''.e(__('common.cancel')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Confirm::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <!--[if BLOCK]><![endif]--><?php if($workOrder->isCompleted()): ?>
        <div class="pb-3"><i class="large red exclamation icon"></i></div>
        <div><?php echo e(__('common.are_you_sure_you_want_to_delete')); ?></div>
        <div class="text-xs text-ease-red pt-5">
            <?php echo e(__('workorders.all_stock_moves_will_be_deleted_which_is_added_by_this_wo')); ?>

        </div>
        <?php else: ?>
        <div><?php echo e(__('common.are_you_sure_you_want_to_delete')); ?></div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc03504754ab0dd3dd37ca30b514b3449)): ?>
<?php $attributes = $__attributesOriginalc03504754ab0dd3dd37ca30b514b3449; ?>
<?php unset($__attributesOriginalc03504754ab0dd3dd37ca30b514b3449); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc03504754ab0dd3dd37ca30b514b3449)): ?>
<?php $component = $__componentOriginalc03504754ab0dd3dd37ca30b514b3449; ?>
<?php unset($__componentOriginalc03504754ab0dd3dd37ca30b514b3449); ?>
<?php endif; ?>
</div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div><?php /**PATH /var/www/html/resources/views/livewire/work-orders/form.blade.php ENDPATH**/ ?>