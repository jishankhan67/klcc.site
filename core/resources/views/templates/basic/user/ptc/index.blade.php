@extends($activeTemplate.'layouts.master')
@section('content')
<div class="bg--primary container pt-3 mt-2 mb-2 rounded">
        <div class="row">
            <div class="col-7 ps-2">
                <h2 class="text-light">Task</h2>
            </div>
            <div class="col-5" align="center"><img src="/assets/templates/smartlab/images/5-A96297-F-A673-4-C26-A2-A2-D915-D1007-CB1.png" width="110px"></div>
        </div>
</div>
<section class="cmn-section">
    <div class="container">
        <div class="row gy-4 justify-content-center">

            @forelse($ads as $ad)
            <div class="container bg-img-ads mb-2">
									    
				<div class="row align-items-start pb-2 pt-1">
				    
				    <div class="col-4" align="left"><h2 class="text-light"><b>@lang('Ads duration') : {{ $ad->duration }}s</b></h2></div>
                    <div class="col-8" align="right"><h2 class="text-light"><b>{{ $general->cur_sym }}{{ showAmount($ad->amount) }}</b></h2></div>
				</div>
				
				
				<div class="row align-items-end pt-2">
					<div class="col-6" align="left"><h3 class="text-light pb-1"><b>{{ __($ad->title) }}</b></h3></div>
					<div class="col-6 align-bottom pb-2" align="right">
						<a href="{{ route('user.ptc.show',encrypt($ad->id.'|'.auth()->user()->id)) }}" class="btn btn-outline-light">@lang('View Ad')</a>
					</div>
				</div>
			</div>
            @empty

            <div class="col-12">
                <div class="card custom--card ptc-card">
                    <div class="card-body">
                        <h2 class="text-center text--base">{{ __($emptyMessage) }}</h2>
                    </div>
                </div>
            </div>
            @endforelse
        </div>

    </div>
</section>
<div class="py-5">&nbsp;</div>
@endsection
