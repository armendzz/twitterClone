
@unless (current_user()->is($user))
    


<form action="/profiles/{{ $user->username }}/follow" method="POST">
    @csrf
  <button type="submit" class="btn btn-success float-right float-right"> {{ auth()->user()->following($user) ? 'Unfollow Me' : '+ Follow Me' }} </button>
</form>

@endunless