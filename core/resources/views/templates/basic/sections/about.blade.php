@php
    $aboutCaption = getContent('about.content',true);
@endphp
<section class="py-5">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
            <div class="video-thumb">
                <a href="{{ __($aboutCaption->data_values->video_url) }}">
                    <img src="{{ getImage('assets/images/frontend/about/'.$aboutCaption->data_values->image) }}" alt="image" class="w-100 rounded">
                </a>
            </div>
        </div>
        <div class="col-lg-6 mt-lg-0 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
            <div class="section-content pl-lg-4 pl-0">
                <h2 class="section-title mb-1">{{ __($aboutCaption->data_values->heading) }}</h2>
                <p>@php echo $aboutCaption->data_values->description @endphp</p>
            </div>
        </div>
    </div>
    </div>
</section>

