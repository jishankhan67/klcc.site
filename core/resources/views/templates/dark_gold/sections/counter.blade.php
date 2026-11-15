@php
    $counterCaption = getContent('counter.content',true);
    $counters = getContent('counter.element');
@endphp
    <section>
      <div class="row g-0">
        <div class="col-xl-6 bg_img video-thumb-two min-height--block d-none d-xl-block" data-background="{{ getImage('assets/images/frontend/counter/'.$counterCaption->data_values->image) }}">
        </div>
        <div class="col-xl-6 py-5 bg--base text-md-left text-center">
          <div class="overview-area container">
            <h2 class="section-title text-white">{{ __($counterCaption->data_values->heading) }}</h2>
            <p class="text-white">{{ __($counterCaption->data_values->sub_heading) }}</p>
            <div class="row mb-none-30 mt-5">
                @foreach($counters as $counter)
              <div class="col-md-3 col-6 mb-3">
                <div class="counter-card">
                  <div class="counter-card__icon text-white">
                    @php echo $counter->data_values->icon @endphp
                  </div>
                  <div class="counter-card__content">
                    <span class="count-num text-white">{{ __($counter->data_values->number) }}</span>
                    <p class="text-white">{{ __($counter->data_values->title) }}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
