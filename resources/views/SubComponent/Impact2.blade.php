<div class="impact2">
    <div class="bgCover"  >  <img  src="{{ asset('assets/bg/b1.webp') }}" alt="instagram-page"  /> </div>
    <div class="container">
        <div class="h1" data-aos="zoom-in">{{ $title }}</div>
        <div class="phead"  data-aos="zoom-in" data-aos-delay="200">{{ $title }}</div>
        <div class="boxs" >
            @foreach ( $data as $e )
                <div class="box" data-aos="zoom-in" >
                    <div class="text">
                        <div class="number">{{ $loop->index +1 }}</div>
                        <div class="icon"> <img src="{{ $e['icon'] }}" alt="" /> </div>
                        <div class="h2" >{{ $e['title'] }} </div>
                        <div class="p " >{{ $e['desc'] }} </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>