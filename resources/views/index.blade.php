<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Muzammil Hassan's portfolio showcasing skills in Full Stack Laravel Development, web development projects, and services offered. Contact me for web development needs.">
    <title>Home</title>

    <!-- Open Graph Metadata -->
    <meta property="og:title" content="Muzammil Hassan - Web Developer Portfolio">
    <meta property="og:description" content="Muzammil Hassan's portfolio showcasing skills in Full Stack Laravel Development, web development projects, and services offered. Contact me for web development needs.">
    <meta property="og:image" content="{{ asset('images/Photoshop.jpg') }}">
    <meta property="og:url" content="http://www.muzammilportfolio.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Muzammil Hassan - Web Developer Portfolio">
    <meta name="twitter:description" content="Muzammil Hassan's portfolio showcasing skills in Full Stack Laravel Development, web development projects, and services offered. Contact me for web development needs.">
    <meta name="twitter:image" content="{{ asset('images/Photoshop.jpg') }}">
    <link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" type="text/css" href="images/Photoshop8.png">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <div class="wrapper">
    <div class="cover cover-left"></div>
    <div class="cover cover-right"></div>

    <div class="book">
        <div class="book-page page-left">
        <div class="profile-page">
            <img src="{{ asset('images/Photoshop.jpg')}}" alt="Muzammil Hassan's Picture" />
            <h1>Muzammil Hassan</h1>
            <h3>Web Developer</h3>

            <div class="social-media">
                <a href="http://www.linkedin.com/in/muzammil-hassan-5571b9286" rel="noopener noreferrer" target="_blank" aria-label="Muzammil Hassan's LinkedIn profile">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="https://github.com/MuzammilTheRealDev" rel="noopener noreferrer" target="_blank" aria-label="Muzammil Hassan's GitHub profile">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100010373043040" rel="noopener noreferrer" target="_blank" aria-label="Muzammil Hassan's Facebook profile">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/muzammilhassan786/" rel="noopener noreferrer" target="_blank" aria-label="Muzammil Hassan's Instagram profile">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                
            </div>

            <p>
                Hey, I'm Muzammil Hassan, a full-stack Laravel Developer. I love building websites that work great and are easy to use. Check out my portfolio to see what I've created!
            </p>

            <div class="btn-box">
            <a href="{{ asset('images/Muzammil Hassan.pdf')}}" download="" class="btn">Download CV</a>
            <a href="#" class="btn contact-me">Contact Me</a>
            </div>
        </div>
        </div>

        <!-- page 1 and 2 turn-->
        <div class="book-page page-right turn" id="turn-1">
        <!-- page 1(work experience) -->
        <div class="page-front">
            <h1 class="title">Education</h1>
            <div class="workeduc-box">
            <div class="workeduc-content">
                <span class="year"
                ><i class="fa-solid fa-calendar-days"></i> 2023 - 2024</span
                >
                <h3>Web Development</h3>
                <p>
                    I have completed Full Stack Web Development at the Azad Chaiwala Institute in Rawalpindi.

                </p>
            </div>

            <div class="workeduc-content">
                <span class="year"
                ><i class="fa-solid fa-calendar-days"></i> 2021 - 2023</span
                >
                <h3>Intermediate</h3>
                <p>
                    I completed my Intermediate education at Superior College Pindi Gheb.
                </p>
            </div>

            <div class="workeduc-content">
                <span class="year"
                ><i class="fa-solid fa-calendar-days"></i> 2019 - 2021</span
                >
                <h3>Matric</h3>
                <p>
                    I completed my Matric education at SLS Model Secondary School in Pindi Gheb.
                </p>
            </div>
            </div>
            <span class="number-page">1</span>

            <!-- next-button  -->
            <span class="nextprev-btn" data-page="turn-1">
            <i class="fa-solid fa-chevron-right"></i>
            </span>
        </div>
        <!-- page 2(education) -->
        <div class="page-back">
            <h1 class="title">My Projects</h1>

            
            <div class="workeduc-box">
                <div class="workeduc-content">
                    <div class="info-title">
                        <h3>ConnectX</h3>
                        <a href="https://connectx.biz/"  target="_blank">Live Preview<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                            <p><strong style="font-weight: 600;">Technologies used:</strong> HTML, JavaScript, Tailwind CSS, GSAP and Laravel</p>
                </div>

                <div class="workeduc-content">
                    <div class="info-title">
                        <h3>The Quick Buy</h3>
                        <a href="https://quickbuy.muzamilhassan.com/"  target="_blank">Live Preview<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                            <p><strong style="font-weight: 600;">Technologies used:</strong> HTML, CSS, JavaScript and Laravel</p>
                </div>

            <div class="workeduc-content">
                <div class="info-title">
                    <h3>Bubble-Game  </h3>
                    <a href="https://muzammiltherealdev.github.io/Bubble-Game/"  target="_blank">Live Preview<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
                <p><strong style="font-weight: 600;">Technologies used:</strong> HTML, CSS, JavaScript</p>

            </div>

            <div class="workeduc-content">
                <div class="info-title">
                    <h3>Tic-Tac-Toe   </h3>
                    <a href="https://muzammiltherealdev.github.io/Tic-Tac-Toe/"  target="_blank">Live Preview<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
                <p><strong style="font-weight: 600;">Technologies used:</strong> HTML, CSS, JavaScript</p>

            </div>

            <div class="workeduc-content">
                <div class="info-title">
                    <h3>Weather App  </h3>
                    <a href="https://muzammiltherealdev.github.io/Weather-App/" target="_blank"> Live Preview<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
                <p><strong style="font-weight: 600;">Technologies used:</strong> HTML, CSS, JavaScript</p>

            </div>

                </div>

            <span class="number-page">2</span>

            <!-- next-button  -->
            <span class="nextprev-btn back" data-page="turn-1">
            <i class="fa-solid fa-chevron-left"></i>
            </span>
        </div>
        </div>

        <!-- page 3 and 4 -->
        <div class="book-page page-right turn" id="turn-2">
            <!-- page 3(my services) -->
            <div class="page-front">
                <h1 class="title">My Services</h1>
                <div class="services-box">
                    <div class="services-content">
                        <i class="fa-solid fa-code"></i>
                        <h3>Web Development</h3>
                        <p>Contact me to create any type of Website using Laravel</p>
                    </div>

                    <div class="services-content">
                        <i class="fa-solid fa-paintbrush"></i>
                        <h3>Creative Design</h3>
                        <p>I can create creative design of any kind. </p>
                    </div>
                    
                    <div class="services-content">
                        <i class="fa-solid fa-dumpster-fire"></i>
                        <h3>E-commerce Development</h3>
                        <p>Contact me to create any kind of E-Commerce Website.</p>
                    </div>

                    <div class="services-content">
                        <i class="fa-solid fa-code"></i>
                        <h3>Database Management</h3>
                        <p>Create and optimize databases for efficient data storage and management.</p>
                    </div>
                </div>

                <span class="number-page">3</span>

                <!-- next-button  -->
                <span class="nextprev-btn" data-page="turn-2">
                <i class="fa-solid fa-chevron-right"></i>
                </span>

            </div>

            <!-- page 4(my skills) -->
            <div class="page-back">
                <h1 class="title">My Skills</h1>

                <div class="skills-box">
                    <div class="skills-content">
                        <h3>Front-End</h3>
                        <div class="content">
                            <span><i class="fa-brands fa-html5"></i> Html</span>
                            <span><i class="fa-brands fa-css3-alt"></i> CSS</span>
                            <span><i class="fa-brands fa-js"></i> JavaScript</span>
                            <span><i class="fa-brands fa-bootstrap"></i> Bootstrap</span>
                            <!-- <span><i class='bx bxl-tailwind-css'></i> </i>Tailwind</span> -->
                        </div>
                    </div>

                    <div class="skills-content">
                        <h3>Back-End</h3>
                        <div class="content">
                            <span><i class="fa-brands fa-php"></i> PHP</span>
                            <span><i class="fa-brands fa-laravel"></i> Laravel</span>
                        </div>
                    </div>

                    <div class="skills-content">
                        <h3>Database</h3>
                        <div class="content">
                            <span><i class="fa-solid fa-database"></i> Mysql</span>

                        </div>
                    </div>
                    <span class="number-page">4</span>

                    <!-- next-button  -->
                    <span class="nextprev-btn back" data-page="turn-2">
                    <i class="fa-solid fa-chevron-left"></i>
                    </span>

                </div>
            </div>
        </div>
        <!-- page 5 and 6 -->
        <div class="book-page page-right turn wrap" id="turn-3">
            <!-- page5(Latest Project) -->
            <div class="page-front">
                <h1 class="title" >Latest Project</h1>
                    <div class="portfolio-box">
                        <div class="img-box">
                            <img src="{{ asset('images/portfolio.jpg')}}" alt="image of a project">
                        </div>

                        <div class="info-box">
                            <div class="info-title">
                                <h3>ConnectX</h3>
                                <a href="https://connectx.biz/" rel="noopener noreferrer" target="_blank">Live Preview<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </div>
                            <p id="two-wrap">Technologies used:</p>
                            <p><strong>Front-end:</strong>  HTML, Tailwind CSS, JavaScript, and GSAP.</p>
                            <p><strong>Back-end:</strong>   Laravel.</p>
                        </div>
                        
                        <div class="btn-box">
                            <a href="https://connectx.biz/" class="btn" rel="noopener noreferrer" target="_blank" >Live Preview</a>
                            <a href="https://github.com/MuzammilTheRealDev" rel="noopener noreferrer" target="_blank" class="btn" data-page="turn-2" >More Projects</a>
                        </div>
                    
                    </div>
                <span class="number-page">5</span>

                <!-- next-button  -->
                <span class="nextprev-btn" data-page="turn-3">
                <i class="fa-solid fa-chevron-right"></i>
                </span>
            </div>
            


            <!-- page6(Contact) -->
            <div class="page-back">
                <h1 class="title" >Contact Me</h1>

                <div class="contact-box">
                    <form method="POST" action="{{ route('store')}}">
                        @csrf
                        <input type="text" class="field" placeholder="Full name" name="name" required>
                        <input type="email" class="field" placeholder="Your email" name="email" required>
                        <textarea name="message" id="" class="field" cols="30" rows="10" placeholder="Your message" required></textarea>
                        <input type="submit" class="btn" value="Send Message">

                    </form>
                    <span class="number-page">6</span>

                    <!-- next-button  -->
                    <span class="nextprev-btn back" data-page="turn-3">
                    <i class="fa-solid fa-chevron-left"></i>
                    </span>
                    <a href="#" class="back-profile">
                        <p>Profile</p>
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>

            </div>
            

        </div>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<!-- Scroll Trigger is needed for Scroll Effects -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<!-- ControlKit is needed for Debug Panel -->
<script src="https://cdn.jsdelivr.net/gh/automat/controlkit.js@master/bin/controlKit.min.js"></script>
    <script  type="text/javascript"  src="https://unpkg.com/sheryjs/dist/Shery.js"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    
</body>
</html>
