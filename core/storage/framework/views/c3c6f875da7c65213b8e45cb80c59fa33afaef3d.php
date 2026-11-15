
<?php $__env->startSection('panel'); ?>
    <div class="page-wrapper">
        <?php echo $__env->make($activeTemplate.'partials.user_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make($activeTemplate.'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make($activeTemplate . 'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<style>
    .table thead th {
      color: #fff !important;
    }
    .badge--warning {
        background-color: #ffe900 !important;
    }
    .badge--danger {
        background-color: #ff2626 !important;
    }
    .badge--success {
        background-color: #13d63d !important;
    }
    .badge--dark {
        background-color: #020202 !important;
    }
    .badge--primary {
        background-color: #4705ff !important;
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/goherdev/public_html/demo11.goherdevcoders.store/core/resources/views/templates/dark_gold/layouts/master.blade.php ENDPATH**/ ?>