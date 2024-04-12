@section('title' , 'Best Facebook Marketing Agency in Dubai , UAE')
@section('desc' , "Looking for Facebook Marketing Services in Dubai? Elevate Your Brand's Visibility and Engagement MRM Delivers High ROI with Efficient Spending on Facebook")
@section('canonical' , '/facebook')

@extends('components.Navbar' , ['navStyle'=> true])

@section('body')
<div class="Facebook shared">


      @include('SubComponent.Social_hero' , [
        "Cover" => asset('assets/Socialmedia/facebook.webp') ,
        "Intro" => asset('assets/Socialmedia/bg-social.webp') ,
        "H1" => __('all.facebook.Hero.title') ,
        "Img" => asset('assets/bg/b1.webp') ,
        "Span1" => __("all.facebook.qoute.title1") ,
        "Span2" => __("all.facebook.qoute.desc1") ,
        "Span3" => __("all.facebook.qoute.title2") ,
        "Span4" => __("all.facebook.qoute.desc2") ,
    ])

      @include('components.Divider')
      <div class="box-style-6">
        <div class="bgCover"  >  <img  src="{{ asset('assets/bg/b1.webp') }}" alt="Facebook-page"  /> </div>
        <div class="h1 " >  {{__("all.facebook.box1.title")}}  </div>
        <div class="phead" >  {{__("all.facebook.box1.phead")}}  </div>
        <div class="container">
            @foreach ( __('all.facebook.box1.data') as $e )
                <figure class="snip1218" data-aos="fade-up">
                <figcaption>
                    <span></span>
                    <h3 class='h2'>{{ $e['title'] }}</h3>
                    <div class="p">{{ $e['desc'] }}</div>
                </figcaption>
                </figure>
            @endforeach
        </div>
      </div>


      @include('components.Divider')
      <div class="box-style-4">
        <div class="bgCover"  >  <img  src={{ asset('assets/bg/b1.webp') }} alt="Facebook-page"  /> </div>
        <div class="container">
          <div class="h1" > {{__("all.facebook.box2.title")}} </div>
          <div class="bg"> <img src="{{ asset('assets/bg/b8.webp') }}" alt="Facebook-page"  /> </div>
          <div class="boxs">
            @foreach ( __("all.facebook.box2.data") as $e )
                <div class="box" data-aos="fade-up" >
                <div class="coverImg"> <img src="{{ $e['icon'] }}" alt="{{ $e['title'] }}" /> </div>
                    <h2 class='h2'>{{ $e['title'] }} </h2>
                    <p class='p'>{{ $e['desc'] }}</p>
                </div>            
            @endforeach
          </div>
        </div>
      </div>

    </div>


@include("components.Divider")
@include('components.footer')

@endsection