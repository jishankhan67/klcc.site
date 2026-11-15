@extends($activeTemplate.'layouts.master')
@section('content')
<div class="container py-5 mt-1 bg-img-deposit">
    <div class="row">
        <div class="col pt-2" align="center">
            <h4 class="text-light">{{ $pageTitle}}</h4>
        </div>
    </div>
</div>
<div class="d-block py-2">&nbsp;</div>
<div class="cmn-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">@lang('KYC Form')</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('user.kyc.submit')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <x-viser-form identifier="act" identifierValue="kyc" />

                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn--base text-white w-100">@lang('Submit')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-block py-2">&nbsp;</div>
@endsection
