@extends($activeTemplate .'layouts.frontend')
@section('content')
    <div class="bg--primary container py-4 mt-4 rounded">
        <div class="row">
            <div class="col-7 pt-3 ps-2">
                <h2 class="text-light">{{ __($pageTitle) }}</h2>
            </div>
            <div class="col-5" align="center"><img src="/assets/templates/smartlab/images/5-A96297-F-A673-4-C26-A2-A2-D915-D1007-CB1.png" width="110px"></div>
        </div>
    </div>
<!-- blog section start -->
    <section class="py-5">
      <div class="container">
        <div class="row mb-none-30 justify-content-center">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-3 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="blog-post hover--effect-1 has-link bg-white rounded p-1">
                <a href="{{ route('blogDetail',$blog->id) }}" class="item-link">
                <div class="blog-post__thumb">
                    <img src="{{ getImage('assets/images/frontend/blog/'.$blog->data_values->image) }}" alt="image" class="rounded w-100">
                </div>
                <div class="blog-post__content">
                    <h3 class="title pt-3 pb-3">{{ __($blog->data_values->title) }}</h3>
                    <p class="pb-1">{{ strLimit(strip_tags($blog->data_values->description),80) }}</p>
                </div>
                </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            {{ paginateLinks($blogs) }}
        </div>
      </div>
    </section>
    <!-- blog section end -->
    @if($sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
@endsection
