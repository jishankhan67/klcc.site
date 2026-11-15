@extends($activeTemplate.'layouts.master')
@section('content')
    <div class="bg--primary container pt-4 my-2 rounded">
        <div class="row">
            <div class="col-7 pt-1 ps-2">
                <h2 class="text-light">{{ __($pageTitle) }}</h2>
                <h6 class="text-light">You can <b> {{ __($pageTitle) }}</b> here</h6>
                <h6 class="text-light">for<b> Purchasing</b> a Plan.</h6>
            </div>
            <div class="col-5" align="center"><img src="/assets/templates/smartlab/images/5-F867-FDB-41-C9-488-D-913-C-16-FDDD5-BDFF0-1.png" width="90px"></div>
        </div>
    </div>
    <div class="cmn-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card custom--card">
                        <div class="card-header card-header-bg">
                            <h5 class="title">{{__($pageTitle)}}</h5>
                        </div>
                        <div class="card-body  ">
                        <form action="{{ route('user.deposit.manual.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p class="text-center mt-2">@lang('You have requested') <b class="text-success">{{ showAmount($data['amount'])  }} {{__($general->cur_text)}}</b> , @lang('Please pay')
                                        <b class="text-success">{{showAmount($data['final_amo']) .' '.$data['method_currency'] }} </b> @lang('for successful payment')
                                    </p>
                                    <h4 class="text-center mb-4">@lang('Please follow the instruction below')</h4>

                                    <p class="my-4 text-center">@php echo  $data->gateway->description @endphp</p>

                                </div>

                                <x-viser-form identifier="id" identifierValue="{{ $gateway->form_id }}" />

                                <div class="col-md-12">
                                    <div class="form-group py-4">
                                        <button type="submit" class="btn btn--base text-white w-100">@lang('Pay Now')</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
@endsection
