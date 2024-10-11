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

    <?php if (isset($component)) { $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f = $attributes; } ?>
<?php $component = App\View\Components\Table::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Table::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'sortable']); ?>
        <thead>
            <?php if (isset($component)) { $__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3 = $attributes; } ?>
<?php $component = App\View\Components\TableRow::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TableRow::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $attributes; } ?>
<?php $component = App\View\Components\TheadItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'collapsing']); ?><?php echo e(__('common.status')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = App\View\Components\TheadItem::resolve(['sortBy' => 'prd_code'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('validation.attributes.prd_code')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['wire:click' => 'sortBy(\'prd_name\')']); ?>
                    <?php echo e(__('validation.attributes.prd_name')); ?>

                    <i class="<?php echo e($this->getDirectionClass('name')); ?> icon"></i>
                 <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(__('modelnames.category')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = App\View\Components\TheadItem::resolve(['sortBy' => 'prd_barcode'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('validation.attributes.prd_barcode')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = App\View\Components\TheadItem::resolve(['sortBy' => 'prd_shelf_life'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'collapsing']); ?><?php echo e(__('validation.attributes.prd_shelf_life')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('validation.attributes.prd_cost')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('validation.attributes.prd_sales')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('inventory.in_stock')); ?> <?php echo $__env->renderComponent(); ?>
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
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3)): ?>
<?php $attributes = $__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3; ?>
<?php unset($__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3)): ?>
<?php $component = $__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3; ?>
<?php unset($__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3); ?>
<?php endif; ?>
        </thead>
        <tbody>
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if (isset($component)) { $__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3 = $attributes; } ?>
<?php $component = App\View\Components\TableRow::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TableRow::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => ''.e($key).'']); ?>
                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'center aligned collapsing']); ?>
                    <?php if (isset($component)) { $__componentOriginaleec1da765ed3218d03288cbfb54cb4e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5 = $attributes; } ?>
<?php $component = App\View\Components\Span::resolve(['tooltip' => ''.e($this->statusIcon($product)['explanation']).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Span::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <i class="<?php echo e($this->statusIcon($product)['class']); ?>"></i>
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
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'center aligned font-bold collapsing']); ?><?php echo e($product->prd_code); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($product->prd_name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'collapsing']); ?><?php echo e(optional($product->category)->ctg_name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($product->prd_barcode); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e($product->prd_shelf_life); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e($product->prd_cost); ?> Br <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e($product->prd_sales); ?> Br <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'center aligned collapsing']); ?>
                    <!--[if BLOCK]><![endif]--><?php if($product->isInStock): ?>
                    <span class="text-ease-green text-sm">
                        <?php echo e($product->totalStock['amount']); ?> <?php echo e($product->totalStock['unit']->abbreviation); ?>

                    </span>
                    <?php else: ?> 
                    <span class="text-sm text-ease-red"><?php echo e(__('common.NA')); ?></span>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'collapsing']); ?>
                    <div class="crud-buttons">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view products')): ?>
                        <?php if (isset($component)) { $__componentOriginalb83656ea86204f1ef049a4bd3e20bb5c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb83656ea86204f1ef049a4bd3e20bb5c = $attributes; } ?>
<?php $component = App\View\Components\ShowButton::resolve(['action' => 'openDetailsModal('.e($product->id).')'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('show-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ShowButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'showbutton_'.e($loop->index).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb83656ea86204f1ef049a4bd3e20bb5c)): ?>
<?php $attributes = $__attributesOriginalb83656ea86204f1ef049a4bd3e20bb5c; ?>
<?php unset($__attributesOriginalb83656ea86204f1ef049a4bd3e20bb5c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb83656ea86204f1ef049a4bd3e20bb5c)): ?>
<?php $component = $__componentOriginalb83656ea86204f1ef049a4bd3e20bb5c; ?>
<?php unset($__componentOriginalb83656ea86204f1ef049a4bd3e20bb5c); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create update products')): ?>
                        <?php if (isset($component)) { $__componentOriginal5f8db95e16827ebd3500ce550edd117e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f8db95e16827ebd3500ce550edd117e = $attributes; } ?>
<?php $component = App\View\Components\EditButton::resolve(['route' => ''.e(route('products.edit', ['product' => $product])).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('edit-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\EditButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'editbutton_'.e($loop->index).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f8db95e16827ebd3500ce550edd117e)): ?>
<?php $attributes = $__attributesOriginal5f8db95e16827ebd3500ce550edd117e; ?>
<?php unset($__attributesOriginal5f8db95e16827ebd3500ce550edd117e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f8db95e16827ebd3500ce550edd117e)): ?>
<?php $component = $__componentOriginal5f8db95e16827ebd3500ce550edd117e; ?>
<?php unset($__componentOriginal5f8db95e16827ebd3500ce550edd117e); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete products')): ?>
                        <?php if (isset($component)) { $__componentOriginal2550ac35d7599d92e03b1bde3934d26a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2550ac35d7599d92e03b1bde3934d26a = $attributes; } ?>
<?php $component = App\View\Components\DeleteButton::resolve(['action' => 'delete('.e($product->id).')'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DeleteButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'deletebutton_'.e($loop->index).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2550ac35d7599d92e03b1bde3934d26a)): ?>
<?php $attributes = $__attributesOriginal2550ac35d7599d92e03b1bde3934d26a; ?>
<?php unset($__attributesOriginal2550ac35d7599d92e03b1bde3934d26a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2550ac35d7599d92e03b1bde3934d26a)): ?>
<?php $component = $__componentOriginal2550ac35d7599d92e03b1bde3934d26a; ?>
<?php unset($__componentOriginal2550ac35d7599d92e03b1bde3934d26a); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3)): ?>
<?php $attributes = $__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3; ?>
<?php unset($__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3)): ?>
<?php $component = $__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3; ?>
<?php unset($__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '10']); ?>
                    <?php if (isset($component)) { $__componentOriginal031f7343d586feb3a69898f559e89477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal031f7343d586feb3a69898f559e89477 = $attributes; } ?>
<?php $component = App\View\Components\Placeholder::resolve(['icon' => 'brown open box'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Placeholder::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('common.no_results')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal031f7343d586feb3a69898f559e89477)): ?>
<?php $attributes = $__attributesOriginal031f7343d586feb3a69898f559e89477; ?>
<?php unset($__attributesOriginal031f7343d586feb3a69898f559e89477); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal031f7343d586feb3a69898f559e89477)): ?>
<?php $component = $__componentOriginal031f7343d586feb3a69898f559e89477; ?>
<?php unset($__componentOriginal031f7343d586feb3a69898f559e89477); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
            </tr>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </tbody>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $attributes = $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $component = $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>

</div>

<?php echo e($data->links('components.tailwind-pagination')); ?>


<!--[if BLOCK]><![endif]--><?php if($detailsModal): ?>
<div wire:key="detailsModal" x-data="{detailsModal: <?php if ((object) ('detailsModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('detailsModal'->value()); ?>')<?php echo e('detailsModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('detailsModal'); ?>')<?php endif; ?>}">
    <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'detailsModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['header' => ''.e(__('products.details.header')).'']); ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('products.details-component', ['product' => $selectedProduct]);

$__html = app('livewire')->mount($__name, $__params, 'productDetailsComponent', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
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
<?php echo $__env->make('web.helpers.deletable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH /var/www/html/resources/views/livewire/products/datatable.blade.php ENDPATH**/ ?>