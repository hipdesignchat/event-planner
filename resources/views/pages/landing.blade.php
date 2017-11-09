@extends ('template/layout')
@section ('content')
  <!DOCTYPE html>
<html lang="en">
<head>

  
  <meta charset="utf-8">
  <title>Event Planner</title>
  <meta name="description" content="Do a thing!">
  <meta name="author" content="HipDesign">

  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Javascript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript" src="js/jquery.2.1.3.min.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
</head>


<body>

<!-- Menu -->


  
    
<header>
<nav class="navigation" style="width: 100%">
  <ul class="main-navigation" style="margin-bottom: 0!important; background-color: black;">
    <li><img src="images/event.png"></img></li>
    <li><a href="#introduction">Introduction</a></li>
    <li><a href="#categories">Categories</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#help">Help</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#signup">Sign Up</a></li>
    <li><a href="#signin">Sign In</a></li>
  </ul>
</nav>
</header>
<!-- Hero -->

<section id="hero" class="hero">

  <div class="hero-image"></div>
  <div class="container centered">
    <div class="twelve columns">
      <h1 class="separator">Do a thing!</h1>
      <h2>Plan your next hike, party, or Sailor Moon convention with us!</h2>
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
      <ul class="event-items" >
        <li class="four columns item">
          <a href="#"><img src="images/portfolio/event_1.jpg" alt="Yu-Gi-Oh">
          <div class="event-detail">
            <div class="vertical-centered">
              <h3>Yu-Gi-Oh</h3>
              <p class="separator pink">Deep philosophical discussion</p>
            </div>
          </div></a>
        </li>
        <li class="four columns item">
          <a href="#"><img src="images/portfolio/event_2.jpeg" alt="Iron Chef">
          <div class="event-detail">
            <div class="vertical-centered">
              <h3>Iron Chef</h3>
              <p class="separator pink">Kitchen Stadium awaits!</p>
            </div>
          </div></a>
        </li>
        <li class="four columns item">
          <a href="#"><img src="images/portfolio/event_3.jpg" alt="Career planning">
          <div class="event-detail">
            <div class="vertical-centered">
              <h3>Career Seminar</h3>
              <p class="separator pink">For when programming is too hard</p>
            </div>
          </div></a>
        </li>
        <li class="four columns item">
          <a href="#"><img src="images/portfolio/event_4.jpg" alt="Intial D">
          <div class="event-detail">
            <div class="vertical-centered">
              <h3>Street racing</h3>
              <p class="separator pink">Don't call the cops</p>
            </div>
          </div></a>
        </li>

        <li class="four columns item">
          <a href="5.html"><img src="images/portfolio/event_5.jpeg" alt="Bitcoin">
          <div class="event-detail">
            <div class="vertical-centered">
              <h3>Bitcoin seminar</h3>
              <p class="separator pink">Your last chance at financial freedom</p>
            </div>
          </div></a>
        </li>
        <li class="four columns item">
          <a href="#"><img src="images/portfolio/event_6.jpg" alt="Hiking">
          <div class="event-detail">
            <div class="vertical-centered">
              <h3>Hiking</h3>
              <p class="separator pink">A conventional event</p>
            </div>
          </div></a>
        </li>
      </ul>
    </div>
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

<!-- Footer -->

<section data-sr class="footer u-full-width">
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h5>&copy 2017 Hip Design</h5>
      </div>
    </div>
  </div>
</section>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
@endsection
