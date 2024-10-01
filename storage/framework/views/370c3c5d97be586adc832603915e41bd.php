<div>
    <?php if (isset($component)) { $__componentOriginald033566f468fc7bb3a8d0f946fdab616 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald033566f468fc7bb3a8d0f946fdab616 = $attributes; } ?>
<?php $component = App\View\Components\Content::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\PageHeader::resolve(['icon' => 'truck packing','header' => ''.e(__('stockmoves.stock_moves_create')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('buttons', null, []); ?> 
                    <button wire:click="addCard" class="ui icon mini teal button"
                        data-tooltip="<?php echo e(__('stockmoves.new_move')); ?>" data-variation="mini">
                        <i class="plus icon"></i>
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
        <div class="p-6 bg-cool-gray-50 rounded-t-md shadow-lg">
            <form class="ui tiny form flex flex-col gap-6">
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div wire:key="<?php echo e($key); ?>" class="shadow-md rounded-md bg-white">
                        <div class="flex flex-col md:flex-row rounded-md relative">
                            <div wire:click.prevent="toggleDirection(<?php echo e($key); ?>)"
                                class="shadow md:rounded-l-md p-8 md:p-5 cursor-pointer <?php echo e($card['direction'] ? 'bg-teal-100' : 'bg-red-100'); ?>">
                                <!--[if BLOCK]><![endif]--><?php if($card['direction']): ?>
                                    <span class="" data-tooltip="<?php echo e(__('stockmoves.stock_in')); ?>"
                                        data-variation="mini">
                                        <i class="link green big plus icon"></i>
                                    </span>
                                <?php else: ?>
                                    <span class="" data-tooltip="<?php echo e(__('stockmoves.stock_out')); ?>"
                                        data-variation="mini">
                                        <i class="link red big minus icon"></i>
                                    </span>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                            <div class="flex-1 pt-3 px-5">
                                <div class="four fields">
                                    <?php if (isset($component)) { $__componentOriginal4a0aa0dbff261054ba83150e9d676aae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae = $attributes; } ?>
<?php $component = App\View\Components\Dropdown::resolve(['placeholder' => ''.e(__('modelnames.product')).'','sClass' => 'search','noErrors' => true,'model' => 'cards.'.e($key).'.product_id','collection' => $this->products,'value' => 'id','text' => 'prd_code,prd_name','key' => 'selectProduct' . $key] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                                    
                                    <?php if (isset($component)) { $__componentOriginal4a0aa0dbff261054ba83150e9d676aae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae = $attributes; } ?>
<?php $component = App\View\Components\Dropdown::resolve(['iModel' => 'cards.'.e($key).'.amount','iPlaceholder' => ''.e(__('stockmoves.amount')).'','iType' => 'number','sClass' => 'basic','initnone' => true,'triggerOnEvent' => 'sm_product_selected'.e($key).'','model' => 'cards.'.e($key).'.unit_id','dataSource' => 'units.'.e($key).'','key' => 'units' . $key,'value' => 'id','text' => 'name','placeholder' => ''.e(__('modelnames.unit')).'','noErrors' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                                    
                                    <!--[if BLOCK]><![endif]--><?php if($card['lotNumberAreaType'] === 'input'): ?>
                                        <?php if (isset($component)) { $__componentOriginal786b6632e4e03cdf0a10e8880993f28a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a = $attributes; } ?>
<?php $component = App\View\Components\Input::resolve(['model' => 'cards.'.e($key).'.lot_number','placeholder' => ''.e(__('stockmoves.lot_number')).'','noErrors' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                                    <?php elseif($card['lotNumberAreaType'] === 'dropdown'): ?>
                                        <div class="field pt-1">
                                            <?php if (isset($component)) { $__componentOriginalbf566fc26595b9cc6779e170beef8a5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbf566fc26595b9cc6779e170beef8a5a = $attributes; } ?>
<?php $component = App\View\Components\Select::resolve(['model' => 'cards.'.e($key).'.lot_number','collection' => $lotNumbers,'collectionKey' => $key] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'text']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbf566fc26595b9cc6779e170beef8a5a)): ?>
<?php $attributes = $__attributesOriginalbf566fc26595b9cc6779e170beef8a5a; ?>
<?php unset($__attributesOriginalbf566fc26595b9cc6779e170beef8a5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf566fc26595b9cc6779e170beef8a5a)): ?>
<?php $component = $__componentOriginalbf566fc26595b9cc6779e170beef8a5a; ?>
<?php unset($__componentOriginalbf566fc26595b9cc6779e170beef8a5a); ?>
<?php endif; ?>
                                        </div>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    
                                    <?php if (isset($component)) { $__componentOriginalef9a8bac6e25ee60184eacd3a683aaa4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef9a8bac6e25ee60184eacd3a683aaa4 = $attributes; } ?>
<?php $component = App\View\Components\Datepicker::resolve(['model' => 'cards.' . $key . '.datetime','type' => 'date','uniqueKey' => $key,'initialDate' => isset($cards[$key]['datetime']) ? $cards[$key]['datetime'] : null] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('datepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Datepicker::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                                </div>
                            </div>
                            <button wire:click.prevent="removeCard(<?php echo e($key); ?>)"
                                class="focus:outline-none absolute top-0 right-0 -mt-2 -mr-3 hover:opacity-100 opacity-50">
                                <i class="red shadow rounded-full cancel icon"></i>
                            </button>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php if (isset($component)) { $__componentOriginal031f7343d586feb3a69898f559e89477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal031f7343d586feb3a69898f559e89477 = $attributes; } ?>
<?php $component = App\View\Components\Placeholder::resolve(['icon' => 'blue truck packing'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Placeholder::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <span><?php echo e(__('stockmoves.use_add_button_to_make_stock_move')); ?></span>
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
            </form>
        </div>
        <?php if (isset($component)) { $__componentOriginalaec4e6c11b019d144a9ab2982f3b684f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f = $attributes; } ?>
<?php $component = App\View\Components\FormButtons::resolve(['submit' => 'submit()'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FormButtons::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-5 shadow-md']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f)): ?>
<?php $attributes = $__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f; ?>
<?php unset($__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaec4e6c11b019d144a9ab2982f3b684f)): ?>
<?php $component = $__componentOriginalaec4e6c11b019d144a9ab2982f3b684f; ?>
<?php unset($__componentOriginalaec4e6c11b019d144a9ab2982f3b684f); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55 = $attributes; } ?>
<?php $component = App\View\Components\ErrorArea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('error-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ErrorArea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55)): ?>
<?php $attributes = $__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55; ?>
<?php unset($__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55)): ?>
<?php $component = $__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55; ?>
<?php unset($__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55); ?>
<?php endif; ?>
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
</div>
<?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/livewire/stock-moves/form.blade.php ENDPATH**/ ?>