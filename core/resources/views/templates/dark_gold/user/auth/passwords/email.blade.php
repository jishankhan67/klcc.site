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
            <h1>{{ __($pageTitle) }}</h1>
            <h4>@lang('To recover your account please provide your email or username to find your account.')</h4>
        </div>
        
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
              <div class="card-body">
                    <form method="POST" action="{{ route('user.password.email') }}">
                        @csrf
                        <div class="form-group basic">
                            <label class="label">@lang('Email or Username')</label>
                            <input type="text" class="form-control form-control" name="value" value="{{ old('value') }}" required autofocus="off">
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn--base text-white w-100">@lang('Submit')</button>
                            <p class="mt-2"><a href="{{ route('user.login') }}">@lang('Back to login')</a></p>
                        </div>
                    </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
