<?php 

$ImageGifts = [

  
    ["img"=> asset('assets/gallery/gifts/Tropiehs/Trophies 600x600-01.webp') , "name" =>"trophies all"  , "alt" => "Golden trophy stars sparkle" , "titleImg" => "Classic Gold Trophy"  ]  ,
    ["img"=> asset('assets/gallery/gifts/Tropiehs/Trophies 600x600-02.webp') , "name" =>"trophies all"  , "alt" => "Sparkling crystall award" , "titleImg" => "crystal flame trophy"  ]  ,
    ["img"=> asset('assets/gallery/gifts/Tropiehs/Trophies 600x600-03.webp') , "name" =>"trophies all"  , "alt" => "Contemporary glass trophy" , "titleImg" => "Modern Achievement trophy"  ]  ,
    ["img"=> asset('assets/gallery/gifts/Tropiehs/Trophies 600x600-04.webp') , "name" =>"trophies all"  , "alt" => "Sparkling crystal award" , "titleImg" => "Crystal Flame Tropjy"  ]  ,
    ["img"=> asset('assets/gallery/gifts/Tropiehs/Trophies 600x600-05.webp') , "name" =>"trophies all"  , "alt" => "set of winner medals " , "titleImg" => " champion medals trio"  ]  ,
    ["img"=> asset('assets/gallery/gifts/Tropiehs/Trophies 600x600-06.webp') , "name" =>"trophies all"  , "alt" => "Shiny gold medal ribbon" , "titleImg" => "Golden victory medal"  ]  ,
    ["img"=> asset('assets/gallery/gifts/Tropiehs/Trophies 600x600-07.webp') , "name" =>"trophies all"  , "alt" => "set of winner medals " , "titleImg" => " champion medals trio"  ]  ,
    ["img"=> asset('assets/gallery/gifts/Tropiehs/Trophies 600x600-08.webp') , "name" =>"trophies all"  , "alt" => "Shiny gold medal ribbon" , "titleImg" => "Golden victory medal"  ]  ,

  
    ["img"=> asset('assets/gallery/gifts/Gift-Item/Gift Items 600x600-01.webp') , "name" =>"gift-Item all" , "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Gift-Item/Gift Items 600x600-02.webp') , "name" =>"gift-Item all" , "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Gift-Item/Gift Items 600x600-03.webp') , "name" =>"gift-Item all" , "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Gift-Item/Gift Items 600x600-04.webp') , "name" =>"gift-Item all" , "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Gift-Item/Gift Items 600x600-05.webp') , "name" =>"gift-Item all" , "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Gift-Item/Gift Items 600x600-06.webp') , "name" =>"gift-Item all" , "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Gift-Item/Gift Items 600x600-07.webp') , "name" =>"gift-Item all" , "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Gift-Item/Gift Items 600x600-08.webp') , "name" =>"gift-Item all" , "alt" => "" ]  ,

  
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-01.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-02.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-03.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-04.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-05.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-06.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-07.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-08.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-09.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-10.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-11.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-12.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-13.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,
    ["img"=> asset('assets/gallery/gifts/Customized/Customized Gift Items 600x600-14.webp') , "name" =>"Corporate-gifts all", "alt" => "" ]  ,

];

?>

@section('title' , "Best Corporate Gifts Designing Services in Dubai")
@section('desc' , "Looking for Impressive Corporate Gifts, Gift Items, and Trophies? Our Curated Selection is Customized for any Occasion and Denotes Exceptional Quality")
@section('canonical' , '/Corporate-gifts-in-dubai')
@extends('components.Navbar')


@section('body')


<div class="S_Gifts landing">
    <div class="bgCover2" >  <img  src={{ asset('assets/bg/b1.webp') }} alt="who" /> </div>


    @include('SubComponent.Hero' , [
            "H1" => __("all.gifts.Hero.h1") ,
            "H2" => __("all.gifts.Hero.h2") ,
            "H3" => __("all.gifts.Hero.h3") ,
            "Img" => asset("assets/Intro&Cover/cover-gifts.webp") ,
            "nameServices" => "signages services" ,
            "Imgintro" => asset('assets/bg/b9.webp')  ,
        ])

    {{-- Quotation --}}
    @include('SubComponent.quotation' , [ 
        'title1' => __("all.gifts.qoute.h1") ,
        "desc1" => __("all.gifts.qoute.h2") ,
        ]) 
      
    @include('components.Divider')
    <div class="boxs-tails">
        <div class="bgCover"  >  <img  src="{{ asset('assets/bg/b2.webp') }}" alt="gifts services"  /> </div>
        <h2 class="h1" data-aos="zoom-in" >  {{ __("all.gifts.company_gifts.title")}} </h2> 
          <div class="container" data-aos="zoom-in">
            @foreach ( __("all.gifts.company_gifts.data") as $e )
                <div class='box'  data-aos="zoom-in" >
                    <div class="coverImg" > <img style="pointer-events: none" src="{{ $e['img'] }}" alt="gifts services"  /> </div>
                    <h3 class="h2" >{{ $e['title'] }}</h3>
                    <div class="p" >{{ $e['desc'] }}</div>
                </div>
            @endforeach
          </div>
    </div>

    @include('components.Divider')
    @include('components.slick' , [
        'title'=> __('all.gifts.gallery.title') ,
        'data' => $ImageGifts  , 
        'header'=> __("all.gifts.gallery.header") , 
        'classn' => "slick-gifts"
        ])

    


    @include('components.Divider')
    @include('SubComponent.impact' ,[
        "classn" =>    "impact"  ,
        "Img" =>    asset('assets/bg/b2.webp')   ,
        "data" =>    __("all.gifts.impact.data")   ,
        "title" =>    __("all.gifts.impact.title")   ,
        "nameServices" =>    "gifts services" ,
    ] )


</div>


@include('components.Divider')
@include('components.contact' , ['number' => "5" , 'title'=> __("all.gifts.contact.title") , 'desc'=>__("all.signages.gifts.desc") ] )

@include('components.Divider')
@include('components.footer')

@endsection