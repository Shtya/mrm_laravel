<div class="searching2">
    <div class="bgCover"   >  <img  src={{ $Img }} alt="photography services"/> </div>
        <div class="container">
          <div class="coverImg" data-aos="fade-right"> <img src={{ $Imgsection }} alt="{{ $altImg ?? "images" }}" title="{{ $titleImg ?? '' }}"  /> </div>

          <div class="boxs">
          <div class="h1" data-aos="fade-up">{{ $title }}</div>
          @foreach ( $data as $e )
            <div data-aos="fade-left" >
                <h3 class='h2 '>{{ $e['title'] }}</h3>
                @if($e['desc'] ?? "")<div class='p '>{{ $e['desc'] }}</div> @endif
            </div>
          @endforeach


        </div>
      </div>
  </div>