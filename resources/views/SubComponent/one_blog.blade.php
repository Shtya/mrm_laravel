

<section class='blog' id='Blog'>
      @if($Img ?? "") <div class="bgCover"> <img src="{{ $Img }}" alt=""> </div> @endif
    <div class="container"> 
      <div class="h1" data-aos='fade-up'> {{ $title ?? "" }} </div> 
      <p class="phead" data-aos='fade-up'> {{ $desc ?? "" }} </p>
    </div>
    
    <div class="{{ $classn }}" >

        <div class='container slick slick-blog-1' >
            @foreach ( $data as $e )
                <a data-aos='fade-up' href="{{ '/blog/'. $e['id'] . '/' . $e['_url']  }}"  class="coverImg "  >
                    <img src="{{ asset($e['thumbnail']) }}"   alt="{{ $e['title'] }}"   />

                    <div class="text">
                        <div class="date" > {{ $e['created_at']->format("D y-m-d")  }} </div>
                        <p class='h2'>{{ $e['title'] }}</p>
                        <button aria-label="Submit" class='bt' > <i class="fa-solid fa-angle-right"></i> </button>
                    </div>
                </a>
            @endforeach
        </div>
      </div>

  </section>


  <script>

$(document).ready(function(){
              $('.slick-blog-1').slick({
                  dots: true,
                  arrows: true,
                  autoplay: false,
                  speed: 2000,
                autoplaySpeed: 2000,
                  slidesToShow: 3,
                  slidesperrow: 2,
                  lazyload: true,
                  pauseOnHover: false ,
                  adaptiveHeight: true,
                  responsive: [
                          {
                            breakpoint: 1200,
                            settings: {
                              slidesToShow: 2,
                              slidesToScroll: 2,
                            }
                          },
                          {
                            breakpoint: 800,
                            settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1,
                            }
                          },
                        ]
            })
        });

  </script>