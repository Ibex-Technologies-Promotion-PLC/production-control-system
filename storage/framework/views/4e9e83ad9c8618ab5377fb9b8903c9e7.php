
<div class="px-2 py-2 shadow bg-white relative">
    <div class="flex justify-between items-center">

        <div class="">
            <i class="link hamburger icon hover:text-red-600" @click="sidebar = !sidebar"></i>
        </div>


        <div class="flex gap-4">
            <div>
            <?php echo $__env->make('web.layouts.partials.language_switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div>
                <i class="large link bell icon"></i>
            </div>
            <div>
                <i class="large link envelope icon"></i>
            </div>
            <div class="relative" x-data="{userModal: false}" x-cloak>
                <div @click="userModal = ! userModal">
                    <i class="large link fingerprint icon"></i>
                </div>
                <div x-show="userModal" @click.away="userModal = false" 
                    class="absolute right-0 mt-1 z-40  border shadow bg-white rounded flex flex-col " style="min-width: 15rem;">
                
                    <div class="border-b border-dashed px-3 py-2 text-ease cursor-pointer hover:bg-gray-100">
                        <i class="user icon"></i>
                        <span><?php echo e(auth()->user()->name); ?></span>
                    </div>
                    
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage users')): ?>
                        <a href="<?php echo e(route('users.index')); ?>" class="border-b border-dashed px-3 py-2 bg-red-800 text-white hover:bg-red-500 hover:text-white cursor-pointer">
                            <i class="users icon"></i>
                            <span><?php echo e(__('manage_users')); ?></span>
                        </a>
                        <a href="<?php echo e(route('roles.index')); ?>"  class="border-b border-dashed px-3 py-2 bg-red-800 text-white hover:bg-red-500 hover:text-white cursor-pointer">
                            <i class="dna icon"></i>
                            <span><?php echo e(__('define_roles')); ?></span>
                        </a>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('logout')); ?>" class="p-2 text-center">
                        <?php echo csrf_field(); ?>
                        <span><?php echo e(__('auth.logout')); ?></span>
                        <button>
                            <i class="icon circular power cursor-pointer"></i>
                        </button>
                    </form>

                </div>
            </div>
        </div>

        
    </div>
</div>




<?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/web/layouts/partials/topbar.blade.php ENDPATH**/ ?>