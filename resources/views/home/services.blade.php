@extends('base')
@section('title', __('home.our_services'))
@section('content')

@include('navbar.navbar')

<!-- Start Hero Seciton -->
<div class="cs-hero cs-style11 cs-type1 cs-center cs-shape_animaiton text-center">
    <div class="container">
      <div class="cs-hero_text">
        <h1 class="cs-hero_title cs-bold cs-white">
            {{ __('services.solutions_and_service_offers') }}
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
        <h3 class="cs-bold">{{ __('services.it_services') }}</h3>

        <ul>
            <li>{{ __('services.cybersecurity_solutions') }}</li>
            <li>{{ __('services.email_security_gateway') }}</li>
            <li>{{ __('services.endpoint_solutions')}}</li>
            <li>{{ __('services.network_segmentation') }}</li>
            <li>{{ __('services.network_resilience') }}</li>
            <li>{{ __('services.infrastructure_management') }}</li>
            <li>{{ __('services.backup_management') }}</li>
            <li>{{ __('services.service_desk_management') }}</li>
            <li>{{ __('services.with_tenable') }}</li>
            <li>{{ __('services.network_installations') }}</li>
            <li>{{ __('services.license_renewal') }}</li>
            <li>{{ __('services.system_infrastructure_maintenance') }}</li>
            <li>{{ __('services.remote_site_connectivity') }}</li>
            <li>{{ __('services.bandwidth_management') }}</li>
            <li>{{ __('services.outsourcing_resources') }}</li>
            <li>{{ __('services.it_infrastructure_and_equipment') }}</li>
            <li>{{ __('services.data_security_solutions') }}</li>
        </ul>

        <h3 class="cs-bold">{{ __('services.logistics') }}</h3>

        <h4>{{ __('services.fleet_management_solution') }}</h4>

        <p>{{ __('services.fleet_management_description') }}</p>
        <p>{{ __('services.fleet_management_challenges') }}</p>
        <ul>
            <li>{{ __('services.improving_driver_efficiency') }}</li>
            <li>{{ __('services.increasing_deliveries_reducing_overtime_costs') }}</li>
            <li>{{ __('services.reducing_accidents_vehicle_wear') }}</li>
            <li>{{ __('services.finding_optimal_routes') }}</li>
            <li>{{ __('services.optimizing_vehicle_maintenance') }}</li>
            <li>{{ __('services.eliminating_unauthorized_vehicle_use') }}</li>
            <li>{{ __('services.managing_risks_reducing_insurance_costs') }}</li>
            <li>{{ __('services.improving_worker_productivity') }}</li>
        </ul>

        <p>{{ __('services.fleet_management_solutions_info') }}</p>

        <ul>
            <li>{{ __('services.real_time_vehicle_tracking') }}</li>
            <li>{{ __('services.real_time_alerts_comprehensive_reports') }}</li>
        </ul>

        <h4>{{ __('services.fuel_management_solutions_with_real_time_reports') }}</h4>

        <p>{{ __('services.fuel_management_description') }}</p>
        <p>{{ __('services.fuel_management_solutions_benefits') }}</p>

        <h3 class="cs-bold">{{ __('services.contract') }}</h3>

        <p>{{ __('services.we_are_in_partnership_with') }}</p>
        <ul>
            <li>{{ __('services.huawei') }}</li>
            <li>{{ __('services.fusion') }}</li>
            <li>{{ __('services.nice_nexdia') }}</li>
            <li>{{ __('services.invigo') }}</li>
            <li>{{ __('services.manageengine_zoho') }}</li>
            <li>{{ __('services.fortinet') }}</li>
            <li>{{ __('services.cisco') }}</li>
            <li>{{ __('services.dell') }}</li>
            <li>{{ __('services.mc3') }}</li>
            <li>{{ __('services.lenovo') }}</li>
            <li>{{ __('services.motorola_technology') }}</li>
            <li>{{ __('services.teltonika') }}</li>
            <li>{{ __('services.tenable') }}</li>
            <li>{{ __('services.edt_piifleet') }}</li>
            <li>{{ __('services.vodacom') }}</li>
            <li>{{ __('services.orange') }}</li>
        </ul>

        @include('home.manufacturer_authorization')

    </div>
   </div>


  @include('navbar.footer')

@endsection
