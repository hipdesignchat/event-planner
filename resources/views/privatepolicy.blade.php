<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Us - Laravel</title>

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
               <h1>PRIVATE POLICY</h1>
                <p>Thanks for visiting [Event Planner], an online ticket distribution service. We respect and protect the privacy of our users.
                This privacy policy describes how our team at [Event Planner] collects and uses information.</p>
                
                <p>The term "Personal Information" in this privacy policy means any information from which your identity is apparent or can be reasonably ascertained. 
				We do not collect Personal Information about you when you visit this online service.</p>
                
                <p>You can use this service without telling us who you are or revealing other Personal Information. 
				If you send us a contact or feedback form you do not need to identify yourself or use your real name.</p>
                
                <p>&nbsp;</p>
                
                <h2>Personal Information</h2>
                
                <p>If you contact us we will collect the email address you nominate and any other identifying information you provide, 
				such as a name or phone number.</p>
                
                <p>Please do not give us information that is considered as either personal or sensitive.</p>
                
                <p>Other than circumstances such as unlawful activity or serious threats to health and safety, we do not share Personal Information with 
                other government agencies. If you ask us about an issue that needs to be dealt with by another agency, we will provide you with the necessary details to make contact yourself. 
                You may opt out of further contact from us at any time.</p>
                
                <p>&nbsp;</p>
                
                <h2>How We Deal with Complaints and Requests</h2>
                
                <p>You may request access to Personal Information about you that we hold and you may ask us to correct your Personal Information if you find that it is not accurate, up-to-date or complete. 
				You may also make a complaint about our handling of your Personal Information. These services are free of charge.</p>
                
                <p>To protect your privacy and the privacy of others, we will need evidence of your identity before we can grant you access to information about you or change it.</p>
                
                <p>[Event Planner] can be contacted through email address only. We undertake to respond within 30 days. 
				If the request or complaint will take longer to resolve, we will provide you with a date by which we expect to respond.</p>
                
                <p>&nbsp;</p>
                
                <h2>How We Protect Your Personal Information</h2>
                
                <p>This online service is hosted in Australia in secure, government accredited facilities. 
                To help protect the privacy of data and personal information we collect and hold, we maintain physical, technical and administrative safeguards. 
                We update and test our security technology on an ongoing basis.</p>
                
                <p>We train our employees about the importance of confidentiality and maintaining the privacy and security of your information. 
				Access to your Personal Information is restricted to employees who need it to provide benefits or services to you.</p>
                
                <p>&nbsp;</p>
                
                <h2>Website Analytics</h2>
                
                <p>To improve your experience on our site, we may use 'cookies'. Cookies are an industry standard and most major web sites use them. 
                A cookie is a small text file that our site may place on your computer as a tool to remember your preferences. 
                You may refuse the use of cookies by selecting the appropriate settings on your browser, however please note that if you do this you may not be able to use the full functionality of this website.</p>
                
                <p>Our website may contain links to other websites. Please be aware that we are not responsible for the privacy practices of such other sites. 
				When you go to other websites from here, we advise you to be aware and read their privacy policy.</p>
                
                <p>Our website uses Google Analytics, a service which transmits website traffic data to Google servers in the United States. 
                Google Analytics does not identify individual users or associate your IP address with any other data held by Google. 
                We use reports provided by Google Analytics to help us understand website traffic and webpage usage.</p>
                
                <p>By using this website, you consent to the processing of data about you by Google in the manner described in Google's Privacy Policy - external site and for the purposes set out above. 
				You can opt out of Google Analytics if you disable or refuse the cookie, disable JavaScript, or use the opt-out service provided by Google - external site.</p>
                
                <p>&nbsp;</p>
            </div>
        </div>
    </body>
</html>
