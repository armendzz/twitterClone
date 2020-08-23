@extends('layouts.app')

@section('content')
<div class="container">
 
    <div class="row">
        <div class="col-md-2 block"> @include('/layouts/_side-left') </div>
        <div class="col-sm block">

           @include('/layouts/_publish')


            <div class="border border-secondary mt-3">
                <div class="container mt-2 mb-2">

                    @foreach ($tweets as $tweet)
                     @include('/layouts/_tweet')
                    @endforeach

                  
                </div>
            </div>




        </div>
        <div class="col-md-2 block"> @include('/layouts/_side-right')</div>
    </div>

</div>
@endsection
