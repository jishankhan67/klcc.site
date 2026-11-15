{{-- @guest
    @if (request()->routeIs('home'))
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#staticBackdrop').modal('show');
                $('#staticBackdrop').modal({
                    backdrop: 'static',
                    keyboard: false
                })
            });
        </script>
        <div class="modal fade show" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" style="display: block;" aria-modal="true" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">@lang('Login') Alert :</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                        You must login to use everyting. Thank you..
                    </div>
                    <div class="modal-footer">

                        <a href="{{ route('user.login') }}" class="btn btn-primary bg--primary">@lang('Login') Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif
@endguest --}}
<div class="appHeader bg--primary text-light">
    <div class="left">
    </div>
    <a class="pageTitle" href="{{ route('home') }}">
        <img height="30px" src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="logo" class="logo">
    </a>
    <div class="right">
        <a href="{{ route('user.home') }}">
            <img src="{{asset('assets/images/profile/dummy-profile.png')}}" alt="image"
                class="imaged rounded-circle w32">
        </a>
    </div>
</div>
