@extends($activeTemplate.'layouts.master')
@section('content')
<div id="appCapsule">
    <div class="section mt-5 text-center">
        <h1>@lang('Withdraw')</h1>
        <h4>Confirm @lang('Withdraw') ..</h4>
    </div>
    <section class="cmn-section">
    	<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card custom--card">
                        <div class="card-header">
                            <h5 class="title">@lang('Withdraw Via') {{ $withdraw->method->name }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('user.withdraw.submit')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    @php
                                        echo $withdraw->method->description;
                                    @endphp
                                </div>
                                
                                <x-viser-form identifier="id" identifierValue="{{ $withdraw->method->form_id }}" />
    
                                @if(auth()->user()->ts)
                                <div class="form-group basic">
                                    <label class="label">@lang('Google Authenticator Code')</label>
                                    <input type="text" name="authenticator_code" class="form-control form--control" required>
                                </div>
                                @endif
                                <div class="form-group py-2">
                                    <button type="submit" class="btn btn--base text-white w-100">@lang('Submit')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="py-5"></div>
</div>
@endsection
