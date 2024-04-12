

    <div class="Slider_Slick2">
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
      
        <div style="margin-top: 20px" class="{{ 'slick slick2'  }}"  id="wrapper">
    
            @foreach ( $data as $e )
                <img data-cate="{{ $e['name'] }}"  src='{{ asset($e['img']) }}' />
            @endforeach
        </div>
    </div>
    
    
    <script>

       
         $(document).ready(function() {
            const filterlis = $('.Slider_Slick2 .header li');
            const images = $('.Slider_Slick2 img');
            const slickContainer = $('.slick2');

            filterlis.on('click', function() {
            const category = $(this).data('cate');

            filterlis.removeClass("active");
            $(this).addClass("active");

            images.each(function(i) {
                const image = $(this);
                console.log("first")
                if (image.data('cate').split(" ").includes(category)) {
                    slickContainer.slick('slickGoTo', image.parent().parent().data('slick-index'));
                    return false
                }
        });
    });
});

            $(document).ready(function(){
              $('slick2').slick({
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

                let act = document.querySelector('.slick-active2 img')
                    const filterButtons = document.querySelectorAll('.Slider_Slick .header li');
                    filterButtons.forEach(ele =>{
                        ele.classList.remove("active")
                        if(ele.getAttribute('data-cate') == act.getAttribute('data-cate').split(" ")[0])
                            ele.classList.add("active")
                    })
            })                
                });
            
    
    </script>

