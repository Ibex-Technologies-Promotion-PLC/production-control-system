<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/semantic.min.css')); ?>">
        <?php echo $__env->yieldPushContent('styles'); ?>




        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?php echo e(asset('js/semantic.min.js')); ?>"></script>
        

        
        <script>
            function copy(id, message = 'Copied') {
                var text = document.getElementById(id).innerHTML
                var input = document.createElement('textarea');
                input.innerHTML = text;
                document.body.appendChild(input);
                input.select();
                var result = document.execCommand('copy');
                document.body.removeChild(input);
                alert(message);
            }
        </script>
        

        
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-blue-50 overflow-y-hidden">
            <!-- Page Heading -->
            

                <div class="flex" x-data="{sidebar: false}">

                    <template id="SIDEBAR"  x-if="!sidebar" x-cloak>
                        <div class="bg-white relative">
                            <?php if (isset($component)) { $__componentOriginal4c7540090e3f9649c7abef14e58409f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4c7540090e3f9649c7abef14e58409f3 = $attributes; } ?>
<?php $component = App\View\Components\Layouts\Partials\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.partials.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layouts\Partials\Sidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4c7540090e3f9649c7abef14e58409f3)): ?>
<?php $attributes = $__attributesOriginal4c7540090e3f9649c7abef14e58409f3; ?>
<?php unset($__attributesOriginal4c7540090e3f9649c7abef14e58409f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4c7540090e3f9649c7abef14e58409f3)): ?>
<?php $component = $__componentOriginal4c7540090e3f9649c7abef14e58409f3; ?>
<?php unset($__componentOriginal4c7540090e3f9649c7abef14e58409f3); ?>
<?php endif; ?>
                        </div>
                    </template>
                

                    <div class="flex-1 h-screen flex flex-col">

                        <div id="TOPBAR" class="border-b md:border-b-0">
                            <?php if (isset($component)) { $__componentOriginale63ef5e76ae44cb5c9e41196dbd2d6e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale63ef5e76ae44cb5c9e41196dbd2d6e3 = $attributes; } ?>
<?php $component = App\View\Components\Layouts\Partials\Topbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.partials.topbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layouts\Partials\Topbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale63ef5e76ae44cb5c9e41196dbd2d6e3)): ?>
<?php $attributes = $__attributesOriginale63ef5e76ae44cb5c9e41196dbd2d6e3; ?>
<?php unset($__attributesOriginale63ef5e76ae44cb5c9e41196dbd2d6e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale63ef5e76ae44cb5c9e41196dbd2d6e3)): ?>
<?php $component = $__componentOriginale63ef5e76ae44cb5c9e41196dbd2d6e3; ?>
<?php unset($__componentOriginale63ef5e76ae44cb5c9e41196dbd2d6e3); ?>
<?php endif; ?>
                        </div>

                        <div class="px-6 hidden md:block leading-loose border-b shadow bg-gray-50">
                            <?php if (isset($component)) { $__componentOriginal269900abaed345884ce342681cdc99f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal269900abaed345884ce342681cdc99f6 = $attributes; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Breadcrumb::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal269900abaed345884ce342681cdc99f6)): ?>
<?php $attributes = $__attributesOriginal269900abaed345884ce342681cdc99f6; ?>
<?php unset($__attributesOriginal269900abaed345884ce342681cdc99f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal269900abaed345884ce342681cdc99f6)): ?>
<?php $component = $__componentOriginal269900abaed345884ce342681cdc99f6; ?>
<?php unset($__componentOriginal269900abaed345884ce342681cdc99f6); ?>
<?php endif; ?>
                        </div>
                        
                        <!-- Page Content -->
                        <div class="overflow-x-hidden flex flex-col flex-1">
                            
                            <div class="flex-1 border-b">
                                <?php if (isset($component)) { $__componentOriginala8aaa306c53bb0aa46efef13d109d841 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8aaa306c53bb0aa46efef13d109d841 = $attributes; } ?>
<?php $component = App\View\Components\InfoArea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('info-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InfoArea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8aaa306c53bb0aa46efef13d109d841)): ?>
<?php $attributes = $__attributesOriginala8aaa306c53bb0aa46efef13d109d841; ?>
<?php unset($__attributesOriginala8aaa306c53bb0aa46efef13d109d841); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8aaa306c53bb0aa46efef13d109d841)): ?>
<?php $component = $__componentOriginala8aaa306c53bb0aa46efef13d109d841; ?>
<?php unset($__componentOriginala8aaa306c53bb0aa46efef13d109d841); ?>
<?php endif; ?>
                                <?php echo e($slot); ?>

                            </div>
                            <div id="FOOTER" class="bg-white">
                                <?php if (isset($component)) { $__componentOriginal1df0c3ee2b7cf979479bb4aaf89aa15d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1df0c3ee2b7cf979479bb4aaf89aa15d = $attributes; } ?>
<?php $component = App\View\Components\Layouts\Partials\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.partials.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layouts\Partials\Footer::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1df0c3ee2b7cf979479bb4aaf89aa15d)): ?>
<?php $attributes = $__attributesOriginal1df0c3ee2b7cf979479bb4aaf89aa15d; ?>
<?php unset($__attributesOriginal1df0c3ee2b7cf979479bb4aaf89aa15d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1df0c3ee2b7cf979479bb4aaf89aa15d)): ?>
<?php $component = $__componentOriginal1df0c3ee2b7cf979479bb4aaf89aa15d; ?>
<?php unset($__componentOriginal1df0c3ee2b7cf979479bb4aaf89aa15d); ?>
<?php endif; ?>
                            </div>
                        </div>
                        
                    </div>

                </div>
                


        </div>

        <?php echo $__env->yieldPushContent('modals'); ?>
        <?php echo $__env->yieldPushContent('scripts'); ?>

        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('tools.toaster', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3437951620-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        

        
        
    </body>
</html>


<?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>