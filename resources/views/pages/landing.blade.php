@extends ('template/layout')
@section ('content')
<!-- Hero -->

<section id="hero" class="hero">

  <div class="hero-image"></div>
  <div class="container centered">
    <div class="twelve columns">
      @if (Auth::check())
      <form action="/event/search" method="post">
        {{ csrf_field() }}
        <input type="text" name="query" id="query"><button class="button-primary" type="submit">Search</button>
      </form>
      @else
      <h1 class="separator">Do a thing!</h1>
      <h2>Plan your next hike, party, or Sailor Moon convention with us!</h2>
      @endif
    </div>
  </div>
</section>

<section id="event" class="event">
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h3 class="separator">Current events</h3>
      </div>
    </div>

    <div class="row">
      @if (!empty($events))
      <ul class="event-items" >
        @foreach ($events as $event)
          <li class="four columns item" style="background: {{ $event->colour }}">
            <a href="/event/view/{{ $event->id }}">
            <div class="event-detail">
              <div class="vertical-centered">
                <h3>{{ $event->title }}</h3>
                <p class="separator pink">{{ str_limit(strip_tags($event->description), 32, '…') }}</p>
              </div>
            </div></a>
          </li>
        @endforeach
      </ul>
      @endif
    </div>
</section>
<section data-sr id="contact" class="contact u-full-width" style="border: 1px solid black">
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h3 class="separator">Get in touch</h3>
        <h4>Host an event just like these, or maybe even an event for normal people! It's up to you!!</h4>
      </div>
    </div>
  </div>
</section>

<!-- Contact Us -->

<section class="container contact-us u-full-width u-max-full-width">
  <div class="row">

    <div class="twelve columns contact-us-form">
      <h3 class="separator">Contact</h3>
      <form>
        <div class="row">
          <div class="six columns">
            <input class="u-full-width" type="text" placeholder="Name" id="nameInput">
          </div>
          <div class="six columns">
            <input class="u-full-width" type="email" placeholder="Email" id="emailInput">
          </div>
        </div>
        <textarea class="u-full-width" placeholder="Message" id="messageInput"></textarea>
        <input class="button u-pull-right" type="submit" value="Send">
      </form>

    </div>
  </div>
</section>
@endsection
