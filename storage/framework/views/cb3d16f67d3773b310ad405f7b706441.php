<div>
    <?php if (isset($component)) { $__componentOriginald033566f468fc7bb3a8d0f946fdab616 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald033566f468fc7bb3a8d0f946fdab616 = $attributes; } ?>
<?php $component = App\View\Components\Content::resolve(['theme' => 'green'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\PageHeader::resolve(['icon' => 'shipping fast','header' => ''.e(__('dispatchorders.do_daily')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                
                     <?php $__env->slot('buttons', null, []); ?> 
                        <button wire:click="openDoFormModal" class="ui icon mini teal button"
                            data-tooltip="<?php echo e(__('common.add_new')); ?>" data-variation="mini">
                            <i class="white plus icon"></i>
                        </button>
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
                        <?php if (isset($component)) { $__componentOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2bda8ba956bbb8c07433dc54c5ccbf0 = $attributes; } ?>
<?php $component = App\View\Components\TheadItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TheadItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'collapsing center aligned']); ?><?php echo e(__('validation.attributes.do_status')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(__('dispatchorders.dispatch_address')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'collapsing']); ?><?php echo e(__('validation.attributes.company_id')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => 'right aligned']); ?><?php echo e(__('validation.attributes.do_number')); ?> <?php echo $__env->renderComponent(); ?>
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
                    </tr>
                </thead>

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
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $dispatchOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dispatchOrder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                        <!--[if BLOCK]><![endif]--><?php switch($dispatchOrder):
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
                        <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="10">
                            <?php if (isset($component)) { $__componentOriginal031f7343d586feb3a69898f559e89477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal031f7343d586feb3a69898f559e89477 = $attributes; } ?>
<?php $component = App\View\Components\Placeholder::resolve(['icon' => 'shipping fast'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Placeholder::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php echo e(__('dispatchorders.there_are_no_dispatchorders_today')); ?>

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
            </table>
        </div>
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






    <!--[if BLOCK]><![endif]--><?php if($approveModal && $tobeApprovedDispatchOrder): ?>
        <div x-data="{approveModal: <?php if ((object) ('approveModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('approveModal'->value()); ?>')<?php echo e('approveModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('approveModal'); ?>')<?php endif; ?>}" x-cloak>
            <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'approveModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-2 bg-gray-200']); ?>

                <div class="shadow-md bg-white rounded relative">

                    <div class="p-4 flex flex-col gap-5 shadow-md">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tobeApprovedDispatchOrder->dispatchProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <?php if (isset($component)) { $__componentOriginalb78862282687d60cbc65d5a37715399f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb78862282687d60cbc65d5a37715399f = $attributes; } ?>
<?php $component = App\View\Components\ReservedStocksTable::resolve(['reservations' => $dp->reservedStocks,'noHead' => true,'noProduct' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('reserved-stocks-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ReservedStocksTable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb78862282687d60cbc65d5a37715399f)): ?>
<?php $attributes = $__attributesOriginalb78862282687d60cbc65d5a37715399f; ?>
<?php unset($__attributesOriginalb78862282687d60cbc65d5a37715399f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb78862282687d60cbc65d5a37715399f)): ?>
<?php $component = $__componentOriginalb78862282687d60cbc65d5a37715399f; ?>
<?php unset($__componentOriginalb78862282687d60cbc65d5a37715399f); ?>
<?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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


    <?php echo $__env->make('web.sections.dispatchorders.daily.form-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div><?php /**PATH /var/www/html/resources/views/livewire/dispatch-orders/daily/do-daily.blade.php ENDPATH**/ ?>