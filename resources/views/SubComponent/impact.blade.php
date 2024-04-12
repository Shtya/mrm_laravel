
    <div class="{{$classn}}">
        @if($Img ?? "")  <div class="bgCover"  >   <img src="{{ $Img }}" alt="{{ $nameServices }}"  />  </div> @endif
            <div class="container">
                <div class="container"><h2 data-aos="fade-up" class="h1" >{{ $title }}</h2></div>
                @if($desc ?? "") 
                    <div class="container">
                        <div class="phead" data-aos="fade-up" >{{ $desc }}</div>
                    </div> 
                @endif
                <div class="boxs">
                    @foreach ( $data as $e )
                    <div class="box"  data-aos="zoom-in-up">
                        <div class="coverImg hidden-img"> <img style="pointer-events: none" src="{{ $e['img'] }}" alt="{{ $nameServices }}"  /> </div>
                        <div class="text" >
                            <h3 class="h2 clip ">{{ $e['title'] }} </h3>
                            <div class="p ">{{ $e['desc'] }} </div>
                        </div>
                    </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
