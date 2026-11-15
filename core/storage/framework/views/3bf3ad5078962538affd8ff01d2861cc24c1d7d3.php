
<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?php echo e($general->siteName(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- CSS -->
    <link href="<?php echo e(asset('assets/global/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/css/all.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="/assets/templates/basic/css/vendor/nice-select.css">
    <link rel="stylesheet" href="/assets/templates/basic/css/vendor/slick.css">
    <link rel="stylesheet" href="/assets/templates/dark_gold/css/style.css">
    <!-- JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <?php echo $__env->yieldPushContent('style-lib'); ?>

    <?php echo $__env->yieldPushContent('style'); ?>


    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/color.php')); ?>?color1=<?php echo e($general->base_color); ?>&color2=<?php echo e($general->secondary_color); ?>">
    <style>
        .language .nic-select , .language .nice-select {
            height: 32px !important;
            width: 53px !important;
            line-height: 30px !important;
            padding-left: 2px !important;
            padding-right: 2px !important;
            border-radius:5px !important;
        }
        .loader-n {
            /* background: #<?php echo e($general->base_color); ?>; */
            background: #292211;
        }
    </style>
    <!-- Custom Css -->
    <?php echo $__env->make('templates.dark_gold.layouts.custom.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <?php echo $__env->yieldPushContent('fbComment'); ?>


    <div id="loader" style="display: block;">
        <div class="loader-n">
            <div class="l-one"></div>
            <div class="l-two"></div>
          </div>
    </div>

    <?php echo $__env->yieldContent('panel'); ?>


    <!-- JS -->
    <script src="<?php echo e(asset('assets/global/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/global/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="/assets/templates/basic/js/vendor/lightcase.js"></script>
    <script src="/assets/templates/basic/js/vendor/jquery.nice-select.min.js"></script>
    <script src="/assets/templates/basic/js/vendor/slick.min.js"></script>
    <script src="/assets/templates/basic/js/vendor/wow.min.js"></script>
    <script src="/assets/templates/basic/js/app.js"></script>

    <?php echo $__env->yieldPushContent('script-lib'); ?>

    <?php echo $__env->yieldPushContent('script'); ?>

    <?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- dark_gold Js -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/assets/templates/dark_gold/js/plugins/splide/splide.min.js"></script>
    <script src="/assets/templates/dark_gold/js/base.js"></script>
    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "<?php echo e(route('home')); ?>/change/" + $(this).val();
            });

            var inputElements = $('input,select');
            $.each(inputElements, function(index, element) {
                element = $(element);
                var type = element.attr('type');
                if (type != 'checkbox') {
                    element.closest('.form-group').find('label').attr('for', element.attr('name'));
                    element.attr('id', element.attr('name'))
                }
            });

            $('.policy').on('click', function() {
                $.get('<?php echo e(route('cookie.accept')); ?>', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            $.each($('input, select, textarea'), function(i, element) {

                var elementType = $(element);
                if(elementType.attr('type') != 'checkbox'){
                    if (element.hasAttribute('required')) {
                        $(element).closest('.form-group').find('label').addClass('required');
                    }
                }

            });

            $('.showFilterBtn').on('click', function() {
                $('.responsive-filter-card').slideToggle();
            });

            Array.from(document.querySelectorAll('table')).forEach(table => {
                let heading = table.querySelectorAll('thead tr th');
                Array.from(table.querySelectorAll('tbody tr')).forEach((row) => {
                    Array.from(row.querySelectorAll('td')).forEach((colum, i) => {
                        colum.setAttribute('data-label', heading[i].innerText)
                    });
                });
            });

        })(jQuery);
    </script>

</body>

</html>
<?php /**PATH /home/ptctheme/d4.superearning.online/core/resources/views/templates/dark_gold/layouts/app.blade.php ENDPATH**/ ?>