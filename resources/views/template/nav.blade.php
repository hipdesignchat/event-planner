<nav class="navbar">
  <p>Logo</p>
  <ul>
    <li><a href="/event/new">Create an Event</a></li>

    @if (Auth::check())
      <li><a href="#">{{ Auth::user()->name }}</a></li>
    @else
    <li><a href="/login">Login</a></li>
    <li><a href="/register">Register</a></li>
    @endif
  </ul>
</nav>
