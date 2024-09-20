
  <!-- Start Blog Section -->

  <div class="cs-shape_bg cs-style8 cs-shape_animaiton">
    <div class="cs-hero_shape cs-posiiton10"><img src="../assets/img/creative-agency/hero-shape/shape10.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton3"><img src="../assets/img/creative-agency/hero-shape/shape3.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton11"><img src="../assets/img/creative-agency/hero-shape/shape11.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton12"><img src="../assets/img/creative-agency/hero-shape/shape12.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton13"><img src="../assets/img/creative-agency/hero-shape/shape13.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton14"><img src="../assets/img/creative-agency/hero-shape/shape14.svg" alt="Shape"></div>
    <div class="cs-height_135 cs-height_lg_75"></div>
        <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="cs-section_heading cs-style3">
                <h2 class="cs-section_title cs-bold text-white">{{ __('home.events') }}</h2>
                <span class="cs-section_separetor cs-accent_bg"></span>
            </div>
            <div class="cs-height_80 cs-height_lg_60"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-7 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="cs-post cs-style9 cs-type1">
                        <div class="cs-post_thumb cs-accent_color">
                            {{--
                            <div class="cs-post_thumb_in cs-bg" id="event-img" data-src="{{ asset('assets/img/creative-agency/event-vodacom-big.jpg') }}"></div>
                            --}}
                            <img class="cs-post_thumb_in cs-bg img-fluid" id="event-img" src="{{ asset('assets/img/creative-agency/event') }}-{{ $last_event->company }}-big.jpg" alt="">
                        </div>
                        <div class="cs-post_right">
                            <div class="cs-post_label">
                                <ul class="cs-categories cs-mp0 cs-medium">
                                    <li>
                                        <span class="event-title cs-category cs-accent_color cs-accent_10_bg p-2 rounded bg-secondary text-white">
                                            {{ $last_event->title }}
                                        </span>
                                    </li>
                                </ul>
                                <div id="event-date" class="cs-post_time cs-primary_50_color text-white">
                                    {{ $last_event->event_date }}
                                </div>
                            </div>
                            <h6 class="text-white">
                                <span class="event-title">{{ $last_event->title }}</span> : <span id="event-description">{{ __('home.' . $last_event->description) }}</span>
                            </h6>
                        </div>
                    </div>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                </div>

                <div class="col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">

                    <div class="cs-post9_type2_wrap">

                        @foreach ($events as $event)
                            <div class="cs-post cs-style9 cs-type2">
                                <div role="button" onclick='changeEvent("{{ $event->title }}", "{{ $event->event_date }}", "{{ __("home." . $event->description) }}", "{{ asset("assets/img/creative-agency/event") }}-{{ $event->company }}-big.jpg");' class="cs-post_thumb">
                                    <div class="cs-post_thumb_in cs-bg" id="img-event-{{ $event->company }}" data-src="{{ asset('assets/img/creative-agency/event') }}-{{ $event->company }}-small.jpg"></div>
                                </div>
                                <div class="cs-post_right">
                                    <div class="">
                                        <div class="cs-categories cs-mp0 cs-medium">
                                            <div>
                                                <div role="button" onclick='changeEvent("{{ $event->title }}", "{{ $event->event_date }}", "{{ __("home." . $event->description) }}", "{{ asset("assets/img/creative-agency/event") }}-{{ $event->company }}-big.jpg");' id="title-event-{{ $event->company }}" class="btn btn-secondary">
                                                    {{ $event->title }}
                                                </div>
                                            </div>
                                        </div>
                                        <div id="date-event-{{ $event->company }}" class="cs-post_time cs-primary_50_color mt-1">
                                            <span class="event-date-class p-1 rounded">{{ $event->event_date }}</span>
                                        </div>
                                    </div>
                                    <h2 class="cs-post_title">
                                        <div class="event-min-desc" role="button" onclick='changeEvent("{{ $event->title }}", "{{ $event->event_date }}", "{{ __("home." . $event->description) }}", "{{ asset("assets/img/creative-agency/event") }}-{{ $event->company }}-big.jpg");' href="#">{{ $event->min_descr }}</div>
                                    </h2>
                                </div>
                            </div>

                            <div class="cs-height_30 cs-height_lg_30"></div>


                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="cs-height_100 cs-height_lg_40"></div>
    </div>
  <!-- End Blog Section -->



