<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Terms of Use - Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                
               <p>&nbsp;</p>
               <p>&nbsp;</p>
               <h1>TERMS OF USE</h1>
                <p>Please read these terms and conditions carefully before using the [Event Planner] website.</p>
                
                <p>Your access to and use of the services provided at [Event Planner] is conditioned on your acceptance
                of and compliance with these Terms of Use. These terms apply to all visistors, users, and others who
                access or use the Service.</p>
                
                <p>By accessing or using the Service you agree to be bound by these Terms. 
				If you disagree with any part of the terms then you may not access the Service.</p>
                
                <p>&nbsp;</p>
                
                <h2>Ticket Purchases</h2>
                
                <ul>
                  <li>Given Name</li>
                  <li>Family Name</li>
                  <li>Date of Birth</li>
                  <li>Postal Address</li>
                  <li>Email Address</li>
                  <li>Home & Mobile Numbers</li>
                  <li>Credit Card Details</li>
                </ul>
                
                <p>&nbsp;</p>
                
                <h2>Links to Other Websites</h2>
                
                <p>Our Service may contain links to third-party websites or services that are not owned or controlled by [Event Planner].</p>
                
                <p>[Event Planner] has no control over, and assumes no responsibility for, the content, privacy policies,
                or practices of any third party web sites or services. You further acknolwedge and agree that [Event Planner]
                shall not be responsible or liable, directly, or indirectly, for any damage or loss caused or alleged to be
                caused by or in connection with use of or eliance ony any such content, goods or services availiable on or
                through any such websites or services.</p>
                                
                <p>&nbsp;</p>
            </div>
        </div>
    </body>
</html>
