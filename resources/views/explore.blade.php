<x-app>
    <div class="card">
        <div class="card-header">Explore Users</div>
    @foreach ($users as $user)
    <ul class="list-group list-group-flush">
    <li class="list-group-item">
       <div class="row">
            <div class="col-sm-2 d-block">
     <img class="rounded rounded-circle" src="{{ $user->avatar }}" alt="" width="60" height="60"> 
    </div>
    <div class="col-sm d-block">
    <h3 class=""> <a href="{{ $user->path() }}"> {{ '@' . $user->username}}</a></h3>
    <h5>Joined: {{ $user->created_at->diffForHumans() }} </h5>
</div>
<div class="col-sm-3">
    <x-follow-button :user="$user"></x-follow-button>
</div>
</div>
    </li>
    </ul>
    @endforeach
</div>

</x-app>