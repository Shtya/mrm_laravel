

<section class='Contact' id='Contact'>
    @if($BG ?? "")    <div class="bgCover"  >  <img src={{ $BG }} alt="contact"  /> </div>   @endif
    <div class="container">
    <div class="box box-img " data-aos='fade-right'> <img src={{ asset('assets/contact.jpg') }} alt="Smiling man with laptop on geometric patterned background with text 'We're Here to Help You”"  /> </div>
     
      <div   class="box"  >
        <div  class='h1 ' data-aos='fade-up' >{{ $title ?? __("all.home.contact.h1") }}</div> 
        <p  class='h2' data-aos='fade-up' >{{ $desc ? $desc : __("all.home.contact.phead") }} </p>

        <form class="form-contact" action="{{ route("sendmessage") }}" method="POST">
          @csrf
            <input data-aos='fade-left' data-aos-delay="100" type="text" name="name" placeholder="{{ __("all.home.contact.name") }}" id="" />
            <input data-aos='fade-left' data-aos-delay="200" type="Email" name="email" placeholder="{{ __("all.home.contact.email") }}" id="" />
            <input data-aos='fade-left' data-aos-delay="300" type="text" name="phone" placeholder="{{ __("all.home.contact.phone") }}" id="" />

            <select data-aos='fade-left' data-aos-delay="400" name='services'  class='input form-select'  >
              <option value="0" >
                {{ __("all.home.contact.select") }}
              </option>

              @foreach ( __("all.servicesAction") as $services )
                <option 
                @if(empty($number))  @elseif ( __("all.servicesAction")[$number] == $services ) selected @endif  
                
                value="{{ $services }}" >
                  {{ $services }}
                </option> 
              @endforeach

            </select>

          <textarea data-aos='fade-left' data-aos-delay="500"  name="message" placeholder="{{__("all.home.contact.message")}}" id="" cols="30" rows="10"></textarea>

          <button data-aos='fade-left' data-aos-offset="-100" data-aos-delay="600" type="submit"  class='bt' aria-label="Submit" >{{ __("all.home.contact.bt") }}</button>
        </form>
      </div>
      @include('components.thank_you')

      @if(session()->has('showpopup'))
      <script>

          thank_you_popup.classList.add("active")
        </script>
      @endif

    </div>
  </section>


