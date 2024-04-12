@section('title' , 'Best Twitter Marketing Agency in Dubai')
@section('desc' , "Enhance your brand's online presence,grow your followers, boost engagement,and generate potential leads via MRM's Twitter marketing services. Contact Us Now")
@section('canonical' , '/x')

@extends('components.Navbar' , ['navStyle' => true])

@section('body')

<div class="x shared">
    <div class="bgCover2"> <img src="{{ asset('assets/Socialmedia/bg.webp') }}" alt=""> </div>


    @include('SubComponent.Social_hero' , [
        "Cover" => asset('assets/Socialmedia/x.webp') ,
        "Intro" => asset('assets/Socialmedia/bg-social.webp') ,
        "H1" => __("all.x.Hero.title") ,
        "Img" => asset('assets/bg/b1.webp') ,
        "Span1" => __("all.x.qoute.title1") ,
        "Span2" => __("all.x.qoute.desc1") ,
        "Span3" => __("all.x.qoute.title2") ,
        "Span4" => __("all.x.qoute.desc2") ,
    ])
    


    @include('components.Divider')
    <div class="impact1">

            <div class="container">
                <div class="h1 " data-aos="zoom-in"> {{__("all.x.box1.title")}} </div>
                <div class="boxs" >
                    @foreach (__("all.x.box1.data") as $e )
                        <div class="box" data-aos="zoom-in"  >
                        <div class="coverImg"><img src="{{ $e['icon'] }}" alt="" /></div>
                            <div class="text">
                            <span></span>
                                <div class="h2 " >{{ $e['title'] }} </div>
                                <div class="p " >{{ $e['desc'] }} </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </div>

      
      
    @include('components.Divider')
    @include('SubComponent.box4' , [
        "Img" => "{{ asset('assets/bg/b1.webp') }}" ,
        "title" => __("all.x.box2.title") ,
        'data' => __("all.x.box2.data"),
        "desc" => __("all.x.box2.phead"),
      ])



      @include('components.Divider')
      @include('SubComponent.boxBorderRight' , [
            "title" => __("all.x.box3.title")  ,
            "data" => __('all.x.box3.data')  ,
            "phead" => __("all.x.box3.phead")
      ])

    </div>

@include('components.Divider')
@include('components.footer')


@endsection
