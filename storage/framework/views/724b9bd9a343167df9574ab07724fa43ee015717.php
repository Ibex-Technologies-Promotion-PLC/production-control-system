<?php if (isset($component)) { $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Span::class, ['tooltip' => ''.e($company->companyType()).'','position' => 'top left']); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if($company->cmp_supplier && $company->cmp_customer): ?>
        <i class="purple exchange icon"></i>
    <?php elseif($company->cmp_supplier): ?>
        <i class="blue arrow right icon"></i>
    <?php elseif($company->cmp_customer): ?>
        <i class="green arrow left icon"></i>
    <?php else: ?>
        <i class="question mark icon"></i>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca)): ?>
<?php $component = $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca; ?>
<?php unset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca); ?>
<?php endif; ?>
<?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/web/sections/companies/index/company-type.blade.php ENDPATH**/ ?>