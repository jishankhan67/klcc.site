@php
    $featureCaption = getContent('features.content',true);
    $features = getContent('features.element');
@endphp


    <!-- feature section start -->
    <section class="p-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">{{ __($featureCaption->data_values->heading) }}</h2>
              <p>{{ __($featureCaption->data_values->subheading) }}</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row mb-none-30">
            @foreach($features as $feature)
          <div class="col-lg-4 col-md-6 mb-3 wow fadeInUp text-md-left text-center" data-wow-duration="0.3s" data-wow-delay="0.3s">
            <div class="feature-card p-2 shadow bg-white rounded">
              <div class="feature-card__icon">@php echo $feature->data_values->icon @endphp</div>
              <div class="feature-card__content">
                <h4 class="title">{{ __($feature->data_values->title) }}</h4>
                <p>{{ __($feature->data_values->content) }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- feature section end -->
