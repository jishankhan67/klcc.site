@php
    $faqCaption = getContent('faq.content',true);
    $faqs = getContent('faq.element');
@endphp


    <section class="p-5 section-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">{{ __($faqCaption->data_values->heading) }}</h2>
              <p>{{ __($faqCaption->data_values->subheading) }}</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row">
          <div class="col-lg-12">
            <div class="accordion cmn-accordion rounded" id="accordionExample">
              @foreach($faqs as $key => $faql)
              <div class="card shadow m-1">
                <div class="card-header" id="heading{{ $key }}">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}">
                    <i class="las la-question-circle"></i>
                    <span>{{ __($faql->data_values->question) }}</span>
                  </button>
                </div>

                <div id="collapse{{ $key }}" class="collapse @if($loop->first) show @endif" aria-labelledby="heading{{ $key }}" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>{{ __($faql->data_values->answer) }}</p>
                  </div>
                </div>
              </div><!-- card end -->
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
          <div class="py-5">&nbsp;</div>
@push("style")
<style>
    .cmn-accordion .card {
      border: none;
      background-color: #ffffff;
      border-radius: 5px !important;
      -webkit-border-radius: 5px !important;
      -moz-border-radius: 5px !important;
      -ms-border-radius: 5px !important;
      -o-border-radius: 5px !important;
      margin-top:20px;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
    }
    .cmn-accordion .card-header .btn i {
      color: #363636;
      font-size: 32px;
    }
    .cmn-accordion .card-header .btn span {
        text-align: left !important;
        width: 90% !important;
        line-height: 1.5rem;
        color: #363636;
        font-size: 20px;
        padding-left: 15px;
    }
    .cmn-accordion .card-header .btn {
      background-color: #ffffff;
      padding: 20px !important;
      display: inline-flex;
      display: -ms-inline-flexbox;
      display: -webkit-inline-flex;
      align-items: center;
      text-decoration: none;
      text-align: left;
      height: auto;
    }
    .cmn-accordion .card-header {
      background-color: transparent;
      padding: 0;
      margin-bottom: 0 !important;
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 5px !important;
      -webkit-border-radius: 5px !important;
      -moz-border-radius: 5px !important;
      -ms-border-radius: 5px !important;
      -o-border-radius: 5px !important;
    }
    .cmn-accordion .card-body {
      border-top: 1px solid #e5e5e5;
      padding: 20px 30px;
    }
    .section-title {
      font-size: 40px;
      font-weight: 700;
      text-transform: capitalize;
    }
</style>
@endpush