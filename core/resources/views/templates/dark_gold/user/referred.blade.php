
@extends($activeTemplate . 'layouts.master')
@section('content')
<div id="appCapsule">
    <div class="container-fluid bg-default py-2 mb-3">
        <div class="row">
            <div class="col pt-2" align="center">
                <h4 class="text-light">{{@$pageTitle}}</h4>
            </div>
        </div>
    </div>
    <div class="container pt-2 pb-2 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col" align="center">
                        <ion-icon name="mail-outline" style="font-size: 28px;" role="img" class="md hydrated text--base"
                            aria-label="mail outline"></ion-icon>
                        <br>
                        <h6 class="mb-0">Send Invitation</h6>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center" align="center">
                        <ion-icon name="arrow-redo-outline" style="font-size: 20px;color:rgb(88, 88, 88)" role="img"
                            class="md hydrated" aria-label="arrow redo outline"></ion-icon>
                    </div>
                    <div class="col" align="center"><ion-icon name="person-add-outline" style="font-size: 28px;" role="img"
                            class="md hydrated text--base" aria-label="person add outline"></ion-icon><br>
                        <h6 class="mb-0">Upgrage VIP</h6>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center" align="center"><ion-icon
                            name="arrow-redo-outline" style="font-size: 20px;color:rgb(88, 88, 88)" role="img"
                            class="md hydrated" aria-label="arrow redo outline"></ion-icon></div>
                    <div class="col" align="center"><ion-icon name="gift-outline" style="font-size: 28px;" role="img"
                            class="md hydrated text--base" aria-label="gift outline"></ion-icon> <br>
                        <h6 class="mb-0">Earn Rewards</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-2 pb-1 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12" align="center">
                        <h2 class="text--base">@lang('Referral Link')</h2>
                    </div>
                </div>
                <div class="row pt-2 pb-2">
                    <div class="col-12" align="center">
                        <input class="form-control rounded-pill" type="text"
                            value="{{ route('home') }}?reference={{ $user->username }}" id="referralURL" readonly=""></div>
                    <div class="col-12 pt-2" align="center">
                        <h4 class="btn btn--base text-white rounded p-1 w-100" id="copyBoard"><i class="fa fa-copy"></i> Copy
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="cmn-section">
        <div class="container">
            <div class="row py-2">
                <div class="col-md-12 mb-30">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive-sm">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>@lang('Full Name')</th>
                                            <th>@lang('User Name')</th>
                                            <th>@lang('Email')</th>
                                            <th>@lang('Mobile')</th>
                                            <th>@lang('Plan')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($refUsers as $log)
                                            <tr>
                                                <td data-label="@lang('Full Name')">{{ __($log->fullname) }}</td>
                                                <td data-label="@lang('User Name')">{{ __($log->username) }}</td>
                                                <td data-label="@lang('Email')">{{ $log->email }}</td>
                                                <td data-label="@lang('Phone')">{{ $log->mobile }}</td>
                                                <td data-label="@lang('Plan')">
                                                    {{ __($log->plan ? $log->plan->name : 'No Plan') }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="100%" class="text-center"> {{ __($emptyMessage) }}</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{ paginateLinks($refUsers) }}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('style')
    <style type="text/css">
        .copytextDiv {
            border: 1px solid #00000021;
            cursor: pointer;
        }

        #referralURL {
            border-right: 1px solid #00000021;
        }

        .bg-success-custom {
            background-color: #28a7456e !important;
        }

        .brd-success-custom {
            border: 1px dashed #28a745;
        }
    </style>
@endpush
@push('script')
    <script type="text/javascript">
        (function($) {
            "use strict";
            $('#copyBoard').click(function() {
                var copyText = document.getElementById("referralURL");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                /*For mobile devices*/
                document.execCommand("copy");
                iziToast.success({
                    message: "Copied: " + copyText.value,
                    position: "topRight"
                });
            });
        })(jQuery);
    </script>
@endpush
