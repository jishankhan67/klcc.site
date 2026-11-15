@extends($activeTemplate.'layouts.app')
@section('panel')
    <div class="page-wrapper">
        @include($activeTemplate.'partials.header')
        @if(!request()->routeIs('home'))
        @include($activeTemplate.'partials.breadcrumb')
        @endif
        @yield('content')
        
        @include($activeTemplate . 'partials.footer')
    </div>
@endsection
