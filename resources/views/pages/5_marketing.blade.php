
@section('title' , "Social Media Marketing Services in Dubai to Boost Your Brand")
@section('desc' , "Partner with MRM, one of the leading social media marketing agencies in Dubai, to ensure a excellent digital journey for your brand.")
@section('canonical' , '/social-media-marketing-agency-in-dubai')
@extends('components.Navbar')



<div class='landing'>

  <div class="bgCover2"> <img src="{{ asset("assets/bg/b1.webp") }}" alt=""> </div>
  
  <div class="home">
      <div class="bgCover" > <img  src="{{ asset('assets/bg/b9.webp') }}" alt="social media marketing services"  /></div>
      <div class="container">
        <div class="boxImg n-border"  >  <img class='' src="{{ asset('assets/Intro&Cover/cover-socialMedia.webp') }}" alt="Social media icons floating over a phon"  /> </div>
        <div class="boxs " >
          <h1 class='h1 '> {{__("all.services.Hero.h1")}} </h1>
          <h2 class='h2 '> {{__("all.services.Hero.h2")}} </h2>
          <div class="inner-boxs"  >

            <ul class="box">
              <li class='li '>  {{__("all.services.Hero.ul.li1")}} </li>
              <li class='li '>  {{__("all.services.Hero.ul.li2")}} </li>
              <li class='li '>  {{__("all.services.Hero.ul.li3")}} </li>
              <li class='li '>  {{__("all.services.Hero.ul.li4")}} </li>
            </ul>

            <ul class="box box-2">
              <li class='li '>  {{__("all.services.Hero.ul.li5")}} </li>
              <li class='li '>  {{__("all.services.Hero.ul.li6")}} </li>
              <li class='li '>  {{__("all.services.Hero.ul.li7")}} </li>
              <li class='li '>  {{__("all.services.Hero.ul.li8")}} </li>
            </ul>

          </div>
        </div>
      </div>
    </div>

    @include('components.Divider')
    <div class="searching search-edite">
        <div class="container">
            <div class="coverImg  "> 
                <img data-aos="zoom-in-right"  src="{{ asset('assets/landing/Grid1.webp') }}" alt="Golden Instagram and video icons"  /> 
                <img data-aos="zoom-in-top"      src="{{ asset('assets/landing/Grid2.webp') }}" alt="Golden TikTok, LinkedIn, and Facebook icons"  /> 
                <img data-aos="zoom-in-right"  src="{{ asset('assets/landing/Grid3.webp') }}" alt="Golden Twitter icon on magnifier over black"  /> 
                <img data-aos="zoom-in-top"      src="{{ asset('assets/landing/Grid4.webp') }}" alt="Golden Telegram icon"  /> 
            </div>

            <div class="boxs " data-aos="fade-left" >
                <h2 class='h2 ' data-aos="fade-left">  {{ __("all.services.qoute.title")}}  </h2>
                <div class="box">
                    <h3 class='h3 ' data-aos="fade-left">  {{ __("all.services.qoute.h31")}} </h3>
                    <div class='p ' data-aos="fade-left">  {{ __("all.services.qoute.p1")}} </div>
                </div>

                <div class="box" data-aos="fade-left" >
                    <h3 class='h3 ' data-aos="fade-left"> {{ __("all.services.qoute.h32")}} </h3>
                    <div class='p ' data-aos="fade-left">  {{ __("all.services.qoute.p2")}} </div>
                </div>

            </div>
        </div>
    </div>

    {{-- social media --}}
    @include('components.Divider')
    @include('SubComponent.Social_Media' , [
        "Img" => asset('assets/bg/b2.webp') ,
        "data" => __("all.services.Socialmedia.data") ,
        "title" =>   __("all.services.Socialmedia.title") ,
    ])
    

    {{-- plateforms --}}
    @include('components.Divider')
    <div class="platforms">
        <div class="container">
            <h2 class='h1 'data-aos="zoom-in">  {{ __("all.services.OurSocialMedia.title")}}  </h2>
            <div class="boxs" data-aos="zoom-in">
                @foreach ( __("all.services.OurSocialMedia.data") as $e )

                    <a href="{{ $e['path'] }}" @if( $loop->index % 2 == 1 )  data-aos="zoom-left" @else data-aos="zoom-right"  @endif   class="box" >
                        <div class="coverImg"> <img src="{{ $e['icon'] }}" alt="platform"  /> </div>
                        <div class="inner-box">
                            <span class="one"></span>
                            <span class="two"></span>
                            <h3 class='h2 '> {{ $e['title']}} </h3>
                            <p class='p '>{{ $e['desc']}}</p>
                            <button class='bt' aria-label="Submit" href="{{ $e['path'] }}" >  {{__("all.services.OurSocialMedia.bt")}} </button>
                        </div>
                      </a>
                    
                @endforeach
            </div>
        </div>
    </div>


    {{-- proccess --}}
    @include('components.Divider')
    <div class="process">
        <div class="bgCover"  >  <img  src={{ asset('assets/bg/b2.webp') }} alt="social media marketing services"  /> </div>
        <div class="container1"> <h2 class="h1" data-aos="zoom-in">{{ __("all.services.process.title")}} </h2></div>
        <div class="container">
            <div class="box box1">
                @include('SubComponent.one_proccess' , [ "num" => "1" , "img" => __("all.services.process.data")[0]['img']  , "title" => __("all.services.process.data")[0]['title'] , "paragraph"=> __("all.services.process.data")[0]['desc'] , 'classn'=> ""])
                @include('SubComponent.one_proccess' , [ "num" => "2" , "img" => __("all.services.process.data")[1]['img']  , "title" => __("all.services.process.data")[1]['title'] , "paragraph"=> __("all.services.process.data")[1]['desc'] , 'classn'=> ""])
                @include('SubComponent.one_proccess' , [ "num" => "3" , "img" => __("all.services.process.data")[2]['img']  , "title" => __("all.services.process.data")[2]['title'] , "paragraph"=> __("all.services.process.data")[2]['desc'] , 'classn'=> ""])
            </div>
            <div class="box box2">
                @include('SubComponent.one_proccess' , [ "num" => "4" , "img" => __("all.services.process.data")[3]['img']  , "title" => __("all.services.process.data")[3]['title'] , "paragraph"=> __("all.services.process.data")[3]['desc'] , 'classn'=> ""])
                @include('SubComponent.one_proccess' , [ "num" => "5" , "img" => __("all.services.process.data")[4]['img']  , "title" => __("all.services.process.data")[4]['title'] , "paragraph"=> __("all.services.process.data")[4]['desc'] , 'classn'=> ""])
            </div>
        </div>
    </div>

    
    
</div>

@include('components.Divider')
@include('components.contact' , ['number' => "4" , 'title'=>'' , 'desc'=>"" ] )


@include('components.Divider')
@include('components.footer')