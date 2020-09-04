<form action="/profiles/{{ $user->name }}/follow" method="POST">
    @csrf
  <button type="submit" class="btn btn-success float-right float-right"> {{ auth()->user()->following($user) ? 'Unfollow Me' : '+ Follow Me' }} </button>
</form>