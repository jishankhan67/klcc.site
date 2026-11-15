    <!-- footer section start -->
    <div class="appBottomMenu">
        <a href="/" class="item">
            <div class="col">
                {{-- <ion-icon name="home-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon> --}}
                <img height="27px" src="{{ asset('assets/images/2d-icon/gold/home.png') }}" alt="">
                <strong>@lang('Home')</strong>
            </div>
        </a>
        <a href="{{ route('user.ptc.index') }}" class="item ">
            <div class="col">
                {{-- <ion-icon name="extension-puzzle-outline" role="img" class="md hydrated" aria-label="extension puzzle outline"></ion-icon> --}}
                <img height="27px" src="{{ asset('assets/images/2d-icon/gold/task-2.png') }}" alt="">
                <strong>Task</strong>
            </div>
        </a>
        <a href="{{ route('plans') }}" class="item " alt="@lang('Plans')">
            {{-- <div style="margin-top: -15px;" class="action-button bg--primary">
                <ion-icon style="font-size: 32px;" name="basket" role="img" class="md hydrated" aria-label="basket"></ion-icon>
            </div> --}}
            <img style="margin-top: -30px" height="55px" src="{{ asset('assets/images/2d-icon/gold/vip.png') }}" alt="">
        </a>
        <a href="https://goherdevcoders.store/" class="item ">
            <div class="col">
                {{-- <ion-icon name="paper-plane-outline" role="img" class="md hydrated" aria-label="paper plane outline"></ion-icon> --}}
                <img height="27px" src="{{ asset('assets/images/2d-icon/gold/contact.png') }}" alt="">
                <strong>@lang('Contact')</strong>
            </div>
        </a>
        @guest
        <a href="{{ route('user.login') }}" class="item">
            <div class="col">
                {{-- <ion-icon name="log-in-outline" role="img" class="md hydrated" aria-label="log in outline"></ion-icon> --}}
                <img height="27px" src="{{ asset('assets/images/2d-icon/gold/login.png') }}" alt="">
                <strong>@lang('Login')</strong>
            </div>
        </a>
        @else
        <a href="{{ route('user.home') }}" class="item">
            <div class="col">
                {{-- <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="log in outline"></ion-icon> --}}
                <img height="27px" src="{{ asset('assets/images/2d-icon/gold/user.png') }}" alt="">
                <strong>Profile</strong>
            </div>
        </a>
        @endguest
    </div>
    <!-- footer section end -->
