<?php 
include("./templates/header.php");
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
    <title>About Us Page</title>
</head>
<style>
    .video-txt{
        position:absolute;
        top: 35%;
        left: 5%;
    }
    .bold-txt{
        font-weight: bold;
    }
    
    /* Card Action Default State */

.card-action {
    position: relative;
    padding: 10px;
    background-color: white; /* Default background color */
    border-radius: 0 0 20px 20px; /* Match card's border-radius */
    transition: background-color 0.3s ease;
}

/* Primary Link Default Style */
.card-action .primary-action {
    font-weight: bold;
    color: #E91E63; /* Pink text for the link */
    transition: color 0.3s ease;
}

/* Hover Effect for Card Action */
.hover-trigger:hover {
    background-color: #E91E63 !important; /* Pink background on hover */
}

/* Change Primary Link Color on Hover */
.hover-trigger:hover .primary-action {
    color: white !important; /* Change link text color to white */
}

/* Contact Icons Hidden Initially */
.contact-icons {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0); /* Hidden state */
    display: flex;
    gap: 15px;
    transition: transform 0.3s ease, opacity 0.3s ease;
    opacity: 0;
}

/* Style for Circular Contact Icons */
.contact-icons .icon-wrapper {
    width: 40px;
    height: 40px;
    background-color: white; /* White background for icons */
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-icons i {
    color: #E91E63; /* Pink icon color */
    font-size: 1.2rem;
}

/* Show Icons on Hover */
.hover-trigger:hover .contact-icons {
    transform: translate(-50%, -50%) scale(1); /* Icons scale to visible */
    opacity: 1;
}

/* 
    .card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating) {
        color: #E91E63;
    }
    .card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating):hover {
        color: #E91E63;
    } */
    .slider-div{
        position: relative;
    }
    .banner-div{
        position: relative;
    }

    .banner-div.parallax h5{
        padding: 20px;
        position: absolute;
        color: white;
        top: 40%;
        left: 10%;
    }

    .banner-div p{
        padding: 20px;
        position: absolute;
        color: white;
        top: 40%;
        left: 10%;
    }
    .pulsating-section {
        padding: 50px;
        text-align: center;
        background-color: #f0f0f0;
        opacity: 0; /* Start as hidden */
        transform: scale(1); /* Normal scale */
        transition: opacity 0.5s ease, transform 0.5s ease; /* Smooth transition */
    }

    .pulsating-section.visible {
        opacity: 1; /* Become visible */
        transform: scale(1.05); /* Slightly scale up */
    }

        .pulsate-line {
        display: flex; /* Align words in a line */
        justify-content: center;
        gap: 10px; /* Space between words */
    
    }

    .word {
        font-size: 15px; /* Smaller initial size */
        font-weight: bold;
        opacity: 0; /* Initially hidden */
        transform: scale(0.9); /* Slightly smaller than normal */
        transition: transform 0.5s ease, opacity 0.5s ease; /* Smooth animation */
    }
    
    .word.visible {
        opacity: 1; /* Fully visible */
        transform: scale(1.1); /* Grow slightly bigger */
    }


    div.slider-div div a{
        border-radius: 30px !important ; 
        text-transform: none !important ;
    }
</style>
<body class="background">
    <!-- Hero section -->
    <div class="slider">
        <ul class="slides">
            <li>
                <div class="slider-div">
                    <img src="img/20240214_125218.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3 class="bold-txt">Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large pink lighten-2 hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class="bold-txt">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text center">Skills for today, future leaders</p>
                    <a href="aboutUs.php" class="btn hide-on-large-only pink lighten-2 hoverable">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-div">
                    <img src="img/20240214_125622.jpg" alt="School Banner" class="responsive-img">
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
                <div class="slider-div">
                    <img src="img/20240525_090030.jpg" alt="School Banner" class="responsive-img">
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
                <div class="slider-div">
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

    <!-- History of WICE -->
    <div class="container">
        <h2 class="blue-text section-heading text-lighten-1 hidden fade-in-left bold-txt hide-on-med-and-down">History of WICE</h2>
        <h3 class="blue-text section-heading text-lighten-1 hidden fade-in-left bold-txt hide-on-large-only center">History of WICE</h3>
        <p class=" grey-text text-darken-3 flow-text hidden fade-in-right">A short history of Wisdom College of Excellence (WICE) in Iwopin, Ogun Waterside LGA, Ogun State, Nigeria. <br> <br>
            <strong class="bold-txt">The Founding of Wisdom College of Excellence (WICE):</strong> <br> <br>
        In the small fishing community of Iwopin, located in the Ogun Waterside Local Government Area of Ogun State, Nigeria, a group of visionary      individuals came together to establish a private school that would provide quality education to the children of the community. The year was     2019, and the community was facing significant challenges, including overfishing, high mortality rate, early marriages/pregnancy, poverty,     limited access to education, and a lack of opportunities for social mobility... 
        <a href="#History" class="pink-text modal-trigger">Read More</a>
        </p>
        <br>
        <div class="vision-heading hidden fade-in-right">
            <h2 class="blue-text section-heading bold-txt hide-on-med-and-down">Our Vision</h2>
            <h3 class="blue-text section-heading bold-txt hide-on-large-only center">Our Vision</h3>
        </div>
    </div>
        
    <div id="History" class="modal">
            <div class="modal-content">
            <p class=" grey-text text-darken-3 flow-text">A short history of Wisdom College of Excellence (WICE) in Iwopin, Ogun Waterside LGA, Ogun State, Nigeria. <br> <br>
                <strong class="bold-txt">The Founding of Wisdom College of Excellence (WICE):</strong> <br> <br>
                In the small fishing community of Iwopin, located in the Ogun Waterside Local Government Area of Ogun State, Nigeria, a group of visionary individuals came together to establish a private school that would provide quality education to the children of the community. The year was 2019, and the community was facing significant challenges, including overfishing, high mortality rate, early marriages/pregnancy, poverty, limited access to education, and a lack of opportunities for social mobility. <br> <br>
                Despite these challenges, the founders of Wisdom College of Excellence (WICE) were determined to create a institution that would empower the children of Iwopin with the knowledge, skills, and values necessary to succeed in life. The school's mission was to provide a holistic education that would prepare students for academic excellence, personal growth, and community leadership. <br> <br>
                <strong class="bold-txt">Early Years (2019-2020):</strong> <br> <br>
                WICE began with a humble start, with a small group of students and a handful of teachers. The school was housed in a temporary facility, and the curriculum was focused on providing a solid foundation in core subjects such as English, mathematics, science, computer studies and social studies. Despite the challenges of limited resources and infrastructure, the school's founders and staff were committed to providing a high-quality education that would meet the needs of the community. <br> <br>
                <strong class="bold-txt">Growth and Development (2020-Present):</strong> <br> <br>
                In the years since its founding, WICE has experienced significant growth and development. The school has expanded its curriculum to include a range of subjects, including computer science, arts, and music. The school has also introduced extracurricular activities, such as sports, debate, and cultural clubs, to provide students with opportunities for personal growth and development. <br> <br>
                In 2020, WICE relocated to a new, purpose-built facility that provides a safe and conducive learning environment for students. The school has also invested in modern technology, including computers, tablets, and educational software, to enhance the learning experience. <br> <br>
                <strong class="bold-txt">Community Engagement and Partnerships:</strong> <br> <br>
                WICE is committed to engaging with the local fishing community, established fish farm, advancing community health, Poverty reduction and forming partnerships with organizations and individuals who share its mission and values. The school has established relationships with local businesses, community groups, and government agencies to provide students with opportunities for internships, mentorship, and community service. This partnership is supporting to overcoming adversity in the community. <br> <br>
                In 2022, WICE launched a community digital literacy outreach program, which provides support to young people, local families and individuals in need to learning computers and digital tools for growth and transformation. Other community outreach program includes initiatives such as literacy classes, Gender Based violence, health clinics, and economic empowerment schemes. <br> <br>
                <strong class="bold-txt">Vision for the Future:</strong> <br> <br>
                As WICE looks to the future, the school is committed to continuing its mission of providing a high-quality education that empowers the children of Iwopin to succeed in life. The school's vision is to become a leading institution in the region, known for its academic excellence, innovative approaches to education, and commitment to community development. <br> <br>
                With the support of its founders, staff, students, and the local community, WICE is poised to make a positive impact on the lives of generations to come. The school's motto, "Skills for Today Future Leader," reflects its commitment to providing a holistic education that prepares students for success in all aspects of life.
            </p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
        </div>

    <!-- Vision Section with Parallax -->
    <div class="parallax-container hide-on-med-and-down">
        <div class="banner-div parallax">
            <img src="./img/20240810_113517.jpg" alt="Our Vision Background" class="responsive-img">
            <h5 class="white-text hide-on-med-and-down">"A society where learning  is transformed for Brighter Future"</h5>
        </div>
    </div>

    <div class="hide-on-large-only ">
        <div class="banner-div">
            <img src="./img/20240810_113517.jpg" alt="Our Vision Background" class="responsive-img">
            <p class="white-text ">"A society where learning  is transformed for Brighter Future"</p>
        </div>
    </div>
    
    <!-- Our Team section -->
    <div class="container">
        <div class="hidden fade-in-left"><h3 class="Blue-text bold-txt section-heading">Our Team</h3></div>
        <div class="row">
            <div class="col l4 hidden fade-in-bottom">
                <div class="card hoverable ">
                    <div class="card-image">
                        <img src="./img/School_admin.jpg" alt="School administrator" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <h6 class="bold-txt pink-text card-title">Oke Abass Sheriff</h6>
                        <p class="grey-text text-darken-3">Scool Administrator</p>
                    </div>
                    <div class="card-action hover-trigger">
                        <a href="#" class="primary-action">Contact</a>
                        <div class="contact-icons hidden">
                            <a href="tel:+1234567890" class="tooltipped icon-wrapper" data-position="top" data-tooltip="Call Me">
                                <i class="material-icons">phone</i>
                            </a>
                            <a href="mailto:Wceiwopin@gmail.com" class="tooltipped icon-wrapper" data-position="top" data-tooltip="Email Me">
                                <i class="material-icons">email</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l4 hidden fade-in-bottom">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/ASS._HOA1.jpg" alt="Ass. HOA" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <h6 class="bold-txt pink-text card-title">O. A Taiwo</h6>
                        <p class="grey-text text-darken-3">Ass. Head of Academics</p>
                    </div>
                    <div class="card-action hover-trigger">
                        <a href="#" class="primary-action">Contact</a>
                        <div class="contact-icons hidden">
                            <a href="tel:+1234567890" class="tooltipped icon-wrapper" data-position="top" data-tooltip="Call Me">
                                <i class="material-icons">phone</i>
                            </a>
                            <a href="mailto:Wceiwopin@gmail.com" class="tooltipped icon-wrapper" data-position="top" data-tooltip="Email Me">
                                <i class="material-icons">email</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l4 hidden fade-in-bottom">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/HOA.jpg" alt="HOA" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <h6 class="bold-txt pink-text card-title">Adams Agbro</h6>
                        <p class="grey-text text-darken-3">Head of Academics</p>
                    </div>
                    <div class="card-action hover-trigger">
                        <a href="#" class="primary-action">Contact</a>
                        <div class="contact-icons hidden">
                            <a href="tel:+1234567890" class="tooltipped icon-wrapper" data-position="top" data-tooltip="Call Me">
                                <i class="material-icons">phone</i>
                            </a>
                            <a href="mailto:Wceiwopin@gmail.com" class="tooltipped icon-wrapper" data-position="top" data-tooltip="Email Me">
                                <i class="material-icons">email</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>

    <div class="container">
        <!-- Values Section -->
        <h4 class="blue-text bold-txt section-heading">Our Values</h4>
        <div class="divider blue"></div>
        <br>
        <div class="row pulsate-line">
            <span class="col word s3 center values-item pink-text">Innovation</span>
            <span class="col word s3 center values-item pink-text">Excellence</span>
            <span class="col word s3 center values-item pink-text">Respect</span>
            <span class="col word s3 center values-item pink-text">Teamwork</span>
        </div>
        <div class="divider blue"></div>
        <br> <br>
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