@section('title' , "Leading Social Media Advertising & PPC Agency in Dubai , UAE")
@section('desc' , "Transform your brand's online visibility with MRM the Best Advertising Agency in Dubai. Our Expert Strategies Maximize your Return on Investment")
@section('canonical' , '/advertising-ppc-agency-in-dubai')
@extends('components.Navbar')


@section('body')

<div class="S_media landing">
  <div class="bgCover2"  >  <img  src={{ asset('assets/bg/b1.webp') }} alt="who" /> </div>

  
  <div class="home">
        <div class="bgCover " data-aos="zoom-in-left" > <img src="{{ asset('assets/bg/b9.webp') }}" alt="media buying services"  /></div>
        <div class="container">
            <div class="boxImg hidden-img " data-aos="zoom-in-left" data-aos-delay="400"  >  <img src="{{ asset('assets/Intro&Cover/cover-social.webp') }}" alt="A woman shops in-store with a digital shopping app"  /> </div>
            <div class="boxs" >
                <h1 class='h1 ' data-aos="zoom-in-right" data-aos-delay="600" >  {{__("all.media.Hero.h1")}} </h1>
                <h2 class='h2 ' data-aos="zoom-in-right" data-aos-delay="600" >  {{__("all.media.Hero.h2")}} </h2>
                <div class="inner-boxs"  data-aos="zoom-in-left" data-aos-delay="600">
              <ul class="box" >
                <li class='li ' >  {{__("all.media.Hero.ul.li1")}} </li>
                <li class='li ' >  {{__("all.media.Hero.ul.li2")}} </li>
                <li class='li ' >  {{__("all.media.Hero.ul.li3")}} </li>
                <li class='li ' >  {{__("all.media.Hero.ul.li4")}} </li>
              </ul>

              <ul class="box box-2">
                <li class='li ' >  {{__("all.media.Hero.ul.li5")}} </li>
                <li class='li ' >  {{__("all.media.Hero.ul.li6")}} </li>
                <li class='li ' >  {{__("all.media.Hero.ul.li7")}} </li>
              </ul>
            </div>
          </div>
      </div>
      </div>

      @include('SubComponent.quotation' , [ 
        'title1' => __("all.media.qoute.h1") ,
        "desc1" => __("all.media.qoute.h2") ,
        ]) 
      

      
      @include("components.Divider")
      @include('SubComponent.Social_Media' , [
        "Img" => asset('assets/bg/b2.webp') ,
        "data" => __("all.media.Socialmedia.data") ,
        "title" =>   __("all.media.Socialmedia.title") ,
    ])



      @include("components.Divider")
      @include('SubComponent.impact' , [
        "classn" => "impact" ,
        "desc" => __("all.media.impact.desc") ,
        "data" => __("all.media.impact.data") ,
        "title" => __("all.media.impact.title") ,
        "nameServices" => "media buying services",
    ])




      @include("components.Divider")
      @include('SubComponent.proccess' , [
        "Img" => asset('assets/bg/b2.webp') ,
        "title" => __("all.media.process.title")  ,
        "desc" =>"" ,
        "data" => __('all.media.process.data') ,
    ])



</div>


@include('components.Divider')
@include('components.contact' , ['number' => "6" , 'title'=> __("all.media.contact.title") , 'desc'=>__("all.media.contact.desc") ] )

@include('components.Divider')
@include('components.footer')


@endsection