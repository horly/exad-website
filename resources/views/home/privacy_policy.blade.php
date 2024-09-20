@extends('base')
@section('title', __('home.our_services'))
@section('content')

@include('navbar.navbar')


<!-- Start Hero Seciton -->
<div class="cs-hero cs-style11 cs-type1 cs-center cs-shape_animaiton text-center">
    <div class="container">
      <div class="cs-hero_text">
        <h1 class="cs-hero_title cs-bold cs-white">
            {{ __('home.privacy_policy') }}
        </h1>
        <div class="cs-height_10 cs-height_lg_10"></div>
        <div class="cs-blog_details_meta cs-white_80">
        </div>
      </div>
    </div>
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
        <h3 class="cs-bold">Introduction</h3>

        <p>
            <b>{{ config('app.name') }}</b> {{ __('home.is_commited_to_protectecting_your_data') }}.
        </p>

        <h3 class="cs-bold">{{ __('home.information_we_collect') }}</h3>
        <div>{{ __('home.we_may_collect_the_following_information_from_you') }} :</div>
            <ul>
                <li><span class="cs-medium cs-accent_color">{{ __('home.information_you_provide_to_us') }} </span> : {{ __('home.this_includes_information_you_provide') }}. </li>
                <li><span class="cs-medium cs-accent_color">{{ __('home.navigation_information') }} </span> : {{ __('home.when_you_visit_our_website') }}.</li>
            </ul>

        <h3 class="cs-bold">{{ __('home.use_of_your_information') }}</h3>
        <div>{{ __('home.we_use_your_information_to') }} :</div>
            <ul>
                <li><span class="cs-medium cs-accent_color">{{ __('home.providing_our_services_to_you') }} </span></li>
                <li><span class="cs-medium cs-accent_color">{{ __('home.improve_our_website') }} </span></li>
                <li><span class="cs-medium cs-accent_color">{{ __('home.contact_you_to_provide_you') }} </span></li>
                <li><span class="cs-medium cs-accent_color">{{ __('home.protect_our_rights') }} </span></li>
            </ul>

        <h3 class="cs-bold">{{ __('home.security_of_your_information') }}</h3>
        <p>
            {{ __('home.we_take_reasonable') }}.
        </p>

        <h3 class="cs-bold">Contact</h3>

        <p>
            {{ __('home.if_you_have_any_questions_about') }} <b class="cs-medium cs-accent_color">{{ config('app.email') }}</b>.
        </p>

    </div>
</div>


  @include('navbar.footer')

@endsection
