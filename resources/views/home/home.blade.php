@extends('base')
@section('title', __('home.home'))
@section('content')

@include('navbar.navbar')

<!-- Start Hero Seciton -->
<div class="cs-hero cs-style11 cs-center cs-shape_animaiton">
    <div class="container">
      <div class="cs-hero_text wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
        <h1 class="cs-hero_title cs-bold cs-white">
          {!! __('home.tailor_made_it_solutions') !!}
        </h1>
        <div class="cs-hero_subtitle cs-white_80">
          {{ config('app.name') }} {{ __('home.your_trusted_partner') }}
        </div>
        <div class="cs-hero_btns">
          <a href="#" class="cs-btn cs-style2 cs-btn_lg cs-accent_bg_2 cs-medium rounded-0 cs-primary_font">
            {{ __('home.about_us') }}
          </a>
        </div>
      </div>
    </div>
    <div class="cs-hero_img cs-bg wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s" data-src="{{ asset('assets/img/creative-agency/home-img.jpg') }}">
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

  {{-- start our service --}}
    @include('home.our_service')
  {{-- end our service --}}

  {{-- start our partner --}}
  @include('home.our_partner')
  {{-- end our partner --}}

  <div class="container">
        @include('home.manufacturer_authorization')
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>

   {{-- start best service --}}
   @include('home.best_service')
   {{-- end  best service --}}

   @include('home.our_project')

   @include('home.our_team')

   @include('home.events')

   @include('home.contact-form')

   @include('navbar.footer')

@endsection
