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
<section class="blog-details-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-1 pb-4 bg-white rounded">
          <div class="blog-details-wrapper">
            <div class="blog-details__thumb">
              <img src="{{ getImage('assets/images/frontend/blog/'.$blog->data_values->image) }}" alt="image" class="w-100 rounded">
              <div class="post__date">
                <span class="date text-white rounded px-2 my-2">{{ $blog->created_at->format('d') }} {{ $blog->created_at->format('M') }}</span>
              </div>
            </div><!-- blog-details__thumb end -->
            <div class="blog-details__content">
              <h1 class="blog-details__title">{{ __($blog->data_values->title) }}</h1>
              <div class="px-md-2">@php echo $blog->data_values->description @endphp</div>
            </div><!-- blog-details__content end -->
          </div><!-- blog-details-wrapper end -->
        </div>
      </div>
    </div>
  </section>
  <div class="py-5"></div>
@endsection

@push('fbComment')
    @php echo loadExtension('fb-comment') @endphp
@endpush
