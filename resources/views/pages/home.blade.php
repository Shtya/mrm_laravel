@extends('components.Navbar')

<?php 

    use App\Models\blog;
    $blog = blog::orderBy('created_at', 'desc')->limit(10)->get() ;

  $images_home = [

  
    ["name" => "Signages all" , 'img' =>  "assets/gallery/1.RECEPTION/Reception Signage 600x600-01.webp"        , 'alt' => "The logo for design advertising is on a desk in a room."   ],
    ["name" => "Signages all" , 'img' =>  "assets/gallery/1.RECEPTION/Reception Signage 600x600-02.webp"        , 'alt' => "The logo for design advertising is on a desk in a room."   ] ,  
    ["name" => "Signages all" , 'img' =>  "assets/gallery/2.UNIPOLE/Unipole 600x600-01.webp"        , 'alt' => "Real estate billboard template psd."  ],
    ["name" => "Signages all" , 'img' =>  "assets/gallery/2.UNIPOLE/Unipole 600x600-02.webp"        , 'alt' => "Real estate billboard template psd."  ]   ,
    ["name" => "Signages all" , 'img' =>  "assets/gallery/3.LED-inddor/LED Signage 600x600-01.webp"        , 'alt' => "led sign with gold lettering on a black background."   ],
    ["name" => "Signages all" , 'img' =>  "assets/gallery/3.LED-inddor/LED Signage 600x600-02.webp"        , 'alt' => "led sign with gold lettering on a black background."   ]   ,
    ["name" => "Signages all" , 'img' =>  "assets/gallery/4.Office-Sign/Office Sign-01.webp"        , 'alt' => "A creative design company logo on a black wall." ],
    ["name" => "Signages all" , 'img' =>  "assets/gallery/4.Office-Sign/Office Sign-02.webp"        , 'alt' => "A creative design company logo on a black wall." ]   ,
    ["name" => "Signages all" , 'img' =>  "assets/gallery/5.HEALTH/Health-Safety 600x600-01.webp"        , 'alt' => "An airport kiosk with information on it."   ],
    ["name" => "Signages all" , 'img' =>  "assets/gallery/5.HEALTH/Health-Safety 600x600-02.webp"        , 'alt' => "An airport kiosk with information on it."   ]  , 
    ["name" => "Signages all" , 'img' =>  "assets/gallery/6.LAMPPOST/Lamppost 600x600-01.webp"        , 'alt' => "An airport kiosk with information on it."  ],
    ["name" => "Signages all" , 'img' =>  "assets/gallery/6.LAMPPOST/Lamppost 600x600-02.webp"        , 'alt' => "An airport kiosk with information on it."  ]  , 
    ["name" => "Signages all" , 'img' =>  "assets/gallery/7.Menu-Boards/Menu Board Signage 600x600-01.webp"        , 'alt' => "A coffee shop with a menu on the wall."  ],
    ["name" => "Signages all" , 'img' =>  "assets/gallery/7.Menu-Boards/Menu Board Signage 600x600-02.webp"        , 'alt' => "A coffee shop with a menu on the wall."  ]  , 
    ["name" => "Signages all" , 'img' =>  "assets/gallery/8.Building/Building Wrap 600x600-01.webp"        , 'alt' => "The building where the hotel is located." ],
    ["name" => "Signages all" , 'img' =>  "assets/gallery/8.Building/Building Wrap 600x600-02.webp"        , 'alt' => "The building where the hotel is located." ] ,  


    [ "name" => "Displaystands all" , "img" => "assets/gallery/displayStand/NEW Display Stand-03.webp"  , "alt" => "Modern pharmacy display stand with illuminated shelving  "   ],
    [ "name" => "Displaystands all" , "img" => "assets/gallery/displayStand/NEW Display Stand-04.webp"  , "alt" => "Elegant jewelry store interior with display cases  "     ]   ,
    [ "name" => "Displaystands all" , "img" => "assets/gallery/displayStand/NEW Display Stand-05.webp"  , "alt" => "contemporary store display stand design   "   ],
    [ "name" => "Displaystands all" , "img" => "assets/gallery/displayStand/NEW Display Stand-07.webp"  , "alt" => "cosmetic display stand  with greenery accents  "     ]   ,
    [ "name" => "Displaystands all" , "img" => "assets/gallery/displayStand/NEW Display Stand-08.webp"  , "alt" => " Display stand makeup shelves with bold imagery.  "   ],
    [ "name" => "Displaystands all" , "img" => "assets/gallery/displayStand/NEW Display Stand-09.webp"  , "alt" => "Stylish beauty product display stand in an elegant store  "     ]   ,

    [ "name" => "Exhibition all" , "img" =>  "assets/gallery/exhibitionStand/Exhibition Stands-01.webp"   , "alt" => "Modern exhibit booth with striking black and gold design  "   ],
    [ "name" => "Exhibition all" , "img" =>  "assets/gallery/exhibitionStand/Exhibition Stands-02.webp"   , "alt" => "Chic jewelry Exhibition stand with luxurious white decor.  "     ]   ,
    [ "name" => "Exhibition all" , "img" =>  "assets/gallery/exhibitionStand/Exhibition Stands-03.webp"   , "alt" => "Sophisticated boutique Exhibition stand with curved wooden details  "   ],
    [ "name" => "Exhibition all" , "img" =>  "assets/gallery/exhibitionStand/Exhibition Stands-04.webp"   , "alt" => "Futuristic exhibition space with white and blue lighting.  "     ]   ,
    [ "name" => "Exhibition all" , "img" =>  "assets/gallery/exhibitionStand/Exhibition Stands-05.webp"   , "alt" => "Elegant exhibition stand with flowing golden accents  "   ],
    [ "name" => "Exhibition all" , "img" =>  "assets/gallery/exhibitionStand/Exhibition Stands-06.webp"   , "alt" => "Opulent event booth with overhead golden chandelier  "     ]   ,
    [ "name" => "Exhibition all" , "img" =>  "assets/gallery/exhibitionStand/Exhibition Stands-07.webp"   , "alt" => "Contemporary lounge area within a Exhibition stand.  "   ],
    [ "name" => "Exhibition all" , "img" =>  "assets/gallery/exhibitionStand/Exhibition Stands-08.webp"   , "alt" => "Innovative tech exhibition stand with circular theme  "     ]   ,

  
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/Logo-Design/Branding Gallery-01.webp"   , "alt" => "Phone with social media event promotion  " ],
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/Logo-Design/Branding Gallery-02.webp"   , "alt" => "Professionals from different industries  " ]   ,
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/Logo-Design/Branding Gallery-03.webp"   , "alt" => "Branded-vehicle-showcase"   ],
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/Logo-Design/Branding Gallery-04.webp"   , "alt" => "Branded-vehicle-showcase"   ]   ,
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/Packaging/Packaging 600x600-03.webp"    , "alt" => "Phone with social media event promotion  " ],
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/Packaging/Packaging 600x600-04.webp"    , "alt" => "Professionals from different industries  " ]   ,
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/vehicle/Vehicle Branding 600x600-01.webp"     , "alt" => "Branded-vehicle-showcase"   ],
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/vehicle/Vehicle Branding 600x600-02.webp"     , "alt" => "Branded-vehicle-showcase"  ]   ,
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/vehicle/Vehicle Branding 600x600-03.webp"     , "alt" => "Branded-vehicle-showcase"  ],
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/vehicle/Vehicle Branding 600x600-04.webp"     , "alt" => "Branded-vehicle-showcase" ]   ,
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/Social-media/Social Media Design 600x600-01.webp"  , "alt" => "Phone with social media event promotion  " ],
    [ "name" => "branding all" , "img" =>  "assets/gallery/branding/Social-media/Social Media Design 600x600-02.webp"  , "alt" => "Professionals from different industries  " ]   ,
    [ "name" => "branding all" , "img" =>   "assets/gallery/branding/Packaging/Packaging 600x600-01.webp"    ]   ,
    [ "name" => "branding all" , "img" =>   "assets/gallery/branding/Packaging/Packaging 600x600-02.webp"    ]   ,
    [ "name" => "branding all" , "img" =>   "assets/gallery/branding/Stationary/Stationary 600x600-06-1.webp"       ],
    [ "name" => "branding all" , "img" =>   "assets/gallery/branding/Stationary/Stationary 600x600-06-2.webp"      ]   ,
    [ "name" => "branding all" , "img" =>   "assets/gallery/branding/staff/Staff Uniform Gallery 600x600-01.webp"    ],
    [ "name" => "branding all" , "img" =>   "assets/gallery/branding/staff/Staff Uniform Gallery 600x600-02.webp"    ]   ,

    ["name" => "photography all" , "img" => "assets/gallery/photography/food/Food-01.webp"       , "alt" =>"Interior photography of a cozy, well-lit restaurant  "   ],
    ["name" => "photography all" , "img" => "assets/gallery/photography/food/Food-02.webp"       , "alt" =>"Event photography of a speaker engaging a large audience  "     ]   ,
    ["name" => "photography all" , "img" => "assets/gallery/photography/Automotive/Automotive-01.webp"       , "alt" =>"photography of a modern building at sunset  "   ],
    ["name" => "photography all" , "img" => "assets/gallery/photography/Automotive/Automotive-02.webp"       , "alt" =>"photography of an opulent home exterior  "     ]   ,
    ["name" => "photography all" , "img" => "assets/gallery/photography/product/Product-01.webp"       , "alt" =>"Fashion photography of a woman in chic winter attire  "   ],
    ["name" => "photography all" , "img" => "assets/gallery/photography/product/Product-02.webp"       , "alt" =>"Portrait photography of a professional man  "     ]   ,
    ["name" => "photography all" , "img" => "assets/gallery/photography/reallState/Real-Estate-01.webp"       , "alt" =>"Food photography of an artistic pasta dish  "   ],
    ["name" => "photography all" , "img" => "assets/gallery/photography/reallState/Real-Estate-02.webp"       , "alt" =>"Product photography of an exquisite perfume bottle with splashes  "     ]   ,
    ["name" => "photography all" , "img" => "assets/gallery/photography/Fashion/Fashion-01.webp"       , "alt" =>"Fashion photography of a woman in chic winter attire  "   ],
    ["name" => "photography all" , "img" => "assets/gallery/photography/Fashion/Fashion-02.webp"       , "alt" =>"Portrait photography of a professional man  "     ]   ,
    ["name" => "photography all" , "img" => "assets/gallery/photography/Events/Events-01.webp"       , "alt" =>"Food photography of an artistic pasta dish  "   ],
    ["name" => "photography all" , "img" => "assets/gallery/photography/Events/Events-02.webp"       , "alt" =>"Product photography of an exquisite perfume bottle with splashes  "     ]   ,
  

    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-01.webp"  , "alt" => "Furniture website display on laptop and phone  "   ],
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-02.webp"  , "alt" => "Houseplant care Website on laptop and mobile  "     ]   ,
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-03.webp"  , "alt" => "Creative website on laptop and phone  "   ],
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-04.webp"  , "alt" => "Beauty services website on multiple devices  "     ]   ,
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-05.webp"  , "alt" => "Creative portfolio website on laptop and phone  "   ],
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-06.webp"  , "alt" => "Laptop and phone showcasing coffee website  "     ]   ,
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-07.webp"  , "alt" => "Creative portfolio website on laptop and phone  "   ],
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-08.webp"  , "alt" => "Laptop and phone showcasing coffee website  "     ]   ,
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-09.webp"  , "alt" => "Creative portfolio website on laptop and phone  "   ],
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-10.webp"  , "alt" => "Laptop and phone showcasing coffee website  "     ]   ,
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-11.webp"  , "alt" => "Creative portfolio website on laptop and phone  "   ],
    ["name" => "Web all" , "img" => "assets/gallery/web design/WEBSITE 600x600-12.webp"  , "alt" => "Laptop and phone showcasing coffee website  "     ]   ,
  
  
  
    ["name" => "Gifts all" , "img" => "assets/gallery/gifts/Gift-Item/Gift Items 600x600-01.webp"     , "alt" => "Gifts Item "  ],
    ["name" => "Gifts all" , "img" => "assets/gallery/gifts/Gift-Item/Gift Items 600x600-02.webp"     , "alt" => "Gifts Item "  ]   ,
    ["name" => "Gifts all" , "img" => "assets/gallery/gifts/Gift-Item/Gift Items 600x600-03.webp"     , "alt" => "Gifts Item "  ],
    ["name" => "Gifts all" , "img" => "assets/gallery/gifts/Gift-Item/Gift Items 600x600-04.webp"     , "alt" => "Gifts Item "  ]   ,
    ["name" => "Gifts all" , "img" => "assets/gallery/gifts/Tropiehs/Trophies 600x600-01.webp"     , "alt" => "Golden trophy stars sparkle" , "titleImg" => "Classic Gold Trophy"    ]   ,
    ["name" => "Gifts all" , "img" => "assets/gallery/gifts/Tropiehs/Trophies 600x600-02.webp"     , "alt" => "Golden trophy stars sparkle"  ],
    ["name" => "Gifts all" , "img" => "assets/gallery/gifts/Customized/Customized Gift Items 600x600-01.webp"     , "alt" => "Sparkling crystall award" , "titleImg" => "crystal flame trophy"  ],
    ["name" => "Gifts all" , "img" => "assets/gallery/gifts/Customized/Customized Gift Items 600x600-02.webp"     , "alt" => "Contemporary glass trophy" , "titleImg" => "Modern Achievement trophy"    ]   ,
    ["name" => "Gifts all" , "img" => "assets/gallery/gifts/Customized/Customized Gift Items 600x600-03.webp"     , "alt" => "Sparkling crystall award" , "titleImg" => "crystal flame trophy"  ],
    ["name" => "Gifts all" , "img" => "assets/gallery/gifts/Customized/Customized Gift Items 600x600-04.webp"     , "alt" => "Contemporary glass trophy" , "titleImg" => "Modern Achievement trophy"    ]   ,
  
    ]

?>


@section('title' , 'Digital Marketing & Advertising Agency in Dubai | MRM Advertising')
@section('desc' , 'Boost your Brand with MRM Advertising, Top Digital Marketing & Advertising Agency in Dubai.We Offer Premier Digtal marketing, SEO and Web Design Services.')
@section('canonical' , '/')


@section('body')

  {{-- <div class="preloading" style="width: 100vw ; height: 100vh"  >
      <div class="bgCover"  >  <img  style="width: 100vw ; height: 100vh"  src="{{ asset('assets/bg/b9.webp') }}"  alt="home"  /> </div>
        <div class="coverImg"> <img  src="{{ asset('assets/Logo1.webp') }}"  alt="" /> </div>
        <div class="container2">  
          <span></span>  
          <span></span>  
          <span></span>  
          <span></span>
      </div>
  </div> --}}

  
    <header id='header'  >
    <section id='video' >
        <video poster="{{ asset('assets/dashboard-screen.jpg') }}"  webkit-playsinline="true" playsInline preload="auto"  id='myVideo'   autoPlay loop muted  src="{{ asset('assets/Dashboard.mp4') }}" > </video>
    </section>
  </header>

  @include('components.Divider')
  <section class="Who search-edite " id='who' >
      <div class="bgCover2"   >  <img  src={{ asset('assets/bg/b1.webp') }} alt="who" /> </div>
      <div class="container">

      <div class="Img " data-aos='fade-right' >
        <img   src="{{ asset('assets/about-us/aboutus.webp') }}" alt="Professionals collaborating in office, framed by letter-shaped windows"   />
      </div>

      <div class="box"  >
        <h1 class='h2 ' data-aos='fade-left'  >{{ __("all.home.Home_section1.h2") }}</h1>
        <span class='p '  data-aos='fade-left'  >{{ __("all.home.Home_section1.p") }}</span>
        <div class="info">
            <div class="box-child" data-aos='fade-left' >
              <h2 class='h2'> <i class="fa-solid fa-check"></i>{{ __("all.home.Home_section1.h3_1" )}}</h2>
              <span class='p '  >{{ __("all.home.Home_section1.p_1") }}</span>
            </div>
            <div class="box-child" data-aos='fade-left'  >
              <h2 class='h2'> <i class="fa-solid fa-check"></i>{{ __("all.home.Home_section1.h3_2" )}}</h2>
              <span class='p '  >{{ __("all.home.Home_section1.p_2") }}</span>
            </div>
        </div>

        <a data-aos='fade-left' href="/about-us"  class='bt ' >{{ __("all.home.Home_section1.bt" ) }}</a>
      </div>
      </div>
  </section>

  @include('components.Divider')
  <section id='Why' class='Why'>
      <div class="bgCover"  >  <img  src="{{ asset('assets/bg/b2.webp') }}" alt="Man in blue suit thinking with question mark and speech bubbles graphic"  /> </div>
      <div class="container1">
        <h2 class="h1" data-aos='fade-up'  >{{ __("all.home.Home_section2.h1") }}</h2>
      </div>
      
      <div class="container">
              <div class="boxs" >                   

                  @foreach(__('all.home.Home_section2.box') as $e)
                      <div class="box" data-aos='fade-right'>
                          <div class="group">
                              <i class="{{ $e['icon'] }}"></i>
                              <div class="h2">{{ $e['title'] }}</div>
                          </div>
                          <span class="p">{{ $e['desc'] }}</span>
                      </div>
                  @endforeach
              </div>

            <div class="Img hidden-img" data-aos='fade-left' >
              <img   src="{{ asset('assets/Why Choose Us 400x500-07-01.webp') }}" alt="Why-chooseus" />
            </div>
      </div>
  </section>

  @include('components.Divider')
  <section class='services search-edite' id='Services'>
      <h2 class='h1' data-aos='fade-up' > {{ __("all.home.Home_Services3.h1") }} </h2> 
      
      <div class="container">
      <ul class='ul' >
          @foreach (__('all.home.Home_Services3.box') as $e )
          
              <div  class="box"  data-aos='fade-up'  >
              <div class="animate" ></div>
              <a href={{ $e['route'] }}   >
                  <div class='a' >
                      
                      <i class="{{ $e["icon"] }}"> 
                          <span ></span>  
                          <span ></span> 
                      </i> 
                  </div>
                  <h3 class='h2 '>{{$e['title']  }} </h3>
                  <div class='p '>{{$e['desc']  }}</div>
              </a>
              </div>
          @endforeach
      </ul>
      </div>
  </section>

  
  @include('components.Divider')
  @include('components.slick' , ['classn'=>'slick-home', 'img'=> 'assets/bg/b2.webp' , 'title'=> __('all.home.Home_Header.name') ,'data' => $images_home  , 'header'=> __("all.home.Home_Header.header") ])
  
  @include('components.Divider')
  @include('components.clients' )
  
  @include('components.Divider')
  @include('components.contact' , ['serv' => "" , 'title'=>'' , 'desc'=>"" , 'BG'=> asset('assets/bg/b2.webp')] )


  {{-- @dd($blog) --}}
  @include('components.Divider')
  @include('SubComponent.one_blog' , [ 
      'data' => $blog , 
      'classn' => 'Slider' ,
      'title' => __("all.home.blog.h1") ,
      'desc' => __("all.home.blog.phead")  
      ])

  @include('components.Divider')
  @include('components.footer')
  


@endsection



