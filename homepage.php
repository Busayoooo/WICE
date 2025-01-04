<?php 
include("./templates/header.php");
include("./templates/connect.php");

//write the fetch query
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
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    .slider .indicators .indicator-item.active {
        background-color: #E91E63;
    }
    section{
        padding: 50px 0px;
    }
    .bold-txt{
        font-weight: bold;
    }
    .background{
        background-color: #f3f4f6;
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
/* General hidden state for fade-in from the left */
.fade-in-left.hidden {
    transform: translateX(-50px); /* Start from the left */
}

/* When the section becomes visible */
.fade-in-left.visible {
    opacity: 1;
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


    .dark-text{
        color: #212121;
    }
    .secondary-color{
        background-color: #E91E63;
    }
    .mission-section{
        background-color: #E91E63;
        color: white;
        padding: 30px 200px;
    }
    
    .banner-div{
        position: relative;
    } 

    .video-txt{
        position:absolute;
        top: 35%;
        left: 5%;
    }
    .overview-text, .mission-text {
            line-height: 1.8;
        }
    .btn {
            border-radius: 30px;
            text-transform: none;
        }
    .section-heading {
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
    }
    .section-heading::after {
        content: "";
        width: 50px;
        height: 4px;
        background-color: #E91E63;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
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
                        <h3>Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large pink lighten-2 hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class=" hide-on-large-only">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only pink lighten-2 hoverable">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240214_125622.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3>Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large pink lighten-2 hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class=" hide-on-large-only">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only pink lighten-2 hoverable">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240525_090030.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3>Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large pink lighten-2 hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class=" hide-on-large-only">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only pink lighten-2 hoverable">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240810_115158.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3>Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large pink lighten-2 hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class=" hide-on-large-only">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only pink lighten-2 hoverable">Learn More</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

        <!-- Overview Section -->
    <section>
        <div class="container fade-in-left hidden">
            <h2 class="blue-text bold-txt section-heading center hide-on-med-and-down">Overview of WISE</h2>
            <h4 class="blue-text bold-txt section-heading center hide-on-large-only">Overview of WISE</h4>
            <p class="grey-text text-darken-2 flow-text overview-text">
            Wisdom College of Excellence (WICE) located in the serene and picturesque town of Iwopin, Ogun Waterside Local Government Area, Ogun State, Nigeria, Wisdom College of Excellence (WICE) is a premier educational institution dedicated to providing a holistic and inclusive learning experience for students.
            <br> <br>
            <!-- At WICE, we recognize the importance of fostering a love for learning, creativity, and critical thinking in our students. To achieve this, we have implemented a range of innovative programs and initiatives that cater to the diverse needs and interests of our students. -->

            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <div class="mission-section hidden">
            <h3 class="bold-txt section-heading hide-on-med-and-down">Our Mission</h3>
            <h4 class="bold-txt section-heading hide-on-large-only">Our Mission</h4>
            <p class="flow-text mission-text">
                To enhance capacity, provide high-quality education and improve student outcomes through digital tools, targeted training, institutional development, and community engagement.
            </p>
    </div>
    <br>

        <!-- News Section -->
    <section>
        <div class="container">
            <h2 class="blue-text center section-heading">Latest News</h2>
            <div class="row">
                <?php foreach ($news as $new) { ?>
                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="./img/7.png" alt="' . $news['news_title'] . '" class="responsive-img">
                            </div>
                            <div class="card-content">
                                <span class="pink-text card-title"><?php echo $news['news_title'];?></span>
                                <p class="grey-text text-darken-2">' . $news["text"] . '</p>
                            </div>
                            <div class="card-action">
                                <a href="#Sports" class=" modal-trigger">Read More</a>                    
                        <div class="modal" id="Sports">
                            <div class="container">
                                <img src="./img/20240214_125622.jpg" alt="' . $item["title"] . '" class="responsive-img">
                                <h4 class="grey-text text-darken-3">Hi there,</h4>
                                <p class="grey-text text-darken-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus recusandae neque vero dolore officia ducimus excepturi illo est! Ratione blanditiis id ad nobis, unde itaque quia voluptatem quidem optio?</p>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                <?php } ?> 
            </div>
        </div>
    </section>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
            $('.modal').modal();
            $('.slider').slider({
                height:500
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
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
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

        });
    </script>
</body>
</html>