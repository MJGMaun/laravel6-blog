<nav id="nav">
    <ul>
        <li class="{{ Request::path() === '/' ? 'active' : '' }}"><a href="/">Homepage</a></li>
        <li class="{{ Request::is('posts/*') || Request::path() === 'posts' ? 'active' : '' }}"><a href="{{ route('posts.index') }}">Blog Posts</a></li>
    </ul>
</nav>
