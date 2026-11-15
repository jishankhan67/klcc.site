<div class="appHeader bg--primary text-light">
    <div class="left">
        {{-- <div class="language d-flex align-items-center">
            @php
                $langs = App\Models\Language::all();
            @endphp
            <select class="nic-select langSel text-dark">

                @foreach($langs as $lang)
                    <option value="{{ $lang->code }}" @if(Session::get('lang')===$lang->code) selected
                        @endif>{{ __($lang->name) }}</option>
                @endforeach
            </select>
        </div> --}}
    </div>
    <a class="pageTitle"  href="{{ route('home') }}">
        <img height="30px" src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="logo" class="logo">
    </a>
    <div class="right">
        <a href="{{ route('user.home') }}">
            <img src="{{asset('assets/images/profile/dummy-profile.png')}}" alt="image" class="imaged rounded-circle w32">
        </a>
    </div>
</div>
{{-- <header class="header">
    <div class="header__top">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="language  d-flex align-items-center">
                    <i class="las la-globe-europe"></i>
                    <select class="nic-select langSel">
                        @php
                            $langs = App\Models\Language::all();
                        @endphp
                        @foreach($langs as $lang)
                            <option value="{{ $lang->code }}" @if(Session::get('lang')===$lang->code) selected @endif>{{ __($lang->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="right text-sm-end text-center d-flex gap-2">
                    @guest
                        <a href="{{ route('user.login') }}"><i class="las la-sign-in-alt"></i> @lang('Login')</a>
                        <a href="{{ route('user.register') }}"><i class="las la-user-plus"></i> @lang('Registration')</a>
                    @else
                        <a href="{{ route('user.home') }}"><i class="las la-user-plus"></i> @lang('Dashboard')</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</header> --}}
