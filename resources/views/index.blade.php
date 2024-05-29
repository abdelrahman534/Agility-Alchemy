<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agility Alchemy</title>
    <meta name="description"
          content="Welcome to [Website Name], your one-stop destination for online training. Explore expert-curated courses, interactive content, and flexible learning formats. Whether you're advancing your career or pursuing personal growth, we've got you covered. Join our community today and start learning!">
    <meta name="author" content="Adel Ashraf">

    <!-- Open Graph Protocol -->

    <meta property="og:title" content="Best online training website">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mysite">
    <meta property="og:description"
          content="Welcome to Agility Alchemy, your one-stop destination for online training.">
    <meta property="og:image" content="image.png">
    <meta property="og:site_name" content="Agility Alchemy">
    <meta property="locale" content="en-EG">

    <!-- icons -->
    <!--
    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    -->

    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body>
<header>
    <!-- Add your website name or logo here -->
    <nav>
        <div class="nav--menu">
            <ul>

                <li>
                    <h3>Agility Alchemist</h3>
                </li>
            </ul>
        </div>
        <div class="nav--main">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <div class="sign-container">
                    <a href="{{route('user-create')}}">
                        <div class="nav--sign">
                            <img src="{{asset('images/SignUpIcon.png')}}" alt="Sign up Icon"/>
                            <li>Sign Up</li>
                        </div>
                    </a>
                    <a href="{{route('signIn')}}">
                        <div class="nav--sign">
                            <img src="images/SignUpIcon.png" alt="Sign In Icon"/>
                            <li>Sign In</li>
                        </div>
                    </a>
                </div>
            </ul>
        </div>
    </nav>
</header>
<nav>
    <!-- Add your website navigation here -->
</nav>
<main>
    <!-- Add your main content here -->
    <section class="mainSection">
        <article class="mainSection--hero">
            <img src="{{asset('images/AI.jpg')}}" alt="Agility Alchemist"/>
            <h1>AGILITY ALCHEMIST</h1>
            <h4>Invest in Yourself Today</h4>
            <div class="signUp-btn">
                <a href="{{route('user-create')}}">
                    <button>SIGN UP NOW</button>
                </a>
            </div>
        </article>
        <article class="mainSection--aboutUs" id='about'>
            <img src="./images/Man-Training.jpg" alt="Picture of a man training"/>
            <div class="aboutUs--desc">
                <h2>ABOUT US</h2>
                <p>Welcome to Agility Alchemist, where online training meets convenience. Founded by four ambitious
                    college
                    students, we're dedicated to making fitness and skill development accessible from the comfort of
                    your home.
                    Our platform offers personalized training programs designed to fit your schedule and goals. Join us
                    and
                    discover a new way to achieve greatness, wherever you are.</p>
            </div>
        </article>
        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <article>

            <div class="mainSection--services" id='services'>
                <h2>OUR SERVICES </h2>
                <div class="service">
                    <img src="./images/Customized-Training.jpg" alt="customized training picture"/>
                    <div class="service--desc">
                        <h3>Customized Training Programs</h3>
                        <p>Personalized training programs tailored to individual fitness levels, goals, and preferences.
                            Users can
                            access a wide range of workout routines, exercises, and progress tracking tools to achieve
                            their desired
                            results.
                        </p>
                    </div>
                </div>
                <div class="service">
                    <img src="images/Healthy-Food.jpg" alt="Healthy food"/>
                    <div class="service--desc">
                        <h3>Nutrition and wellness Resources</h3>
                        <p>Comprehensive resources and guidance on nutrition, meal planning, and general wellness to
                            support
                            overall health and fitness goals. Users can access articles, recipes, meal plans, and
                            nutritional tips
                            to complement their training regimen and optimize their results.</p>
                    </div>
                </div>
                <div class="service">
                    <img src="images/Focused-WorkOut.jpg" alt="Focused Workout"/>
                    <div class="service--desc">
                        <h3>Focused Training Programs</h3>
                        <p>Targeted training videos focusing on specific fitness goals, such as fat loss, muscle gain,
                            endurance,
                            or rehabilitation. Each program is designed to address specific needs and objectives,
                            providing users
                            with structured guidance and support to achieve their desired outcomes.</p>
                    </div>
                </div>
                <div class="service">
                    <img src="images/DataCenter.jpg" alt="Our data center"/>
                    <div class="service--desc">
                        <h3>Extensive Workout Library</h3>
                        <p> Access to our vast database of workout videos, tutorials, and tips covering a wide range of
                            fitness
                            disciplines and skill levels. Users can explore and choose from a variety of workouts
                            tailored to their
                            preferences and goals, providing endless options for effective and enjoyable home
                            training.</p>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>
<footer>
    <!-- Add copyright notices and other footer content here -->
    <footer id="contact">
        <div class="footer--container">
            <div class="footer--links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Our Services</a></li>
                    <li><a href="{{route('user-create')}}">SignUp</a></li>
                </ul>
            </div>
            <div class="footer--socialMedia">
                <a href="#"><img src="images/instagram.png" alt="Instagram Icon"/></a>
                <a href="https://www.linkedin.com/in/adel-ashraf-3a9445231/"><img src="images/linkedin.png"
                                                                                  alt="LinkedInIcon"/></a>
                <a href="https://github.com/Starkk1/"><img src="images/github.png" alt="GitHub Icon"/></a>
            </div>
            <div class="footer--copyRight">
                <p>Copyright © 2024 Agility Alchemist. All rights reserved.

                    All content, including text, graphics, logos, images, videos, and audio files, on the Agility
                    Alchemist
                    website is the property of Agility Alchemist and is protected by copyright laws. Any unauthorized
                    reproduction, distribution, or modification of the content is strictly prohibited without prior
                    written
                    consent from Agility Alchemist.

                    Agility Alchemist and its logo are trademarks of Agility Alchemist. All other trademarks, service
                    marks, and
                    trade names mentioned on the website are the property of their respective owners.

                    For inquiries regarding the use of content or trademarks, please contact us at
                    adelashrafmuhammed@gmail.com.
                </p>
            </div>
        </div>
    </footer>
</footer>

<!-- Include your JavaScript files here -->
<script src="js/scripts.js"></script>
</body>

</html>
