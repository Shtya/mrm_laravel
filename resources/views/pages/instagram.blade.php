@section('title' , 'TOP Instagram Marketing Agency in Dubai , UAE')
@section('desc' , 'Boost your brand with our Instagram marketing services in Dubai. Drive targeted engagement and visibility, resulting in high ROI for your business')
@section('canonical' , '/instagram')

@extends('components.Navbar' , ['navStyle' => true])

@section('body')


<div class="Instagram shared">
    <div class="bgCover2"> <img src="{{ asset('assets/Socialmedia/bg.webp') }}" alt=""> </div>
    
    @include('SubComponent.Social_hero' , [
        "Cover" => asset('assets/Socialmedia/instagram.webp') ,
        "Intro" => asset('assets/Socialmedia/bg-social.webp') ,
        "H1" => __("all.insta.Hero.title") ,
        "Span1" => __("all.insta.qoute.title1") ,
        "Span2" => __("all.insta.qoute.desc1") ,
        "Span3" => __("all.insta.qoute.title2") ,
        "Span4" => __("all.insta.qoute.desc2") ,
    ])

    @include("components.Divider")
    @include("SubComponent.Impact2" , [
        "data" => __('all.insta.box1.data')  ,
        "Img" => asset('assets/bg/b1.webp')  ,
        "title" => __("all.insta.box1.title")  ,
        "phead" => __("all.insta.box1.phead")  ,
    ])
    <Impact />


    @include("components.Divider")
    @include('SubComponent.boxBorderRight' , [
            "title" => __("all.insta.box2.title")  ,
            "data" => __('all.insta.box2.data')  ,
      ])


    </div>


@include('components.Divider')
@include('components.footer')


@endsection