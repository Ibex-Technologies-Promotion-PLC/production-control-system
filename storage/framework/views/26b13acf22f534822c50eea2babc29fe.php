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
<?php $component->withAttributes(['class' => 'center aligned']); ?> <?php echo e(__('validation.attributes.prd_name')); ?>  <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('validation.attributes.cmp_name')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('validation.attributes.total')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('validation.attributes.quantity')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?>Transaction Date <?php echo $__env->renderComponent(); ?>
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
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $transactionData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
<?php $component->withAttributes(['class' => 'center aligned font-bold collapsing']); ?><?php echo e($transaction->product->prd_name); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e($transaction->company->cmp_name); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e($transaction->total); ?> Br <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e($transaction->product->dispatchProducts->first()->dp_amount); ?> <?php echo e($transaction->product->units->first()->abbreviation); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'center aligned']); ?> <?php echo e($transaction->created_at->format('d M Y, h:i A')); ?>

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
        <tfoot class="mt-5">
            <tr>
                <td></td>

                <td colspan="3" class="right aligned -pr-10">
                    <strong><?php echo e(__('Total:')); ?> <?php echo e(number_format($transactionData->sum('total'), 2)); ?> Br</strong>
                </td>
              

                <td></td>
            </tr>
        </tfoot>


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


</div><?php /**PATH /var/www/html/resources/views/livewire/transaction/datatable.blade.php ENDPATH**/ ?>