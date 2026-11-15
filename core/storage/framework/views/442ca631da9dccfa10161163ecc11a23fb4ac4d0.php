    <!-- footer section start -->
    <div class="appBottomMenu">
        <a href="/" class="item">
            <div class="col">
                
                <img height="27px" src="<?php echo e(asset('assets/images/2d-icon/gold/home.png')); ?>" alt="">
                <strong><?php echo app('translator')->get('Home'); ?></strong>
            </div>
        </a>
        <a href="<?php echo e(route('user.ptc.index')); ?>" class="item ">
            <div class="col">
                
                <img height="27px" src="<?php echo e(asset('assets/images/2d-icon/gold/task-2.png')); ?>" alt="">
                <strong>Task</strong>
            </div>
        </a>
        <a href="<?php echo e(route('plans')); ?>" class="item " alt="<?php echo app('translator')->get('Plans'); ?>">
            
            <img style="margin-top: -30px" height="55px" src="<?php echo e(asset('assets/images/2d-icon/gold/vip.png')); ?>" alt="">
        </a>
        <a href="<?php echo e(route('ticket.index')); ?>" class="item ">
            <div class="col">
                
                <img height="27px" src="<?php echo e(asset('assets/images/2d-icon/gold/contact.png')); ?>" alt="">
                <strong><?php echo app('translator')->get('Contact'); ?></strong>
            </div>
        </a>
        <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('user.login')); ?>" class="item">
            <div class="col">
                
                <img height="27px" src="<?php echo e(asset('assets/images/2d-icon/gold/login.png')); ?>" alt="">
                <strong><?php echo app('translator')->get('Login'); ?></strong>
            </div>
        </a>
        <?php else: ?>
        <a href="<?php echo e(route('user.home')); ?>" class="item">
            <div class="col">
                
                <img height="27px" src="<?php echo e(asset('assets/images/2d-icon/gold/user.png')); ?>" alt="">
                <strong>Profile</strong>
            </div>
        </a>
        <?php endif; ?>
    </div>
    <!-- footer section end -->
<?php /**PATH /home/ptctheme/d4.superearning.online/core/resources/views/templates/dark_gold/partials/footer.blade.php ENDPATH**/ ?>