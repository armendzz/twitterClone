
    
        @forelse ($tweets as $tweet)
         @include('/layouts/_tweet')
         @empty
         <div class="border mt-2 p-3">
             <p>No tweets yet.</p>
        </div>
        
   
        @endforelse
        <div class="mt-2 pt-3 col-sm d-flex justify-content-center">
        {{ $tweets->links() }}
        </div>