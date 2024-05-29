<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agility Alchemist</title>
    <meta name="description"
        content="Welcome to Agility Alchemist, your one-stop destination for online training. Explore expert-curated courses, interactive content, and flexible learning formats. Whether you're advancing your career or pursuing personal growth, we've got you covered. Join our community today and start learning!">
    <meta name=" author" content="Adel Ashraf">

    <!-- Open Graph Protocol -->
    <!--
  <meta property="og:title" content="A brief description">
  <meta property="og:type"  content="website">
  <meta property="og:url"   content="https://www.mysite">
  <meta property="og:description" content="A brief description">
  <meta property="og:image" content="image.png">
  -->

    <!--
  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  -->

    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <img src="./images/Menu.png" class="toggle-btn" />
                <div class="sidebar-logo">
                    <h2>AgilityAlchemist</h2>
                </div>
            </div>
            <ul class="sidebar-nav">
                <!--  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li> -->
                <!-- <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Task</span>
                    </a>
                </li> -->

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Scroll To Section</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Gym Classes </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#Calisthenics" class="sidebar-link">calisthenics</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#cardio" class="sidebar-link">Cardio</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#core" class="sidebar-link">Core</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#howto" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>How to Use</span>
                    </a>
                </li>

            </ul>
            <div class="sidebar-footer">
                <a href="{{route('index')}}" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main ">
            <main>
                <section class="mainSection">
                    <article>
                        <div class="mainSection--hero">
                            <img src="{{asset('images/AI.jpg')}}" alt="Agility Alchemist" />
                            <h1>AGILITY ALCHEMIST</h1>
                            <h4>Invest in Yourself Today</h4>
                        </div>
                    </article>
                    <article class="mainSection--howto" id='howto'>
                        <img src="{{asset('images/section.jpg')}}" alt="How to use Our website" />
                        <div class="howto--desc">
                            <h2>How to use our website</h2>
                            <p>You can use our side navigation bar in order to move to any desired section by following
                                these steps
                            </p>
                            <ol>
                                <li>1.Open the menu from the side navigation bar.</li>
                                <li>2.Select Scroll To Section.</li>
                                <li>3.Select the desired section.</li>
                                <li>4.Select the desired workout.</li>
                                <li>5.Feel the burn</li>
                            </ol>
                        </div>

                    </article>
                    <div class="article-line"></div>
                    <article class="gym-classes" id="gym-classes">
                        <h2 class="text-center">Gym Classes</h2>


                        <!--  Calisthenics PART -->

                        <h3 class="text-center mt-5">Calisthenics</h3>
                        <div class="card-container" id="Calisthenics">
                            <button>
                                <div class="card" data-video-id="CqqWGmJkSYc" style=" width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid
                                    rgb(0, 79, 99)">
                                    <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">The Best Workout Routine to Start Calisthenics for Beginners </p>
                                        <p class="card-text ">This video shares the best Workout Routine to start Calisthenics for Beginners.
                                             It includes 3 full body calisthenics workouts that target every muscle group like;
                                              the chest, back, legs, core, and arms. 
                                        </p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="8gQbgyTlS-8"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem;  border: 2px solid rgb(0, 79, 99)">
                                    <img src="{{asset('images/2.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">How to Start Calisthenics at Home For Beginners (No Equipment)</p>
                                        <p class="card-text"> Provides a comprehensive view on how to start calisthenics for beginners</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="u0v8_1JdGRY"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid rgb(0, 79, 99)">
                                    <img src="{{asset('images/3.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">Do This to Build Muscle with Calisthenics + Beginner Workout Plan</p>
                                        <p class="card-text">Do you think that you can’t build muscle with Calisthenics? Let me explain to you how you can! Unfortunately, 
                                            many people in the fitness world say that calisthenics athletes are skinny,
                                            don’t train legs, and can only be used to learn skills.</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="vczr0WuYK9g"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid rgb(0, 79, 99)">
                                    <img src="{{asset('images/4.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">Calisthenics for Beginners | In Depth Step-by-Step Guide to Building Strength and Muscle</p>
                                        <p class="card-text"> Indepth and detailed view into calisthenics, which provides warmups,
                                             pushing movements, pulling movements, core movements, leg movements.</p>
                                    </div>
                                </div>
                            </button>
                            <div class="article-line"></div>

                        </div>

                        <!--  CARDIO PART -->
                        <h3 class="text-center mt-5">Cardio</h3>
                        <div class="card-container" id="cardio">
                            <button>
                                <div class="card" data-video-id="ml6cT4AZdqI" style=" width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid
                                    rgb(0, 79, 99)">
                                    <img src="./images/cardio1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">30-Minute HIIT Cardio Workout with Warm Up - No
                                            Equipment at Home</p>
                                        <p class="card-text ">In this high intensity cardio bodyweight workout from
                                            trainer Lita Lewis, you’ll spike your heart rate with high-knees, fast feet,
                                            and star jumps; plus work your core and lower body with jumping lunges and
                                            planks - at home! No equipment needed!</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="J212vz33gU4"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem;  border: 2px solid rgb(0, 79, 99)">
                                    <img src="./images/cardio2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">15 Min Intense HIIT Workout For Fat Burn &
                                            Cardio
                                        </p>
                                        <p class="card-text"> Do this 15 min full body HIIT workout and burn 300
                                            calories. With a variety of high intensity strength and cardio movements
                                            this routine is great for both burning fat and building strength.</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="dj03_VDetdw"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid rgb(0, 79, 99)">
                                    <img src="./images/cardio3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">CARDIO WORKOUT FOR BEGINNERS From Home In 10
                                            Minutes</p>
                                        <p class="card-text">This FULL BODY WORKOUT AT HOME from HealthifyMe is going to
                                            be the perfect workout for you in 10 minutes to workout from the comfort of
                                            your home</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="HzfHKN6rmpk"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid rgb(0, 79, 99)">
                                    <img src="./images/cardio4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">45 MINUTE FAT MELTING HIIT CARDIO WORKOUT</p>
                                        <p class="card-text">BURN 700-1000 CALORIES with this 45 minute hiit cardio
                                            workout! </p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="79cx5vmf3Qg" style=" width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid
                                    rgb(0, 79, 99)">
                                    <img src="./images/cardio5.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">Complete 20 Min Full Body Cardio Workout</p>
                                        <p class="card-text ">Follow along with Chris Heria as he shows you a Complete
                                            20 Min Full Body Cardio Workout. Get a super effect full body workout that
                                            hits every muscle in your body using different exercises to build strength
                                            and burn fat in just 20 minutes</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="ylxSQ_5WbMQ"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem;  border: 2px solid rgb(0, 79, 99)">
                                    <img src="./images/cardio6.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">PERFECT 30 MINUTE FAT BURNING HIIT CARDIO
                                            WORKOUT

                                        </p>
                                        <p class="card-text">effective 30-minute fat burning HIIT cardio workout! If
                                            you're looking to shed those extra pounds, boost your metabolism, and
                                            improve your cardiovascular endurance.</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="uyxOhWTln_s"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid rgb(0, 79, 99)">
                                    <img src="./images/cardio7.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">15 Minute High Intensity Cardio Workout (With
                                            Modifications) </p>
                                        <p class="card-text">a quick 15 minute high intensity cardio workout that WILL
                                            work up a sweat in no time! You can do this workout anywhere and we have
                                            modifications so all fitness levels can do this.</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="YLXt-TUKcqU"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid rgb(0, 79, 99)">
                                    <img src="./images/cardio8.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">Water Aerobics Exercises with Hand Buoys</p>
                                        <p class="card-text">30 minute pool workout - water aerobics exercises with with
                                            hand buoys. Strength conditioning and cardio to burn calories and lose
                                            weight</p>
                                    </div>
                                </div>
                            </button>
                            <div class="article-line"></div>
                        </div>
                        <!-- CORE PART  -->

                        <h3 class="text-center">Core</h3>
                        <div class="card-container" id="core">
                            <button>
                                <div class="card" data-video-id="pJp08smdcFk" style=" width: 20rem; height: fit-content; min-height: 25rem; border: 2px solid
                                        rgb(0, 79, 99)">
                                    <img src="./images/core1.jpg" class="card-img-top" style="max-height:200px;"
                                        alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">A 6-Minutes A day workout</p>
                                        <p class="card-text ">Strengthen your core in just 6 minutes a day with this
                                            simple, effective home workout! 9 great exercises to strengthen your
                                            complete core</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="8PwoytUU06g" style=" width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid
                                        rgb(0, 79, 99)">
                                    <img src="./images/core2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">Abs workout from Home
                                        </p>
                                        <p class="card-text">Complete 20 Min Abs Workout. how to get a
                                            super-effective AB workout using different positions and flections in
                                            only 20 minutes not only to get you shredded but to build your 6 pack
                                            ABS.</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="dJlFmxiL11s"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid rgb(0, 79, 99)">
                                    <img src="./images/core3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">Intensive Core Workout</p>
                                        <p class="card-text">High intensity work out 10 min work for the core</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="LJaq4BS7KpE"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid rgb(0, 79, 99)">
                                    <img src="./images/core4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">The Best Core Exercise You're Not Doing
                                        </p>
                                        <p class="card-text">A couple of unique core workout that strengthens your
                                            core to improve preformance at the gym while lifting heavy weights</p>
                                    </div>
                                </div>
                            </button>

                            <button>
                                <div class="card" data-video-id="sQp904QUFc0" style=" width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid
                                            rgb(0, 79, 99)">
                                    <img src="./images/core5.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">25 min Total core Workout</p>
                                        <p class="card-text">Get ready to work your core in this 25
                                            Minute Total Core Pilates Workout. You could do this workout on it's
                                            own or combine it with one of my other workouts for a full body
                                            burn. All you need is yourself and a mat, no equipment needed. I
                                            hope you enjoy it!</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="stuPkzWMdIg" style=" width: 20rem; max-height: 350px; min-height: 25rem; border: 2px
                                            solid rgb(0, 79, 99)">
                                    <img src="./images/core6.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">10 Minute Isometric Core Workout</p>
                                        <p class="card-text">An isometric Core work out where Isometrics is
                                            simply a term for a muscle holding its contraction and is neither
                                            lengthening or shortening.</p>
                                    </div>
                                </div>
                            </button>
                            <button>
                                <div class="card" data-video-id="qi0pGHS5SaA"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid rgb(0, 79, 99)">
                                    <img src="./images/core7.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">10 Minute Ab Workout [No Equipment +
                                            Weighted Abs</p>
                                        <p class="card-text">Weighted and No equipment examples side by side for
                                            illustration
                                        </p>
                                    </div>
                                </div>
                            </button>
                            {{-- <button>
                                <div class="card" data-video-id="32JF-IT7BLk"
                                    style="width: 20rem; max-height: 350px; min-height: 25rem; border: 2px solid rgb(0, 79, 99)">
                                    <img src="./images/core8.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <p class="card-title text-white">The ONLY 3 Core Exercises you need.
                                        </p>
                                        <p class="card-text">There's a lot of different information on core
                                            exercises but we wanted to help simplify it for you so you know what
                                            to focus on in your core workouts. These are 3 ways to train the
                                            core that we think are very important. What core exercises are your
                                            favorite?
                                        </p>
                                    </div> --}}
                                </div>
                            </button>
                        </div>

                        <!--    VIDEO PLAYER -->
                        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg" style="max-width: 80vw; background-color: black;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="videoModalLabel"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="ratio ratio-16x9">
                                            <iframe id="videoPlayer" src="" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
        </article>

        </section>
        </main>

    </div>
    </div>
    <footer id="contact">
        <div class="footer--container">
            <!-- <div class="footer--links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="./index.html#about">About Us</a></li>
                    <li><a href="./index.html#services">Our Services</a></li>
                </ul>
            </div> -->
            <div class="footer--socialMedia">
                <a href="#"><img src="images/instagram.png" alt="Instagram Icon" /></a>
                <a href="#"><img src="images/linkedin.png" alt="LinkedInIcon" /></a>
                <a href="#"><img src="images/github.png" alt="GitHub Icon" /></a>
            </div>
            <div class="footer--copyRight text-center">
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
    <!-- Include your JavaScript files here -->
    <script src="{{asset('js/home.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>