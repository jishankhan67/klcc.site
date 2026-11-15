@extends($activeTemplate.'layouts.app')
@section('panel')
    <div class="page-wrapper">
        @include($activeTemplate.'partials.user_header')
        @include($activeTemplate.'partials.breadcrumb')
        @yield('content')

        @include($activeTemplate . 'partials.footer')
    </div>
@endsection
@push('style')
<style>
    .table thead th {
      color: #fff !important;
    }
    .badge--warning {
        background-color: #ffe900 !important;
    }
    .badge--danger {
        background-color: #ff2626 !important;
    }
    .badge--success {
        background-color: #13d63d !important;
    }
    .badge--dark {
        background-color: #020202 !important;
    }
    .badge--primary {
        background-color: #4705ff !important;
    }
</style>
@endpush
