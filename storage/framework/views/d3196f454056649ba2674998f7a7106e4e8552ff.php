<div>

    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, []); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'truck packing','header' => ''.e(__('stockmoves.stock_moves_create')).'']); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('buttons', null, []); ?> 
                    <button wire:click="addCard" class="ui icon mini teal button"
                        data-tooltip="<?php echo e(__('stockmoves.new_move')); ?>" data-variation="mini">
                        <i class="plus icon"></i>
                    </button>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707)): ?>
<?php $component = $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707; ?>
<?php unset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
        <div class="p-6 bg-cool-gray-50 rounded-t-md shadow-lg">
            <form class="ui tiny form flex flex-col gap-6">
                <?php $__empty_1 = true; $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div wire:key="<?php echo e($key); ?>" class="shadow-md rounded-md bg-white">
                        <div class="flex flex-col md:flex-row rounded-md relative">

                            <div wire:click.prevent="toggleDirection(<?php echo e($key); ?>)"
                                class="shadow md:rounded-l-md p-8 md:p-5 cursor-pointer <?php if($card['direction']): ?> bg-teal-100 <?php else: ?> bg-red-100 <?php endif; ?>">
                                <?php if($card['direction']): ?>
                                    <span class="" data-tooltip="<?php echo e(__('stockmoves.stock_in')); ?>"
                                        data-variation="mini">
                                        <i class="link green big plus icon"></i>
                                    </span>
                                <?php else: ?>
                                    <span class="" data-tooltip="<?php echo e(__('stockmoves.stock_out')); ?>"
                                        data-variation="mini">
                                        <i class="link red big minus icon"></i>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="flex-1 pt-3 px-5">
                                <div class="four fields">
                                    <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['placeholder' => ''.e(__('modelnames.product')).'','sClass' => 'search','noErrors' => true,'model' => 'cards.'.e($key).'.product_id','collection' => $this->products,'value' => 'id','text' => 'prd_code,prd_name','key' => 'selectProduct' . $key]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['iModel' => 'cards.'.e($key).'.amount','iPlaceholder' => ''.e(__('stockmoves.amount')).'','iType' => 'number','sClass' => 'basic','initnone' => true,'triggerOnEvent' => 'sm_product_selected'.e($key).'','model' => 'cards.'.e($key).'.unit_id','dataSource' => 'units.'.e($key).'','key' => 'units' . $key,'value' => 'id','text' => 'name','placeholder' => ''.e(__('modelnames.unit')).'','noErrors' => true]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                                    <?php if($card['lotNumberAreaType'] === 'input'): ?>
                                        <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['model' => 'cards.'.e($key).'.lot_number','placeholder' => ''.e(__('stockmoves.lot_number')).'','noErrors' => true]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                                    <?php elseif($card['lotNumberAreaType'] === 'dropdown'): ?>
                                        <div class="field pt-1">
                                            <?php if (isset($component)) { $__componentOriginal9664ac210be45add4be058f3177c16028511e71a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Select::class, ['model' => 'cards.'.e($key).'.lot_number','collection' => $lotNumbers,'collectionKey' => $key]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['value' => 'text']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a)): ?>
<?php $component = $__componentOriginal9664ac210be45add4be058f3177c16028511e71a; ?>
<?php unset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a); ?>
<?php endif; ?>
                                        </div>
                                        
                                    <?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Datepicker::class, ['model' => 'cards.' . $key . '.datetime','type' => 'date','uniqueKey' => $key,'initialDate' => isset($cards[$key]['datetime']) ? $cards[$key]['datetime'] : null]); ?>
<?php $component->withName('datepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172)): ?>
<?php $component = $__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172; ?>
<?php unset($__componentOriginal54df0c0713cfe5543a46b928f9fa33a6751a5172); ?>
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
                    <?php if (isset($component)) { $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Placeholder::class, ['icon' => 'blue truck packing']); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <span><?php echo e(__('stockmoves.use_add_button_to_make_stock_move')); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71)): ?>
<?php $component = $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71; ?>
<?php unset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71); ?>
<?php endif; ?>
                <?php endif; ?>

            </form>
        </div>

        <?php if (isset($component)) { $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormButtons::class, ['submit' => 'submit()']); ?>
<?php $component->withName('form-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'p-5 shadow-md']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8340eb01f00535543c6958ab683a31712450bfd)): ?>
<?php $component = $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd; ?>
<?php unset($__componentOriginale8340eb01f00535543c6958ab683a31712450bfd); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorArea::class, []); ?>
<?php $component->withName('error-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406)): ?>
<?php $component = $__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406; ?>
<?php unset($__componentOriginal5cfaa8bc6dc55b1e97de288800615609b0b08406); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3)): ?>
<?php $component = $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3; ?>
<?php unset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3); ?>
<?php endif; ?>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/stock-moves/form.blade.php ENDPATH**/ ?>