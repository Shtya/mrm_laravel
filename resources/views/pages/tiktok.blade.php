@section('title' , 'Top TikTok Marketing Agency in Dubai')
@section('desc' , "Boost your brand's visibility and sales on TikTok with MRM's advertising services. Maximize your reach and engage your audience effectively. Contact Us Now")
@section('canonical' , '/tiktok')

@extends('components.Navbar' , ['navStyle' => true])

@section('body')

<div class="Tiktok shared">
  <div class="bgCover2"> <img src="{{ asset('assets/Socialmedia/bg.webp') }}" alt=""> </div>

    @include('SubComponent.Social_hero' , [
        "Cover" => asset('assets/Socialmedia/tiktok.webp') ,
        "Intro" => asset('assets/Socialmedia/bg-social.webp') ,
        "H1" => __("all.tiktok.Hero.title") ,
        "Span1" => __("all.tiktok.qoute.title1") ,
        "Span2" => __("all.tiktok.qoute.desc1") ,
        "Span3" => __("all.tiktok.qoute.title2") ,
        "Span4" => __("all.tiktok.qoute.desc2") ,
    ])

    @include('components.Divider')
    <div class="impact4">
      <div class="bgCover"  >  <img  src="{{ asset('assets/bg/b1.webp') }}" alt="tiktok-page"  /> </div>
          <div class="container">
              <div class="h1 " data-aos="fade-up"  >   {{__("all.tiktok.box1.title")}} </div>
              <div class="phead" data-aos="fade-up" > {{__("all.tiktok.box1.phead")}} </div>
              <div class="boxs" >
                @foreach ( __('all.tiktok.box1.data')  as $e )
                    <div class="box" data-aos="fade-up" >
                    <div class="icon"> <img src="{{ $e['icon'] }}" alt="{{ $e['title'] }}" /> </div>
                        <div class="text">
                            <div class="h2" >{{ $e['title'] }} </div>
                            <div class="p" >{{ $e['desc'] }} </div>
                        </div>
                    </div>
                @endforeach
              </div>
          </div>
      </div>



      @include('components.Divider')
      <div class="box-style-8">
        <div class="container">
          <div class="h1" data-aos="fade-up" > {{__("all.tiktok.box2.title")}} </div>
          <div class="phead" data-aos="fade-up"  > {{__("all.tiktok.box2.phead")}}</div>
          <div class="boxs">
            @foreach ( __('all.tiktok.box2.data') as $e )
                <div class="box"  data-aos="zoom-in" >
                    <div class='coverImg'> <img src="{{ $e['icon'] }}" alt="{{ $e['title'] }}" /> </div>
                    <span></span>
                    <h3 class='h2'>{{ $e['title'] }}  </h3>
                    <p class='p'>{{ $e['desc'] }}</p>
                </div>          
            @endforeach
          </div>
        </div>
      </div>

    </div>

@include('components.Divider')
@include('components.footer')

@endsection