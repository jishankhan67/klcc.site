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
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-danger">@lang('You are banned')</h3>
                        <p class="fw-bold mb-1">@lang('Reason'):</p>
                        <p>{{ $user->ban_reason }}</p>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection
