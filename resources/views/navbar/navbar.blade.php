<!-- Start Header Section -->
<header class="cs-site_header cs-style3 cs-type1 cs-primary_font">
    <div class="cs-main_header">
      <div class="container">
        <div class="cs-main_header_in">
          <div class="cs-main_header_left">
            <a class="cs-site_branding" href="{{ route('app_home') }}"><img src="{{ asset('assets/img/creative-agency/new-logo-exad-white.png') }}" class="link-logo-menu1"  alt="Logo"></a>
          </div>
          <div class="cs-main_header_right">
            <div class="cs-hamburger_wrap cs-white">
              <div class="cs-hamburger">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="cs-nav_wrap">
              <button class="cs-nav_cross close-menu-btn"><i class="fas fa-times"></i></button>
              <div class="cs-nav_out cs-accent_bg cs-white bg-white">
                <div class="cs-nav_in">
                  <a class="cs-site_branding" href="{{ route('app_home') }}"><img class="link-logo-menu" src="{{ asset('assets/img/creative-agency/new-logo-exad.png') }}" alt="Logo"></a>
                  <div class="cs-nav">
                    <ul class="cs-nav_list">
                        <li class="@if (Request::route()->getName() == "app_home") current-menu-item @endif">
                            <a href="{{ route('app_home') }}">{{ __('home.home') }}</a>
                        </li>
                        <li class="@if (Request::route()->getName() == "app_about_us") current-menu-item @endif">
                            <a href="{{ route('app_about_us') }}">{{ __('home.about_us') }}</a>
                        </li>
                        <li class="@if (Request::route()->getName() == "app_services") current-menu-item @endif">
                            <a href="{{ route('app_services') }}">Services</a>
                        </li>
                        <li class="@if (Request::route()->getName() == "app_achievements_details" || Request::route()->getName() == "app_achievements") current-menu-item @endif">
                            <a href="{{ route('app_achievements') }}">{{ __('home.our_achievements') }}</a>
                        </li>
                        <li class="menu-item-has-children">
                          @if (Config::get('app.locale') == 'en')
                                <a href="#">EN &nbsp;
                                    <i class="flag-icon flag-icon-gb rounded"></i>
                                </a>
                          @else
                                <a href="#">FR &nbsp;
                                    <i class="flag-icon flag-icon-fr rounded"></i>
                                </a>
                          @endif
                        </a>
                        <ul>
                          <li>
                            <a href="{{ route('app_language', ['lang' => 'fr']) }}"><i class="flag-icon flag-icon-fr rounded"></i> Français</a>
                          </li>
                          <li>
                            <a href="{{ route('app_language', ['lang' => 'en']) }}"><i class="flag-icon flag-icon-gb rounded"></i> English</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="cs-toolbox">
                    <div class="cs-social_btns cs-style1">
                      <a href="{{ config('app.facebook') }}" class="cs-accent_bg icon-nav-menu"><i class="fab fa-facebook-f"></i></a>
                      <a href="{{ config('app.instagram') }}" class="cs-accent_bg icon-nav-menu"><i class="fab fa-instagram"></i></a>
                      <a href="{{ config('app.tweeter') }}" class="cs-accent_bg icon-nav-menu"><i class="fa-brands fa-x-twitter"></i></a>
                      <a href="{{ config('app.linkedin') }}" class="cs-accent_bg icon-nav-menu"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <ul class="cs-mp0 cs-secondary_font text-theme-color">
                      <li>{{ config('app.email') }}</li>
                      <li>{{ config('app.phone') }}</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Section -->
