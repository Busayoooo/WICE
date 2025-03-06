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
    $name =  $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    
    // insert query, to insert the data into the database
    $insert_query = "INSERT INTO `registrants`(`name`, `phone_number`, `email`, `class`) VALUES ( '$name', '$phone_number', '$email', '$class')";

    // send query to server
    $send_query = mysqli_query($db_connect, $insert_query);  
    
    if ($send_query) {
        // echo 'Registration successful';    
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
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Academics Page</title>
</head>
<style>
    .relative{
        position: relative;
    }

    .video-txt{
        position:absolute;
        top: 40%;
        left: 5%;
    }

    .form-bg{
    background-color: rgb(221, 224, 235);
    padding: 20px 20px;
}
.pulsate-line {
    display: flex; /* Align words in a line */
    justify-content: center;
    gap: 10px; /* Space between words */
    
}

.word {
    font-size: 1.5rem; /* Smaller initial size */
    font-weight: bold;
    opacity: 0; /* Initially hidden */
    transform: scale(0.9); /* Slightly smaller than normal */
    transition: transform 0.5s ease, opacity 0.5s ease; /* Smooth animation */
}

.word.visible {
    opacity: 1; /* Fully visible */
    transform: scale(1.1); /* Grow slightly bigger */
}
/* Default hidden state */
.hidden {
    opacity: 0;
    transform: translateY(50px); /* Start slightly below */
    transition: 1s all 0.2s ease-out; /* Smooth transition */
}

/* Visible state (triggered by JS) */
.visible {
    opacity: 1;
    transform: translateY(0); /* Move to original position */
}

.fade-in-left.hidden {
    opacity: 0; /* Completely transparent */
    transform: translateX(-50px); /* Start 50px to the left */
    transition: opacity 1s ease-out, transform 1s ease-out; /* Smooth transition */
}

/* Visible state (triggered by adding the 'visible' class) */
.fade-in-left.visible {
    opacity: 1; /* Fully visible */
    transform: translateX(0); /* Move to original position */
}

/* Fade-in from the right */
.fade-in-right.hidden {
    transform: translateX(50px); /* Start 50px to the right */
}

.fade-in-right.visible {
    opacity: 1;
    transform: translateX(0); /* Move to its original position */
}

/* Fade-in from the bottom */
.fade-in-bottom.hidden {
    transform: translateY(50px); /* Start 50px below */
}

.fade-in-bottom.visible {
    opacity: 1;
    transform: translateY(0); /* Move to its original position */
}
    .bold-txt{
        font-weight: bold;
    }
    div.banner-div div a{
        border-radius: 30px !important ; 
        text-transform: none !important ;
        }
</style>
<body class="background">
    <!-- Hero section -->
    <div class="slider">
        <ul class="slides">
            <li>
                <div class="banner-div">
                    <img src="./img/20240214_125218.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3 class="bold-txt">Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="bttn btn-large pink lighten-2 hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class="bold-txt hide-on-large-only">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only pink lighten-2 hoverable">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240214_125622.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3 class="bold-txt">Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large pink lighten-2 hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class="bold-txt hide-on-large-only bold-txt">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only pink lighten-2 hoverable">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240525_090030.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3 class="bold-txt">Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large pink lighten-2 hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class="bold-txt hide-on-large-only">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only pink lighten-2 hoverable">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240810_115158.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3  class="bold-txt">Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large pink lighten-2 hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class="bold-txt hide-on-large-only">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only pink lighten-2 hoverable">Learn More</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <br>
    <!-- Curriculum section -->
    <div class="container">
        <h2 class="blue-text bold-txt hide-on-med-and-down section-heading hidden fade-in-left">Curriculum</h2>
        <h4 class="blue-text bold-txt center hide-on-large-only section-heading hidden fade-in-left">Curriculum</h4>
        <div class="row form-bg hidden fade-in-right">
            <div class="col l6 s12">
                <img src="./img/20241004_083415.jpg" alt="" class="responsive-img">
            </div>
            <div class="col l6 s12">
                <p>Wisdom College of Excellence (WICE) has a well-structured curriculum that provides a holistic and inclusive learning experience for its students. The school's curriculum framework is designed to cater to the diverse needs and interests of its students.
                    <br> <br>
                <strong>Core Subjects:</strong> WICE's curriculum includes a range of core subjects that provide students with a solid foundation in key areas.
                <br> <br>
                Enrichment Programs: In addition to its core subjects, WICE offers a range of enrichment programs that complement its curriculum and provide students with valuable skills and experiences:
                <br>

1. Read Aloud and Creative Writing: Developing literacy skills through regular read-aloud sessions, creative writing workshops, and literary competitions.
<br>
2. ICT and Digital Literacy: Providing hands-on experience in computer programming, coding... </p> 
<a href="#Curriculum" class=" modal-trigger">Read More</a>
            </div>
        </div>
    </div>
    <div id="Curriculum" class="modal">
        <div class="modal-content">
            <img src="./img/20241004_083415.jpg" alt="" class="responsive-img">
            <p>Curriculum: Wisdom College of Excellence (WICE) has a well-structured curriculum that provides a holistic and inclusive learning experience for its students. The school's curriculum framework is designed to cater to the diverse needs and interests of its students. <br> <br>
            Core Subjects <br> <br>
            WICE's curriculum includes a range of core subjects that provide students with a solid foundation in key areas: <br> <br>
            1. English Language <br>
            2. Mathematics <br>
            3. Sciences (Biology, Chemistry, Physics) <br>
            4. Social Sciences (History, Geography, Civics) <br>
            5. Languages (local and foreign) <br> <br>
            Enrichment Programs <br> <br>
            In addition to its core subjects, WICE offers a range of enrichment programs that complement its curriculum and provide students with valuable skills and experiences: <br> <br>
            1. Read Aloud and Creative Writing: Developing literacy skills through regular read-aloud sessions, creative writing workshops, and literary competitions. <br>
            2. ICT and Digital Literacy: Providing hands-on experience in computer programming, coding, and digital literacy through state-of-the-art ICT infrastructure. <br>
            3. Social and Gender Inclusivity: Fostering empathy, respect, and understanding among students through programs and initiatives that promote social and gender inclusivity. <br>
            4. Environmental Efforts: Encouraging environmental stewardship and sustainability through initiatives that reduce the school's carbon footprint and promote recycling. <br> <br>
            Teaching Methods <br> <br>
            WICE's teaching methods are student-centered, interactive, and engaging, with a focus on developing critical thinking, creativity, and problem-solving skills. The school's teachers are experienced, qualified, and committed to providing a supportive and inclusive learning environment. <br> <br>
            Assessment and Evaluation <br> <br>
            WICE uses a range of assessment and evaluation methods to measure student learning and progress. These include formative and summative assessments, quizzes, tests, and project-based evaluations. The school's assessment and evaluation methods are designed to provide students with feedback and support, and to help them achieve their full potential.</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                        </div>
                    </div>

    <!-- Available classes section -->
    <div class="row blue hidden fade-in-bottom">
        <br>
        <h2 class="background-text center white-text">Classes Available</h2>
        <div class="col l3 grey-text text-darken-3 s6 center ">
            <h5 class="center">Pre-School</h2>
            <p class="grey-text text-lighten-2" href="">Creche</p>
            <p class="grey-text text-lighten-2" href="">play-pen</p>
            <p class="grey-text text-lighten-2" href="">Pre-nursery</p>
            <p class="grey-text text-lighten-2" href="">Nursery 1</p>
            <p class="grey-text text-lighten-2" href="">Nursery 2 </p>
        </div>
        <div class="col l3 grey-text text-darken-3 s6 center ">
            <h5 class="center">Primary School</h2>
            <p class="grey-text text-lighten-2" href="">primary 1</p>
            <p class="grey-text text-lighten-2" href="">Primary 2</p>
            <p class="grey-text text-lighten-2" href="">Primary 3</p>
            <p class="grey-text text-lighten-2" href="">Primary 4 </p>
            <p class="grey-text text-lighten-2" href="">Primary 5 </p>
        </div>
        <div class="col l3 grey-text text-darken-3 s6 center ">
            <h5 class="center">Junior Secondary School</h2>
            <p class="grey-text text-lighten-2" href="">JSS 1</p>
            <p class="grey-text text-lighten-2" href="">JSS 2 </p>
            <p class="grey-text text-lighten-2" href="">JSS 3 </p>
        </div>
        <div class="col l3 grey-text text-darken-3 s6 center ">
            <h5 class="center">Senior Secondary School</h2>
            <p class="grey-text text-lighten-2" href="">SSS 1</p>
            <p class="grey-text text-lighten-2" href="">SSS 2 </p>
            <p class="grey-text text-lighten-2" href="">SSS 3 </p>
        </div>
    </div>
    <!-- Register form -->
    <div class="container section scrollspy" id="target-section">
        <div class="hidden fade-in-left">
            <h2 class="blue-text hide-on-med-and-down section-heading">Register</h2>
            <h3 class="hide-on-large-only blue-text center section-heading">Register</h3>
        </div>
        <div class="row form-bg hidden fade-in-right">
            <div class="col s12 l6">
                <h3 class=" grey-text text-darken-1">Want to join the <span class="Blue-text">WICE</span> family?</h3>
                <p class=" grey-text flow-text">Click the button below to register now 👇</p>
                <a href="mailto:Wceiwopin@gmail.com" class= "hide-on-med-and-down blue white-text btn btn-large left hoverable">Email us at<i class="right material-icons">email</i></a>
                <a class= "hide-on-large-only btn btn-large hoverable blue white-text right">Call us Now<i class=" material-icons right">phone</i></a>
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
                            <input type="text" name="class" id="class">
                            <label for="class">Your desired class:</label>
                        </div>
                        
                        <div class="center input-field">
                            <input class="btn btn-large blush-pink creamy-white-text center" type="submit" name="submit" id="submit" value="Send" >
                        </div>
                    </form> 
                </div>
        </div>
    </div>
    <div id="success-modal" class="modal">
    <div class="modal-content">
        <h4>Success!</h4>
        <p>Your form has been submitted successfully.</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close btn pink">Close</a>
    </div>
</div>


    <!-- Nursery Section -->
    <div class="parallax-container hide-on-med-and-down">
        <div class="parallax">
            <img src="./img/Nursery.jpg" alt="" class="">
        </div>
    </div>
    <div class="hide-on-large-only">
        <img src="./img/Nursery.jpg" alt="" class="responsive-img">
    </div>  
    <div class="container">
        <div class="hidden fade-in-left"><h2 class="blue-text section-heading">Nursery</h2></div>
        <p class="flow-text hidden fade-in-right">Welcome to our Nursery, where young minds blossom! Our nurturing environment is designed to spark curiosity, creativity, and a love for learning. Through play-based activities and hands-on experiences, we lay the foundation for a bright and exciting educational journey.</p>
    </div>

    <!-- Primary section -->
    <div class="parallax-container hide-on-med-and-down">
        <div class="parallax">
            <img src="./img/Primary.jpg" alt="" class="">
        </div>
    </div>
    <div class="hide-on-large-only">
        
        <img src="./img/Primary.jpg" alt="" class="responsive-img">
    </div>  
    <div class="container">
        <div class="hidden fade-in-left"><h2 class="blue-text section-heading">Primary</h2></div>
        <p class="flow-text hidden fade-in-right">At our Primary School, we focus on building strong academic skills while fostering a sense of responsibility and independence. With engaging lessons and interactive learning, we encourage children to explore, ask questions, and grow into confident learners ready for the challenges ahead.</p>
    </div>

    <div class="parallax-container hide-on-med-and-down">
        <div class="parallax">
            <img src="./img/20240214_125218.jpg" alt="" class="">
        </div>
    </div>
    <div class="hide-on-large-only">
        <img src="./img/20240214_125218.jpg" alt="" class="responsive-img">
    </div>  
    <div class="container">
        <div class="hidden fade-in-left"><h2 class="blue-text section-heading">Secondary</h2></div>
        <p class="flow-text fade-in-right">Our Secondary School offers a comprehensive education, preparing students for the future with a well-rounded curriculum. With a focus on critical thinking, teamwork, and personal development, we equip our students with the skills and confidence to succeed in both academic and real-world challenges.</p>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
            $('.modal').modal();
            $('.scrollspy').scrollSpy();
            $('.parallax').parallax();
            $('.slider').slider({
                height:600
            });
            $(window).scroll(function () {
                const sliderHeight = $('.slider').height(); 
                if($(window).scrollTop() > sliderHeight){
                    $(".navbar").addClass("scrolled");
                } else {
                    $(".navbar").removeClass("scrolled");
                }
            });

            // Function to check if an element is in the viewport
        function isInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Add 'visible' class to elements with a delay
        function addFadeInClass() {
            const elements = document.querySelectorAll('.fade-in-bottom');
            elements.forEach((element, index) => {
                if (isInViewport(element)) {
                    setTimeout(() => {
                        element.classList.add('visible');
                    }, index * 200); // Stagger delay of 200ms per card
                }
            });
        }

        // Trigger animation on scroll and initial load
        window.addEventListener('scroll', addFadeInClass);
        window.addEventListener('load', addFadeInClass);


        // Function to check if an element is in the viewport
        function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top < (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom > 0
        );
    }

        // Function to add 'visible' class to elements in the viewport
        function addVisibleClass() {
            $('.hidden').each(function () {
                if (isElementInViewport(this)) {
                    $(this).addClass('visible');
                }
            });
        }

    // Check elements on scroll
    $(window).on('scroll', function () {
        addVisibleClass();
    });

    // Initial check
    addVisibleClass();
    
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Trigger the animation when the section becomes visible
                    $('.pulsate-line .word').each(function (index) {
                        setTimeout(() => {
                            $(this)
                                .addClass('visible') // Trigger CSS transition
                                .delay(500) // Stay enlarged for 500ms
                                .queue(function (next) {
                                    $(this).css('transform', 'scale(1)'); // Return to normal size
                                    next();
                                });
                        }, index * 800); // Delay for each word
                    });

                    // Disconnect the observer after animation
                    observer.disconnect();
                }
            });
        },
        { threshold: 0.5 } // Trigger when 50% of the section is visible
    );

    // Observe the pulsate-line container
    observer.observe(document.querySelector('.pulsate-line'));

    $(document).ready(function () {
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Trigger the pulsating effect when the section becomes visible
                    $(entry.target).addClass('visible');

                    // Disconnect the observer after triggering the animation
                    observer.disconnect();
                }
            });
        },
        { threshold: 0.5 } // Trigger when 50% of the section is visible
    );

    // Observe the pulsating-section
    observer.observe(document.querySelector('.pulsating-section'));
});

    });
    </script>

    <?php include("./templates/footer.php"); ?>
</body>
</html>
