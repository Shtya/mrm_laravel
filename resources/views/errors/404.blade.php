@include('components.Navbar')
@section('title' , 'error')
@section('desc' , 'error')
@section('canonical' , '/error')


    <div class="error">
        <div class="intro">
          <div class="CoverImg"> <img src="{{ asset("assets/footer.webp") }}" alt="error"  /> </div>
          <h1>404</h1>
          <h2 class='clip'> {{__("all.error.h1") }} </h2>
          <h3 class='phead'> {{__("all.error.phead") }} </h3>
          <ul class='buttons'>
            <a href="/" > {{__("all.error.header.li1") }}</a>
            <a href="/" > {{__("all.error.header.li2") }}</a>
            <a href="/contact-us" > {{__("all.error.header.li3") }} </a>
          </ul>
        </div>
    </div>

    @include('components.Divider')
    @include('components.footer')