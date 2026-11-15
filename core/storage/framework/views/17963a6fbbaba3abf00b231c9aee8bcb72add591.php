

<?php $__env->startSection('panel'); ?>
    <?php
        $loginCaption = getContent('login.content', true);
    ?>
<div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="<?php echo e(route('home')); ?>" class="headerButton goBack">
                <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="<?php echo e(route('user.register')); ?>" class="headerButton">
                Register
            </a>
        </div>
    </div>
<div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1><?php echo app('translator')->get('Login'); ?></h1>
            <h4><?php echo e(__($loginCaption->data_values->heading)); ?></h4>
        </div>
        
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card">
              <div class="card-body">
                        <form class="action-form loginForm verify-gcaptcha" action="<?php echo e(route('user.login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group basic">
                                <label class="label"><?php echo app('translator')->get('Username or Email'); ?></label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    <input type="username" name="username" class="form-control" placeholder="<?php echo app('translator')->get('Username or Email'); ?>" required>
                                </div>
                            </div><!-- form-group end -->
                            <div class="form-group basic mb-3">
                                <label class="label"><?php echo app('translator')->get('Password'); ?></label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                                    <input type="password" name="password" class="form-control" placeholder="<?php echo app('translator')->get('Password'); ?>" required>
                                </div>
                            </div><!-- form-group end -->

                            <?php if (isset($component)) { $__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243 = $component; } ?>
<?php $component = App\View\Components\Captcha::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('captcha'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Captcha::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243)): ?>
<?php $component = $__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243; ?>
<?php unset($__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243); ?>
<?php endif; ?>

                            <div class="form-group  basic form-check">
                                <input class="form-check-input w-auto p-2" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="remember">
                                    <?php echo app('translator')->get('Remember Me'); ?>
                                </label>
                            </div>
                            <div class="form-group  basic text-center">
                                <button type="submit" class="btn btn--base text-white w-100"><?php echo app('translator')->get('Login Now'); ?></button>
                                <p class="mt-2"><?php echo app('translator')->get('Forget your password?'); ?> <a href="<?php echo e(route('user.password.request')); ?>"><?php echo app('translator')->get('Reset password'); ?></a></p>
                            </div>
                        </form>

                        <?php
                            $credentials = $general->socialite_credentials;
                        ?>
                        <?php if($credentials->google->status == 1 || $credentials->facebook->status == 1 || $credentials->linkedin->status == 1): ?>
                            <div class="col-12 my-3">
                                <p class="text-center sm-text mb-2"><?php echo app('translator')->get('Or Login with'); ?></p>

                                <div class="socials-buttons d-flex flex-wrap flex-row gap-10 justify-content-between">

                                    <?php if($credentials->google->status == 1): ?>
                                        <a href="<?php echo e(route('user.social.login', 'google')); ?>" class="btn btn-outline-google btn-sm text-uppercase">
                                            <span class="me-1"><i class="fa fa-g"></i></span> <?php echo app('translator')->get('Google'); ?></a>
                                    <?php endif; ?>

                                    <?php if($credentials->facebook->status == 1): ?>
                                        <a href="<?php echo e(route('user.social.login', 'facebook')); ?>" class="btn btn-outline-facebook btn-sm text-uppercase">
                                            <span class="me-1"><i class="fab fa-facebook-f"></i></span> <?php echo app('translator')->get('Facebook'); ?></a>
                                    <?php endif; ?>

                                    <?php if($credentials->linkedin->status == 1): ?>
                                        <a href="<?php echo e(route('user.social.login', 'linkedin')); ?>" class="btn btn-outline-linkedin btn-sm text-uppercase">
                                            <span class="me-1"><i class="fab fa-linkedin-in"></i></span> <?php echo app('translator')->get('Linkedin'); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                     </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        .btn {
            border: 1px solid transparent !important;
        }

        .content-area {
            z-index: -1;
            height: 100%;
        }

        .btn-outline-linkedin {
            border-color: #0077B5 !important;
            background-color: #0077B5;
            color: #ffff;
        }

        .btn-outline-linkedin:hover {
            border-color: #0077B5 !important;
            color: #fff !important;
            background-color: #0077B5;
        }

        .btn-outline-facebook {
            border-color: #395498 !important;
            background-color: #395498;
            color: #ffff;
        }

        .btn-outline-facebook:hover {
            border-color: #395498 !important;
            color: #fff !important;
            background-color: #395498;
        }

        .btn-outline-google {
            border-color: #D64937 !important;
            background-color: #D64937;
            color: #ffff;
        }

        .btn-outline-google:hover {
            border-color: #D64937;
            color: #fff !important;
            background-color: #D64937;
        }

        .row>* {
            padding-right: calc(var(--bs-gutter-x) * .0);
        }

        .socials-buttons .btn {
            width: calc(33% - 10px);
        }

        @media (max-width: 424px) {
            .socials-buttons .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/goherdev/public_html/demo11.goherdevcoders.store/core/resources/views/templates/dark_gold/user/auth/login.blade.php ENDPATH**/ ?>