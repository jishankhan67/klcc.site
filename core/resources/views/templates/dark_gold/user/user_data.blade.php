
@extends($activeTemplate.'layouts.frontend')
@section('content')

<div id="appCapsule">
    <div class="container py-5">
            <div class="section mt-2 text-center">
            <h1>{{ $pageTitle }}</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.data.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group basic col-sm-6">
                                    <label class="label">@lang('First Name')</label>
                                    <input type="text" class="form-control form-control" name="firstname" value="{{ old('firstname') }}" required>
                                </div>

                                <div class="form-group basic col-sm-6">
                                    <label class="label">@lang('Last Name')</label>
                                    <input type="text" class="form-control form-control" name="lastname" value="{{ old('lastname') }}" required>
                                </div>
                                <div class="form-group basic col-sm-6">
                                    <label class="label">@lang('Address')</label>
                                    <input type="text" class="form-control form-control" name="address" value="{{ old('address') }}">
                                </div>
                                <div class="form-group basic col-sm-6">
                                    <label class="label">@lang('State')</label>
                                    <input type="text" class="form-control form-control" name="state" value="{{ old('state') }}">
                                </div>
                                <div class="form-group basic col-sm-6">
                                    <label class="label">@lang('Zip Code')</label>
                                    <input type="text" class="form-control form-control" name="zip" value="{{ old('zip') }}">
                                </div>

                                <div class="form-group basic col-sm-6">
                                    <label class="label">@lang('City')</label>
                                    <input type="text" class="form-control form-control" name="city" value="{{ old('city') }}">
                                </div>
                            </div>
                            <div class="form-group mt-2" >
                                <button type="submit" class="btn btn--base text-white w-100">
                                    @lang('Submit')
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
