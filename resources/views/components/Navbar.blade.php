

<!DOCTYPE html>
<html lang="en" class="{{ LaravelLocalization::getCurrentLocaleRegional() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ url('sass/main.css') }}">
  <link rel="icon" href='{{ asset('assets/Logo.webp') }}' />    
  <title> @yield('title') </title>
  <meta name="description" content=@yield('desc') />
  <link rel="canonical" href="https://mrmadvertisingdubai.com/"@yield('canonical') />
  
  
  
  
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
  
  {{-- @viteReactRefresh --}}
  {{-- @vite(['resources/sass/app.scss' , 'resources/js/app.js']) --}}
</head>
<body>  
  
  
  <nav @if($navStyle ?? "") class="fixed" @else class="sticky"  @endif >
    <div class="container">
    <a data-aos='fade-down' data-aos-once="true"  href="/"> <img src="{{ asset('assets/Logo1.webp') }}" alt=""> </a>
    <i class='bx bx-menu menu'></i>
    <ul class="ul" >

      <a data-aos='fade-down' data-aos-once="true" data-aos-delay="100" @if(request()->is('en')) class="active"  @endif   href="/">{{ __('all.Nav.li1') }}</a>
      <div data-aos='fade-down' data-aos-once="true" data-aos-delay="200" class="ul-list">
        <div class="group">
          <a href="#">{{ __('all.Nav.li2') }}</a>
          <i class='bx bxs-chevron-up'></i>
        </div>
        <ul  >
          <a @if(request()->is('en/web-development-company-in-dubai')) class="active" @endif href="{{ url('/web-development-company-in-dubai') }}"      >{{ __('all.Nav.li3') }}</a>
          <a @if(request()->is('en/Photography-In-Dubai')) class="active" @endif href="{{ url('/Photography-In-Dubai') }}"            >{{ __('all.Nav.li4') }}</a>
          <a @if(request()->is('en/exhibition-and-display-stand-agency-in-dubai')) class="active" @endif href="{{ url('/exhibition-and-display-stand-agency-in-dubai') }}">{{ __('all.Nav.li5') }}</a>
          <a @if(request()->is('en/indoor-and-outdoor-signages-agency-in-dubai')) class="active" @endif href="{{ url('/indoor-and-outdoor-signages-agency-in-dubai') }}"                        >{{ __('all.Nav.li6') }}</a>
          <a @if(request()->is('en/social-media-marketing-agency-in-dubai')) class="active" @endif href="{{ url('/social-media-marketing-agency-in-dubai') }}">{{ __('all.Nav.li7') }}</a>
          <a @if(request()->is('en/Corporate-gifts-in-dubai')) class="active" @endif href="{{ url('/Corporate-gifts-in-dubai') }}"                    >{{ __('all.Nav.li8') }}</a>
          <a @if(request()->is('en/advertising-ppc-agency-in-dubai')) class="active" @endif href="{{ url('/advertising-ppc-agency-in-dubai') }}"             >{{ __('all.Nav.li9') }}</a>
          <a @if(request()->is('en/branding-agency-in-dubai')) class="active" @endif href="{{ url('/branding-agency-in-dubai') }}"                    >{{ __('all.Nav.li10') }}</a>
          <a @if(request()->is('en/seo-agency-in-dubai')) class="active" @endif href="{{ url('/seo-agency-in-dubai') }}"                         >{{ __('all.Nav.li11') }}</a>
        </ul>
      </div>

      <a data-aos='fade-down' data-aos-once="true" data-aos-delay="300" @if(request()->is('en/blog')) class="active"  @endif href="/blog">{{ __('all.Nav.li12') }}</a>
      <a data-aos='fade-down' data-aos-once="true" data-aos-delay="400" @if(request()->is('en/about-us')) class="active"  @endif href="/about-us">{{ __('all.Nav.li13') }}</a>
      <a data-aos='fade-down' data-aos-once="true" data-aos-delay="500" @if(request()->is('en/contact-us')) class="active"  @endif href="/contact-us">{{ __('all.Nav.li14') }}</a>

      <div class="language" data-aos-once="true" data-aos='fade-down' data-aos-delay="600">
        <div class='main' > <span>{{ LaravelLocalization::getCurrentLocaleNative() }}</span>  <i class='bx bxs-chevron-down '></i> </div>
        <div class="select">
          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a class="a-lang . {{ LaravelLocalization::getCurrentLocaleRegional() }}" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
          @endforeach
        </div>
      </div>



      </ul>
    </div>
  </nav>


  @yield('body')



  <script src="{{ url('js/main.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"> </script> 
  <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  

<script> AOS.init({ once: true });</script> 
</body>
</html>

