<div class="comments" id="comments"  @if (count($comments) >= 1)
  style="z-index: 10 ; position: relative; padding-bottom:100px "
  @else
  style="z-index: 10 ; position: relative; "
@endif >
>
    <div class="container">

        @foreach ($comments as $e )
        <div class="box" >
            <img src="{{ asset('assets/user.png') }}" alt="" />
            <div class="details">
                <div class="info">
                    <div class="name"> {{ $e['name'] }}</div>
                    <div class="data"> {{ $e['created_at']->format('y-m-d h:m') }}  </div>
                </div>
                <div class="message"> {{ $e['message'] }}</div>
            </div>
        </div>
        @endforeach

        
      </div>
    </div> 
    

    <div class="interactive" style="z-index: 10 ; position: relative; ">
    <div class="container">
      <div class="h1">Leave a reply</div>
      <div class="phead"> Your Email address will not be published. Required fields are marked </div>
      <form action="{{ route('add-comment' , $blog_id ) }}" method="post">
        @csrf
        <textarea name="message" placeholder='write your comment here'  ></textarea>
        <div class="groupInput">
          <input name="name" type="text" placeholder='Full Name' />
          <input name="email" type="text" placeholder='Email'     />
          <input name="website" type="text" placeholder='Website' class='web' />
          <button type="submit" class="bt" > Post Comment </button>
        </div>
      </form>
    </div>
  </div>