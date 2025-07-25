<?php

include("./templates/connect.php");
include("./templates/navbar.php");

//write the fe
$fetch_query = "SELECT * FROM `news`";

//send the query to the server
$send_fetch_query = mysqli_query($db_connect, $fetch_query);

//receive data from server
$news = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);

// print_r($news);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Homepage - Wisdom College of Excellence</title>
</head>
<style>
    /* Global Styles */
    body {
        font-family: 'Poppins', sans-serif;
        line-height: 1.6;
        color: #333;
    }

    /* Hero Section */
    .slider .indicators .indicator-item.active {
        background-color: #2196F3 !important;
    }

    .banner-div {
        position: relative;
        overflow: hidden;
    }

    .banner-div img {
        filter: brightness(45%);
        transition: transform 0.3s ease;
    }

    .banner-div:hover img {
        transform: scale(1.05);
    }

    .video-txt {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 90%;
    }

    .slide-btn {
        background: linear-gradient(135deg, #2196F3, #E91E63) !important;
        border-radius: 50px !important;
        text-transform: none !important;
        font-weight: 600 !important;
        box-shadow: 0 4px 15px rgba(33, 150, 243, 0.3) !important;
        transition: all 0.3s ease !important;
        display: inline-block !important;
        margin: 0 auto !important;
    }

    .slide-btn:hover {
        background: linear-gradient(135deg, #1976D2, #C2185B) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 20px rgba(33, 150, 243, 0.4) !important;
    }

    /* Section Styling */
    section {
        padding: 80px 0;
    }

    .section-heading {
        font-weight: 700;
        margin-bottom: 50px;
        position: relative;
    }

    .section-heading::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #2196F3, #E91E63);
        border-radius: 2px;
    }

    /* Cards */
    .card {
        border-radius: 15px !important;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1) !important;
        transition: all 0.3s ease !important;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
    }

    .card-content {
        padding: 30px !important;
    }

    .card-title {
        font-weight: 600 !important;
        font-size: 1.3rem !important;
        margin-bottom: 15px !important;
    }

    /* Mission Section */
    .mission-section,
    .mission-mobile {
        background: linear-gradient(135deg, #E91E63, #ad1457);
        color: white;
        padding: 80px 0;
        position: relative;
    }

    .mission-section::before,
    .mission-mobile::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>') repeat;
        background-size: 30px 30px;
    }

    .mission-text {
        font-size: 1.2rem;
        font-weight: 300;
        line-height: 1.8;
        position: relative;
        z-index: 1;
    }

    /* Overview Section */
    .overview-text {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        text-align: justify;
    }

    /* Commitments Section */
    .commitment-container {
        padding: 80px 0;
        background: #f8f9fa;
    }

    .commitment .card-content {
        text-align: center;
        height: 70%;
    }

    .divider {
        margin: 20px 0;
        height: 3px;
        background: linear-gradient(135deg, #2196F3, #E91E63);
        border-radius: 2px;
    }

    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, #2196F3, #E91E63);
        color: white;
        padding: 80px 20px;
        text-align: center;
        position: relative;
    }

    .cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-size: 50px 50px;
    }

    .cta-section h4 {
        font-weight: 600;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }

    .cta-section a {
        background: white !important;
        color: #2196F3 !important;
        font-weight: 600 !important;
        border-radius: 50px !important;
        text-transform: none !important;
        margin: 20px auto 0 auto !important;
        transition: all 0.3s ease !important;
        position: relative;
        z-index: 1;
        display: inline-block !important;
    }

    .cta-section a:hover {
        background: #f8f9fa !important;
        color: #1976D2 !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2) !important;
    }

    /* SDG Section */
    .SDG {
        padding: 80px 0;
    }

    .SDG .card {
        height: 100%;
    }

    .SDG .card-content {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .SDG .card-title {
        background: linear-gradient(135deg, #2196F3, #E91E63);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 600;
        margin-bottom: 20px;
    }

    /* News Section */
    .news-section {
        padding: 80px 0;
        background: #f8f9fa;
    }

    .news-card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .news-card .card-image {
        height: 200px;
        overflow: hidden;
    }

    .news-card .card-image img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .news-card:hover .card-image img {
        transform: scale(1.1);
    }

    .news-card .card-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .news-card .card-action {
        margin-top: auto;
    }

    .news-card .card-action a {
        color: #2196F3;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .news-card .card-action a:hover {
        color: #1976D2;
    }

    /* Modal Improvements */
    .modal {
        border-radius: 15px !important;
        overflow: hidden !important;
    }

    .modal-content {
        padding: 30px !important;
    }

    .modal-content img {
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .modal-footer {
        background: #f8f9fa !important;
        padding: 20px 30px !important;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .hidden {
        opacity: 0;
    }

    .visible {
        animation-duration: 0.8s;
        animation-fill-mode: both;
    }

    .fade-in-bottom.visible {
        animation-name: fadeInUp;
    }

    .fade-in-left.visible {
        animation-name: fadeInLeft;
    }

    .fade-in-right.visible {
        animation-name: fadeInRight;
    }

    /* Responsive Improvements */
    @media (max-width: 992px) {
        .section-heading {
            font-size: 2rem;
        }

        .mission-section,
        .mission-mobile {
            padding: 60px 20px;
        }

        section {
            padding: 60px 0;
        }

        .video-txt h5 {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 600px) {
        .section-heading {
            font-size: 1.8rem;
        }

        .card-content {
            padding: 20px !important;
        }

        .slide-btn {
            padding: 10px 10px !important;
            font-size: 0.9rem !important;
        }
    }

    /* Utility Classes */
    .gradient-text {
        background: linear-gradient(135deg, #2196F3, #E91E63);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .primary-btn {
        background: linear-gradient(135deg, #2196F3, #E91E63) !important;
        border-radius: 50px !important;
        padding: 12px 30px !important;
        text-transform: none !important;
        font-weight: 600 !important;
        box-shadow: 0 4px 15px rgba(33, 150, 243, 0.3) !important;
        transition: all 0.3s ease !important;
        display: inline-block !important;
        margin: 0 auto !important;
    }

    .primary-btn:hover {
        background: linear-gradient(135deg, #1976D2, #C2185B) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 20px rgba(33, 150, 243, 0.4) !important;
    }
</style>

<body class="background">
    <!-- Hero Section -->
    <div class="slider">
        <ul class="slides">
            <li>
                <div class="banner-div">
                    <img src="./img/20240214_125218.jpg" alt="School Banner" class="responsive-img">
                    <div class="video-txt white-text">
                        <h3 class="hide-on-med-and-down" style="font-weight: 700; margin-bottom: 20px;">Welcome to
                            Wisdom College of Excellence</h3>
                        <h5 class="hide-on-large-only" style="font-weight: 700; margin-bottom: 20px;">Welcome to Wisdom
                            College of Excellence</h5>
                        <p style="font-size: 1.2rem; margin-bottom: 30px; font-weight: 300;">Skills for today, future
                            leaders of tomorrow</p>
                        <a href="./aboutUs.php" class="btn btn-large slide-btn hide-on-med-and-down">Discover More</a>
                        <a href="./aboutUs.php" class="btn btn-small slide-btn hide-on-large-only">Discover More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240214_125622.jpg" alt="School Banner" class="responsive-img">
                    <div class="video-txt white-text">
                        <h3 class="hide-on-med-and-down" style="font-weight: 700; margin-bottom: 20px;">Excellence in
                            Education</h3>
                        <h5 class="hide-on-large-only" style="font-weight: 700; margin-bottom: 20px;">Excellence in
                            Education</h5>
                        <p style="font-size: 1.2rem; margin-bottom: 30px; font-weight: 300;">Nurturing minds, building
                            futures</p>
                        <a href="./aboutUs.php" class="btn btn-large slide-btn">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240525_090030.jpg" alt="School Banner" class="responsive-img">
                    <div class="video-txt white-text">
                        <h3 class="hide-on-med-and-down" style="font-weight: 700; margin-bottom: 20px;">Innovative
                            Learning</h3>
                        <h5 class="hide-on-large-only" style="font-weight: 700; margin-bottom: 20px;">Innovative
                            Learning</h5>
                        <p style="font-size: 1.2rem; margin-bottom: 30px; font-weight: 300;">Where creativity meets
                            knowledge</p>
                        <a href="./aboutUs.php" class="btn btn-large slide-btn">Explore Now</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240810_115158.jpg" alt="School Banner" class="responsive-img">
                    <div class="video-txt white-text">
                        <h3 class="hide-on-med-and-down" style="font-weight: 700; margin-bottom: 20px;">Global
                            Perspectives</h3>
                        <h5 class="hide-on-large-only" style="font-weight: 700; margin-bottom: 20px;">Global
                            Perspectives</h5>
                        <p style="font-size: 1.2rem; margin-bottom: 30px; font-weight: 300;">Preparing students for a
                            connected world</p>
                        <a href="./aboutUs.php" class="btn btn-large slide-btn">Join Us</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- Overview Section -->
    <section>
        <div class="container">
            <h2 class="gradient-text section-heading center hidden fade-in-left hide-on-med-and-down">Overview of WICE
            </h2>
            <h4 class="gradient-text section-heading center hidden fade-in-left hide-on-large-only">Overview of WICE
            </h4>
            <div class="row">
                <div class="col s12 l10 offset-l1">
                    <p class="overview-text hidden fade-in-right flow-text">
                        Located in the serene and picturesque town of Iwopin, Ogun Waterside Local Government Area, Ogun
                        State, Nigeria, <strong>Wisdom College of Excellence (WICE)</strong> is a premier educational
                        institution dedicated to providing a holistic and inclusive learning experience for students.
                        <br><br>
                        At WICE, we believe in fostering a love for learning, creativity, and critical thinking. Our
                        innovative programs and initiatives are designed to cater to the diverse needs and interests of
                        our students, preparing them not just for academic success, but for life itself.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <div class="mission-section hide-on-med-and-down">
        <div class="container">
            <h2 class="section-heading center hidden fade-in-left">Our Mission</h2>
            <div class="row">
                <div class="col s12 l8 offset-l2">
                    <p class="mission-text center hidden fade-in-right" style="font-size: 1.3rem;">
                        To enhance capacity, provide high-quality education and improve student outcomes through digital
                        tools, targeted training, institutional development, and community engagement.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mission-mobile hide-on-large-only">
        <div class="container">
            <h4 class="section-heading center">Our Mission</h4>
            <p class="mission-text center" style="font-size: 1.1rem;">
                To enhance capacity, provide high-quality education and improve student outcomes through digital tools,
                targeted training, institutional development, and community engagement.
            </p>
        </div>
    </div>

    <!-- Our Commitments -->
    <div class="commitment-container">
        <div class="container">
            <h2 class="gradient-text section-heading center">Our Commitments</h2>
            <div class="row">
                <div class="col s12 l4 hidden fade-in-bottom">
                    <div class="card hoverable commitment">
                        <div class="card-content">
                            <span class="card-title gradient-text">
                                <i class="material-icons left">star</i>
                                Promoting Student Leadership
                            </span>
                            <div class="divider"></div>
                            <p>We empower students to take initiative, develop critical decision-making skills, and lead
                                with confidence through student councils, mentorship programs, leadership workshops, and
                                specialized training.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 hidden fade-in-bottom">
                    <div class="card hoverable commitment">
                        <div class="card-content">
                            <span class="card-title gradient-text">
                                <i class="material-icons left">lightbulb_outline</i>
                                Promoting Student Entrepreneurship
                            </span>
                            <div class="divider"></div>
                            <p>We nurture creativity and innovation by equipping students with entrepreneurial skills,
                                fostering a problem-solving mindset, and providing opportunities to develop and launch
                                business ideas.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 hidden fade-in-bottom">
                    <div class="card hoverable commitment">
                        <div class="card-content">
                            <span class="card-title gradient-text">
                                <i class="material-icons left">public</i>
                                Promoting Student Global Exposure
                            </span>
                            <div class="divider"></div>
                            <p>We prepare students for a connected world by offering exchange programs, international
                                collaborations, and exposure to diverse cultures, broadening their perspectives and
                                global competencies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="cta-section">
        <div class="container">
            <h4>Ready to join the WICE Community?</h4>
            <p style="font-size: 1.1rem; margin-bottom: 30px;">
                Enroll your child today and take the first step towards a brighter future.
            </p>
            <div class="center-align">
                <a href="./academics.php#target-section" class="btn btn-large">Get Started Today</a>
            </div>
        </div>
    </div>

    <!-- SDG Section -->
    <div class="SDG">
        <div class="container">
            <h2 class="gradient-text section-heading center">Sustainable Development Goals</h2>
            <div class="row">
                <div class="col s12 l6 hidden fade-in-bottom">
                    <div class="card hoverable">
                        <div class="card-content">
                            <span class="card-title center-align">
                                <i class="material-icons left">attach_money</i>
                                SDG 1: No Poverty
                            </span>
                            <div class="divider"></div>
                            <p><strong>Financial Literacy Programs:</strong> We integrate comprehensive financial
                                education into our curriculum, teaching students essential money management skills,
                                budgeting techniques, and investment principles to break the cycle of poverty.</p>
                            <p><strong>Entrepreneurship Development:</strong> Our students learn business planning,
                                problem-solving, and enterprise management through hands-on projects, mentorship
                                programs, and mini-business competitions.</p>
                            <p><strong>Community Outreach:</strong> We organize financial literacy workshops for parents
                                and community members, extending our impact beyond the classroom to build economically
                                empowered communities.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6 hidden fade-in-bottom">
                    <div class="card hoverable">
                        <div class="card-content">
                            <span class="card-title center-align">
                                <i class="material-icons left">favorite</i>
                                SDG 3: Good Health and Well-being
                            </span>
                            <div class="divider"></div>
                            <p><strong>Health Education Curriculum:</strong> Our comprehensive health education program
                                covers nutrition, mental health awareness, disease prevention, and healthy lifestyle
                                choices, empowering students to make informed health decisions.</p>
                            <p><strong>Medical Outreach Programs:</strong> We partner with healthcare professionals to
                                provide free health screenings, vaccination drives, and health awareness campaigns for
                                students and the broader community.</p>
                            <p><strong>Mental Health Support:</strong> Our counseling services and peer support programs
                                create a safe environment where students can discuss mental health challenges and
                                receive professional guidance.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6 hidden fade-in-bottom">
                    <div class="card hoverable">
                        <div class="card-content">
                            <span class="card-title center-align">
                                <i class="material-icons left">school</i>
                                SDG 4: Quality Education
                            </span>
                            <div class="divider"></div>
                            <p><strong>Inclusive Education Framework:</strong> We provide specialized resources and
                                individualized support plans for students with disabilities, ensuring every child has
                                access to quality education.</p>
                            <p><strong>Teacher Professional Development:</strong> We invest in continuous training for
                                our educators, introducing innovative teaching methods, educational technology, and
                                pedagogical best practices to enhance learning outcomes.</p>
                            <p><strong>STEM Excellence:</strong> Our state-of-the-art science laboratories and coding
                                programs prepare students for future careers in science, technology, engineering, and
                                mathematics.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 l6 hidden fade-in-bottom">
                    <div class="card hoverable">
                        <div class="card-content">
                            <span class="card-title center-align">
                                <i class="material-icons left">people</i>
                                SDG 5: Gender Equality
                            </span>
                            <div class="divider"></div>
                            <p><strong>Anti-Discrimination Policies:</strong> We maintain zero-tolerance policies for
                                gender-based discrimination and harassment, creating a safe and inclusive environment
                                where all students can thrive regardless of gender identity.</p>
                            <p><strong>Girls in STEM Initiative:</strong> Our specialized programs encourage female
                                students to pursue careers in science, technology, engineering, and mathematics through
                                mentorship, role model visits, and hands-on STEM projects.</p>
                            <p><strong>Leadership Development:</strong> Our student leadership programs actively promote
                                gender balance in leadership positions, teaching valuable skills in public speaking,
                                project management, and team leadership.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News Section -->
    <section class="news-section">
        <div class="container">
            <h2 class="gradient-text section-heading center hidden fade-in-left">Latest News & Updates</h2>
            <div class="row">
                <?php foreach ($news as $new) { ?>
                    <div class="col s12 m6 l4 hidden fade-in-bottom">
                        <div class="card news-card hoverable">
                            <div class="card-image">
                                <img src="<?php echo $new['news_pic']; ?>" alt="<?php echo $new['news_title']; ?>">
                            </div>
                            <div class="card-content">
                                <span class="card-title gradient-text"><?php echo $new['news_title']; ?></span>
                                <p class="grey-text text-darken-1">
                                    <?php echo substr($new['news_description'], 0, 100) . '...'; ?></p>
                            </div>
                            <div class="card-action">
                                <a href="#<?php echo $new['news_title']; ?>" class="modal-trigger">
                                    Read More <i class="material-icons right">arrow_forward</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div id="<?php echo $new['news_title']; ?>" class="modal">
                        <div class="modal-content">
                            <img src="<?php echo $new['news_pic']; ?>" alt="<?php echo $new['news_title']; ?>"
                                class="responsive-img">
                            <h4 class="gradient-text"><?php echo $new['news_title']; ?></h4>
                            <p style="line-height: 1.6;"><?php echo $new['news_text']; ?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close btn primary-btn">Close</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            // Initialize Materialize components
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
            $('.modal').modal();
            $('.slider').slider({
                height: 600,
                transition: 600,
                interval: 5000
            });

            // Navbar scroll effect
            $(window).scroll(function () {
                const sliderHeight = $('.slider').height();
                if ($(window).scrollTop() > sliderHeight) {
                    $(".navbar").addClass("scrolled");
                } else {
                    $(".navbar").removeClass("scrolled");
                }
            });

            // Improved viewport detection
            function isInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            // Staggered animation for cards
            function addFadeInClass() {
                const elements = document.querySelectorAll('.fade-in-bottom');
                elements.forEach((element, index) => {
                    if (isInViewport(element)) {
                        setTimeout(() => {
                            element.classList.add('visible');
                        }, index * 150);
                    }
                });
            }

            // General viewport detection
            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return (
                    rect.top < (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.bottom > 0
                );
            }

            // Add visible class to elements
            function addVisibleClass() {
                $('.hidden').each(function () {
                    if (isElementInViewport(this)) {
                        $(this).addClass('visible');
                    }
                });
            }

            // Smooth scrolling for internal links
            $('a[href^="#"]').on('click', function (event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });

            // Initialize animations
            $(window).on('scroll', function () {
                addFadeInClass();
                addVisibleClass();
            });

            // Initial check
            addFadeInClass();
            addVisibleClass();
        });
    </script>

    <?php include("./templates/footer.php"); ?>
</body>

</html>