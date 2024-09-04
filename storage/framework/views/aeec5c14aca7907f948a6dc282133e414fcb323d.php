
<div>

        <?php if (isset($component)) { $__componentOriginalf6f44bf63ded4787aaabaa13d26d261ccea7d14e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableToolbar::class, ['perPage' => $perPage]); ?>
<?php $component->withName('table-toolbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
                <?php if (isset($component)) { $__componentOriginalab0dc3a8937a7207b735390b1808d537df279fe0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Thead::class, []); ?>
<?php $component->withName('thead'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <?php if (isset($component)) { $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableRow::class, []); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, ['sortBy' => 'rcp_code']); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'collapsing center aligned clickable']); ?><?php echo e(__('validation.attributes.rcp_code')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(__('recipes.belongs_to')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(__('common.inside')); ?> <?php echo $__env->renderComponent(); ?>
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
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab0dc3a8937a7207b735390b1808d537df279fe0)): ?>
<?php $component = $__componentOriginalab0dc3a8937a7207b735390b1808d537df279fe0; ?>
<?php unset($__componentOriginalab0dc3a8937a7207b735390b1808d537df279fe0); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tbody::class, []); ?>
<?php $component->withName('tbody'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if (isset($component)) { $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableRow::class, []); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                            <td class="collapsing center aligned font-bold"><?php echo e($recipe->rcp_code); ?></td>
                            <td class="">
                                <span>
                                    <?php echo e(optional($recipe->product)->prd_code); ?>

                                </span>
                                <span class="text-xs text-ease">
                                    <?php echo e(optional($recipe->product)->prd_name); ?>

                                </span>
                            </td>
                            <td>
                                <?php if(count($recipe->ingredients) > 0): ?>
                                    <span>
                                        <?php echo e(__('recipes.different_products', ['number' => $recipe->ingredients->count() ])); ?>

                                    </span>
                                <?php else: ?> 
                                    <span class="text-xs text-orange-600 "><?php echo e(__('recipes.there_is_no_content_yet')); ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="collapsing">
                                <div class="crud-buttons">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view recipes')): ?>
                                        <?php if (isset($component)) { $__componentOriginal62fe29273afd87e0b428d4c5a46cf7bb31ca8d7c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ShowButton::class, ['route' => ''.e(route('recipes.show', ['recipe' => $recipe])).'']); ?>
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
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create update recipes')): ?>
                                        <?php if (isset($component)) { $__componentOriginaldfeb494f3fc4a65ea267974100ef334a84a482ff = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\EditButton::class, ['route' => ''.e(route('recipes.edit', ['recipe' => $recipe])).'']); ?>
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
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete recipes')): ?>
                                        <?php if (isset($component)) { $__componentOriginald4808ebc7c3433bc77b986e62d0056fde61922a0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DeleteButton::class, ['action' => 'delete('.e($recipe->id).')']); ?>
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
                            </td>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3)): ?>
<?php $component = $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3; ?>
<?php unset($__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="10">
                                <?php if (isset($component)) { $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Placeholder::class, ['icon' => 'mortar pestle']); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                    <?php echo e(__('common.no_results')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71)): ?>
<?php $component = $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71; ?>
<?php unset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71); ?>
<?php endif; ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954)): ?>
<?php $component = $__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954; ?>
<?php unset($__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6)): ?>
<?php $component = $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6; ?>
<?php unset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6); ?>
<?php endif; ?>
            
        </div>

        <?php echo e($data->links('components.tailwind-pagination')); ?>


        <?php echo $__env->make('web.helpers.deletable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

<?php /**PATH /var/www/html/resources/views/livewire/recipes/datatable.blade.php ENDPATH**/ ?>