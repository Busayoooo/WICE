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
    :root {
        --primary-blue: #1565C0;
        --light-blue: #42A5F5;
        --primary-pink: #E91E63;
        --light-pink: #F06292;
        --text-dark: #424242;
        --text-light: #757575;
        --background-light: #FAFAFA;
        --white: #FFFFFF;
        --shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        --shadow-hover: 0 8px 32px rgba(0, 0, 0, 0.15);
    }

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

.card{
    border: solid white !important;
    border-radius: 40px !important;
    padding: 5px !important;
}

.long-card{
    height: 90% !important;
}

.card img, .card-action{
    border: solid white !important;
    border-radius: 30px !important ;  
}

/* Hover Effect for Card Action */
.hover-trigger:hover {
    background-color: #E91E63 !important; /* Pink background on hover */
   
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

    div.banner-div div a{
        border-radius: 30px !important ; 
        text-transform: none !important ;
    }

    .slider-div{
        position: relative;
    }
    /* Vision Section */
    .vision-div {
        position: relative;
        overflow: hidden;
        border-radius: 16px;
        box-shadow: var(--shadow);
    }

    .vision-div img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .vision-div:hover img {
        transform: scale(1.05);
    }

    .vision-div h5, .vision-div p {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: var(--white);
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        font-weight: 600;
        padding: 20px;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 12px;
        backdrop-filter: blur(10px);
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

    .modal{
        border: solid white ;
        border-radius: 10px ;
    }

    .cta-section {
        background: linear-gradient(135deg, #2196F3, #E91E63);
        color: white;
        padding: 80px 20px;
        text-align: center;
        position: relative;
    }
</style>
<body class="background">
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
            <h4 class="blue-text bold-txt">Complete History of WICE</h4>
            <p class="">
                A short history of Wisdom College of Excellence (WICE) in Iwopin, Ogun Waterside LGA, Ogun State, Nigeria. 
                <br><br>
                <strong class="bold-txt">The Founding of Wisdom College of Excellence (WICE):</strong> 
                <br><br>
                In the small fishing community of Iwopin, located in the Ogun Waterside Local Government Area of Ogun State, Nigeria, a group of visionary individuals came together to establish a private school that would provide quality education to the children of the community. The year was 2019, and the community was facing significant challenges, including overfishing, high mortality rate, early marriages/pregnancy, poverty, limited access to education, and a lack of opportunities for social mobility. 
                <br><br>
                Despite these challenges, the founders of Wisdom College of Excellence (WICE) were determined to create a institution that would empower the children of Iwopin with the knowledge, skills, and values necessary to succeed in life. The school's mission was to provide a holistic education that would prepare students for academic excellence, personal growth, and community leadership. 
                <br><br>
                <strong class="bold-txt">Early Years (2019-2020):</strong> 
                <br><br>
                WICE began with a humble start, with a small group of students and a handful of teachers. The school was housed in a temporary facility, and the curriculum was focused on providing a solid foundation in core subjects such as English, mathematics, science, computer studies and social studies. Despite the challenges of limited resources and infrastructure, the school's founders and staff were committed to providing a high-quality education that would meet the needs of the community. 
                <br><br>
                <strong class="bold-txt">Growth and Development (2020-Present):</strong> 
                <br><br>
                In the years since its founding, WICE has experienced significant growth and development. The school has expanded its curriculum to include a range of subjects, including computer science, arts, and music. The school has also introduced extracurricular activities, such as sports, debate, and cultural clubs, to provide students with opportunities for personal growth and development. 
                <br><br>
                In 2020, WICE relocated to a new, purpose-built facility that provides a safe and conducive learning environment for students. The school has also invested in modern technology, including computers, tablets, and educational software, to enhance the learning experience. 
                <br><br>
                <strong class="bold-txt">Community Engagement and Partnerships:</strong> 
                <br><br>
                WICE is committed to engaging with the local fishing community, established fish farm, advancing community health, Poverty reduction and forming partnerships with organizations and individuals who share its mission and values. The school has established relationships with local businesses, community groups, and government agencies to provide students with opportunities for internships, mentorship, and community service. This partnership is supporting to overcoming adversity in the community. 
                <br><br>
                In 2022, WICE launched a community digital literacy outreach program, which provides support to young people, local families and individuals in need to learning computers and digital tools for growth and transformation. Other community outreach program includes initiatives such as literacy classes, Gender Based violence, health clinics, and economic empowerment schemes. 
                <br><br>
                <strong class="bold-txt">Vision for the Future:</strong> 
                <br><br>
                As WICE looks to the future, the school is committed to continuing its mission of providing a high-quality education that empowers the children of Iwopin to succeed in life. The school's vision is to become a leading institution in the region, known for its academic excellence, innovative approaches to education, and commitment to community development. 
                <br><br>
                With the support of its founders, staff, students, and the local community, WICE is poised to make a positive impact on the lives of generations to come. The school's motto, "Skills for Today Future Leader," reflects its commitment to providing a holistic education that prepares students for success in all aspects of life.
            </p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-blue btn-flat pink-text">Close</a>
        </div>
    </div>

    <!-- Vision Section with Parallax -->
    <div class="parallax-container hide-on-med-and-down">
        <div class="vision-div parallax">
            <img src="./img/20240810_113517.jpg" alt="Our Vision Background" class="responsive-img">
            <h5 class="white-text hide-on-med-and-down">"A society where learning  is transformed for Brighter Future"</h5>
        </div>
    </div>

    <div class="hide-on-large-only ">
        <div class="vision-div">
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
                    <div class="card-action hover-trigger center">
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
                    <div class="card-action hover-trigger center">
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
                    <div class="card-action hover-trigger center">
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
    <!-- Community Impact section -->
<div class="container section-spacing">
    <div class="hidden fade-in-left">
        <h3 class="blue-text section-heading bold-txt">Community Impact</h3>
        <p class="center grey-text text-darken-2">Transforming lives through education, health, and sustainable development initiatives</p>
    </div>
    <div class="row">
        <div class="col l4 m6 s12 hidden fade-in-bottom">
            <div class="card long-card hoverable">
                <div class="card-content center">
                    <i class="material-icons large pink-text">computer</i>
                    <h5 class="card-title">Digital Literacy Program</h5>
                    <p>Free summer digital literacy program empowering young minds with essential 21st-century skills.</p>
                    <ul class="left-align">
                        <li><span class="pink-text">•</span> 245+ Children Trained</li>
                        <li><span class="pink-text">•</span> Computer Skills Development</li>
                        <li><span class="pink-text">•</span> Digital Citizenship</li>
                        <li><span class="pink-text">•</span> Technology Confidence Building</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12 hidden fade-in-bottom">
            <div class="card long-card hoverable">
                <div class="card-content center">
                    <i class="material-icons large pink-text">fitness_center</i>
                    <h5 class="card-title">Health & Wellness</h5>
                    <p>Community health outreach promoting physical well-being and preventive healthcare practices.</p>
                    <ul class="left-align">
                        <li><span class="pink-text">•</span> 300+ Male Participants</li>
                        <li><span class="pink-text">•</span> 410+ Female Participants</li>
                        <li><span class="pink-text">•</span> Keep Fit Programs</li>
                        <li><span class="pink-text">•</span> Health Awareness Campaigns</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12 hidden fade-in-bottom">
            <div class="card long-card hoverable">
                <div class="card-content center">
                    <i class="material-icons large pink-text">emoji_events</i>
                    <h5 class="card-title">Academic Excellence</h5>
                    <p>Literacy and numeracy competitions recognizing outstanding academic achievement in partnership with ISCON.</p>
                    <ul class="left-align">
                        <li><span class="pink-text">•</span> Primary School Competition</li>
                        <li><span class="pink-text">•</span> Awards Ceremony</li>
                        <li><span class="pink-text">•</span> Computer Donations</li>
                        <li><span class="pink-text">•</span> ISCON Partnership</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col l4 m6 s12 hidden fade-in-bottom">
        <div class="card long-card hoverable">
            <div class="card-content center">
                <i class="material-icons large pink-text">videocam</i>
                <h5 class="card-title">Cultural Preservation</h5>
                <p>Documenting and celebrating local heritage through multimedia storytelling and community engagement.</p>
                <ul class="left-align">
                    <li><span class="pink-text">•</span> Iwopin Boat Regatta Film</li>
                    <li><span class="pink-text">•</span> Okoshi Festival Documentation</li>
                    <li><span class="pink-text">•</span> Cultural Heritage Preservation</li>
                    <li><span class="pink-text">•</span> Community Pride Building</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col l4 m6 s12 hidden fade-in-bottom">
        <div class="card long-card hoverable">
            <div class="card-content center">
                <i class="material-icons large pink-text">eco</i>
                <h5 class="card-title">Green Jobs & Climate Action</h5>
                <p>Environmental stewardship through tree nursery training and community tree planting initiatives.</p>
                <ul class="left-align">
                    <li><span class="pink-text">•</span> Tree Nursery Training</li>
                    <li><span class="pink-text">•</span> Seedling Distribution</li>
                    <li><span class="pink-text">•</span> Father's Day Celebration</li>
                    <li><span class="pink-text">•</span> Environmental Awareness</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col l4 m6 s12 hidden fade-in-bottom">
        <div class="card long-card hoverable">
            <div class="card-content center">
                <i class="material-icons large pink-text">waves</i>
                <h5 class="card-title">Blue Economy Development</h5>
                <p>Sustainable aquaculture and fisheries conservation through innovative school-based fish farm enterprise.</p>
                <ul class="left-align">
                    <li><span class="pink-text">•</span> School Fish Farm Enterprise</li>
                    <li><span class="pink-text">•</span> Student Training Programs</li>
                    <li><span class="pink-text">•</span> Stakeholder Engagement</li>
                    <li><span class="pink-text">•</span> Fisheries Conservation</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Community Impact Stats section -->
<div class="cta-section achievements-section">
    <div class="container">
        <div class="hidden fade-in-left">
            <h3 class="section-heading bold-txt white-text center">Community Impact by Numbers</h3>
            <p class="center white-text" style="opacity: 0.9;">Measurable results that make a difference in our community</p>
        </div>
        <div class="row">
            <div class="col l3 m6 s12 center hidden fade-in-bottom">
                <div class="white-text">
                    <i class="material-icons large">people</i>
                    <h4 class="counter" data-target="745">0</h4>
                    <p>Lives Directly Impacted</p>
                </div>
            </div>
            <div class="col l3 m6 s12 center hidden fade-in-bottom">
                <div class="white-text">
                    <i class="material-icons large">computer</i>
                    <h4 class="counter" data-target="245">0</h4>
                    <p>Children Digitally Empowered</p>
                </div>
            </div>
            <div class="col l3 m6 s12 center hidden fade-in-bottom">
                <div class="white-text">
                    <i class="material-icons large">favorite</i>
                    <h4 class="counter" data-target="710">0</h4>
                    <p>Health Program Participants</p>
                </div>
            </div>
            <div class="col l3 m6 s12 center hidden fade-in-bottom">
                <div class="white-text">
                    <i class="material-icons large">eco</i>
                    <h4 class="counter" data-target="100">0</h4>
                    <p>% Sustainable Practices</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Values Section -->
    <div class="container">
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
        $(document).ready(function () {
        // Initialize Materialize components
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

        // === Unified IntersectionObserver for all fade-in effects ===
        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.2 });

        // Observe all elements with class 'hidden'
        document.querySelectorAll('.hidden').forEach(el => fadeInObserver.observe(el));

        // === Counter Animation using requestAnimationFrame ===
        function animateCounters() {
            $('.counter').each(function () {
                const $el = $(this);
                const target = parseInt($el.data('target'));
                let start = null;

                function update(timestamp) {
                    if (!start) start = timestamp;
                    const progress = timestamp - start;
                    const duration = 2000; // 2 seconds
                    const current = Math.min(Math.floor((progress / duration) * target), target);
                    $el.text(current);
                    if (current < target) {
                        requestAnimationFrame(update);
                    }
                }

                requestAnimationFrame(update);
            });
        }

        // Animate counters when achievements section enters viewport
        const achievementsSection = document.querySelector('.achievements-section');
        if (achievementsSection) {
            const achievementsObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.disconnect();
                    }
                });
            }, { threshold: 0.5 });

            achievementsObserver.observe(achievementsSection);
        }

        // === Optional: Pulsating Text Animation ===
        const pulsateLine = document.querySelector('.pulsate-line');
        if (pulsateLine) {
            const pulsateObserver = new IntersectionObserver((entries, observer) => {
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

            pulsateObserver.observe(pulsateLine);
        }

        // === Optional: Pulsating Section Visibility ===
        const pulsatingSection = document.querySelector('.pulsating-section');
        if (pulsatingSection) {
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.disconnect();
                    }
                });
            }, { threshold: 0.5 });

            observer.observe(pulsatingSection);
        }
    });
    </script>
</body>
</html>
<?php 
include("./templates/footer.php");
?>