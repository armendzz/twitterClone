<h1>Following</h1>

    <ul class="list-unstyled">
       @foreach (auth()->user()->follows as $user)
           
      
        <li class="mt-2" >
            <div>
            <img src="{{ $user->avatar }}" alt="" class="rounded-circle" >
            <span class="mr-2">{{ $user->name }}</span> 
            </div>
        </li>
        @endforeach
    </ul>