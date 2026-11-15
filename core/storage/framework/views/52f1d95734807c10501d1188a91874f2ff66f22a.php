

<?php $__env->startSection('content'); ?>

<?php
    $banners = getContent('banner.element');
    $carouselfirst = 0;
    $notice = getContent('notice.content', true);
?>
<div id="appCapsule">
    <!-- hero-section start -->
    <div class="container pb-1 mt-2">
        <div id="carouselExampleIndicators" class="carousel slide pointer-event" data-bs-ride="carousel">
            <div style="height: 100%;" class="carousel-inner shadow rounded">
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php if($carouselfirst==0): ?>active <?php endif; ?>">
                    <img src="<?php echo e(asset('assets/images/frontend/banner/'.$banner->data_values->image)); ?>" class="d-block w-100" alt="<?php echo e(__($banner->data_values->heading)); ?>">
                </div>
                <?php
                $carouselfirst = 2;
                ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- hero-section end -->
    <div class="container mt-1 pb-0">
        <div class="row rounded bg--primary shadow-sm">
            <div class="col-1 pt-1 mb-0" align="center">
                <ion-icon name="volume-high-outline" style="font-size: 20px;color: #ffffff" role="img" class="md hydrated" aria-label="volume high outline"></ion-icon>
            </div>
            <div class="col-11">
                <marquee behavior="scroll" direction="left">
                    <h5 class="align-middle text-light mt-1 mb-0"><?php echo e(@$notice->data_values->notice); ?></h5>
                </marquee>
            </div>
        </div>
    </div>
    <div class="container pt-2">
        <div class="row">
            <div class="col-6" align="center">
                <a href="/ticket">
                    <div style="border-radius: 6px;" class="stat-box row-6 p-2">
                        <h6>Help Center</h6>
                        <img src="<?php echo e(asset('assets/images/2d-icon/3/two-hand.png')); ?>" alt="help-center" width="35%" border="0">
                    </div>
                </a>
                <a href="/blog">
                    <div style="border-radius: 6px;" class="stat-box row-6 p-2 mt-2">
                        <h6>Blog</h6>
                        <img src="<?php echo e(asset('assets/images/2d-icon/3/laptop-www.png')); ?>" alt="help-center" width="36%" border="0">
                    </div>
                </a>
            </div>
            <div style="align-items: center;" class="col-6" align="left">
                <a href="/user/referred-users">
                    <div style="height: 100%; border-radius: 6px;" class="stat-box row-6 p-2">
                        <h6>Invite Firends</h6> <br>
                        <center><img src="<?php echo e(asset('assets/images/2d-icon/3/two-person.png')); ?>" style="bottom:5px;" alt="help-center" width="63%" border="0"></center>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-2">
            <?php
                $aboutCaption = getContent('about.content',true);
            ?>
            <div class="col-6" align="center">
                <a href="<?php echo e(__($aboutCaption->data_values->video_url)); ?>">
                    <div style="border-radius: 6px;" class="stat-box row-6 p-2">
                        <h6>Video Tutorial</h6>
                        <img src="<?php echo e(asset('assets/images/2d-icon/3/monitor-dollar.png')); ?>" alt="help-center" width="35%" border="0">
                    </div>
                </a>
            </div>
            <div style="align-items: center;" class="col-6" align="center">
                <a href="/about-us">
                    <div style="height: 100%; border-radius: 6px;" class="stat-box row-6 p-2">
                        <h6>About Us!</h6>
                        <img src="<?php echo e(asset('assets/images/2d-icon/3/world.png')); ?>" alt="help-center" width="35%" border="0">
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <div class="container mt-2 mb-2">
        <a href="<?php echo e(route('user.referred')); ?>">
            <img class="rounded shadow" style="width: 100%; height: 100%;" src="<?php echo e(asset('assets/images/custom-banners/invite-banner.jpg')); ?>" alt="">
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ptctheme/d4.superearning.online/core/resources/views/templates/dark_gold/home.blade.php ENDPATH**/ ?>