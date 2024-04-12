@section('title' , "Get in Touch with MRM Advertising  Your Marketing Partner in Dubai")
@section('desc' , "Connect with MRM Advertising Agency in Dubai for best digital marketing and advertising services. Specializing in SEO, media buying and creative solutions.")
@section('canonical' , '/contact-us')


@extends('components.Navbar')
@section('body')

    <div class='contact-us'>
      <div class="bgCover"  >  <img  src={{ asset('assets/bg/b1.webp') }} alt="contact-us"  /> </div>      
      
      <section class='Contact2' id='Contact2'>
      <div class="container">
          
              <div class="box"  >
                  <div class="coverMap"> <img class='mapImg' src={{ asset('assets/bg/5.webp') }} alt="contact-map"  /> </div>
                  <div class="text"> <h2 class='h1 blur' data-aos="fade-right" data-aos-delay="300"> {{__("all.contact_us.h1")}} </h2> </div>

                  <ul class='contact-list'>
                    <li class="list-item" data-aos="fade-right" data-aos-delay="200"> <a href="#" >  <i class="fa-solid fa-envelope"></i>     </a>    <span class='contact-text phone p'>info@mrmadvertisingdubai.com</span> </li>
                    <li class="list-item" data-aos="fade-right" data-aos-delay="250"> <a href="#" >  <i class="fa-solid fa-location-dot"></i> </a>    <span class='contact-text gmail p'>Business Bay - Dubai</span></li>
                    <li class="list-item" data-aos="fade-right" data-aos-delay="150"> <a href="#" > <i class="fa-solid fa-phone"></i>         </a>    <span class='contact-text place p'>+971561384496</span></li>
                </ul>
                <hr />

                    <ul class='social-media-list'>
                      <li > <a href={{config('app.Social_Media')[0]}}  data-aos="fade-up" data-aos-delay="150" class="Iicon">  <i class="fa-brands fa-facebook-f"></i>     </a></li>
                      <li > <a href={{config('app.Social_Media')[1]}}  data-aos="fade-up" data-aos-delay="200" class="Iicon">  <i class="fa-brands fa-instagram"></i> </a></li>
                      <li > <a href={{config('app.Social_Media')[3]}}  data-aos="fade-up" data-aos-delay="250" class="Iicon"> <i class= "fa-brands fa-whatsapp"></i>         </a></li>
                      <li > <a href={{config('app.Social_Media')[2]}}  data-aos="fade-up" data-aos-delay="300" class="Iicon">  <i class="fa-brands fa-linkedin-in"></i> </a></li>
                    </ul>
              </div>

              <div class="box1" >
              <h1 class='h1' data-aos="fade-right" data-aos-delay="200"> {{__("all.contact_us.contact.h1")}} </h1>
              <h2 class='h2' data-aos="fade-right" data-aos-delay="250"> {{__("all.contact_us.contact.phead")}} </h2>
              <form action="{{ route('sendmessage') }}" method="POST" >
                @csrf
                  <input required data-aos="fade-left" data-aos-delay="250" name="name" type="text"  placeholder="{{__("all.contact_us.contact.name")}} "  />
                  <input required data-aos="fade-left" data-aos-delay="300" name="email" type="Email"  placeholder="{{__("all.contact_us.contact.email")}}"  />
                  <input required data-aos="fade-left" data-aos-delay="350" name="phone" type="text"  placeholder="{{__("all.contact_us.contact.phone")}}"  />
                  <select required data-aos="fade-left" data-aos-delay="400" name="services" class='input form-select' aria-label=".form-select-lg examplev">
                    <option value="0">{{__("all.contact_us.contact.select")}} </option>
                    @foreach ( __("all.servicesAction") as $services )
                    <option value="{{ $services }}" >{{ $services }}</option> 
                    @endforeach
                  </select>
                  <textarea required  data-aos="fade-left" data-aos-delay="450" name="message" placeholder="{{__("all.contact_us.contact.message")}}" type='text'></textarea>
                   <button data-aos-offset="-100" data-aos="fade-left" data-aos-delay="500" class='bt' aria-label="Submit">{{__("all.contact_us.contact.bt")}} </button>
              </form>
              </div>
          </div>

          @include('components.thank_you')

          @if(session()->has('showpopup'))
            <script>
              thank_you_popup.classList.add("active")
            </script>
          @endif

        </section>
    </div>



@include('components.Divider')
@include('components.footer')

@endsection