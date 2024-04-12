@section('title' , 'Best LinkedIn Advertising Services in Dubai, UAE')
@section('desc' , 'Looking for B2B  marketing agency in Dubai? With MRM you can Reach decision-makers, establish thought leadership, and generate high-quality B2B leads')
@section('canonical' , '/linkedin')

@extends('components.Navbar'  , ['navStyle' => true ] )


@section('body')
<div class="Linkedin shared">
    <div class="bgCover2"> <img src="{{ asset('assets/Socialmedia/bg.webp') }}" alt=""> </div>


    @include('SubComponent.Social_hero' , [
        "Cover" => asset('assets/Socialmedia/linkedin.webp') ,
        "Intro" => asset('assets/Socialmedia/bg-social.webp') ,
        "H1" => __("all.linkedin.Hero.title") ,
        'Img' => asset("assets/bg/b1.webp") ,
        "Span1" => __("all.linkedin.qoute.title1") ,
        "Span2" => __("all.linkedin.qoute.desc1") ,
        "Span3" => __("all.linkedin.qoute.title2") ,
        "Span4" => __("all.linkedin.qoute.desc2") ,
    ])
    
      @include("components.Divider")
      <div class="impact1 impact-custom">
            <div class="container">
                <div class="h1 " data-aos="zoom-in"> {{__("all.linkedin.box1.title")}}</div>
                <div class="boxs" >
                    @foreach ( __('all.linkedin.box1.data') as $e )
                        <div class="box" data-aos="fade-up" >
                        <div class="coverImg"> <img src="{{ $e['icon'] }}" alt="" /></div>
                            <div class="text">
                                <span></span>
                                <div class="h2">{{ $e['title'] }} </div>
                                <div class="p" >{{ $e['desc'] }} </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


      @include('components.Divider')
      
      <div class="box-style-7">
        <div class="bgCover"  >  <img  src="{{ asset('assets/bg/b1.webp') }}" alt="twitter-page"  /> </div>

        <div class="container">
          <div class="h1"  data-aos="zoom-in">{{__("all.linkedin.box2.title")}}  </div>
          <div class="phead"  > {{__("all.linkedin.box2.phead")}} </div>
          <div class="boxs">
            @foreach ( __("all.linkedin.box2.data") as $e )
                <div class="box" data-aos="fade-up">
                    <h2 class='number'><img src="{{ $e['icon'] }}" alt="" /></h2>
                    <div class="text">
                        <h3 class='h2'>{{ $e['title'] }}</h3>
                        <p class='p'>{{ $e['desc'] }}</p>
                    </div>
                </div>
            @endforeach
 
          </div>
        </div>
      </div>


    @include("components.Divider")
    @include('SubComponent.boxBorderRight' , [
    "title" => __("all.linkedin.box3.title")  ,
    "data" => __('all.linkedin.box3.data')  ,
    ])

    </div>

@include('components.Divider')
@include('components.footer')

@endsection