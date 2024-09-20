@extends('base')
@section('title', __('home.our_achievements'))
@section('content')

@include('navbar.navbar')


<!-- Start Hero Seciton -->
<div class="cs-hero cs-style11 cs-type1 cs-center cs-shape_animaiton">
    <div class="container">
      <div class="cs-hero_text">
        <h1 class="cs-hero_title cs-bold cs-white">{{ __('home.achievements') }}</h1>
        <ol class="cs-breadcrumb cs-style2 cs-type1 cs-white_80">
          <li class="cs-breadcrumb_item"><a href="{{ route('app_achievements') }}" class="cs-white">{{ __('home.our_achievements') }}</a></li>
          <li class="cs-breadcrumb_item">{{ $company }}</li>
        </ol>
      </div>
    </div>
    <div class="cs-hero_img cs-bg" data-src="{{ asset('assets/img/creative-agency') }}/{{ $reference_company }}2.jpg">
      <div class="cs-hero_img_circle"></div>
    </div>
    <div class="cs-hero_shape cs-posiiton1"><img src="../assets/img/creative-agency/hero-shape/shape1.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton2"><img src="../assets/img/creative-agency/hero-shape/shape2.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton3"><img src="../assets/img/creative-agency/hero-shape/shape3.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton4"><img src="../assets/img/creative-agency/hero-shape/shape4.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton5"><img src="../assets/img/creative-agency/hero-shape/shape5.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton6"><img src="../assets/img/creative-agency/hero-shape/shape6.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton7"><img src="../assets/img/creative-agency/hero-shape/shape7.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton8"><img src="../assets/img/creative-agency/hero-shape/shape8.svg" alt="Shape"></div>
    <div class="cs-hero_shape cs-posiiton9"><img src="../assets/img/creative-agency/hero-shape/shape9.svg" alt="Shape"></div>
  </div>
  <!-- End Hero Seciton -->

  <div>
    <div class="cs-height_140 cs-height_lg_80"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="cs-left_full_width text-end">
            <div class="cs-image_box cs-style3 cs-type2 cs-parallax cs-align_right cs-hobble">
              <div class="cs-image_box_img">
                <div class="cs-image_box_img_in">
                  <div class="cs-hover_layer3"><img src="{{ asset('assets/img/creative-agency') }}/{{ $reference_company }}3.jpg" alt=""></div>
                </div>
              </div>
              <div class="cs-image_box_pattern cs-accent_color_2 cs-hover_layer3"></div>
            </div>
          </div>
        </div><!-- .col -->

        <div class="col-lg-5 offset-lg-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="cs-vertical_middle">
            <div class="cs-vertical_middle_in">
              <div class="cs-height_0 cs-height_lg_50"></div>
              <div class="cs-text_box cs-style1 cs-size3">
                <h2 class="cs-text_box_title">{{ $company }}</h2>
                <span class="cs-text_box_separetor cs-accent_bg"></span>
                <div class="cs-height_40 cs-height_lg_40"></div>
                <div class="cs-text_box_text">

                    @foreach ($achievements as $achievement)
                        <ul>
                            <li>{{ __('home.' . $achievement->description) }}</li>
                        </ul>
                    @endforeach

                </div>
                <div class="cs-height_40 cs-height_lg_40"></div>
              </div>
            </div>
          </div>
        </div><!-- .col -->

      </div>
    </div>
    <div class="cs-height_130 cs-height_lg_80"></div>
  </div>


  @include('navbar.footer')

@endsection
