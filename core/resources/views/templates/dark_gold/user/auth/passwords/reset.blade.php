
@extends($activeTemplate.'layouts.app')
@section('panel')
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
            <h1>{{ __($pageTitle) }}</h1>
            <h4>@lang('Your account is verified successfully. Now you can change your password. Please enter a strong password and don\'t share it with anyone.')</h4>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.password.update') }}">
                            @csrf
                            <input type="hidden" name="email" value="{{ $email }}">
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group basic">
                                <label class="label">@lang('Password')</label>
                                <input type="password" class="form-control form--control" name="password" required>
                                @if($general->secure_password)
                                    <div class="input-popup">
                                        <p class="error lower">@lang('1 small letter minimum')</p>
                                        <p class="error capital">@lang('1 capital letter minimum')</p>
                                        <p class="error number">@lang('1 number minimum')</p>
                                        <p class="error special">@lang('1 special character minimum')</p>
                                        <p class="error minimum">@lang('6 character password')</p>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group basic mt-2">
                                <label class="label">@lang('Confirm Password')</label>
                                <input type="password" class="form-control form--control" name="password_confirmation" required>
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn--base text-white w-100"> @lang('Submit')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection

@if($general->secure_password)
    @push('script-lib')
        <script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
    @endpush
@endif
