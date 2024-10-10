<?php if (isset($component)) { $__componentOriginaleec1da765ed3218d03288cbfb54cb4e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5 = $attributes; } ?>
<?php $component = App\View\Components\Span::resolve(['tooltip' => ''.e($company->companyType()).'','position' => 'top left'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Span::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!--[if BLOCK]><![endif]--><?php if($company->cmp_supplier && $company->cmp_customer): ?>
        <i class="purple exchange icon"></i>
    <?php elseif($company->cmp_supplier): ?>
        <i class="blue arrow right icon"></i>
    <?php elseif($company->cmp_customer): ?>
        <i class="green arrow left icon"></i>
    <?php else: ?>
        <i class="question mark icon"></i>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5)): ?>
<?php $attributes = $__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5; ?>
<?php unset($__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleec1da765ed3218d03288cbfb54cb4e5)): ?>
<?php $component = $__componentOriginaleec1da765ed3218d03288cbfb54cb4e5; ?>
<?php unset($__componentOriginaleec1da765ed3218d03288cbfb54cb4e5); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/web/sections/companies/index/company-type.blade.php ENDPATH**/ ?>