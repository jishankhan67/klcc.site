

<?php $__env->startSection('content'); ?>
    <?php
        $kycInfo = getContent('kyc_info.content', true);
    ?>

    

    

    <div id="appCapsule">
        <!-- Profile Wallet Card -->
        <div class="container">
            <div class="card border-0 mt-2">
                <div class="card-body pb-0">
                    <div class="row align-items-end">
                        <div class="col-6 text-start">
                            <img src="<?php echo e(asset('assets/images/profile/dummy-profile.png')); ?>"  class="img-thumbnail rounded-circle" style="width: 70px" alt="img">
                            <h6 class="text-no-shadow mt-1"><?php echo e(__($user->fullname)); ?></h6>
                        </div>
                        <div class="col-6 text-end">
                            <div class="chip chip-media mb-2">
                                <i class="chip-icon bg--primary">
                                    <ion-icon style="font-size:20px;" name="basket" role="img" class="md hydrated"
                                        aria-label="person"></ion-icon>
                                </i>
                                <span class="chip-label">
                                    <?php if($user->plan): ?>
                                        <?php echo e(__($user->plan->name)); ?> <?php if($user->expire_date < now()): ?>
                                            (<?php echo app('translator')->get('Expired'); ?>)
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <?php echo app('translator')->get('No Plan'); ?>
                                    <?php endif; ?>
                                </span>
                            </div>
                            <h6 class="mb-0 text-no-shadow">My Balance</h6>
                            <h3 class="text-warning"><?php echo e($general->cur_sym); ?> <?php echo e(showAmount($user->balance)); ?></h3>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center pb-2">
                        <div class="col-6 text-center" style="border-right: 2px dashed #dee2e6 !important">
                            <h4 class="text-shadow"><?php echo e(showAmount($user->deposits->where('status',1)->sum('amount'))); ?> <?php echo e($general->cur_text); ?></h4>
                            <span class="text-secondary">Total Deposit</span>
                        </div>
                        <div class="col-6 text-center" style="border-left: 2px dashed #dee2e6 !important">
                            <h4 class="text-shadow"><?php echo e(showAmount($user->withdrawals->where('status',1)->sum('amount'))); ?> <?php echo e($general->cur_text); ?></h4>
                            <span class="text-secondary">Total Withdraw</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-2">
            <div class="wallet-card">
                <div class="wallet-footer">
                    <div class="item">
                        <a href="<?php echo e(route('user.deposit.index')); ?>">
                            <div class="shadow icon-wrapper bg--primary">
                                <ion-icon name="arrow-up-outline" role="img" class="md hydrated"
                                    aria-label="arrow up outline"></ion-icon>
                            </div>
                            <strong><?php echo app('translator')->get('Deposit'); ?></strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo e(route('user.referred')); ?>">
                            <div class="shadow icon-wrapper bg--primary">
                                <ion-icon name="person-add-outline" role="img" class="md hydrated"
                                    aria-label="person add outline"></ion-icon>
                            </div>
                            <strong>Invite</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo e(route('user.withdraw')); ?>">
                            <div class="shadow icon-wrapper bg--primary">
                                <ion-icon name="arrow-down-outline" role="img" class="md hydrated"
                                    aria-label="arrow down outline"></ion-icon>
                            </div>
                            <strong><?php echo app('translator')->get('Withdraw'); ?></strong>
                        </a>
                    </div>
                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                
                <?php if($user->expire_date >= now()): ?>
                    <div class="col-12 mt-2">
                        <div class="stat-box">
                            <div class="title"> <?php echo app('translator')->get('Plan Expiry'); ?></div>
                            <h2 class="text-warning">
                                <small class="text-danger"><?php echo e(\Carbon\Carbon::parse($user->expire_date)->format('Y-m-d')); ?>

                                </small>
                            </h2>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Complete</div>
                        <h2 class="mb-0"> <?php echo e($user->clicks->count()); ?> Task</h2>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Remain</div>
                        <h2 class="mb-0"><?php echo e($user->daily_limit - $user->clicks->where('view_date', Date('Y-m-d'))->count()); ?>

                            Task</h2>
                    </div>
                </div>
                <a href="javascript:void(0)" class=" mt-2 col-12 mb-30">
                    <div class="stat-box">
                        <div class="row">
                            <div class="col-auto">
                                <img width="50px" src="<?php echo e(asset('assets/images/2d-icon/2/pending.png')); ?>" alt="">
                            </div>
                            <div class="col">
                                <div class="widget__content">
                                    <p class="text-uppercase text-muted mb-0"><?php echo app('translator')->get('Next Reminder'); ?></p>
                                    <h2 class="mb-0 text--base font-weight-bold timer" id="counter"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="container">
            <div style="background-color: rgb(255, 255, 255);" class="rounded mt-2">
                <ul class="listview flush transparent no-line image-listview">
                    <?php if($general->balance_transfer): ?>
                        <li>
                            <a href="<?php echo e(route('user.transfer.balance')); ?>" class="item">
                                <div class="icon-box bg--primary text-white">
                                    <ion-icon name="arrow-forward-outline" role="img" class="md hydrated"
                                        aria-label="arrow-forward outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <?php echo app('translator')->get('Balance Transfer'); ?>
                                </div>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?php echo e(route('user.profile.setting')); ?>" class="item">
                            <div class="icon-box bg--primary text-white">
                                <ion-icon name="construct-outline" role="img" class="md hydrated"
                                    aria-label="construct outline"></ion-icon>
                            </div>
                            <div class="in">
                                Account Info
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(route('user.change.password')); ?>" class="item">
                            <div class="icon-box bg--primary text-white">
                                <ion-icon name="key-outline" role="img" class="md hydrated"
                                    aria-label="key outline"></ion-icon>
                            </div>
                            <div class="in">
                                <?php echo app('translator')->get('Change Password'); ?>
                            </div>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="container">
            <div style="background-color: rgb(255, 255, 255);" class="rounded mt-2">
                <ul class="listview flush transparent no-line image-listview">

                    <li>
                        <a href="<?php echo e(route('user.commissions')); ?>" class="item">
                            <div class="icon-box bg--primary text-white">
                                <ion-icon name="podium-outline" role="img" class="md hydrated"
                                    aria-label="podium outline"></ion-icon>
                            </div>
                            <div class="in">
                                <?php echo app('translator')->get('Commissions'); ?>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('user.deposit.history')); ?>" class="item">
                            <div class="icon-box bg--primary text-white">
                                <ion-icon name="card-outline" role="img" class="md hydrated"
                                    aria-label="card outline"></ion-icon>
                            </div>
                            <div class="in">
                                <?php echo app('translator')->get('Deposit History '); ?>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('user.withdraw.history')); ?>" class="item">
                            <div class="icon-box bg--primary text-white">
                                <ion-icon name="cash-outline" role="img" class="md hydrated"
                                    aria-label="cash outline"></ion-icon>
                            </div>
                            <div class="in">
                                <?php echo app('translator')->get('Withdraw History '); ?>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('user.referred')); ?>" class="item">
                            <div class="icon-box bg--primary text-white">
                                <ion-icon name="people-outline" role="img" class="md hydrated"
                                    aria-label="people outline"></ion-icon>
                            </div>
                            <div class="in">
                                My Team
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="container mb-2">
            <div style="background-color: rgb(255, 255, 255);" class="rounded mt-2">
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="<?php echo e(route('user.twofactor')); ?>" class="item">
                            <div class="icon-box bg--primary text-white">
                                <ion-icon name="key-outline" role="img" class="md hydrated"
                                    aria-label="key outline"></ion-icon>
                            </div>
                            <div class="in">
                                <?php echo app('translator')->get('Two Factor'); ?>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('user.logout')); ?>" class="item">
                            <div class="icon-box bg--primary text-white">
                                <ion-icon name="log-out-outline" role="img" class="md hydrated"
                                    aria-label="log out outline"></ion-icon>
                            </div>
                            <div class="in">
                                Logout
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/admin/js/vendor/apexcharts.min.js')); ?>"></script>
    <script>
        (function($) {
            "use strict";
            // apex-bar-chart js
            var options = {
                series: [{
                    name: 'Clicks',
                    data: [
                        <?php $__currentLoopData = $chart['click']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $click): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($click); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]
                }, {
                    name: 'Earn Amount',
                    data: [
                        <?php $__currentLoopData = $chart['amount']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $amount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($amount); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]
                }],
                chart: {
                    type: 'bar',
                    height: 580,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: [
                        <?php $__currentLoopData = $chart['amount']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $amount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            '<?php echo e($key); ?>',
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ],
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return val
                        }
                    }
                }
            };
            var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
            chart.render();

            function createCountDown(elementId, sec) {
                var tms = sec;
                var x = setInterval(function() {
                    var distance = tms * 1000;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    document.getElementById(elementId).innerHTML = days + "d: " + hours + "h " + minutes +
                        "m " + seconds + "s ";
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById(elementId).innerHTML = "<?php echo e(__('COMPLETE')); ?>";
                    }
                    tms--;
                }, 1000);
            }
            createCountDown('counter', <?php echo e(\Carbon\Carbon::tomorrow()->diffInSeconds()); ?>);
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/goherdev/public_html/demo11.goherdevcoders.store/core/resources/views/templates/dark_gold/user/dashboard.blade.php ENDPATH**/ ?>