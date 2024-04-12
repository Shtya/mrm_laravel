
    <div class="process2">
        @if ($Img ?? "")
            <div class="bgCover"  >  <img  src={{ $Img }} alt="signages services"  /> </div>
        @endif
        <div class="container">
            <div class="h1"  data-aos="fade-up">{{ $title }}</div>
            <div class="phead "  data-aos="fade-up">{{ $desc }}</div>
            <div class="timeline">
                @foreach ( $data as $e )

                    <div class="check-point "  >
                        <div class="number " data-aos="zoom-in"  > 0{{ $loop->index +1 }} </div>
                        <div class='inner-box' @if( $loop->index % 2 == 1 )  data-aos="zoom-left" @else data-aos="zoom-right"  @endif>
                            <span class='hidden-img' ><img src="{{ $e['img'] }}" alt="signages services"  /></span>
                            <h2 class="h2 clip  ">{{ $e['title'] }}</h2>
                            <p class="p  "> {{ $e['desc'] }}</p>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
