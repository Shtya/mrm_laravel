@section('title' , 'Best  Snapchat Marketing Agency In Dubai')
@section('desc' , 'Looking for  Snapchat advertising services? Discover MRM`s  Snapchat marketing services that empower your brand, boost engagement, and supercharge your sales')
@section('canonical' , '/ snapchat')

@include('components.Navbar' , ['navStyle' => true])


<div class="all.Snapchat shared">
    @include('SubComponent.Social_hero' , [
        "Cover" => asset('assets/Socialmedia/snapchat.webp') ,
        "Intro" => asset('assets/Socialmedia/bg-social.webp') ,
        "H1" => __("all.snapchat.Hero.title") ,
        "Img" => asset('assets/bg/b1.webp') ,
        "Span1" => __("all.snapchat.qoute.title1") ,
        "Span2" => __("all.snapchat.qoute.desc1") ,
        "Span3" => __("all.snapchat.qoute.title2") ,
        "Span4" => __("all.snapchat.qoute.desc2") ,
    ])
    
    
    @include('components.Divider')
    @include('SubComponent.BoxBlue' , [
        "title" =>  __("all.snapchat.box1.title")  ,
        "data" => __("all.snapchat.box1.data")  ,
        "Img" => asset('assets/Socialmedia/bg.webp') ,
    ])
    


      @include('components.Divider')
      <div class="reason2">
        <div class="bgCover"> <img src="{{ asset("assets/bg/b1.webp") }}" alt=""> </div>
        <div class='h1'> {{ __("all.snapchat.box2.title") }} </div> 
        <div class="container">
            <div class="boxes">
                @foreach ( __("all.snapchat.box2.data")  as $e )
                    <div class="img" data-aos="fade-up" >
                            <div class="num "> {{ $loop->index + 1 }} </div>
                            <div class="h2 ">{{ $e['title'] }}</div>
                            <div class="p">{{ $e['desc'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
      </div>

      @include('components.Divider')
      @include('SubComponent.boxBorderRight' , [
            "title" => __("all.snapchat.box3.title")  ,
            "data" => __('all.snapchat.box3.data')  ,
      ])


    </div>

@include('components.Divider')
@include('components.footer')