
    <div class="thank_you_popup">
        <div class="inner">
        <i  class="fa-solid fa-close close-thank"></i>
        <img src={{ asset('assets/s3.png') }} alt="" />
        <div class='h1'>Thank you for contacting MRM Advertising! </div>
        <div class='p'>We've received your request and will get back to you soon.</div>

        <ul class='social-media-list'>
            <a href="{{ config('app.Social_Media')[0] }}" >  <i class="fa-brands fa-facebook-f"></i>     </a>
            <a href="{{ config('app.Social_Media')[1] }}" >  <i class="fa-brands fa-instagram"></i> </a>
            <a href="{{ config('app.Social_Media')[2] }}" >  <i class= "fa-brands fa-whatsapp"></i>         </a>
            <a href="{{ config('app.Social_Media')[3] }}" >  <i class="fa-brands fa-linkedin-in"></i> </a>
        </ul>
        </div>
    </div>

<script>
    let close_thank = document.querySelector(".close-thank")
    let thank_you_popup = document.querySelector(".thank_you_popup")

    close_thank.addEventListener("click" , function(){
        thank_you_popup.classList.remove("active")
    })


</script>