



<ul class="list-unstyled">
    <li><h3> <a href="{{ route('home') }}"> Home</a></h1></li>
        <li><h3><a href="{{ route('explore') }}">Explore</a></h1></li>
        <li><h3>Bookmarks</h1></li>
        <li><h3>Notification</h1></li>
        <li><h3>Messages</h1></li>
        <li><h3>Lists</h1></li>
        <li><h3><a href="{{ route('profile', auth()->user()) }}">Profile</a></h1></li>
        <li>
            <form action="/logout" method="POST">
                @csrf
            <button class="btn btn-danger mt-2 btn-lg" type="submit">Logout</button>
            </form>
        </li>
    </ul>