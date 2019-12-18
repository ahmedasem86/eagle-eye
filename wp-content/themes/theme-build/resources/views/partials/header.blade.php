<header>
  {{-- <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
      @if(is_home() || is_front_page())
        <h1 class="logos mr-auto">
          <a class="navbar-brand" href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}">
            <img class="img-fluid" src="@if(get_field('website_logo', 'option')) {{ the_field('website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
            <span class="sr-only"> {{ get_bloginfo('name') }} </span>
          </a>
        </h1>
      @else
        <h2 class="logos mr-auto">
          <a class="navbar-brand" href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}">
            <img class="img-fluid" src="@if(get_field('website_logo', 'option')) {{ the_field('website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
            <span class="sr-only"> {{ get_bloginfo('name') }} </span>
          </a>
        </h2>
      @endif
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <h2 class="sr-only">{{ _e('Breadcrumb navigation', 'domain') }}</h2>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'navbar-nav ml-auto mr-md-5', 'walker' => new NavWalker()]) !!}
        @endif
        <div class="nav-right">
          <div class="site-search inline-popups mr-md-5">
            <a href="#search" class="text-black" title="" data-effect="mfp-zoom-out"><i class="fa fa-search fa-lg"></i></a>
          </div>
          <a class="navbar-brand logo-created" href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}">
            <img class="img-fluid" src="@if(get_field('created_website_logo', 'option')) {{ the_field('created_website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo-created.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
            <span class="sr-only"> {{ get_bloginfo('name') }} </span>
          </a>
        </div>
      </div>
    </nav>
  </div> --}}
  <div class="row hader-top">
      <div class="col-md-6 social text-center ">
              Visit Us  Sunday to Thursday from 9:00 am - 5:00 pm
      </div>
      <div class="col-md-6">
        <div class="social text-center">
          <ul class="list-unstyled">
              <li><a class="icon" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a  class="icon" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a  class="icon" href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a  class="icon" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
               <li><a class="icon"  href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
              <li><a  class="icon" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
              {{ Utilities::language_selector_flags() }}
          </ul>
        </div>
      </div>
  </div>

  <div class="nav-hader-buton nav-hom">
    <div class="container">
      <nav class="navbar navbar-expand-sm">
          <a href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}">
            <img class="img-fluid" height="50" src="@if(get_field('website_logo', 'option')) {{ the_field('website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
            <span class="sr-only"> {{ get_bloginfo('name') }} </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'navbar-nav ml-auto', 'walker' => new NavWalker()]) !!}
            @endif
            <ul class="navbar-nav">
              <li class="nav-item">
                  <form id="demo-2">
                    <input type="search" placeholder="">
                  </form>
               </li>
            </ul>
          </div>
      </nav>
    </div>
  </div>
</header>
