<div class="box-style-1">
    @if($Img ?? "") <div class="bgCover"  >  <img  src="{{ asset('assets/bg/b1.webp') }}" alt="Snapchat-page"  /> </div> @endif
        <div class="container">
            <div class="h1" >{{ $title }}</div>
            <div class="phead">{{ $phead ?? "" }}</div>
            <div class="boxs" >
                @foreach ( $data as $e )
                    <div class="box" data-aos="fade-up" >
                        <div class="icon"> <img src="{{ $e['icon'] }}" alt="" /> </div>
                            <div class="text">
                            <div class="h2" >{{ $e['title'] }} </div>
                            <div class="p " >{{ $e['desc'] }} </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>