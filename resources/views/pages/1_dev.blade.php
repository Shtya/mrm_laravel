<?php 

$ImageGalleryWeb = [
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-01.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-02.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-03.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-04.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-05.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-06.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-07.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-08.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-09.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-10.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-11.webp' , 'name' => "Web"  ],
    ['img' => 'assets/gallery/web design/WEBSITE 600x600-12.webp' , 'name' => "Web"  ],
] ;


?>
@section('title' , "Web Design & Development Company in Dubai, UAE")
@section('desc' , "Capture your Audience with our Exceptional Web Design and Development Services. Partner with MRM, the Best Web Development Company in Dubai, UAE.")
@section('canonical' , '/web-development-company-in-dubai')
@extends('components.Navbar' , ['navStyle' => false])


@section('body')


<div class="WEB_DESIGN landing" >

  <div class="bgCover2"> <img src="{{ asset("assets/bg/b1.webp") }}" alt=""> </div>

  <div class="home">
        <div class="bgCover"> <img  src={{ asset('assets/bg/b9.webp') }} alt="web design services"  /></div>
        <div class="container">
          <div   class="boxImg " >  <img  src={{ asset('assets/Intro&Cover/cover-webdesign.webp') }} alt="Responsive web design layout is displayed across multiple devices"  /> </div>
          <div class="boxs" >
            <h1 class='h1 ' > {{ __("all.WebDesign.Hero.h1") }} </h1>
            <h2 class='h2 ' > {{ __("all.WebDesign.Hero.h2") }} </h2>
            <div class="inner-boxs" >

              <ul class="box">
                <li class='li ' > {{ __("all.WebDesign.Hero.ul.li1") }} </li>
                <li class='li ' > {{ __("all.WebDesign.Hero.ul.li2") }} </li>
              </ul>

              <ul class="box box-2">
                <li class='li ' > {{ __("all.WebDesign.Hero.ul.li3") }} </li>
                <li class='li ' > {{ __("all.WebDesign.Hero.ul.li4") }} </li>
              </ul>

            </div>
          </div>
        </div>
      </div>

      
      @include('SubComponent.quotation' , ['Img'=> asset('assets/bg/b2.webp')  , 'title1'=> __("all.WebDesign.qoutation.h1")  , 'desc1'=> __("all.WebDesign.qoutation.h2")  ])
      @include('components.Divider')

      @include('SubComponent.Social_Media' , [  'bgCover'=>"bgCover",   'classn'=>"social-media2" , 'data'=>__('all.WebDesign.Socialmedia.data')  , 'title'=>__("all.WebDesign.Socialmedia.title") , 'desc'=>__("all.WebDesign.Socialmedia.desc")   ]  )



      @include('components.Divider')

        <div class="WEBDevelopment">
            <div class="bgCover"> <img  src={{ asset('assets/bg/b2.webp') }} alt="web design services"  /> </div>
            <h1 class="h1" data-aos='fade-up' >  {{__("all.WebDesign.WEBDevelopment.title")}}  </h1 >
            <div class="phead" data-aos='fade-up' > {{__("all.WebDesign.Socialmedia.desc")}} </div>
            <div class="container">

                <div class="top">
                <div class="boxs">
                    @foreach ( __('all.WebDesign.WEBDevelopment.data') as $e )
                        <div class="box" data-aos='fade-right' >
                        <div class="one"></div> <div class="two"></div>
                        <span>{{ $loop->index + 1 }} </span>
                        <h3 class="h2">{{ $e['title'] }} </h3>
                        <div class="p"> {{$e['desc']}}</div>
                        </div>
                    @endforeach
                </div>
                <div class="halfImg" data-aos='fade-left'> <div class="one"></div> <div class="two"></div> <img src={{asset('assets/WEBDEVELOPMENT.webp')}} alt="" /> <div class="blur"></div> </div>
                </div>  

            </div>
        </div>

        @include('components.Divider')
        <div class="our_Approach">
            <div class="container1 cont">
            <div class="h1" data-aos='fade-up' > {{__("all.WebDesign.Approach.title")}}</div>
            <div class="phead" data-aos='fade-up' >{{__("all.WebDesign.Approach.desc")}} </div>
            </div>

            <div class="container">
                <div class="circle">
                  <div class="images"> </div>

                    <div class='text'>
                        <div class="container1">
                            <img src={{ asset('assets/pattern/icon1.png') }} alt="" />
                            <h2 class="h1 clip"> {{__("all.WebDesign.Approach.title")}}  </h2>
                            <div class="p"> {{__("all.WebDesign.Approach.desc")}}  </div>
                        </div>
                    </div>
                    @foreach ( __('all.WebDesign.Approach.data') as $e )
                        
                        <span data-aos='fade-up'  class="{{ 'span-'.$loop->index +1 }}">
                            <div class="coverImg"> <img src={{ $e['img'] }} alt="web design services"  /> </div>
                            <div class="{{ 'content content-'. $loop->index +1 }}" >
                                <div class="h2 clip"> {{ $e['title']  }} </div>
                                <div class="p"> {{ $e['desc']  }} </div>
                            </div>
                        </span>
                    @endforeach


                </div>
            </div>
        </div>
      
        @include('components.Divider')

        @include('components.slick' , ['classn'=>'slick-dev' , 'img'=> 'assets/bg/b2.webp' , 'title'=> __('all.home.Home_Header.name') ,'data' => $ImageGalleryWeb  , 'header'=> '' ])
        {{-- <div id="example"></div> --}}


        @include('components.Divider')
        @include('components.contact' , ['number' => "0" , 'title'=> __("all.WebDesign.footer.title") , 'desc'=>__("all.WebDesign.footer.desc")] )





<div class="bgCover2" style="z-index: -1" >  <img  src={{ asset('assets/bg/b1.webp') }} alt="who" /> </div>
@include('components.Divider')
@include('components.footer')

@endsection