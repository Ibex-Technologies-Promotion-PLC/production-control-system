<div>
    <?php if (isset($component)) { $__componentOriginala766c2d312d6f7864fe218e2500d2bba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala766c2d312d6f7864fe218e2500d2bba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.container','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                <div  class="responsive-grid-3-4">
                    
                    <div class="border border-dashed p-2 flex justify-around items-center gap-5">
                        <?php if (isset($component)) { $__componentOriginal29f3e5beab852ff66871181e8857b9b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29f3e5beab852ff66871181e8857b9b3 = $attributes; } ?>
<?php $component = App\View\Components\Checkbox::resolve(['model' => 'cmp_supplier','label' => ''.e(__('validation.attributes.cmp_supplier')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Checkbox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29f3e5beab852ff66871181e8857b9b3)): ?>
<?php $attributes = $__attributesOriginal29f3e5beab852ff66871181e8857b9b3; ?>
<?php unset($__attributesOriginal29f3e5beab852ff66871181e8857b9b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29f3e5beab852ff66871181e8857b9b3)): ?>
<?php $component = $__componentOriginal29f3e5beab852ff66871181e8857b9b3; ?>
<?php unset($__componentOriginal29f3e5beab852ff66871181e8857b9b3); ?>
<?php endif; ?>
                        ve
                        <?php if (isset($component)) { $__componentOriginal29f3e5beab852ff66871181e8857b9b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29f3e5beab852ff66871181e8857b9b3 = $attributes; } ?>
<?php $component = App\View\Components\Checkbox::resolve(['model' => 'cmp_customer','label' => ''.e(__('validation.attributes.cmp_customer')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Checkbox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29f3e5beab852ff66871181e8857b9b3)): ?>
<?php $attributes = $__attributesOriginal29f3e5beab852ff66871181e8857b9b3; ?>
<?php unset($__attributesOriginal29f3e5beab852ff66871181e8857b9b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29f3e5beab852ff66871181e8857b9b3)): ?>
<?php $component = $__componentOriginal29f3e5beab852ff66871181e8857b9b3; ?>
<?php unset($__componentOriginal29f3e5beab852ff66871181e8857b9b3); ?>
<?php endif; ?>
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
            
            <?php if (isset($component)) { $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f = $attributes; } ?>
<?php $component = App\View\Components\Table::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Table::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ui celled sortable table tablet stackable very compact']); ?>
                <?php if (isset($component)) { $__componentOriginald880527ad9737f2b7537ec8ad9c2e9ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald880527ad9737f2b7537ec8ad9c2e9ab = $attributes; } ?>
<?php $component = App\View\Components\Thead::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Thead::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(__('common.type')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = App\View\Components\TheadItem::resolve(['sortBy' => 'cmp_name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('validation.attributes.cmp_name')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = App\View\Components\TheadItem::resolve(['sortBy' => 'cmp_phone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('validation.attributes.cmp_phone')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(__('addresses.addresses')); ?> <?php echo $__env->renderComponent(); ?>
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
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald880527ad9737f2b7537ec8ad9c2e9ab)): ?>
<?php $attributes = $__attributesOriginald880527ad9737f2b7537ec8ad9c2e9ab; ?>
<?php unset($__attributesOriginald880527ad9737f2b7537ec8ad9c2e9ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald880527ad9737f2b7537ec8ad9c2e9ab)): ?>
<?php $component = $__componentOriginald880527ad9737f2b7537ec8ad9c2e9ab; ?>
<?php unset($__componentOriginald880527ad9737f2b7537ec8ad9c2e9ab); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal9265f2c82011405998f0442e028261fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9265f2c82011405998f0442e028261fe = $attributes; } ?>
<?php $component = App\View\Components\Tbody::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Tbody::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if (isset($component)) { $__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3 = $attributes; } ?>
<?php $component = App\View\Components\TableRow::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TableRow::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => ''.e($loop->index).'']); ?>
                            <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'collapsing center aligned text-sm']); ?><?php echo $__env->make('web.sections.companies.index.company-type', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'collapsing']); ?><?php echo e($company->cmp_name); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($company->cmp_phone); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => ' flex justify-between items-center']); ?>
                                <div wire:click="openShowModal(<?php echo e($company->id); ?>)" class="text-ease cursor-pointer text-sm"><?php echo e(__('addresses.found_count_addresses', ['count' => $company->addresses->count()])); ?></div>
                                <span wire:click.prevent="addAddress(<?php echo e($company->id); ?>)" data-tooltip="<?php echo e(__('addresses.add_address')); ?>" data-variation="mini">
                                    <i class="blue plus link icon"></i>
                                </span>
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
                                <div>
                                    <?php if (isset($component)) { $__componentOriginala8ab4ba94087ba15161156e796b23fdf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8ab4ba94087ba15161156e796b23fdf = $attributes; } ?>
<?php $component = App\View\Components\CrudActions::resolve(['delete' => true,'edit' => true,'modelName' => 'company','modelId' => $company->id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('crud-actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CrudActions::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <div wire:click="openShowModal(<?php echo e($company->id); ?>)" data-tooltip="<?php echo e(__('common.detail')); ?>" data-variation="mini">
                                            <i class="link eye icon"></i>
                                        </div>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8ab4ba94087ba15161156e796b23fdf)): ?>
<?php $attributes = $__attributesOriginala8ab4ba94087ba15161156e796b23fdf; ?>
<?php unset($__attributesOriginala8ab4ba94087ba15161156e796b23fdf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8ab4ba94087ba15161156e796b23fdf)): ?>
<?php $component = $__componentOriginala8ab4ba94087ba15161156e796b23fdf; ?>
<?php unset($__componentOriginala8ab4ba94087ba15161156e796b23fdf); ?>
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
                        <td colspan="10">
                            <?php if (isset($component)) { $__componentOriginal031f7343d586feb3a69898f559e89477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal031f7343d586feb3a69898f559e89477 = $attributes; } ?>
<?php $component = App\View\Components\Placeholder::resolve(['icon' => 'building'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9265f2c82011405998f0442e028261fe)): ?>
<?php $attributes = $__attributesOriginal9265f2c82011405998f0442e028261fe; ?>
<?php unset($__attributesOriginal9265f2c82011405998f0442e028261fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9265f2c82011405998f0442e028261fe)): ?>
<?php $component = $__componentOriginal9265f2c82011405998f0442e028261fe; ?>
<?php unset($__componentOriginal9265f2c82011405998f0442e028261fe); ?>
<?php endif; ?>
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




        <!--[if BLOCK]><![endif]--><?php if($addressModal): ?>
            <div x-data="{addressModal: <?php if ((object) ('addressModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('addressModal'->value()); ?>')<?php echo e('addressModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('addressModal'); ?>')<?php endif; ?>}">
                <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'addressModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['header' => ''.e(__('companies.add_address_to_name_company', ['name' => $selectedCompany->cmp_name])).'']); ?>
                    <?php echo $__env->make('web.sections.addresses.address-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        
        <?php echo $__env->make('web.sections.companies.index.show-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('web.helpers.deletable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala766c2d312d6f7864fe218e2500d2bba)): ?>
<?php $attributes = $__attributesOriginala766c2d312d6f7864fe218e2500d2bba; ?>
<?php unset($__attributesOriginala766c2d312d6f7864fe218e2500d2bba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala766c2d312d6f7864fe218e2500d2bba)): ?>
<?php $component = $__componentOriginala766c2d312d6f7864fe218e2500d2bba; ?>
<?php unset($__componentOriginala766c2d312d6f7864fe218e2500d2bba); ?>
<?php endif; ?>

</div><?php /**PATH /var/www/html/resources/views/livewire/companies/datatable.blade.php ENDPATH**/ ?>