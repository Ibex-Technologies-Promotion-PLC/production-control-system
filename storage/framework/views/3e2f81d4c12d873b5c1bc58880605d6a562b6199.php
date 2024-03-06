<?php if (isset($component)) { $__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormDivider::class, ['noButtons' => true,'bottomClass' => ''.e($tableClass['bottomClass']).'']); ?>
<?php $component->withName('form-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('left', null, []); ?> 
        
        <div class="p-4 shadow-lg border rounded <?php echo e($tableClass['borderColor']); ?>">
            <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <span><?php echo e(__('validation.attributes.do_number')); ?></span>
                <span><?php echo e($dispatchOrder->do_number); ?></span>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <span><?php echo e(__('common.customer')); ?></span>
                <span><?php echo e($dispatchOrder->company->cmp_name); ?></span>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <span><?php echo e(__('validation.attributes.sales_type_id')); ?></span>
                <span><?php echo e(ucfirst($dispatchOrder->salesType->st_name)); ?></span>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <span><?php echo e(__('validation.attributes.do_planned_datetime')); ?></span>
                <span><?php echo e($dispatchOrder->do_planned_datetime); ?></span>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
            <?php if($dispatchOrder->dispatchExtra): ?>
                <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <span><?php echo e(__('validation.attributes.de_license_plate')); ?></span>
                    <span><?php echo e($dispatchOrder->dispatchExtra->de_license_plate ?? __('common.not_defined')); ?></span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <span><?php echo e(__('validation.attributes.de_driver_name')); ?></span>
                    <span><?php echo e($dispatchOrder->dispatchExtra->de_driver_name ?? __('common.not_defined')); ?></span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <span><?php echo e(__('validation.attributes.de_driver_phone')); ?></span>
                    <span><?php echo e($dispatchOrder->dispatchExtra->de_driver_phone ?? __('common.not_defined')); ?></span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <span><?php echo e(__('validation.attributes.de_dispatch_expense')); ?></span>
                    <span><?php echo e($dispatchOrder->dispatchExtra->de_dispatch_expense ?? __('common.not_defined')); ?> Br</span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <span><?php echo e(__('validation.attributes.de_handling_expense')); ?></span>
                    <span><?php echo e($dispatchOrder->dispatchExtra->de_handling_expense ?? __('common.not_defined')); ?> Br</span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if($dispatchOrder->isApproved()): ?>
            <?php if (isset($component)) { $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ListItem::class, []); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <span>
                    
                    <?php echo e(__('validation.attributes.do_actual_datetime')); ?>

                </span>
                <span><?php echo e($dispatchOrder->do_actual_datetime); ?></span>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8)): ?>
<?php $component = $__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8; ?>
<?php unset($__componentOriginal65ea5b394eb69bf33c4e594ed1530f75645962e8); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="flex justify-between items-center">
            <div class="pt-5 <?php echo e($tableClass['statusColor']); ?>">
                <i class="<?php echo e($tableClass['icon']); ?>"></i>
                <span class="font-bold">
                    <?php echo e(__("dispatchorders.{$dispatchOrder->do_status}")); ?>

                </span>
            </div>
            <div>
                <?php if (isset($component)) { $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Span::class, ['tooltip' => 'Download as Excel']); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <i wire:click="exportDispatchOrderDetailed" class="large excel file icon text-ease-green cursor-pointer"></i>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca)): ?>
<?php $component = $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca; ?>
<?php unset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca); ?>
<?php endif; ?>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('right', null, []); ?> 
        <div class="flex flex-col gap-3">
            <?php $__currentLoopData = $dispatchOrder->dispatchProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div x-data="{reservedLots: false}"  class="border p-4 <?php echo e($tableClass['borderColor']); ?> rounded hover:bg-cool-gray-50 border-dashed cursor-pointer" @click="reservedLots = ! reservedLots">
                    <div class="flex justify-between text-ease"  >
                        <span class="font-bold"><?php echo e($dp->product->prd_name); ?></span>
                        <div>
                            <span><?php echo e($dp->dp_amount); ?> <?php echo e($dp->unit->name); ?></span>
                            <span x-show="!reservedLots" class="pl-6"><i class="caret right icon"></i></span>
                            <span x-show="reservedLots" class="pl-6"><i class="caret down icon"></i></span>
                        </div>
                    </div>
                    <div x-show="reservedLots" class="pt-2">
                        <?php if (isset($component)) { $__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ReservedStocksTable::class, ['reservations' => $dp->reservedStocks,'noHead' => true,'noProduct' => true,'emptyMessage' => 'dispatchorders.not_ready_yet']); ?>
<?php $component->withName('reserved-stocks-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e)): ?>
<?php $component = $__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e; ?>
<?php unset($__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e); ?>
<?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('bottom', null, []); ?> 
        <div class="text-white">
            <div class="flex justify-between">
                <div>
                    <?php echo e(__('dispatchorders.dispatch_address')); ?>

                    <div class="flex flex-col py-2 gap-2">
                        <span id="copy-area"><?php echo e($dispatchOrder->fullAddress()); ?></span>
                        <div><?php echo e(__('validation.attributes.adr_phone')); ?>: <?php echo e($dispatchOrder->address->adr_phone); ?></div>
                    </div>
                </div>
                <div>
                    <button onclick="copy('copy-area', '<?php echo e(__('addresses.address_copied')); ?>')" class="focus:outline-none hover:text-red-800" data-tooltip="<?php echo e(__('common.copy')); ?>" data-position="left center" data-variation="mini">
                        <i class="copy outline icon"></i>
                    </button>
                </div>
            </div>
            <?php if($dispatchOrder->do_note): ?>
                <div class="mt-4 p-2 border rounded shadow">
                    <i class="comment alternate outline flipped icon"></i>
                    <i class="">“<?php echo e($dispatchOrder->do_note); ?>”</i>
                </div>
            <?php endif; ?>
        </div>
     <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00)): ?>
<?php $component = $__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00; ?>
<?php unset($__componentOriginal33a12efce839cc4b9d6080135de0268eacc72b00); ?>
<?php endif; ?><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/components/dispatchorder-details.blade.php ENDPATH**/ ?>