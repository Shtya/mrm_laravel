@section('title' , "Leading SEO Agency in Dubai | Higher Website Rankings Insured")
@section('desc' , "Improve your Website's Visibility, Ranking on Search Engines and Beat Your competitors with MRM One of the Best SEO Agencies in Dubai ,UAE")
@section('canonical' , '/seo-agency-in-dubai')
@extends('components.Navbar')

@section('body')


<div class='M_SEO landing'>
    <div class="bgCover2"> <img src="{{ asset("assets/bg/b1.webp") }}" alt=""> </div>
    @include('SubComponent.Hero' , [
            "H1" => __("all.seo.Hero.h1") ,
            "H2" => __("all.seo.Hero.h2") ,
            "H3" => __("all.seo.Hero.h3") ,
            "Img" => asset("assets/Intro&Cover/cover-seo.webp") ,
            "nameServices" => "Desktop monitor, keyboard, mouse" ,
            "Imgintro" => asset('assets/bg/b9.webp')  ,
        ])

    {{-- Quotation --}}
    @include('SubComponent.quotation' , [ 
        'title1' => __("all.seo.qoute.h1") ,
        "desc1" => __("all.seo.qoute.h2") ,
        ]) 


    @include('components.Divider')
    <div class="platforms" >
        <div class="bgCover"  >  <img  src="{{ asset("assets/bg/b2.webp")}}" alt="search-engine-optomization services"  /> </div>
          <div class="container">
              <h2 class='h1 'data-aos="fade-up">  {{ __("all.seo.plateform.title")}}  </h2>
              <div class="boxs" data-aos="fade-up">
                  @foreach ( __("all.seo.plateform.data") as $e )
  
                      <a href="{{ $e['path'] ?? '#' }}"   class="box" >
                          <div class="coverImg"> <img src="{{ $e['img']}}" alt="platform"  /> </div>
                          <div class="inner-box">
                              <span class="one"></span>
                              <span class="two"></span>
                              <h3 class='h2 '> {{ $e['title']}} </h3>
                              <p class='p '>{{ $e['desc']}}</p>
                          </div>
                        </a>
                      
                  @endforeach
              </div>
          </div>
      </div>
    

      {{-- proccess --}}
    @include('components.Divider')
    @include('SubComponent.proccess' , [
        "title" => __("all.seo.process.title")  ,
        "desc" => ""  ,
        "data" => __('all.seo.process.data') ,
    ])


  @include('components.Divider')

  <div class="WHY">
      <div class="bgCover"  >  <img  src="{{ asset('assets/bg/b2.webp') }}" alt="search-engine-optomization services"  /> </div>
    <h2 class="h1" data-aos="fade-up"> {{__("all.seo.why.title")}}  </h2>
    <div class="container" >
        @foreach ( __('all.seo.why.data') as $e )

            <div class="{{ ($e['classn'] ?? "" ) .'one-why one-why-' . ($loop->index + 1) }}" >
                <div class="coverImg" > <img src="{{ $e['img'] }}" alt="{{ $e['altCover'] }}"  /> </div>
                <div class="inner-box">
                <div class="p ">{{ $e['desc'] }}</div>
                </div>
            </div>
        @endforeach
    </div>
  </div>

  @include("components.Divider")
  @include('components.contact' , ['number' => "8" , 'title'=> __("all.seo.contact.title") , 'desc'=>__("all.seo.contact.desc") ] )

  </div>


@include('components.Divider')
@include('components.footer')


@endsection