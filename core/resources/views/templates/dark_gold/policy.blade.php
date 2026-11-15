@extends($activeTemplate.'layouts.frontend')
@section('content')
<div class="bg--primary container py-4 mt-4 rounded">
        <div class="row">
            <div class="col-7 pt-3 ps-2">
                <h2 class="text-light">{{ __($pageTitle) }}</h2>
            </div>
            <div class="col-5" align="center"><img src="/assets/templates/smartlab/images/5-A96297-F-A673-4-C26-A2-A2-D915-D1007-CB1.png" width="110px"></div>
        </div>
    </div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @php echo $policy->data_values->details @endphp
            </div>
        </div>
    </div>
</div>
<div class="py-5"></div>
@endsection
