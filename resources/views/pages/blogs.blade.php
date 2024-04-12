<?php 
$categories = ["Digital Marketing News" ,"Latest Updates and Insights" , "Tips and Strategies" ];

    use App\Models\blog;
    $blog1 = blog::where('category', $categories[0])->get() ;
    $blog2 = blog::where('category', $categories[1])->get() ;
    $blog3 = blog::where('category', $categories[2])->get() ;


?>

@section('title' , 'Digital Marketing Updates and Tips for Business Growth')
@section('desc' , 'Stay ahead with the latest digital marketing updates, Insights and expert tips for your Digital business growth with MRM`s informative blogs')
@section('canonical' , '/blogs')
@include('components.Navbar' , ['navStyle' => true] )





<div class='blog-page'>

    <div class="coverIntro" >  <img src="{{ asset('assets/about-us/OUR BLOG 1400x700-01.webp') }}" alt="Chic 'OUR BLOG' text over a laptop on a desk" /></div>

    <div class="quotation" style="z-index: 10">
        <div class="bgCover"   >  <img  src="{{ asset("assets/bg/b2.webp") }}" alt="blogs"  /> </div>
        
        <div class="container">
            <p class="h3 " data-aos="fade-up">{{__("all.blog.Qutaion")}}</p>
        </div>
    </div>

      @include('components.Divider')
        @include('SubComponent.one_blog' , [ 
            'data' => $blog1 , 
            'classn' => 'Slider' ,
            'title' => __("all.blog.sec1") ,
            
            ])


      @include('components.Divider')
        @include('SubComponent.one_blog' , [ 
            'data' => $blog2 , 
            'classn' => 'Slider' ,
            'title' => __("all.blog.sec2")   ,
            'Img'   => asset("assets/bg/b2.webp")
            ])


      @include('components.Divider')
        @include('SubComponent.one_blog' , [ 
            'data' => $blog3 , 
            'classn' => 'Slider' ,
            'title' => __("all.blog.sec3")   ,
            ])
  <div class="bgCover2"> <img src="{{ asset("assets/bg/b1.webp") }}" alt=""> </div>
  </div>

@include('components.Divider')
@include('components.footer')



