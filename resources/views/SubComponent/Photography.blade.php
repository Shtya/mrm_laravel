<div class={{ $classn }}>
    @if($Img ?? "") <div class="bgCover"  >  <img  src={{ $Img }} alt="{{ $nameServices }}"  /> </div> @endif
      <h2 class="h1" data-aos="fade-up" >{{ $title }}</h2> 
      <div class="container">
        @foreach ( $data as $e )

        <div class="box" @if( $loop->index % 2 == 1 )  data-aos="fade-left" @else data-aos="fade-right"  @endif >
          <div class="innerbox">
          <div class="coverImg"> <img src={{ $e['img'] }} alt="{{ $nameServices }}"  />  </div>
          <div class="text">
            <h3 class="h2 "> {{ $e['title'] }} </h3>
            <div class="p ">{{ $e['desc'] }} </div>
          </div>
          </div>
        </div>
        
        @endforeach


      </div>
    </div>