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




        <?php echo \Livewire\Livewire::styles(); ?>


        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?php echo e(asset('js/semantic.min.js')); ?>"></script>
        
        
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

        
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
                            <?php if (isset($component)) { $__componentOriginal44ec645cc864dcaae355fc45d4a32bbdcb8903da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layouts\Partials\Sidebar::class, []); ?>
<?php $component->withName('layouts.partials.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44ec645cc864dcaae355fc45d4a32bbdcb8903da)): ?>
<?php $component = $__componentOriginal44ec645cc864dcaae355fc45d4a32bbdcb8903da; ?>
<?php unset($__componentOriginal44ec645cc864dcaae355fc45d4a32bbdcb8903da); ?>
<?php endif; ?>
                        </div>
                    </template>
                

                    <div class="flex-1 h-screen flex flex-col">

                        <div id="TOPBAR" class="border-b md:border-b-0">
                            <?php if (isset($component)) { $__componentOriginalc2d4ce6a3dfef01fde0f97044db0882997d0815a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layouts\Partials\Topbar::class, []); ?>
<?php $component->withName('layouts.partials.topbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2d4ce6a3dfef01fde0f97044db0882997d0815a)): ?>
<?php $component = $__componentOriginalc2d4ce6a3dfef01fde0f97044db0882997d0815a; ?>
<?php unset($__componentOriginalc2d4ce6a3dfef01fde0f97044db0882997d0815a); ?>
<?php endif; ?>
                        </div>

                        <div class="px-6 hidden md:block leading-loose border-b shadow bg-gray-50">
                            <?php if (isset($component)) { $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Breadcrumb::class, []); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280)): ?>
<?php $component = $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280; ?>
<?php unset($__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280); ?>
<?php endif; ?>
                        </div>
                        
                        <!-- Page Content -->
                        <div class="overflow-x-hidden flex flex-col flex-1">
                            
                            <div class="flex-1 border-b">
                                <?php if (isset($component)) { $__componentOriginalf0e204a57ebaa23e518a1739457c31a96ee960d5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InfoArea::class, []); ?>
<?php $component->withName('info-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf0e204a57ebaa23e518a1739457c31a96ee960d5)): ?>
<?php $component = $__componentOriginalf0e204a57ebaa23e518a1739457c31a96ee960d5; ?>
<?php unset($__componentOriginalf0e204a57ebaa23e518a1739457c31a96ee960d5); ?>
<?php endif; ?>
                                <?php echo e($slot); ?>

                            </div>
                            <div id="FOOTER" class="bg-white">
                                <?php if (isset($component)) { $__componentOriginale268eac9d61d56088f8ca84eb821f186b08328cb = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layouts\Partials\Footer::class, []); ?>
<?php $component->withName('layouts.partials.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale268eac9d61d56088f8ca84eb821f186b08328cb)): ?>
<?php $component = $__componentOriginale268eac9d61d56088f8ca84eb821f186b08328cb; ?>
<?php unset($__componentOriginale268eac9d61d56088f8ca84eb821f186b08328cb); ?>
<?php endif; ?>
                            </div>
                        </div>
                        
                    </div>

                </div>
                


        </div>

        <?php echo $__env->yieldPushContent('modals'); ?>
        <?php echo $__env->yieldPushContent('scripts'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>


        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tools.toaster', [])->html();
} elseif ($_instance->childHasBeenRendered('8ZW3w3r')) {
    $componentId = $_instance->getRenderedChildComponentId('8ZW3w3r');
    $componentTag = $_instance->getRenderedChildComponentTagName('8ZW3w3r');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8ZW3w3r');
} else {
    $response = \Livewire\Livewire::mount('tools.toaster', []);
    $html = $response->html();
    $_instance->logRenderedChild('8ZW3w3r', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        

        
        
    </body>
</html>


<?php /**PATH /var/www/html/resources/views/web/layouts/app.blade.php ENDPATH**/ ?>