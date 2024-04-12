<div class="box-style-3">
    <div class="bgCover2" style="z-index: 0"> <img src="{{ $Img }}" alt="Snapchat-page"  /></div>
    @if($Img2 ?? "") <div class="bgCover" > <img src="{{ $Img2 }}" alt="Snapchat-page"  /></div> @endif
    <div class="container">
    <div class="h1 clip" > {{ $title }}</div>
    <div class="boxs">

        @foreach ($data as $e )
            <div class="box" data-aos="fade-up" >
            <div class='main'>
                <img class='tokenImage' src="{{ $e['icon'] }}" alt="NFT" />
                <h2 class='h2'>{{ $e['title'] }} </h2>
                <p  class='p'>{{ $e['desc'] }}</p>
            </div>
            </div>
        @endforeach

    </div>
  </div>
</div>