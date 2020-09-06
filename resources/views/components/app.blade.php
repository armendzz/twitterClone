<x-master>
    <div class="row">
        @if (auth()->check())
        <div class="col-md-2 block"> @include('/layouts/_side-left') </div>
        @endif
        
        <div class="col-sm block ">

            {{ $slot }}
 
         </div>
        @if (auth()->check())
        <div class="col-md-3 block"> @include('/layouts/_side-right')</div>
        @endif
    </div>
</x-master>