<header>
  <nav class="navigation" style="width: 100%">
    <ul class="main-navigation" style="margin-bottom: 0!important; background-color: black;">
      <li><a href="/"><img src="/images/event.png"></a></li>
      <li><a href="#categories">Categories</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="/about">About</a></li>
      @if (Auth::check())
        <li><a href="/user">{{ Auth::user()->name }}</a></li>
      @else
        <li><a href="/register">Sign Up</a></li>
        <li><a href="/login">Sign In</a></li>
      @endif
    </ul>
  </nav>
</header>
