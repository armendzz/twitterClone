<div class="border row mt-3 col-sm">
    <div class="mt-2 mb-1 mr-2 col-md-1" >
        <a href="{{ route('profile', $tweet->user) }}">  <img src="{{ $tweet->user->avatar }}"  class="rounded-circle ml-1 mb-1" alt=""></a>

    </div>
    <div class="col-md-10">
    <a href="{{ route('profile', $tweet->user) }}"> <h2> {{ $tweet->user->name }} </h2> </a>
        {{ $tweet->body }}
    </div>
    
     </div>
   

    