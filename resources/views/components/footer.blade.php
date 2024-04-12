
    <footer id="footer" >
    <div class="bgCover"  >  <img  src={{ asset('assets/bg/b2.webp') }} alt="footer"  /> </div>
      <div class="container" >

      <div class="top">
        <img src={{ asset('assets/Logo1.webp') }} alt="footer"  />

        <div class="phead">{{ __("all.home.footer.h1") }}</div>
        <ul class='social last-social'>
          <li > <a href={{ config('app.Social_Media')[0] }} target="_blank" class="Iicon"> <div class="style"> <i class="fa-brands fa-facebook-f"></i>    </div> </a></li>
          <li > <a href={{ config('app.Social_Media')[1] }} target="_blank" class="Iicon"> <div class="style"> <i class="fa-brands fa-instagram"></i>   </div> </a></li>
          <li > <a href={{ config('app.Social_Media')[2] }} target="_blank" class="Iicon"> <div class="style"> <i class="fa-brands fa-whatsapp"></i>        </div> </a></li>
          <li > <a href={{ config('app.Social_Media')[3] }} target="_blank" class="Iicon"> <div class="style"> <i class="fa-brands fa-linkedin-in"></i></div> </a></li>
        </ul>
      </div>

      

      <div class="center">
        <ul class='ul-1' >
          <div class='h2 clip'> {{ __("all.home.footer.ul1.name") }} </div>
          <li ><i class="fa-solid fa-envelope"></i>  info@mrmadvertisingdubai.com </li>
          <li ><i class="fa-solid fa-map-location-dot"></i>  Business Bay - Dubai </li>
          <li ><i class="fa-solid fa-phone"></i>  +971561384496 </li>
        </ul>

        <ul class='ul-2' >
          <div class='h2 clip'> {{__("all.home.footer.ul2.name")}} </div>
          <li > <a href="/contact-us"> {{__("all.home.footer.ul2.li1")}}  </a></li>
          <li > <a href="/about-us"> {{__("all.home.footer.ul2.li2")}}  </a></li>
          <li > <a href={{ request()->path() != "/" ? "/#Services" : "#Services" }}> {{ __("all.home.footer.ul2.li3") }} </a></li>
          <li > <a href="/blog"> {{__("all.home.footer.ul2.li4")}} </a></li>
        </ul>

        <ul class='ul-3' >
          <div class='h2 clip'> {{ __("all.home.footer.ul3.name") }} </div>
          <li class='newsletter'> {{ __("all.home.footer.ul3.p") }} </li>
          <form  action="{{ route("sendmessage") }}" method="POST"  class="group">
            @csrf
            <input type="text" required name="email" placeholder="{{ __("all.home.footer.ul3.placeHolder") }}" />
            <button type="submit"> <i class="fa-regular fa-envelope"></i> </button>
          </form>
        </ul>


     </div>

        <div class="bottom" >
          <p class='p' > {{ __("all.home.footer.ul4.name") }} </p>
          <div class="last" >
            <a class='p' href="/terms">  {{ __("all.home.footer.ul4.li1") }} </a>
            <a class='p' href="/privacy">  {{ __("all.home.footer.ul4.li2") }} </a>
          </div>
        </div>
      </div>
    </footer>
