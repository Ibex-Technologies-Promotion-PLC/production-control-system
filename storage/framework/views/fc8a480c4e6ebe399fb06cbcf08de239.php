<div class="shadow lg:w-96 border-r h-full flex flex-col">

    <div class="bg-white">
        <div class="h-40 p-5 flex justify-center flex-shrink-0 shadow-lg relative border-b border-indigo-200">
            <div class="text-center pt-6 flex-1">
                <!-- <p class="text-ease border-b"><?php echo e(__('staff_position')); ?></p> -->
            </div>
            <div class="flex-shrink-0">
                <a href="<?php echo e(url('user/profile')); ?>">
                    <?php if (isset($component)) { $__componentOriginalcc5bfcbd6db13d5da26852cb757b9cf7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc5bfcbd6db13d5da26852cb757b9cf7 = $attributes; } ?>
<?php $component = App\View\Components\CircleImage::resolve(['height' => 'h-20 w-20'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('circle-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CircleImage::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc5bfcbd6db13d5da26852cb757b9cf7)): ?>
<?php $attributes = $__attributesOriginalcc5bfcbd6db13d5da26852cb757b9cf7; ?>
<?php unset($__attributesOriginalcc5bfcbd6db13d5da26852cb757b9cf7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc5bfcbd6db13d5da26852cb757b9cf7)): ?>
<?php $component = $__componentOriginalcc5bfcbd6db13d5da26852cb757b9cf7; ?>
<?php unset($__componentOriginalcc5bfcbd6db13d5da26852cb757b9cf7); ?>
<?php endif; ?>
                </a>
                <p class="text-center pt-2 font-bold"><?php echo e($user->name); ?></p>
            </div>
            <div class="text-center pt-6 flex-1 flex-shrink-0">
                <p class="text-ease border-b text-gray-300"><?php echo e($user->roles->first()->name); ?></p>
            </div>
        </div>

        <div class="h-20 p-3 px-5 flex justify-between items-center bg-gradient-to-b from-white to-gray-100">

            <a href="<?php echo e(route('work-orders.create')); ?>" data-tooltip="<?php echo e(__('workorders.create_work_order')); ?>"
                data-position="top left" data-variation="mini">
                <i class="large link project diagram icon"></i>
            </a>
            <a href="<?php echo e(route('stock-moves.create')); ?>" data-tooltip="<?php echo e(__('stockmoves.stock_moves_create')); ?>"
                data-position="top left" data-variation="mini">
                <i class="large link dolly flatbed icon"></i>
            </a>
            <a href="<?php echo e(route('inventory.index')); ?>">
                <i class="large link warehouse icon"></i>
            </a>
            <a href="<?php echo e(route('work-orders.daily')); ?>">
                <i class="large link setting icon"></i>
            </a>



        </div>

    </div>




    <div class="h-full bg-white overflow-x-hidden shadow-md border-t">
        <div class="flex flex-col ">
            <?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div x-data="{ submenu: false, submenuConfirm: false }" class="border-b border-dotted">

                <div
                    class="pl-4 flex ease-in-out duration-200 <?php if($key === $activeMenuGroupKey): ?> bg-orange-500 <?php else: ?> hover:bg-indigo-50 <?php endif; ?>">
                    <a href="<?php echo e(route($menu['name'])); ?>"
                        class="py-1 <?php if(!array_key_exists('submenus', $menu)): ?> flex-1 <?php endif; ?>  <?php if($key === $activeMenuGroupKey): ?> text-white <?php endif; ?>">
                        <div class="h-8 flex items-center">
                            <div><i
                                    class="<?php echo e($menu['icon']); ?> <?php if($key === $activeMenuGroupKey): ?> text-white <?php else: ?> text-gray-600 <?php endif; ?>"></i>
                            </div>
                            <div class="pl-2">
                                <p
                                    class="font-extrabold <?php if($key === $activeMenuGroupKey): ?> text-white <?php else: ?> text-gray-600 <?php endif; ?>">
                                    <?php echo e(__($menu['label'])); ?>

                                </p>
                            </div>
                        </div>
                    </a>
                    <?php if(array_key_exists('submenus', $menu)): ?>
                    <div @click="submenu = ! submenu; submenuConfirm = true;"
                        class="flex justify-end items-center cursor-pointer flex-1 text-right">
                        <div class="pr-2">
                            <i
                                class="caret down icon <?php if($key === $activeMenuGroupKey): ?> text-white <?php else: ?> text-gray-600 <?php endif; ?>"></i>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if(array_key_exists('submenus', $menu)): ?>
                <div x-show="submenu || ('<?php echo e($key); ?>' === '<?php echo e($activeMenuGroupKey); ?>') && ! submenuConfirm"
                    class="shadow-inner bg-cool-gray-50 flex">
                    <div class="border-r border-orange-300 pr-6"></div>
                    <div class="flex-1">
                        <?php $__currentLoopData = $menu['submenus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="flex justify-between border-b border-dashed last:border-b-0 hover:bg-blue-100">
                            <div class="flex-1 px-4 font-bold cursor-pointer">
                                <a href="<?php echo e(route($submenu['name'])); ?>">
                                    <div
                                        class="flex items-center py-2 <?php if(route($submenu['name']) == request()->url()): ?> text-orange-500 <?php else: ?> text-gray-600 <?php endif; ?>">
                                        <div><i class="<?php echo e($submenu['icon']); ?> "></i></div>
                                        <div class="pl-2">
                                            <p class="font-extrabold"><?php echo e(__($submenu['label'])); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php if(route($submenu['name']) == request()->url()): ?>
                            <div class="flex items-center justify-center pr-3">
                                <div class="p-2 rounded-full bg-orange-500 shadow"></div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    
    </div>



    <div class="h-20 p-3 flex justify-between items-center">
        <div class="text-sm text-center text-gray-500">
            <p><?php echo e(__('auth.last_login')); ?> <?php echo e(auth()->user()->logedinAt()->diffForHumans()); ?></p>
            <!-- <p>Ve bunun gibi loglar...</p> -->
        </div>
        <button class="focus:outline-none">
            <i class="icon blue link circular large lock"></i>
        </button>
    </div>


</div>






<script>
    $('document').ready(function() {
        $('.sidebardrop').dropdown();
    })
</script><?php /**PATH /var/www/html/resources/views/web/layouts/partials/sidebar.blade.php ENDPATH**/ ?>