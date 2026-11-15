@extends($activeTemplate.'layouts.master')
@section('content')
    <div id="appCapsule">
        <div class="section mt-5 text-center">
            <h1>Profile</h1>
            <h4>Update account info..</h4>
        </div>
        <section class="cmn-section">
	        <div class="container">
                <div class="card">
                    <div class="card-body">
                        <form class="register" action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                <div class="avatar-upload">
                                    
                                    <div class="avatar-preview" style="display: flex;justify-content: center;">
                                        <div class="imagePreview" style="background-image: url('/assets/templates/smartlab/images/profile-orko-white-copy.png'); width: 200px;background-size: cover;height: 200px;;">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group basic">
                                    <label class="label">@lang('First Name')</label>
                                    <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}" required>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group basic">
                                    <label class="label">@lang('Last Name')</label>
                                    <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}" required>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group basic">
                                    <label class="label">@lang('E-mail Address')</label>
                                    <input class="form-control" value="{{$user->email}}" readonly>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group basic">
                                    <label class="label">@lang('Mobile Number')</label>
                                    <input class="form-control" value="{{$user->mobile}}" readonly>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group basic">
                                    <label class="label">@lang('Address')</label>
                                    <input type="text" class="form-control" name="address" value="{{@$user->address->address}}">
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group basic">
                                    <label class="label">@lang('State')</label>
                                    <input type="text" class="form-control" name="state" value="{{@$user->address->state}}">
                                </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group basic col-sm-4">
                                    <label class="label">@lang('Zip Code')</label>
                                    <input type="text" class="form-control" name="zip" value="{{@$user->address->zip}}">
                                </div>

                                <div class="form-group basic col-sm-4">
                                    <label class="label">@lang('City')</label>
                                    <input type="text" class="form-control" name="city" value="{{@$user->address->city}}">
                                </div>

                                <div class="form-group basic col-sm-4">
                                    <label class="label">@lang('Country')</label>
                                    <input class="form-control" value="{{@$user->address->country}}" disabled readonly>
                                </div>

                            </div>

                            <div class="form-group my-2">
                                <button type="submit" class="btn btn--base text-white w-100">@lang('Submit')</button>
                            </div>
                        </form>
                    </div>
                </div>
    	    </div>
        </section>
        <section style="height: 70px;"></section>
    </div>

@endsection