@section('title' , "Best Advertising & Digital Marketing Company in Dubai ")
@section('desc' , "Best Advertising and Digital Marketing company in Dubai, helping Businesses achieve success and growth by offering Full Marketing services")
@section('canonical' , '/about-us')

@include('components.Navbar' , ['navStyle' => true])


    <div class='about-us'>
      <div class="coverIntro" style="z-index: 10"> <img src={{ asset('assets/about-us/about-us.webp') }} alt="intro page contains word 'about us '" /></div>


        <div class="searching " style="z-index: 10">
        <div class="bgCover"> <img  src={{ asset('assets/bg/b2.webp') }} alt="about"  /> </div>
          <div class="container">
            <div class="coverImg " > <img src={{ asset('assets/about-us/aboutus.jpg') }} alt="about"  /> </div>
            <div class="boxs ">
                <h2 class='box p'>{{ __("all.about_us.box1") }}</h2>
                <h2 class='box p'>{{ __("all.about_us.box2") }}</h2>
            </div>
          </div>
        </div>

        @include('components.Divider')

        <div class="bgCover2"  >  <img  src={{ asset('assets/bg/b1.webp') }} alt="who" /> </div>

        <div class="WHY" style="z-index: 10">
          <div class="container" >

                <div class="one-why" >
                    <div class="coverImg" > <img src={{ asset('assets/about-us/vission.webp') }} alt="Golden 'VISION' text on a dark reflective grid"  /> </div>
                    <div class="inner-box">
                    <div class="p ">{{ __('all.about_us.box3') }}</div>
                    </div>
                </div>
                <div class="one-why" >
                    <div class="coverImg" > <img src={{ asset('assets/about-us/mission.webp') }} alt="Shiny 'MISSION' text on a stark grid backdrop."  /> </div>
                    <div class="inner-box">
                    <div class="p ">{{ __('all.about_us.box4') }}</div>
                    </div>
                </div>

        </div>
        </div>
    </div>


    @include('components.Divider')

@include('components.footer')