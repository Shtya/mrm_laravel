
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">

    <div class="Slider_Slick">
        <div class="container" style="direction: rtl">
            @if($img ?? "") <div class="bgCover"  >  <img    src="{{ asset($img) }}" alt="home"  /> </div> @endif
              <div class="h1">{{ $title }}</div>
          </div>
          @if($header)
              <ul class='header' > 
                @foreach ( $header as $index => $e )
                <li class="{{ $index == 0 ? 'active' : "" }}" data-cate="{{ $e['type'] }}"> {{ $e['name'] }} </li>
                @endforeach
              </ul> 
          @endif
      
        <div style="margin-top: 20px" class="{{ 'slick ' . $classn ?? "slick0"  }}"  id="wrapper">
    
            @foreach ( $data as $e )
                <img data-cate="{{ $e['name'] }}"  src='{{ asset($e['img']) }}' />
            @endforeach
        </div>
    </div>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"> </script> 
    

    
    <script>

       
         var classN = ".{{ $classn }}" ;

         $(document).ready(function() {
            const filterlis = $('.Slider_Slick .header li');
            const images = $('.Slider_Slick .slick img');
            const slickContainer = $('.slick');

            filterlis.on('click', function() {
            const category = $(this).data('cate');

            filterlis.removeClass("active");
            $(this).addClass("active");

            images.each(function(i) {
                const image = $(this);
                if (image.data('cate').split(" ").includes(category)) {
                    slickContainer.slick('slickGoTo', image.parent().parent().data('slick-index'));
                    return false
                }
        });
    });
});

            $(document).ready(function(){
              $(classN).slick({
                  dots: false,
                  arrows: true,
                  autoplay: true,
                  speed: 4000,
                autoplaySpeed: 4000,
                  slidesToShow: 2,
                  rows: 2,
                  slidesperrow: 2,
                  lazyload: true,
                  pauseOnHover: false ,
                  adaptiveHeight: true,
            })
            .on('afterChange', function(){

                let act = document.querySelector('.slick-active img')
                    const filterButtons = document.querySelectorAll('.Slider_Slick .header li');
                    filterButtons.forEach(ele =>{
                        ele.classList.remove("active")
                        if(ele.getAttribute('data-cate') == act.getAttribute('data-cate').split(" ")[0])
                            ele.classList.add("active")
                    })
            })                
                });
            
    
    </script>

