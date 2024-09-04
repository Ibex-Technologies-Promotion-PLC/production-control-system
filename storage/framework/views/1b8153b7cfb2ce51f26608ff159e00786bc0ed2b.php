<div>

    <?php if (isset($component)) { $__componentOriginalf6f44bf63ded4787aaabaa13d26d261ccea7d14e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableToolbar::class, ['perPage' => $perPage]); ?>
<?php $component->withName('table-toolbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('filters', null, []); ?> 
            <div class="responsive-grid-3-4">

                

</div>
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6f44bf63ded4787aaabaa13d26d261ccea7d14e)): ?>
<?php $component = $__componentOriginalf6f44bf63ded4787aaabaa13d26d261ccea7d14e; ?>
<?php unset($__componentOriginalf6f44bf63ded4787aaabaa13d26d261ccea7d14e); ?>
<?php endif; ?>

<div>

    <?php if (isset($component)) { $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Table::class, []); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'sortable']); ?>
        <thead>
            <?php if (isset($component)) { $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableRow::class, []); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, []); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'collapsing']); ?><?php echo e(__('common.status')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, ['sortBy' => 'prd_code']); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('validation.attributes.prd_code')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, []); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:click' => 'sortBy(\'prd_name\')']); ?>
                    <?php echo e(__('validation.attributes.prd_name')); ?>

                    <i class="<?php echo e($this->getDirectionClass('name')); ?> icon"></i>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, []); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?><?php echo e(__('modelnames.category')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, ['sortBy' => 'prd_barcode']); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?><?php echo e(__('validation.attributes.prd_barcode')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, ['sortBy' => 'prd_shelf_life']); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'collapsing']); ?><?php echo e(__('validation.attributes.prd_shelf_life')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, []); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('validation.attributes.prd_cost')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, []); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e(__('inventory.in_stock')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, []); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3)): ?>
<?php $component = $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3; ?>
<?php unset($__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3); ?>
<?php endif; ?>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if (isset($component)) { $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableRow::class, []); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => ''.e($key).'']); ?>
                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center aligned collapsing']); ?>
                    <?php if (isset($component)) { $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Span::class, ['tooltip' => ''.e($this->statusIcon($product)['explanation']).'']); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <i class="<?php echo e($this->statusIcon($product)['class']); ?>"></i>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca)): ?>
<?php $component = $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca; ?>
<?php unset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center aligned font-bold collapsing']); ?><?php echo e($product->prd_code); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?><?php echo e($product->prd_name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'collapsing']); ?><?php echo e(optional($product->category)->ctg_name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?><?php echo e($product->prd_barcode); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e($product->prd_shelf_life); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?><?php echo e($product->prd_cost); ?> Br <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center aligned collapsing']); ?>
                    <?php if($product->isInStock): ?>
                    <span class="text-ease-green text-sm">
                        <?php echo e($product->totalStock['amount']); ?> <?php echo e($product->totalStock['unit']->abbreviation); ?>

                    </span>
                    <?php else: ?> <span class="text-sm text-ease-red"><?php echo e(__('common.NA')); ?></span>
                    <?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'collapsing']); ?>
                    <div class="crud-buttons">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view products')): ?>
                        <?php if (isset($component)) { $__componentOriginal62fe29273afd87e0b428d4c5a46cf7bb31ca8d7c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ShowButton::class, ['action' => 'openDetailsModal('.e($product->id).')']); ?>
<?php $component->withName('show-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => 'showbutton_'.e($loop->index).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62fe29273afd87e0b428d4c5a46cf7bb31ca8d7c)): ?>
<?php $component = $__componentOriginal62fe29273afd87e0b428d4c5a46cf7bb31ca8d7c; ?>
<?php unset($__componentOriginal62fe29273afd87e0b428d4c5a46cf7bb31ca8d7c); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create update products')): ?>
                        <?php if (isset($component)) { $__componentOriginaldfeb494f3fc4a65ea267974100ef334a84a482ff = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\EditButton::class, ['route' => ''.e(route('products.edit', ['product' => $product])).'']); ?>
<?php $component->withName('edit-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => 'editbutton_'.e($loop->index).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldfeb494f3fc4a65ea267974100ef334a84a482ff)): ?>
<?php $component = $__componentOriginaldfeb494f3fc4a65ea267974100ef334a84a482ff; ?>
<?php unset($__componentOriginaldfeb494f3fc4a65ea267974100ef334a84a482ff); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete products')): ?>
                        <?php if (isset($component)) { $__componentOriginald4808ebc7c3433bc77b986e62d0056fde61922a0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DeleteButton::class, ['action' => 'delete('.e($product->id).')']); ?>
<?php $component->withName('delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => 'deletebutton_'.e($loop->index).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4808ebc7c3433bc77b986e62d0056fde61922a0)): ?>
<?php $component = $__componentOriginald4808ebc7c3433bc77b986e62d0056fde61922a0; ?>
<?php unset($__componentOriginald4808ebc7c3433bc77b986e62d0056fde61922a0); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3)): ?>
<?php $component = $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3; ?>
<?php unset($__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['colspan' => '10']); ?>
                    <?php if (isset($component)) { $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Placeholder::class, ['icon' => 'brown open box']); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?><?php echo e(__('common.no_results')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71)): ?>
<?php $component = $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71; ?>
<?php unset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
            </tr>
            <?php endif; ?>
        </tbody>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6)): ?>
<?php $component = $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6; ?>
<?php unset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6); ?>
<?php endif; ?>

</div>

<?php echo e($data->links('components.tailwind-pagination')); ?>


<?php if($detailsModal): ?>
<div wire:key="detailsModal" x-data="{detailsModal: <?php if ((object) ('detailsModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('detailsModal'->value()); ?>')<?php echo e('detailsModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('detailsModal'); ?>')<?php endif; ?>}">
    <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'detailsModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => ''.e(__('products.details.header')).'']); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('products.details-component', ['product' => $selectedProduct])->html();
} elseif ($_instance->childHasBeenRendered('productDetailsComponent')) {
    $componentId = $_instance->getRenderedChildComponentId('productDetailsComponent');
    $componentTag = $_instance->getRenderedChildComponentTagName('productDetailsComponent');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('productDetailsComponent');
} else {
    $response = \Livewire\Livewire::mount('products.details-component', ['product' => $selectedProduct]);
    $html = $response->html();
    $_instance->logRenderedChild('productDetailsComponent', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
</div>
<?php endif; ?>
<?php echo $__env->make('web.helpers.deletable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH /var/www/html/resources/views/livewire/products/datatable.blade.php ENDPATH**/ ?>