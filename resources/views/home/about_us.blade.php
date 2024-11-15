@extends('base')
@section('title', __('home.about_us'))
@section('content')

@include('navbar.navbar')

<!-- Start Hero Seciton -->
<div class="cs-hero cs-style11 cs-type1 cs-center cs-shape_animaiton text-center">
    <div class="container">
      <div class="cs-hero_text">
        <h1 class="cs-hero_title cs-bold cs-white">
            @if (Config::get('app.locale') == 'en')
                {{ __('home.about_company') }} {{ config('app.name') }}
            @else
                {{ __('home.about_company') }}{{ config('app.name') }}
            @endif
        </h1>
        <div class="cs-height_10 cs-height_lg_10"></div>
        <div class="cs-blog_details_meta cs-white_80">
          <div class="cs-post_date">
            <span>{{ __('home.founded_on') }}</span>&nbsp;&nbsp;
            <i class="far fa-calendar-alt"></i> 23 {{ __('date.march') }}, {{ config('app.founded_year') }}
        </div>
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
        <h3 class="cs-bold">{{ __('home.about_us') }}</h3>

        <p><b>{{ config('app.name') }}</b> {{ __('home.is_a_service_company_focused_on_the_implementation') }}</p>

        <p>{{ __('home.we_offer_you_a_complete_range_of_products') }}</p>

        <p>{{ __('home.we_are_driven_by_dedication_discipline') }}</p>

        <div class="cs-height_80 cs-height_lg_60"></div>

        <h3 class="cs-bold">{{ __('home.our_mission') }}</h3>

        <p>{{ __('home.we_are_a_responsive_company_with_rich_experience') }}</p>

        <h3 class="cs-bold">{{ __('home.our_vision') }}</h3>

        <p>{{ __('home.combining_cutting_edge_technologies_and_expertise_in_networks') }}</p>

        <p>{{ __('home.we_also_work_to_provide_logistical_solutions') }}</p>

        <h3 class="cs-bold">{{ __('home.our_development_drivers') }}</h3>

        <ul>
            <li>{{ __('home.excellence') }}</li>
            <li>{{ __('home.trust') }}</li>
            <li>{{ __('home.innovation') }}</li>
            <li>{{ __('home.transparency') }}</li>
            <li>{{ __('home.teamwork') }}</li>
        </ul>

        <h3 class="cs-bold">{{ __('home.what_we_believe_in') }}</h3>

        <ul>
            <li>{{ __('home.motivation') }}</li>
            <li>{{ __('home.collective_responsibility_and_leadership') }}</li>
            <li>{{ __('home.professionalism_and_ethics') }}</li>
            <li>{{ __('home.proactivity_and_added_value_to_our_customers_needs') }}</li>
        </ul>

        <div class="cs-height_80 cs-height_lg_60"></div>

        {{--
        <h3 class="cs-bold">{{ __('home.our_head_office') }}</h3>
        <p><b>{{ config('app.name') }}</b>, {{ __('home.congolese_company_registered_under') }} : </p>
        <ul>
            <li><b>RCCM</b> : {{ config('app.rccm') }}</li>
            <li><b>ID.NAT</b> : {{ config('app.idnat') }}</li>
            <li><b>NIF</b> : {{ config('app.nif') }}</li>
            <li><b>{{ __('home.bank_account') }}</b> :
                <ul>
                    <li>{{ config('app.bankaccount1') }}</li>
                    <li>{{ config('app.bankaccount2') }}</li>
                </ul>
            </li>
        </ul>
        --}}

        <div class="cs-contact_info_wrap">
            <h4 class="cs-contact_title cs-semi_bold">{{ __('home.contact_information') }} </h4>
            <div class="cs-height_10 cs-height_lg_10"></div>
            <ul class="cs-contact_info cs-mp0">
              <li><i class="fas fa-phone-alt info-icon-about"></i>{{ config('app.phone') }} </li>
              <li><i class="far fa-address-book info-icon-about"></i>{{ config('app.email') }}</li>
              {{--<li><i class="fas fa-fax"></i>+1 323 555 1234</li>--}}
              <li><i class="fas fa-map-marker-alt info-icon-about"></i>{{ config('app.address') }}</li>
              <li><i class="fa-solid fa-house info-icon-about text-white"></i>{{ config('app.ville') }}-{{ config('app.commune') }}</li>
              <li><i class="fa-solid fa-house info-icon-about text-white"></i>{{ __('home.drc') }}</li>
            </ul>
        </div>

    </div>

  </div>

  @include('navbar.footer')

@endsection
