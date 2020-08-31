<h1>Following</h1>

    <ul class="list-unstyled">
        @foreach (auth()->user()->follows as $user)
           
      
        <li class="mt-2" >
            <div>
            <a href="{{ route('profile', $user) }}"> <img src="{{ $user->avatar }}" alt="" class="rounded-circle" ></a>
            <a href="{{ route('profile', $user) }}">  <span class="mr-2">{{ $user->name }}</span> </a>
            </div>
        </li>
        @endforeach
    </ul>