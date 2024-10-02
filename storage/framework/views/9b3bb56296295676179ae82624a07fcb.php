
    
        
            
                
                <div class="flex flex-col gap-5 border-dashed border border-blue-300 p-3 rounded hover:border-blue-500 ease-in-out duration-200">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div wire:key="card_<?php echo e($key); ?>" class="">
                            <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['atClose' => 'removeCard('.e($key).')'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                 <?php $__env->slot('square', null, []); ?> 
                                    
                                    <i class="blue large shipping fast icon"></i>
                                 <?php $__env->endSlot(); ?>
                                <div class="px-4 flex-1 ui form mini">
                                    <div class="pt-2 equal width fields">
                                        <?php if (isset($component)) { $__componentOriginal4a0aa0dbff261054ba83150e9d676aae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a0aa0dbff261054ba83150e9d676aae = $attributes; } ?>
<?php $component = App\View\Components\Dropdown::resolve(['model' => 'cards.'.e($key).'.product_id','collection' => $this->products,'value' => 'id','text' => 'prd_code,prd_name','sClass' => 'search','noErrors' => true,'placeholder' => ''.e(__('products.product')).'','sId' => 'dp_product_'.e($key).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\Dropdown::resolve(['iType' => 'number','iModel' => 'cards.'.e($key).'.dp_amount','iPlaceholder' => ''.e(__('common.amount')).'','placeholder' => ''.e(__('units.unit')).'','sClass' => 'basic','noErrors' => true,'model' => 'cards.'.e($key).'.unit_id','triggerOnEvent' => 'sp_product_selected'.e($key).'','dataSource' => 'cards.'.e($key).'.units','value' => 'id','text' => 'name','sId' => 'sp_unit_id_'.e($key).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                        


                                        

                                    </div>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64)): ?>
<?php $attributes = $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64; ?>
<?php unset($__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64)): ?>
<?php $component = $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64; ?>
<?php unset($__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    <div class="flex justify-between items-center">
                        <!--[if BLOCK]><![endif]--><?php if($this->getCountFilledCards()): ?>
                            <span class="text-sm text-ease">
                                <i class="edit icon"></i>
                                <?php echo e(__('dispatchorders.count_dispatch_product_selected', ['count' => $this->getCountFilledCards()])); ?>

                            </span>
                        <?php else: ?>
                            <span class="text-sm text-ease-red font-bold">
                                <?php echo e(__('dispatchorders.please_select_products_to_be_dispatched')); ?>...
                            </span> 
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]--> 
                        <button wire:click.prevent="addCard()" class="ui blue mini icon button">
                            <i class="large shipping fast icon"></i>
                            <i class="plus icon"></i>
                        </button>
                    </div>
                </div>
            
        
    






                            
                    

                    <?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/web/sections/dispatchorders/create/specify-products.blade.php ENDPATH**/ ?>