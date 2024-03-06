<div>
    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, ['theme' => 'green']); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 

            <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'shipping fast','header' => ''.e(__('dispatchorders.do_daily')).'']); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                
                     <?php $__env->slot('buttons', null, []); ?> 
                        <button wire:click="openDoFormModal" class="ui icon mini teal button"
                            data-tooltip="<?php echo e(__('common.add_new')); ?>" data-variation="mini">
                            <i class="white plus icon"></i>
                        </button>
                     <?php $__env->endSlot(); ?>
                        
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707)): ?>
<?php $component = $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707; ?>
<?php unset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707); ?>
<?php endif; ?>
                

         <?php $__env->endSlot(); ?>
        <div class="p-4">
            
            <div class="flex justify-between">
                <div class="font-bold text-sm">
                    status
                </div>
                <div>
                    <span class="text-xs text-ease"><?php echo e(date('d.m.Y')); ?></span>
                </div>
            </div>

            <table class="ui table basic">
                <thead>
                    <tr>
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
<?php $component->withAttributes(['class' => 'collapsing']); ?><?php echo e(__('validation.attributes.company_id')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'right aligned']); ?><?php echo e(__('validation.attributes.do_number')); ?> <?php echo $__env->renderComponent(); ?>
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
                    </tr>
                </thead>

                <?php if (isset($component)) { $__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tbody::class, []); ?>
<?php $component->withName('tbody'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <?php $__empty_1 = true; $__currentLoopData = $dispatchOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dispatchOrder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                        <?php switch($dispatchOrder):
                            case ($dispatchOrder->isApproved()): ?>
                                <?php echo $__env->make('web.sections.dispatchorders.daily.table-rows.do-case-approved', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case ($dispatchOrder->isCompleted()): ?>
                                <?php echo $__env->make('web.sections.dispatchorders.daily.table-rows.do-case-completed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case ($dispatchOrder->isInProgress()): ?>
                                <?php echo $__env->make('web.sections.dispatchorders.daily.table-rows.do-case-inprogress', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case ($dispatchOrder->isActive()): ?>
                                <?php echo $__env->make('web.sections.dispatchorders.daily.table-rows.do-case-active', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case ($dispatchOrder->isSuspended()): ?>
                                <?php echo $__env->make('web.sections.dispatchorders.daily.table-rows.do-case-suspended', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php default: ?>
                        <?php endswitch; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="10">
                            <?php if (isset($component)) { $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Placeholder::class, ['icon' => 'shipping fast']); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                <?php echo e(__('dispatchorders.there_are_no_dispatchorders_today')); ?>

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
            </table>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3)): ?>
<?php $component = $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3; ?>
<?php unset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3); ?>
<?php endif; ?>






    <?php if($approveModal && $tobeApprovedDispatchOrder): ?>
        <div x-data="{approveModal: <?php if ((object) ('approveModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('approveModal'->value()); ?>')<?php echo e('approveModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('approveModal'); ?>')<?php endif; ?>}" x-cloak>
            <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'approveModal']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'p-2 bg-gray-200']); ?>

                <div class="shadow-md bg-white rounded relative">

                    <div class="p-4 flex flex-col gap-5 shadow-md">
                        <?php $__currentLoopData = $tobeApprovedDispatchOrder->dispatchProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div x-data="{reservedLots: false}" class="border p-4 border-red-400 rounded cursor-pointer hover:bg-cool-gray-50 border-dashed" @click="reservedLots = ! reservedLots">
                                <div class="flex justify-between text-ease cursor-pointer"  >
                                    <span><?php echo e($dp->product->prd_name); ?></span>
                                    <div>
                                        <span><?php echo e($dp->dp_amount); ?> <?php echo e($dp->unit->name); ?></span>
                                        <span x-show="!reservedLots" class="pl-6"><i class="caret right icon"></i></span>
                                        <span x-show="reservedLots" class="pl-6"><i class="caret down icon"></i></span>
                                    </div>
                                </div>
                                <div x-show="reservedLots" class="pt-2">
                                    <?php if (isset($component)) { $__componentOriginalb24c34dc54a20574ee3327c913afea4466d7c45e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ReservedStocksTable::class, ['reservations' => $dp->reservedStocks,'noHead' => true,'noProduct' => true]); ?>
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
                    
                        
                    <div class="p-3">
                        <div class="ui mini buttons w-full">
                            <button wire:click.prevent @click="approveModal = false" class="ui mini button">
                                <?php echo e(__('common.cancel')); ?>

                            </button>
                            <button wire:click.prevent="approve()" class="ui orange mini button">
                                <?php echo e(__('common.confirm')); ?>

                            </button>
                        </div>
        
                    </div>

                </div>
                
                <div class="p-2 mt-2 text-xs text-ease shadow rounded bg-white border" x-data="{denyingExplanation: false}">
                    <span x-show="!denyingExplanation">
                        <span @click="denyingExplanation = true" class="text-red-600 text-sm font-bold cursor-pointer">
                            <?php echo e(__('common.deny')); ?>

                        </span> -
                        <span class="text-xs text-ease">
                            <?php echo e(__('dispatchorders.make_a_review_request')); ?>

                        </span>
                    </span>
                    <span x-show="denyingExplanation">
                        <span wire:click="deny()" class="text-red-600 text-sm font-bold cursor-pointer"><?php echo e(__('common.are_you_sure')); ?></span> - 
                        <span class="text-xs text-ease">
                            <?php echo e(__('dispatchorders.relevant_units_will_be_informed')); ?>

                        </span>
                    </span>
                </div>
                
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>


    <?php echo $__env->make('web.sections.dispatchorders.daily.form-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/livewire/dispatch-orders/daily/do-daily.blade.php ENDPATH**/ ?>