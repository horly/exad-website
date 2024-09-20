@extends('base')
@section('title', __('home.achievements'))
@section('content')

@include('navbar.navbar')

<!-- Start Hero Seciton -->
<div class="cs-hero cs-style11 cs-type1 cs-center cs-shape_animaiton text-center">
    <div class="container">
        <div class="cs-hero_text">
            <h1 class="cs-hero_title cs-bold cs-white">{{ __('home.achievements') }}</h1>
            <ol class="cs-breadcrumb cs-style2 cs-type1 cs-white_80">
              <li class="cs-breadcrumb_item"><a href="{{ route('app_home') }}" class="cs-white">{{ __('home.home') }}</a></li>
              <li class="cs-breadcrumb_item">{{ __('home.achievements') }}</li>
            </ol>
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

  <div class="cs-height_80 cs-height_lg_60"></div>

  <div class="container">
    <div class="cs-slider cs-style1 cs-gap-50 cs-remove_overflow wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="1">
        <div class="cs-slider_wrapper">

          <div class="cs-slide">
            <div class="cs-portfolio cs-style4">
              <div class="cs-portfolio_img cs-bg" data-src="{{ asset('assets/img/creative-agency/ECOBANK1.jpg') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_in">
                  {{-- <div class="cs-portfolio_subtitle cs-accent_color text-uppercase">Project Name</div> --}}
                  <h2 class="cs-portfolio_title cs-bold cs-white">Ecobank RDC</h2>
                  <div class="cs-portfolio_description cs-white_80">
                      <ul>
                          <li>{{ __('home.relocation_of_entire') }}</li>
                      </ul>
                  </div>
                  <div class="cs-portfolio_details_btn">
                    <a href="{{ route('app_achievements_details', ['reference_company' => 'ECOBANK']) }}" class="cs-btn cs-style2 cs-accent_bg_2 cs-medium rounded-0 cs-primary_font">{{ __('home.view_details') }}</a>
                  </div>
                </div>
                <div class="cs-portfolio_shape cs-accent_color"></div>
              </div>
            </div>
          </div><!-- .cs-slide -->

          <div class="cs-slide">
            <div class="cs-portfolio cs-style4">
              <div class="cs-portfolio_img cs-bg" data-src="{{ asset('assets/img/creative-agency/VODACOM1.jpg') }}"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_in">
                  <h2 class="cs-portfolio_title cs-bold cs-white">VODACOM CONGO (RDC) S.A</h2>
                  <div class="cs-portfolio_description cs-white_80">
                      <ul>
                          <li>{{ __('home.store_network_encryptions_with') }}</li>
                          <li>{{ __('home.automotive_transport_management') }}</li>
                      </ul>
                  </div>
                  <div class="cs-portfolio_details_btn">
                      <a href="{{ route('app_achievements_details', ['reference_company' => 'VODACOM']) }}" class="cs-btn cs-style2 cs-accent_bg_2 cs-medium rounded-0 cs-primary_font">{{ __('home.view_details') }}</a>
                  </div>
                </div>
                <div class="cs-portfolio_shape cs-accent_color"></div>
              </div>
            </div>
          </div><!-- .cs-slide -->

          <div class="cs-slide">
            <div class="cs-portfolio cs-style4">
              <div class="cs-portfolio_img cs-bg" data-src="../assets/img/creative-agency/ORANGE1.jpg"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_in">
                  <h2 class="cs-portfolio_title cs-bold cs-white">Orange RDC</h2>
                  <div class="cs-portfolio_description cs-white_80">
                      <ul>
                          <li>{{ __('home.annual_contract_for_network_infrastructure_management') }}</li>
                          <li>{{ __('home.provisioning_fusion_huawei_servers') }}</li>
                      </ul>
                  </div>
                  <div class="cs-portfolio_details_btn">
                    <a href="{{ route('app_achievements_details', ['reference_company' => 'ORANGE']) }}" class="cs-btn cs-style2 cs-accent_bg_2 cs-medium rounded-0 cs-primary_font">{{ __('home.view_details') }}</a>
                  </div>
                </div>
                <div class="cs-portfolio_shape cs-accent_color"></div>
              </div>
            </div>
          </div><!-- .cs-slide -->

          <div class="cs-slide">
            <div class="cs-portfolio cs-style4">
              <div class="cs-portfolio_img cs-bg" data-src="../assets/img/creative-agency/SPSA-COBIL1.jpg"></div>
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_in">
                  <h2 class="cs-portfolio_title cs-bold cs-white">PUMA ENERGY/SPSA-COBIL</h2>
                  <div class="cs-portfolio_description cs-white_80">
                      <ul>
                          <li>{{ __('home.four_year_contract_on_the_matadi_oil_site') }}</li>
                      </ul>
                  </div>
                  <div class="cs-portfolio_details_btn">
                      {{--
                          <a href="#" class="cs-btn cs-style2 cs-accent_bg_2 cs-medium rounded-0 cs-primary_font">{{ __('home.view_details') }}</a>
                      --}}
                  </div>
                </div>
                <div class="cs-portfolio_shape cs-accent_color"></div>
              </div>
            </div>
          </div><!-- .cs-slide -->

          <div class="cs-slide">
              <div class="cs-portfolio cs-style4">
                <div class="cs-portfolio_img cs-bg" data-src="../assets/img/creative-agency/ENGEN1.jpg"></div>
                <div class="cs-portfolio_info">
                  <div class="cs-portfolio_info_in">
                    <h2 class="cs-portfolio_title cs-bold cs-white">Engen DRC S.A</h2>
                    <div class="cs-portfolio_description cs-white_80">
                        <ul>
                            <li>{{ __('home.creation_of_an_automatic_check_printing_application') }}</li>
                        </ul>
                    </div>
                    <div class="cs-portfolio_details_btn">
                        {{--
                            <a href="#" class="cs-btn cs-style2 cs-accent_bg_2 cs-medium rounded-0 cs-primary_font">{{ __('home.view_details') }}</a>
                        --}}
                    </div>
                  </div>
                  <div class="cs-portfolio_shape cs-accent_color"></div>
                </div>
              </div>
            </div><!-- .cs-slide -->

            <div class="cs-slide">
              <div class="cs-portfolio cs-style4">
                <div class="cs-portfolio_img cs-bg" data-src="../assets/img/creative-agency/FBNBANK1.jpg"></div>
                <div class="cs-portfolio_info">
                  <div class="cs-portfolio_info_in">
                    <h2 class="cs-portfolio_title cs-bold cs-white">FBNBank DRC SA</h2>
                    <div class="cs-portfolio_description cs-white_80">
                        <ul>
                            <li>{{ __('home.lan_segmentation') }}</li>
                            <li>{{ __('home.fortigate_firewall_license_renewal') }}</li>
                        </ul>
                    </div>
                    <div class="cs-portfolio_details_btn">
                        {{--
                            <a href="#" class="cs-btn cs-style2 cs-accent_bg_2 cs-medium rounded-0 cs-primary_font">{{ __('home.view_details') }}</a>
                        --}}
                    </div>
                  </div>
                  <div class="cs-portfolio_shape cs-accent_color"></div>
                </div>
              </div>
            </div><!-- .cs-slide -->

        </div>
      </div><!-- .cs-slider_container -->
      <div class="cs-slider_arrows cs-style1 cs-type4 cs-center">
        <div class="cs-left_arrow cs-center cs-accent_color">
          <i class="fas fa-angle-left"></i>
        </div>
        <div class="cs-right_arrow cs-center cs-accent_color">
          <i class="fas fa-angle-right"></i>
        </div>
      </div>
    </div><!-- .cs-slider -->
  </div>



  @include('navbar.footer')

  @endsection
