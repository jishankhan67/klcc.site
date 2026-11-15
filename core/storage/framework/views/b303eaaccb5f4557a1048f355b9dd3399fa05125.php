
<?php $__env->startSection('panel'); ?>
    <div class="page-wrapper">
        <?php echo $__env->make($activeTemplate.'partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(!request()->routeIs('home')): ?>
        <?php echo $__env->make($activeTemplate.'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
        
        <?php echo $__env->make($activeTemplate . 'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/goherdev/public_html/demo11.goherdevcoders.store/core/resources/views/templates/dark_gold/layouts/frontend.blade.php ENDPATH**/ ?>