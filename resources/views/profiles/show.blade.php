
<x-app>

  
    <div class="row border">
        <img src="https://static.ffx.io/images/$zoom_0.934%2C$multiply_1.0582%2C$ratio_1.5%2C$width_756%2C$x_17%2C$y_11/t_crop_custom/q_86%2Cf_auto/6b021f3ab2a8f19063dde95108004ad39a3b2d27" width="100%" height="250px" class="rounded" alt="Cinque Terre">    

 <div class="col-sm-5 mt-2">
     <h1> {{ $user->name }} </h1>
     <h5>Joined: {{ $user->created_at->diffForHumans() }} </h5>
        
</div>
<div class="col-sm-2">
<img src="{{ $user->avatar }}"  class="rounded-circle border border-primary" alt="" height="130px" width="130px" style="position: absolute; bottom: 30px;">
</div>
<div class="col-sm-5 mt-2">
  
  <x-follow-button :user="$user"></x-follow-button>


    @can('edit', $user)
    <a href="{{ $user->path('edit') }}" class="btn btn-info float-right mr-2 float-right">Edit</a>
    @endcan
     
    
   
    
</div>
</div>


  @include('/layouts/_timeline', ['tweets' => $user->tweets])

</x-app>