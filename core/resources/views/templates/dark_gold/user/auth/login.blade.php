
@extends($activeTemplate.'layouts.app')
@section('panel')
    @php
        $loginCaption = getContent('login.content', true);
    @endphp
<div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="{{ route('home') }}" class="headerButton goBack">
                <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="{{ route('user.register') }}" class="headerButton">
                Register
            </a>
        </div>
    </div>
<div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>@lang('Login')</h1>
            <h4>{{ __($loginCaption->data_values->heading) }}</h4>
        </div>
        
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card">
              <div class="card-body">
                        <form class="action-form loginForm verify-gcaptcha" action="{{ route('user.login') }}" method="post">
                            @csrf
                            <div class="form-group basic">
                                <label class="label">@lang('Username or Email')</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    <input type="username" name="username" class="form-control" placeholder="@lang('Username or Email')" required>
                                </div>
                            </div><!-- form-group end -->
                            <div class="form-group basic mb-3">
                                <label class="label">@lang('Password')</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                                    <input type="password" name="password" class="form-control" placeholder="@lang('Password')" required>
                                </div>
                            </div><!-- form-group end -->

                            <x-captcha />

                            <div class="form-group  basic form-check">
                                <input class="form-check-input w-auto p-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    @lang('Remember Me')
                                </label>
                            </div>
                            <div class="form-group  basic text-center">
                                <button type="submit" class="btn btn--base text-white w-100">@lang('Login Now')</button>
                                <p class="mt-2">@lang('Forget your password?') <a href="{{ route('user.password.request') }}">@lang('Reset password')</a></p>
                            </div>
                        </form>

                        @php
                            $credentials = $general->socialite_credentials;
                        @endphp
                        @if ($credentials->google->status == 1 || $credentials->facebook->status == 1 || $credentials->linkedin->status == 1)
                            <div class="col-12 my-3">
                                <p class="text-center sm-text mb-2">@lang('Or Login with')</p>

                                <div class="socials-buttons d-flex flex-wrap flex-row gap-10 justify-content-between">

                                    @if ($credentials->google->status == 1)
                                        <a href="{{ route('user.social.login', 'google') }}" class="btn btn-outline-google btn-sm text-uppercase">
                                            <span class="me-1"><i class="fa fa-g"></i></span> @lang('Google')</a>
                                    @endif

                                    @if ($credentials->facebook->status == 1)
                                        <a href="{{ route('user.social.login', 'facebook') }}" class="btn btn-outline-facebook btn-sm text-uppercase">
                                            <span class="me-1"><i class="fab fa-facebook-f"></i></span> @lang('Facebook')</a>
                                    @endif

                                    @if ($credentials->linkedin->status == 1)
                                        <a href="{{ route('user.social.login', 'linkedin') }}" class="btn btn-outline-linkedin btn-sm text-uppercase">
                                            <span class="me-1"><i class="fab fa-linkedin-in"></i></span> @lang('Linkedin')</a>
                                    @endif
                                </div>
                            </div>
                        @endif
                     </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@push('style')
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
@endpush
