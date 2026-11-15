
@extends($activeTemplate . 'layouts.master')
@section('content')

<div id="appCapsule">
    <div class="container-fluid py-3 mb-2 bg-default">
        <div class="row align-items-center">
            <div class="col pt-1 ps-2">
                <h2 class="text-light">All Task</h2>
                <h6 class="text-light mb-0">Complete a task to make money.</h6>
            </div>
            <div class="col-auto text-center">
                <img src="{{asset('assets/images/2d-icon/2/dollar-car.png')}}" width="100px">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @forelse($ads as $ad)

                @if($ad->schedule)
                    @php
                        $currentTime = now()->format('H:i');
                    @endphp

                    @if(!collect($ad->schedule)->where('day',strtolower(now()->format('l')))->where('start','<',$currentTime)->where('end','>',$currentTime)->first())
                        @continue
                    @endif
                @endif

            <div class="col-4 col-md-4 col-lg-3 col-xl-2 h-100">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center mb-2">
                                <img width="50px" src="{{asset('assets/images/2d-icon/2/tag.png')}}" alt="">
                            </div>
                            <div class="col-12 px-0 text-center">
                                <h6 class="mb-0">Reward: {{ $general->cur_sym }}{{ showAmount($ad->amount) }}</h6>
                            </div>
                            <div class="col-12 px-0 text-center">
                                <h6 class="mb-2">Duration: {{ $ad->duration }}s</h6>
                            </div>
                            <div class="col-12 text-center px-0">
                                <a href="{{ route('user.ptc.show', encrypt($ad->id . '|' . auth()->user()->id)) }}" class="btn btn-sm btn-outline-light">@lang('View Ad')</a>
                            </div>
                        </div>
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
    {{-- <section class="cmn-section">
        <div class="container">
            <div class="row gy-4 justify-content-center">

                @forelse($ads as $ad)
                    <div class="container bg-img-ads mb-2">

                        <div class="row align-items-start pb-2 pt-1">

                            <div class="col-4" align="left">
                                <h2 class="text-light"><b>@lang('Ads duration') : {{ $ad->duration }}s</b></h2>
                            </div>
                            <div class="col-8" align="right">
                                <h2 class="text-light"><b>{{ $general->cur_sym }}{{ showAmount($ad->amount) }}</b></h2>
                            </div>
                        </div>


                        <div class="row align-items-end pt-2">
                            <div class="col-6" align="left">
                                <h3 class="text-light pb-1"><b>{{ __($ad->title) }}</b></h3>
                            </div>
                            <div class="col-6 align-bottom pb-2" align="right">
                                <a href="{{ route('user.ptc.show', encrypt($ad->id . '|' . auth()->user()->id)) }}"
                                    class="btn btn-outline-light">@lang('View Ad')</a>
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
    </section> --}}
</div>
@endsection
