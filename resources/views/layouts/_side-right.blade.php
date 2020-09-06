
   <div class="bg-info p-1 text-white rounded">
    
    <fieldset>
        <legend>Following</legend>


    <ul class="list-unstyled">
        @forelse (auth()->user()->follows as $user)
           
      
        <li class="mt-2" >
            <div>
            <a href="{{ route('profile', $user) }}"> <img src="{{ $user->avatar }}" alt="" class="rounded-circle" height="40" width="40"></a>
            <a href="{{ route('profile', $user) }}" id="following">  <span class="mr-2">{{ $user->name }}</span> </a>
            </div>
        </li>

        @empty 
        <p>No Friends yet!</p>
        @endforelse
    </ul>
</fieldset>

</div>