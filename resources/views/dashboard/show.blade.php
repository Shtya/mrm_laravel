
@section('title' , 'dashboard | show all articles')
@section('desc' , '')
@section('canonical' , '/dashboard/articles')
@extends('components.Navbar')
@include('components.Navbar_dash' , ['icon_create' => true])

@section('body')

<div class="dash_get_blogs">


  <div class='container '>
        
    @foreach ( $blogs as $blog )
    <div class="boxs">
      <div class="coverImg"> <img src='{{ asset($blog['thumbnail']) }}' alt="blog"  /> </div>
      <div class="text">
        <h2 class='h2'> {{ $blog['title'] }} </h2>
        <h3 class='p'> {{ $blog['category'] }} </h3>
        <div class='date'> {{ $blog['created_at']->format("Y-m-d") }} </div>
      </div>
      <ul>
        <a class='bt btn btn-view'   href="{{ '/blog/'. $blog['id'] . '/' . $blog['_url']  }}" > View </a>
        <a class='bt btn btn-edite'  href="{{ '/blog-edite/'. $blog['id'] }}" > Edite </a>
        <a class='bt btn btn-delete' onclick="delet()"  href="#" > Delete </a>
      </ul>
    </div>
    @endforeach

  </div>

  <div class="overlay-modal">
    <div class="modal">
        <i class="fa-solid fa-xmark close" onclick="closeModel()" ></i>
        <p class='p'>Are you sure you want to delete everything from this website?</p>
        <p class='p'>This action cannot be undone.</p>
        <div class="action">
            <form action="{{ route('blog-delete' , $blog['id'] )}}" method="get">
              @csrf
              <button type="submit" class='btn-delete' >Delete</button>
            </form>
            <a class='btn-close' onclick="closeModel()"  >Close</a>
        </div>
    </div>
  </div>

</div>

@endsection