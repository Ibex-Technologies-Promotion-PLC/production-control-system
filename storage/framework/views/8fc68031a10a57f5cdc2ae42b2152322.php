<div <?php echo e($attributes->merge(['class' => 'flex items-center justify-between px-2 pt-2 pb-4'])); ?>>

  <div class="flex-1">
      <h4 class="ui horizontal left aligned divider header">
        <?php if($header || $icon): ?>
            <?php if($icon): ?>
                <i class="<?php echo e($icon); ?> icon"></i>
            <?php endif; ?>
            <div class="content">
                <?php echo e(__($header)); ?>

                <div class="sub header"><?php echo e(__($subheader)); ?></div>
            </div>
        <?php else: ?>
            <?php echo e($customHeader); ?>

        <?php endif; ?>
      </h4>
  </div>

  <?php if($buttons): ?>
      <div class="pl-4 flex">
          <div class="shadow rounded-md">
              
                  <?php echo e($buttons); ?>

              
          </div>
      </div>
  <?php endif; ?>
  
</div><?php /**PATH /var/www/html/resources/views/components/page-header.blade.php ENDPATH**/ ?>