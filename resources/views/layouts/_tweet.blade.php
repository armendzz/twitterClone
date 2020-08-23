<div class="row mt-2 col-sm">
    <div class="mt-2 mb-1 mr-2 col-md-1" >
        <img src="{{ $tweet->user->avatar }}"  class="rounded-circle ml-1 mb-1" alt="">

    </div>
    <div class="col-md-10">
    <h2> {{ $tweet->user->name }} </h2>
        {{ $tweet->body }}
    </div>
     </div>
     <hr>

  