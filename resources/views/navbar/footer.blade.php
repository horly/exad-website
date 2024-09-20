<!-- Footer Section -->
<div class="cs-height_130 cs-height_lg_130"></div>
<footer class="cs-footer cs-style1 cs-type1 rounded-0 cs-dark_footer wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
  <div class="container">
    <div class="cs-height_115 cs-height_lg_75"></div>
    <div class="row">
      <div class="col-xl-7 col-lg-6">
        <div class="cs-cta cs-style6">
            <div>
                <a class="cs-site_branding" href="{{ route('app_home') }}"><img src="{{ asset('assets/img/creative-agency/new-logo-exad-white.png') }}" class="link-logo-menu1"  alt="Logo"></a>
            </div>
                @if (Config::get('app.locale') == 'en')
                    <a href="{{ route('app_language', ['lang' => 'fr']) }}" class="cs-btn cs-style2 cs-accent_bg cs-medium rounded-0 cs-primary_font">
                        <i class="flag-icon flag-icon-fr rounded"></i>&nbsp;&nbsp;<span>{{ config('languages.fr') }}</span>
                    </a>
                @else
                    <a href="{{ route('app_language', ['lang' => 'en']) }}" class="cs-btn cs-style2 cs-accent_bg cs-medium rounded-0 cs-primary_font">
                        <i class="flag-icon flag-icon-gb rounded"></i>&nbsp;&nbsp;<span>{{ config('languages.en') }}</span>
                    </a>
                @endif
        </div>
        <div class="cs-height_0 cs-height_lg_75"></div>
      </div>
      <div class="col-xl-5 col-lg-6">
        <div class="row">
          <div class="col-md-6">
            <div class="cs-footer_item widget_nav_menu">
              <h2 class="cs-widget_title cs-semi_bold">{{ __('home.company') }}</h2>
              <ul class="menu">
                <li><a href="{{ route('app_about_us') }}">{{ __('home.about_us') }}</a></li>
                <li><a href="{{ route('app_services') }}">Services</a></li>
                <li><a href="{{ route('app_achievements') }}">{{ __('home.our_achievements') }}</a></li>
                <li><a href="{{ route('app_privacy_policy') }}">{{ __('home.privacy_policy') }}</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cs-footer_item cs-address_widgert">
              <h2 class="cs-widget_title cs-semi_bold">{{ __('home.contact_us') }}</h2>
              <ul>
                    <li>{{ config('app.email') }}</li>
                    <li>{{ config('app.phone') }}</li>
              </ul>
              <div class="cs-height_30 cs-height_lg_30"></div>
              <div class="cs-social_btns cs-style1">
                <a href="{{ config('app.facebook') }}" class="cs-accent_bg_hover cs-white_hover cs-white_5_bg cs-ternary_color rounded-0"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ config('app.instagram') }}" class="cs-accent_bg_hover cs-white_hover cs-white_5_bg cs-ternary_color rounded-0"><i class="fab fa-instagram"></i></a>
                <a href="{{ config('app.tweeter') }}" class="cs-accent_bg_hover cs-white_hover cs-white_5_bg cs-ternary_color rounded-0"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="{{ config('app.linkedin') }}" class="cs-accent_bg_hover cs-white_hover cs-white_5_bg cs-ternary_color rounded-0"><i class="fa-brands fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs-height_90 cs-height_lg_50"></div>
    <hr>
  </div>
  <div class="cs-copyright text-center">
    <div class="container">Copyright © {{ date('Y') }}.</div>
  </div>
</footer>
<!-- Footer Section -->
