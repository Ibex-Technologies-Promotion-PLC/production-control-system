    <div class="flex items-center ">

        <!-- Profile dropdown -->
        <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">
            <div>
                <button x-on:click="show = !show" type="button" class="max-w-xs  rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <p><?php echo e(ucfirst(config('app.locale'))); ?></p>
                </button>
            </div>

            <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <?php $__currentLoopData = config('app.available_locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale_name => $available_locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/language/<?php echo e($available_locale); ?>" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"><?php echo e(ucfirst($locale_name)); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div><?php /**PATH /var/www/html/resources/views/web/layouts/partials/language_switcher.blade.php ENDPATH**/ ?>