
    
        
            
                
                <div class="flex flex-col gap-5 border-dashed border border-blue-300 p-3 rounded hover:border-blue-500 ease-in-out duration-200">
                    <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div wire:key="card_<?php echo e($key); ?>" class="">
                            <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Card::class, ['atClose' => 'removeCard('.e($key).')']); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                 <?php $__env->slot('square', null, []); ?> 
                                    
                                    <i class="blue large shipping fast icon"></i>
                                 <?php $__env->endSlot(); ?>
                                <div class="px-4 flex-1 ui form mini">
                                    <div class="pt-2 equal width fields">
                                        <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['model' => 'cards.'.e($key).'.product_id','collection' => $this->products,'value' => 'id','text' => 'prd_code,prd_name','sClass' => 'search','noErrors' => true,'placeholder' => ''.e(__('products.product')).'','sId' => 'dp_product_'.e($key).'']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['iType' => 'number','iModel' => 'cards.'.e($key).'.dp_amount','iPlaceholder' => ''.e(__('common.amount')).'','placeholder' => ''.e(__('units.unit')).'','sClass' => 'basic','noErrors' => true,'model' => 'cards.'.e($key).'.unit_id','triggerOnEvent' => 'sp_product_selected'.e($key).'','dataSource' => 'cards.'.e($key).'.units','value' => 'id','text' => 'name','sId' => 'sp_unit_id_'.e($key).'']); ?>
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
                                        


                                        

                                    </div>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex justify-between items-center">
                        <?php if($this->getCountFilledCards()): ?>
                            <span class="text-sm text-ease">
                                <i class="edit icon"></i>
                                <?php echo e(__('dispatchorders.count_dispatch_product_selected', ['count' => $this->getCountFilledCards()])); ?>

                            </span>
                        <?php else: ?>
                            <span class="text-sm text-ease-red font-bold">
                                <?php echo e(__('dispatchorders.please_select_products_to_be_dispatched')); ?>...
                            </span> 
                        <?php endif; ?> 
                        <button wire:click.prevent="addCard()" class="ui blue mini icon button">
                            <i class="large shipping fast icon"></i>
                            <i class="plus icon"></i>
                        </button>
                    </div>
                </div>
            
        
    






                            
                    

                    <?php /**PATH /var/www/html/resources/views/web/sections/dispatchorders/create/specify-products.blade.php ENDPATH**/ ?>