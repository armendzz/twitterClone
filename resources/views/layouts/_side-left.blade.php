



<ul class="list-unstyled">
    <li><h3> <a href="{{ route('home') }}"> Home</a></h1></li>
        <li><h3>Explore</h1></li>
        <li><h3>Bookmarks</h1></li>
        <li><h3>Notification</h1></li>
        <li><h3>Messages</h1></li>
        <li><h3>Lists</h1></li>
            <li><h3><a href="{{ route('profile', auth()->user()) }}">Profile</a></h1></li>
        <li><h3>More</h1></li>
    </ul>