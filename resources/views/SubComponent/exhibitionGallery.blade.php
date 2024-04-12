
    <div class="{{ $classn }}">
      @if ($Img ?? "")
      <div class="bgCover" >   <img  src="{{ $Img }}" alt="{{ $nameServices }}"  />  </div>
      @endif 
      <div class="container"> <h2 data-aos="fade-up" class="h1" style="margin-bottom: 30px" >{{ $title }}</h2></div>
      <div class="container">
        <div class="boxs">
            @foreach ( $data as $e )
            <div class="coverImg" @if( $loop->index % 2 == 1 )  data-aos="fade-left" @else data-aos="fade-right"  @endif> 
                <i class="fa-solid fa-compress"></i> 
                <img src="{{ $e['img'] }}" alt="slider" /> 
            </div>
            @endforeach
        </div>
      </div>
    </div>

