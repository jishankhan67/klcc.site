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
            <h4>@lang('2FA Verification')</h4>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                <form action="{{route('user.go2fa.verify')}}" method="POST" class="submit-form">
                    @csrf

                    @include($activeTemplate.'partials.verification_code')

                    <div class="form--group">
                        <button type="submit" class="btn btn--base text-white w-100">@lang('Submit')</button>
                    </div>
                </form>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection