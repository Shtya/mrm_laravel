
<?php 

    use App\Models\blog;
    $blog1 = blog::where('category', $blog['category'])->get() ;


?>


@section('title' ,  $blog['meta_title'] )
@section('desc' ,  $blog['meta_desc'] )
@section('canonical' , '/blog-details')
@include('components.Navbar')



<div class='blog-details'>

    <div class="home">
        <div class="container">
            <div class="boxImg"  >  <img src="{{ asset($blog['thumbnail']) }}" alt="{{ $blog['title'] }}" /> </div> 
            <div class="boxs" data-aos="fade-left" >
            <p  class="h2 hidden-text" > <span> {{ $blog['title'] }}</span> </p>
          </div>
      </div>
    </div>

    <div class="blog-detail" >
      <div class="container">
        <div class="topics"> 
          
        </div>
        <div class="description"> {!! $blog['description'] !!} </div>
      </div>
    </div>
    @include('components.Divider')
    @include('SubComponent.addComment' , [
      'comments' => $comments ,
      'blog_id' => $blog['id']
    ])
    



    @include('components.Divider')
      @include('SubComponent.one_blog' , [ 
            'data' => $blog1 , 
            'classn' => 'Slider' ,
            'title' => "Dive Into More Articles on This Topic"  
            ])

    </div>


@include('components.Divider')
@include('components.footer')


<script>
let H1 = document.querySelector('.blog-details .description h1') 
let H2 = document.querySelectorAll('.blog-details .description h2') 
let topics = document.querySelector(".topics")

if(H1){
  let eleH1 = document.createElement('h1');
  let textH1 = document.createTextNode(H1.textContent);
  eleH1.appendChild(textH1); // Append text node to the new h1 element
  topics.appendChild(eleH1); // Append the new h1 element to topics
}


H2.forEach(e => {
    let eleH2 = document.createElement("h2");
    let textH2 = document.createTextNode(e.textContent);
    eleH2.appendChild(textH2); // Append text node to the new h2 element
    topics.appendChild(eleH2); // Append the new h2 element to topics
});



let H2Left = document.querySelectorAll(".topics h2")
H2Left.forEach(link => {
  link.addEventListener('click' , e =>{
    document.querySelectorAll('.description h2').forEach(h2=>{
      if(h2.textContent == e.target.textContent ) h2.scrollIntoView({ behavior: 'smooth', block: 'center'})
    })

  })
})
</script>