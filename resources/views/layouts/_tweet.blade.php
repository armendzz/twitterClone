<div class="border row mt-3">
    <div class="mt-2 mb-1 mr-2 col-md-1" >
        <a href="{{ $tweet->user->path() }}">  <img src="{{ $tweet->user->avatar }}"  class="rounded-circle ml-1 mb-1" alt=""></a>

    </div>
    <div class="col-md-10">
    <a href="{{ $tweet->user->path() }}"> <h2> {{ $tweet->user->name }} </h2> </a>
        {{ $tweet->body }}
    </div>
    
     </div>
   

    