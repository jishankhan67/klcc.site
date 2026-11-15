@php
    $testimonialCaption = getContent('testimonial.content',true);
    $testimonials = getContent('testimonial.element');
@endphp


    <!-- testimonial section start -->
    <section class="pt-150 pb-150">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">{{ __($testimonialCaption->data_values->heading) }}</h2>
              <p>{{ __($testimonialCaption->data_values->subheading) }}</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial-slider">
                @foreach($testimonials as $testimonial)
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="thumb"><img src="{{ getImage('assets/images/frontend/testimonial/'.$testimonial->data_values->image) }}" alt="image" class="rounded w-100"></div>
                  <h5 class="name">{{ __($testimonial->data_values->name) }}</h5>
                  <span class="designation">{{ __($testimonial->data_values->designation) }}</span>
                  <p>{{ __($testimonial->data_values->comment) }}</p>
                </div>
              </div>
              @endforeach
            </div><!-- testimonial-slider end -->
          </div>
        </div>
      </div>
    </section>
    <!-- testimonial section end -->
@push("style")
<style>

    .testimonial-card {
        padding: 30px;
        background-color: #ffffff;
        box-shadow: 0 10px 25px 0 rgba(35, 72, 199, 0.1);
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        text-align: center;
    }
    
    .testimonial-card .thumb {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        overflow: hidden;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 25px;
        border: 5px solid #dddddd;
    }
    
    .testimonial-card .designation {
        color: #0056fb;
        font-size: 14px;
        font-style: italic;
    }
    
    .testimonial-card p {
        margin-top: 20px;
    }
    
    .testimonial-slider .slick-list {
        margin: -25px -15px;
    }
    
    .testimonial-slider .testimonial-card {
        margin: 25px 15px;
    }
    
    .slick-dots {
        display: flex;
        justify-content: center;
        margin-top: 35px;
    }
    
    .slick-dots li {
        margin: 0 5px;
    }
    
    .slick-dots li.slick-active button {
        background-color: #0056fb;
    }
    .slick-dots li::marker {
        content: '';
        font-size: 0em;
    }
    .slick-dots li button {
        font-size: 0;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        background-color: #dddddd;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
        border:none;
    }
    .section-title {
      font-size: 40px;
      font-weight: 700;
      text-transform: capitalize;
    }
</style>
@endpush