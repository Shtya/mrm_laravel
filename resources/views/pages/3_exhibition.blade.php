<?php 

$DisplayStands = [
    ["img" => asset('assets/gallery/displayStand/NEW Display Stand-03.webp'), "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/displayStand/NEW Display Stand-04.webp'), "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/displayStand/NEW Display Stand-05.webp'), "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/displayStand/NEW Display Stand-07.webp'), "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/displayStand/NEW Display Stand-08.webp'), "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/displayStand/NEW Display Stand-09.webp'), "animate" => "fade-up" ] ,
];

$Exhibition = [
    ["img" => asset('assets/gallery/exhibitionStand/Exhibition Stands-01.webp') ,  "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/exhibitionStand/Exhibition Stands-02.webp') ,  "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/exhibitionStand/Exhibition Stands-03.webp') ,  "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/exhibitionStand/Exhibition Stands-04.webp') ,  "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/exhibitionStand/Exhibition Stands-05.webp') ,  "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/exhibitionStand/Exhibition Stands-06.webp') ,  "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/exhibitionStand/Exhibition Stands-07.webp') ,  "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/exhibitionStand/Exhibition Stands-08.webp') ,  "animate" => "fade-up" ] ,
    ["img" => asset('assets/gallery/exhibitionStand/Exhibition Stands-09.webp')  , "animate" => "fade-up" ] ,
];

?>

@section('title' , "Leading Display stand and Exhibition stands Company in Dubai")
@section('desc' , "Discover our Unique Exhibition and Display Stands for a Powerful and Lasting Impression on your Audience. Contact MRM, the Best Exhibition Stands Company in Dubai")
@section('canonical' , '/exhibition-and-display-stand-agency-in-dubai')
@extends('components.Navbar')


@section('body')


<div class="S_Exhibition landing">
    <div class="bgCover2"> <img src="{{ asset("assets/bg/b1.webp") }}" alt=""> </div>
    {{-- Hero --}}
    @include('SubComponent.Hero' , [
            "H1" => __("all.exhibition.Hero.h1") ,
            "H2" => __("all.exhibition.Hero.h2") ,
            "H3" => __("all.exhibition.Hero.h3") ,
            "Img" => asset('assets/Intro&Cover/cover-exhibition.webp') ,
            "nameServices" => "Luxurious event exhibition space" ,
            "Imgintro" => asset('assets/bg/b9.webp') ,
        ])

    {{-- Quotation --}}
    @include('SubComponent.quotation' , [ 
        'title1' => __("all.exhibition.qoute.title") ,
        "desc1" => __("all.exhibition.qoute.desc") ,
        ]) 

    {{-- Exhibition --}}
    @include('components.Divider')
    @include('SubComponent.exhibitionGallery' , [
        "classn" => "exhibition-stands sec-1"  ,
        "title" => __("all.exhibition.exhibition_stands.title")  ,
        "Img" => asset('assets/bg/b2.webp')   ,
        "nameServices" => "exhibition & display stands services"   ,
        "data" => $Exhibition ,
    ])


    @include('components.Divider')
    @include('SubComponent.exhibitionGallery' , [
        "classn" => "exhibition-stands"  ,
        "title" => __("all.exhibition.display_stands.title")  ,
        "nameServices" => "exhibition & display stands services"   ,
        "data" => $DisplayStands ,
    ])


    {{-- Impact --}}
    @include('components.Divider')
    @include('SubComponent.impact' , [
        "classn" => "impact" ,
        "desc" => "" ,
        "Img" => asset('assets/bg/b2.webp') ,
        "data" => __("all.exhibition.impact.data") ,
        "title" => __("all.exhibition.impact.title") ,
        "nameServices" => "exhibition & display stands services",
    ])

</div>

@include('components.Divider')
@include('components.contact' , ['number' => "2" , 'title'=> __("all.exhibition.footer.title") , 'desc'=>__("all.exhibition.footer.desc") ] )


@include('components.Divider')
@include('components.footer')

@endsection