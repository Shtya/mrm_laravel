

    <div class="{{ $classn ?? 'social-media' }}" >

          @if($Img ?? '') <div class="bgCover"> <img  src={{ $Img }} alt="web design services"  /> </div> @endif
        <div class="container">
            <h3  class='h1' data-aos='fade-up' >{{ $title }}</h3>
            <div data-aos='fade-up' class="phead ">{{ $desc ?? '' }}</div> 
            <div class="boxs">

                @foreach ( $data as $e )
                     <a href="{{  $e['path']  ?? '#'}}" @if( $loop->index % 2 == 1 )  data-aos="zoom-left" @else data-aos="zoom-right"  @endif  class="cover1" >
                        <div class="box">
                        <div class="IcomCover">  <img src="{{ $e['img'] }}" alt="social"  /> </div>
                        <h3 class='h2 '>{{ $e['title'] }}</h3>
                        <p class='p '>{{ $e['desc'] }}</p>
                        </div>
                  </a> 
                @endforeach
            </div>
        </div>
        </div>
