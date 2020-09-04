
    
        @forelse ($tweets as $tweet)
         @include('/layouts/_tweet')
         @empty
         <div class="border mt-2 p-3">
             <p>No tweets yet.</p>
        </div>
        @endforelse

  
 