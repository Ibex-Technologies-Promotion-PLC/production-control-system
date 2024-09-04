<div>
    <?php if (isset($component)) { $__componentOriginalf6f44bf63ded4787aaabaa13d26d261ccea7d14e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableToolbar::class, ['perPage' => $perPage]); ?>
<?php $component->withName('table-toolbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('filters', null, []); ?> 
            
            <div class="responsive-grid-3-4">
                <div>
                    <label for="wofilterselect-do_number"><?php echo e(__('validation.attributes.do_number')); ?>: </label>
                    <input wire:model="filterDoNumber" placeholder="<?php echo e(__('validation.attributes.do_number')); ?>" id="wofilterselect-do_number" class="basic-select text-sm" />
                </div>
                <div>
                    <label for="wofilterselect-company"><?php echo e(__('common.customer')); ?>: </label>
                    <select wire:model="filterCompany" id="wofilterselect-company" class="basic-select text-xs">
                        <option value="" selected><?php echo e(__('common.all')); ?></option>
                        <?php $__currentLoopData = $this->companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($company->id); ?>">
                                <?php echo e($company->cmp_name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div>
                    <label for="wofilterselect-address"><?php echo e(__('validation.attributes.address_id')); ?>: </label>
                    <select wire:model="filterAddress" id="wofilterselect-address" class="basic-select text-xs">
                        <option wire:key="default" value="" selected><?php echo e(__('common.all')); ?></option>
                        <?php if($selectedCompany): ?>
                            <?php $__currentLoopData = $selectedCompany->addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($address->id); ?>">
                                    <?php echo e($address->adr_name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div>
                    <label for="wofilterselect-salestype"><?php echo e(__('validation.attributes.sales_type_id')); ?>: </label>
                    <select wire:model="filterSalesType" id="wofilterselect-salestype" class="basic-select text-xs">
                        <option value="" selected><?php echo e(__('common.all')); ?></option>
                        <?php $__currentLoopData = $this->salesTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salesType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($salesType->id); ?>">
                                <?php echo e($salesType->st_name); ?> - <?php echo e($salesType->st_abbr); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div>
                    <label for="wofilterselect-states"><?php echo e(__('validation.attributes.do_status')); ?>: </label>
                    <select wire:model="filterDoStatus" id="wofilterselect-states" class="basic-select text-xs">
                        <option value="" selected><?php echo e(__('common.all')); ?></option>
                        <?php $__currentLoopData = $this->doStates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($status); ?>">
                                <?php echo e(__('dispatchorders.' . $status)); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                
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
<?php $component->withAttributes(['class' => 'sortable very compact']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, ['sortBy' => 'do_number']); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center aligned collapsing']); ?><?php echo e(__('validation.attributes.do_number')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(__('validation.attributes.company_id')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(__('dispatchorders.dispatch_address')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'collapsing center aligned']); ?><?php echo e(__('validation.attributes.sales_type_id')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, ['sortBy' => 'do_planned_datetime']); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?><?php echo e(__('validation.attributes.do_planned_datetime')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, ['sortBy' => 'do_actual_datetime']); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?><?php echo e(__('validation.attributes.do_actual_datetime')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'collapsing center aligned']); ?><?php echo e(__('validation.attributes.do_status')); ?> <?php echo $__env->renderComponent(); ?>
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
                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dispatchOrder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if (isset($component)) { $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableRow::class, []); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => ''.e($loop->index).'','class' => 'font-semibold']); ?>
                        <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'collapsing center aligned font-bold']); ?><?php echo e($dispatchOrder->do_number); ?> <?php echo $__env->renderComponent(); ?>
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
                            <?php echo e($dispatchOrder->company->cmp_name); ?>

                            <span class="text-xs text-ease">
                                (<?php echo e(__('validation.attributes.cmp_current_code')); ?>: <?php echo e($dispatchOrder->company->cmp_current_code); ?>)
                            </span>
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
                            <?php echo e($dispatchOrder->address->adr_name); ?>

                            <span class="text-xs text-ease">
                                (<?php echo e(__('common.phone')); ?>: <?php echo e($dispatchOrder->address->adr_phone); ?>)
                            </span>
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
<?php $component->withAttributes(['class' => 'center aligned collapsing']); ?>
                            <?php if (isset($component)) { $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Span::class, ['tooltip' => ''.e($dispatchOrder->salesType->st_name).'']); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                <?php echo e($dispatchOrder->salesType->st_abbr); ?>

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
<?php $component->withAttributes(['class' => 'text-xs collapsing']); ?><?php echo e($dispatchOrder->do_planned_datetime); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'text-xs collapsing']); ?><?php echo e($dispatchOrder->do_actual_datetime); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'text-sm center aligned']); ?>
                            <span data-tooltip="<?php echo e(__("dispatchorders.{$dispatchOrder->do_status}")); ?>" data-variation="mini" data-position="left center">
                                <i class="<?php echo e($dispatchOrder->statusLookup['icon']); ?>"></i>
                            </span>
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
                            <div class="crud-buttons justify-around">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view dispatchorders')): ?>
                                    <?php if (isset($component)) { $__componentOriginal62fe29273afd87e0b428d4c5a46cf7bb31ca8d7c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ShowButton::class, ['action' => 'openDetailsModal('.e($dispatchOrder->id).')']); ?>
<?php $component->withName('show-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => 'do_showbutton_'.e($loop->index).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62fe29273afd87e0b428d4c5a46cf7bb31ca8d7c)): ?>
<?php $component = $__componentOriginal62fe29273afd87e0b428d4c5a46cf7bb31ca8d7c; ?>
<?php unset($__componentOriginal62fe29273afd87e0b428d4c5a46cf7bb31ca8d7c); ?>
<?php endif; ?>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create update dispatchorders')): ?>
                                    <?php if($dispatchOrder->isSuspended() || $dispatchOrder->isActive()): ?>
                                        <?php if (isset($component)) { $__componentOriginaldfeb494f3fc4a65ea267974100ef334a84a482ff = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\EditButton::class, ['route' => ''.e(route('dispatchorders.edit', ['dispatchorder' => $dispatchOrder])).'']); ?>
<?php $component->withName('edit-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => 'do_editbutton_'.e($loop->index).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldfeb494f3fc4a65ea267974100ef334a84a482ff)): ?>
<?php $component = $__componentOriginaldfeb494f3fc4a65ea267974100ef334a84a482ff; ?>
<?php unset($__componentOriginaldfeb494f3fc4a65ea267974100ef334a84a482ff); ?>
<?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete dispatchorders')): ?>
                                    <?php if($dispatchOrder->isSuspended() || $dispatchOrder->isActive()): ?>
                                        <?php if (isset($component)) { $__componentOriginald4808ebc7c3433bc77b986e62d0056fde61922a0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DeleteButton::class, ['action' => 'delete('.e($dispatchOrder->id).')']); ?>
<?php $component->withName('delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => 'do_deletebutton_'.e($loop->index).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4808ebc7c3433bc77b986e62d0056fde61922a0)): ?>
<?php $component = $__componentOriginald4808ebc7c3433bc77b986e62d0056fde61922a0; ?>
<?php unset($__componentOriginald4808ebc7c3433bc77b986e62d0056fde61922a0); ?>
<?php endif; ?>
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
                    <td colspan="10">
                        <?php if (isset($component)) { $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Placeholder::class, ['icon' => 'truck']); ?>
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








    <?php if($detailsModal && $selectedDo): ?>
        <div x-data="{detailsModal: <?php if ((object) ('detailsModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('detailsModal'->value()); ?>')<?php echo e('detailsModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('detailsModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'detailsModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => ''.e(__('dispatchorders.do_number_numbered_dispatchorder', ['do_number' => $selectedDo->do_number])).'']); ?>
                <?php if (isset($component)) { $__componentOriginal39aff823325c1303dd3364c1dbf2da585bd9cd88 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DispatchorderDetails::class, ['dispatchOrder' => $selectedDo]); ?>
<?php $component->withName('dispatchorder-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39aff823325c1303dd3364c1dbf2da585bd9cd88)): ?>
<?php $component = $__componentOriginal39aff823325c1303dd3364c1dbf2da585bd9cd88; ?>
<?php unset($__componentOriginal39aff823325c1303dd3364c1dbf2da585bd9cd88); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <?php echo $__env->make('web.helpers.deletable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

<?php /**PATH /var/www/html/resources/views/livewire/dispatch-orders/datatable.blade.php ENDPATH**/ ?>