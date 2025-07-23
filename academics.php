<?php
include("./templates/header.php");
include("./templates/connect.php");

$name = "";
$phone_number = "";
$email = "";
$class = "";

// select all from products table
$select_query = "SELECT * FROM `registrants`";

$send_query = mysqli_query($db_connect, $select_query);

$registrants = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

// print_r($fetch_query);


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $class = $_POST['class'];

    // insert query, to insert the data into the database
    $insert_query = "INSERT INTO `registrants`(`name`, `phone_number`, `email`, `class`) VALUES ( '$name', '$phone_number', '$email', '$class')";

    // send query to server
    $send_query = mysqli_query($db_connect, $insert_query);

    if ($send_query) {
        // echo 'Registration successful';
        echo "<script>$(document).ready(function() {
    $('#success-modal').modal('open');
    });
    </script>";
    }

    if ($send_query) {
    } else {
        echo 'error: ' . mysqli_error($db_connect);
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Academics Page</title>
</head>
<style>
    .form {
        padding: 20px;
        border: solid transparent;
        border-radius: 30px;
    }

    .form .btn {
        border: solid transparent;
        border-radius: 50px;
    }

    .relative {
        position: relative;
    }

    .video-txt {
        position: absolute;
        top: 40%;
        left: 5%;
    }

    .form-bg {
        background-color: rgb(221, 224, 235);
        padding: 20px 20px;
    }

    .pulsate-line {
        display: flex;
        /* Align words in a line */
        justify-content: center;
        gap: 10px;
        /* Space between words */

    }

    .word {
        font-size: 1.5rem;
        /* Smaller initial size */
        font-weight: bold;
        opacity: 0;
        /* Initially hidden */
        transform: scale(0.9);
        /* Slightly smaller than normal */
        transition: transform 0.5s ease, opacity 0.5s ease;
        /* Smooth animation */
    }

    .word.visible {
        opacity: 1;
        /* Fully visible */
        transform: scale(1.1);
        /* Grow slightly bigger */
    }

    /* Default hidden state */
    .hidden {
        opacity: 0;
        transform: translateY(50px);
        /* Start slightly below */
        transition: 1s all 0.2s ease-out;
        /* Smooth transition */
    }

    /* Visible state (triggered by JS) */
    .visible {
        opacity: 1;
        transform: translateY(0);
        /* Move to original position */
    }

    .fade-in-left.hidden {
        opacity: 0;
        /* Completely transparent */
        transform: translateX(-50px);
        /* Start 50px to the left */
        transition: opacity 1s ease-out, transform 1s ease-out;
        /* Smooth transition */
    }

    /* Visible state (triggered by adding the 'visible' class) */
    .fade-in-left.visible {
        opacity: 1;
        /* Fully visible */
        transform: translateX(0);
        /* Move to original position */
    }

    /* Fade-in from the right */
    .fade-in-right.hidden {
        transform: translateX(50px);
        /* Start 50px to the right */
    }

    .fade-in-right.visible {
        opacity: 1;
        transform: translateX(0);
        /* Move to its original position */
    }

    /* Fade-in from the bottom */
    .fade-in-bottom.hidden {
        transform: translateY(50px);
        /* Start 50px below */
    }

    .fade-in-bottom.visible {
        opacity: 1;
        transform: translateY(0);
        /* Move to its original position */
    }

    .bold-txt {
        font-weight: bold;
    }

    .cta-section {
        background: linear-gradient(135deg, #2196F3, #E91E63);
        color: white;
        padding: 80px 20px;
        text-align: center;
        position: relative;
    }

    .rounded {
        border: solid transparent;
        border-radius: 20px;
    }

    .modal {
        max-width: 600px;
        width: 90%;
    }

    div.banner-div div a {
        border-radius: 30px !important;
        text-transform: none !important;
    }

    .card {
        border: solid white !important;
        border-radius: 40px !important;
        padding: 5px !important;
    }

    /* Fish farm css */
    .fish-farm-section {
            background: linear-gradient(135deg, #2196F3, #E91E63);
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .fish-farm-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.1);
            background-size: 50px 50px;
        }

        .section-content {
            position: relative;
            z-index: 2;
        }

        .main-title {
            font-size: 3rem;
            font-weight: 300;
            color: white;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .subtitle {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            text-align: center;
            margin-bottom: 50px;
            font-weight: 300;
        }

        .info-cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 25px 20px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .info-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .info-card i {
            font-size: 3rem;
            color: white;
            margin-bottom: 20px;
            display: block;
        }

        .info-card h5 {
            color: white;
            font-weight: 400;
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .info-card p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            line-height: 1.6;
            margin: 0;
        }

        .cta-container {
            text-align: center;
            margin-top: 50px;
        }

        .cta-button {
            background: linear-gradient(45deg, #E91E63, #AD1457);
            color: white;
            padding: 30px 40px;
            border: solid transparent;
            border-radius: 30px !important ;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background: linear-gradient(45deg, #AD1457, #880E4F);
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(233, 30, 99, 0.4);
            color: white;
        }

        .enterprise-stats {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            padding: 40px;
            margin-top: 40px;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .stat-item {
            color: white;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 300;
            display: block;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @media (max-width: 768px) {
            .main-title {
                font-size: 2.2rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
                padding: 0 20px;
            }
            
            .info-cards {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
            
            .fish-farm-section {
                padding: 60px 0;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
</style>

<body class="background">
    <!-- Curriculum section -->
    <div class="container">
        <h2 class="blue-text bold-txt hide-on-med-and-down section-heading hidden fade-in-left">Curriculum</h2>
        <h4 class="blue-text bold-txt center hide-on-large-only section-heading hidden fade-in-left">Curriculum</h4>
        <div class="row hidden fade-in-right">
            <div class="col l6 s12">
                <img src="./img/20241004_083415.jpg" alt="" class="responsive-img rounded">
            </div>
            <div class="col l6 s12 left-align">
                <p>Wisdom College of Excellence (WICE) has a well-structured curriculum that provides a holistic and
                    inclusive learning experience for its students. The school's curriculum framework is designed to
                    cater to the diverse needs and interests of its students.
                    <br> <br>
                    <strong>Core Subjects:</strong> WICE's curriculum includes a range of core subjects that provide
                    students with a solid foundation in key areas.
                    <br> <br>
                    Enrichment Programs: In addition to its core subjects, WICE offers a range of enrichment programs
                    that complement its curriculum and provide students with valuable skills and experiences:
                    <br>
                    1. Read Aloud and Creative Writing: Developing literacy skills through regular read-aloud sessions,
                    creative writing workshops, and literary competitions.
                    <br>
                    2. ICT and Digital Literacy: Providing hands-on experience in computer programming, coding...
                </p>
                <a href="#Curriculum" class="modal-trigger">Read More</a>
            </div>
        </div>
    </div>

    <div id="Curriculum" class="modal rouded">
        <div class="modal-content">
            <p>Curriculum: Wisdom College of Excellence (WICE) has a well-structured curriculum that provides a holistic
                and inclusive learning experience for its students. The school's curriculum framework is designed to
                cater to the diverse needs and interests of its students. <br> <br>
                Core Subjects <br> <br>
                WICE's curriculum includes a range of core subjects that provide students with a solid foundation in key
                areas: <br> <br>
                1. English Language <br>
                2. Mathematics <br>
                3. Sciences (Biology, Chemistry, Physics) <br>
                4. Social Sciences (History, Geography, Civics) <br>
                5. Languages (local and foreign) <br> <br>
                Enrichment Programs <br> <br>
                In addition to its core subjects, WICE offers a range of enrichment programs that complement its
                curriculum and provide students with valuable skills and experiences: <br> <br>
                1. Read Aloud and Creative Writing: Developing literacy skills through regular read-aloud sessions,
                creative writing workshops, and literary competitions. <br>
                2. ICT and Digital Literacy: Providing hands-on experience in computer programming, coding, and digital
                literacy through state-of-the-art ICT infrastructure. <br>
                3. Social and Gender Inclusivity: Fostering empathy, respect, and understanding among students through
                programs and initiatives that promote social and gender inclusivity. <br>
                4. Environmental Efforts: Encouraging environmental stewardship and sustainability through initiatives
                that reduce the school's carbon footprint and promote recycling. <br> <br>
                Teaching Methods <br> <br>
                WICE's teaching methods are student-centered, interactive, and engaging, with a focus on developing
                critical thinking, creativity, and problem-solving skills. The school's teachers are experienced,
                qualified, and committed to providing a supportive and inclusive learning environment. <br> <br>
                Assessment and Evaluation <br> <br>
                WICE uses a range of assessment and evaluation methods to measure student learning and progress. These
                include formative and summative assessments, quizzes, tests, and project-based evaluations. The school's
                assessment and evaluation methods are designed to provide students with feedback and support, and to
                help them achieve their full potential.</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-blue btn-flat pink-text">Close</a>
        </div>
    </div>

    <!-- Available classes section -->
    <div class="row cta-section hidden fade-in-bottom">
        <h2 class="center white-text">Classes Available</h2>
        <div class="col l3 white-text text-darken-3 s6 center ">
            <h5 class="center">Pre-School</h2>
                <p class="white-text text-lighten-2" href="">Creche</p>
                <p class="white-text text-lighten-2" href="">play-pen</p>
                <p class="white-text text-lighten-2" href="">Pre-nursery</p>
                <p class="white-text text-lighten-2" href="">Nursery 1</p>
                <p class="white-text text-lighten-2" href="">Nursery 2 </p>
        </div>
        <div class="col l3 white-text text-darken-3 s6 center ">
            <h5 class="center">Primary School</h2>
                <p class="white-text text-lighten-2" href="">primary 1</p>
                <p class="white-text text-lighten-2" href="">Primary 2</p>
                <p class="white-text text-lighten-2" href="">Primary 3</p>
                <p class="white-text text-lighten-2" href="">Primary 4 </p>
                <p class="white-text text-lighten-2" href="">Primary 5 </p>
        </div>
        <div class="col l3 white-text text-darken-3 s6 center ">
            <h5 class="center">Junior Secondary School</h2>
                <p class="white-text text-lighten-2" href="">JSS 1</p>
                <p class="white-text text-lighten-2" href="">JSS 2 </p>
                <p class="white-text text-lighten-2" href="">JSS 3 </p>
        </div>
        <div class="col l3 white-text text-darken-3 s6 center ">
            <h5 class="center">Senior Secondary School</h2>
                <p class="white-text text-lighten-2" href="">SSS 1</p>
                <p class="white-text text-lighten-2" href="">SSS 2 </p>
                <p class="white-text text-lighten-2" href="">SSS 3 </p>
        </div>
    </div>

    <!-- Register form -->
    <div class="container scrollspy" id="target-section">
        <div class="hidden fade-in-left">
            <h2 class="blue-text hide-on-med-and-down section-heading">Register</h2>
            <h3 class="hide-on-large-only blue-text center section-heading">Register</h3>
        </div>
        <div class="row hoverable form z-depth-2 hidden fade-in-right">
            <div class="col s12 l6">
                <h3 class=" grey-text text-darken-1">Want to join the <span class="Blue-text">WICE</span> family?</h3>
                <p class=" grey-text flow-text">Click the button below to register now 👇</p>
                <a href="mailto:Wceiwopin@gmail.com"
                    class="hide-on-med-and-down blue white-text btn btn-large left hoverable">Email us at<i
                        class="right material-icons">email</i></a>
                <a class="hide-on-large-only btn btn-large hoverable blue white-text right">Call us Now<i
                        class=" material-icons right">phone</i></a>
            </div>
            <div class="col s12 l6">
                <form action="./academics.php" method="post">
                    <div class="input-field">
                        <input type="text" name="name" id="name">
                        <label for="name">Your Name</label>
                    </div>
                    <div class="input-field">
                        <input type="tel" name="phone_number" id="phone_number">
                        <label for="phone_number">Your Phone Number</label>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" id="email">
                        <label for="email">Enter Your Email</label>
                    </div>
                    <div class="input-field">
                        <select name="class" id="class">
                            <option value="" disabled selected>Select your class</option>
                            <option value="Creche">Creche</option>
                            <option value="Play Pen">Play Pen</option>
                            <option value="Pre-Nursery">Pre-Nursery</option>
                            <option value="Nursery 1">Nursery 1</option>
                            <option value="Nursery 2">Nursery 2</option>
                            <option value="Primary 1">Primary 1</option>
                            <option value="Primary 2">Primary 2</option>
                            <option value="Primary 3">Primary 3</option>
                            <option value="Primary 4">Primary 4</option>
                            <option value="Primary 5">Primary 5</option>
                            <option value="JSS1">JSS 1</option>
                            <option value="JSS2">JSS 2</option>
                            <option value="JSS3">JSS 3</option>
                            <option value="SSS1">SSS 1</option>
                            <option value="SSS2">SSS 2</option>
                            <option value="SSS3">SSS 3</option>
                        </select>
                        <label for="class">Your desired class:</label>
                    </div>


                    <div class="center input-field">
                        <input class="btn btn-large center modal-trigger" type="submit" name="submit" id="submit"
                            value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="success-modal" class="modal rounded">
        <div class="modal-content">
            <h4>Success!</h4>
            <p>Your form has been submitted successfully.</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close btn pink">Close</a>
        </div>
    </div>

    <!-- Achievements section -->
    <div class="cta-section achievements-section">
        <div class="container">
            <div class="hidden fade-in-left">
                <h3 class="section-heading bold-txt white-text center">Our Achievements</h3>
            </div>
            <div class="row">
                <div class="col l3 m6 s12 center hidden fade-in-bottom">
                    <div class="white-text">
                        <i class="material-icons large">emoji_events</i>
                        <h4 class="counter" data-target="13">0</h4>
                        <p>Tech Competition Awards</p>
                    </div>
                </div>
                <div class="col l3 m6 s12 center hidden fade-in-bottom">
                    <div class="white-text">
                        <i class="material-icons large">school</i>
                        <h4 class="counter" data-target="98">0</h4>
                        <p>% University Acceptance</p>
                    </div>
                </div>
                <div class="col l3 m6 s12 center hidden fade-in-bottom">
                    <div class="white-text">
                        <i class="material-icons large">people</i>
                        <h4 class="counter" data-target="500">0</h4>
                        <p>Students Graduated</p>
                    </div>
                </div>
                <div class="col l3 m6 s12 center hidden fade-in-bottom">
                    <div class="white-text">
                        <i class="material-icons large">verified</i>
                        <h4 class="counter" data-target="25">0</h4>
                        <p>Industry Partnerships</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br> <br>

    <section class="fish-farm-section">
        <div class="container section-content">
            <h2 class="main-title">Fish Farm Enterprise Assistant</h2>
            <p class="subtitle">Get expert guidance for your aquaculture operations and business development</p>
            
            <div class="info-cards">
                <div class="info-card">
                    <i class="material-icons">pets</i>
                    <h5>Fish Care & Health</h5>
                    <p>Learn proper feeding schedules, water quality management, disease prevention, and optimal growing conditions for different fish species.</p>
                </div>
                
                <div class="info-card">
                    <i class="material-icons">trending_up</i>
                    <h5>Business Operations</h5>
                    <p>Understand market pricing, cost management, profit optimization, record keeping, and scaling your fish farm enterprise effectively.</p>
                </div>
                
                <div class="info-card">
                    <i class="material-icons">science</i>
                    <h5>Technical Support</h5>
                    <p>Access guidance on equipment maintenance, water testing procedures, pond management, and troubleshooting common operational issues.</p>
                </div>
                
                <div class="info-card">
                    <i class="material-icons">schedule</i>
                    <h5>Fish Farm Routines</h5>
                    <p>Get structured daily, weekly, and seasonal routines for pond maintenance, feeding cycles, and operational scheduling.</p>
                </div>
            </div>
            
            <!-- <div class="enterprise-stats">
                <h5 style="color: white; margin-bottom: 0;">Supporting Student Success</h5>
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Availability</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Topics Covered</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">Expert</span>
                        <span class="stat-label">Knowledge Base</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">Instant</span>
                        <span class="stat-label">Responses</span>
                    </div>
                </div>
            </div> -->
            
            <div class="cta-container">
                <a href="./chatbot.html" class="cta-button btn-large waves-effect waves-light">
                    <i class="material-icons left">chat</i>
                    Access Fish Farm Assistant
                </a>
            </div>
        </div>
    </section>

    <!-- Academic programmes -->
    <div class="container section-spacing">
        <div class="hidden fade-in-left">
            <h3 class="blue-text section-heading bold-txt">Academic Programs</h3>
        </div>
        <div class="row">
            <div class="col l4 s12 hidden fade-in-bottom">
                <div class="card long-card hoverable">
                    <div class="card-content center">
                        <i class="material-icons large pink-text">school</i>
                        <h5 class="card-title">Primary Education</h5>
                        <p>Foundation learning with digital literacy integration from early years.</p>
                        <ul class="left-align">
                            <li><span class="pink-text">•</span> Basic Computer Skills</li>
                            <li><span class="pink-text">•</span> Digital Citizenship</li>
                            <li><span class="pink-text">•</span> Creative Computing</li>
                            <li><span class="pink-text">•</span> Online Safety</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col l4 s12 hidden fade-in-bottom">
                <div class="card long-card hoverable">
                    <div class="card-content center">
                        <i class="material-icons large pink-text">laptop_mac</i>
                        <h5 class="card-title">Secondary Education</h5>
                        <p>Advanced digital skills with specialized technology tracks.</p>
                        <ul class="left-align">
                            <li><span class="pink-text">•</span> Web Development</li>
                            <li><span class="pink-text">•</span> Database Management</li>
                            <li><span class="pink-text">•</span> Mobile App Development</li>
                            <li><span class="pink-text">•</span> Cybersecurity Basics</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col l4 s12 hidden fade-in-bottom">
                <div class="card long-card hoverable">
                    <div class="card-content center">
                        <i class="material-icons large pink-text">business</i>
                        <h5 class="card-title">Digital Entrepreneurship</h5>
                        <p>Preparing students for the digital economy and startup culture.</p>
                        <ul class="left-align">
                            <li><span class="pink-text">•</span> Junior Achievers Nigeria</li>
                            <li><span class="pink-text">•</span> Digital Marketing</li>
                            <li><span class="pink-text">•</span> Fish Farm Enterprise</li>
                            <li><span class="pink-text">•</span> Innovation Labs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            // Initialize Materialize components
            $('select').formSelect();
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
            $('.modal').modal();
            $('.scrollspy').scrollSpy();
            $('.parallax').parallax();
            $('.slider').slider({ height: 600 });

            // Navbar scroll effect
            $(window).scroll(function () {
                const sliderHeight = $('.slider').height();
                if ($(window).scrollTop() > sliderHeight) {
                    $(".navbar").addClass("scrolled");
                } else {
                    $(".navbar").removeClass("scrolled");
                }
            });

            // === General Fade-in Observer ===
            const fadeInObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.2 });

            document.querySelectorAll('.hidden').forEach(el => fadeInObserver.observe(el));

            // === Staggered Fade-in for Achievements Cards ===
            function addStaggeredFadeIn() {
                document.querySelectorAll('.fade-in-bottom').forEach((el, i) => {
                    if (isInViewport(el)) {
                        setTimeout(() => el.classList.add('visible'), i * 200);
                    }
                });
            }

            function isInViewport(el) {
                const rect = el.getBoundingClientRect();
                return rect.top < window.innerHeight && rect.bottom > 0;
            }

            window.addEventListener('scroll', addStaggeredFadeIn);
            window.addEventListener('load', addStaggeredFadeIn);

            // === Pulsate Word Animation ===
            const pulsateLine = document.querySelector('.pulsate-line');
            if (pulsateLine) {
                const wordObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            $('.pulsate-line .word').each(function (index) {
                                setTimeout(() => {
                                    $(this)
                                        .addClass('visible')
                                        .delay(500)
                                        .queue(function (next) {
                                            $(this).css('transform', 'scale(1)');
                                            next();
                                        });
                                }, index * 800);
                            });
                            observer.disconnect();
                        }
                    });
                }, { threshold: 0.5 });

                wordObserver.observe(pulsateLine);
            }

            // === Pulsating Section Observer ===
            const pulsatingSection = document.querySelector('.pulsating-section');
            if (pulsatingSection) {
                const sectionObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.disconnect();
                        }
                    });
                }, { threshold: 0.5 });

                sectionObserver.observe(pulsatingSection);
            }

            // === Counter Animation (Smooth with requestAnimationFrame) ===
            function animateCounters() {
                $('.counter').each(function () {
                    const $el = $(this);
                    const target = parseInt($el.data('target'));
                    let start = null;

                    function step(timestamp) {
                        if (!start) start = timestamp;
                        const progress = timestamp - start;
                        const duration = 2000;
                        const current = Math.min(Math.floor((progress / duration) * target), target);
                        $el.text(current);
                        if (current < target) {
                            requestAnimationFrame(step);
                        }
                    }

                    requestAnimationFrame(step);
                });
            }

            const achievementsSection = document.querySelector('.achievements-section');
            if (achievementsSection) {
                const counterObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateCounters();
                            observer.disconnect();
                        }
                    });
                }, { threshold: 0.5 });

                counterObserver.observe(achievementsSection);
            }
        });
    </script>
    <?php
    include("./templates/footer.php");
    ?>