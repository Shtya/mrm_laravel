<div class="box-style-5">
    <div class="bgCover"  >  <img  src="{{ asset('assets/bg/b1.webp') }}" alt="twitter-page"  /> </div>
    <div class="h1"  data-aos="zoom-in" >{{ $title }}</div>
      <div class="phead"  data-aos="zoom-in" >{{ $desc }}</div>
    <div class="container">

        @foreach ( $data as $e )
            <div class='box' data-aos="zoom-in" >
                <div class="cover"> <img src="{{ $e['icon'] }}"  alt="twitter-page"  /> </div>
                <div class="text">
                <h3 class="h2" >{{ $e['title'] }}</h3>
                <p class="p" >{{ $e['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
  </div>