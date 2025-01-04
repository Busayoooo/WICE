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
    <title>Document</title>
</head>
<style>
    .bold-txt{
        font-weight: bold;
    }
    .card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating) {
        color: #E91E63;
    }
    .card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating):hover {
        color: #E91E63;
    }

    .banner-div{
        position: relative;
    }

    .banner-div h5{
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
    .cta-section {
        color: white;
        padding: 50px 20px;
        text-align: center;
    }

    .cta-section h4 {
        margin-bottom: 20px;
    }

    .cta-section a {
        color: #E91E63;
        font-weight: bold;
        text-decoration: underline;
    }

    .cta-section a:hover {
        color: #F8BBD0;
    }
    /* Parallax Styling */
    .banner-div {
        position: relative;
    }

    .banner-div h5, 
    .banner-div p {
        position: absolute;
        color: white;
        padding: 20px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
    }

    .banner-div h5 {
        top: 40%;
        left: 10%;
    }

    .banner-div p {
        top: 50%;
        left: 10%;
    }

</style>
<body class="background">
    <div class="parallax-container">
            <div class="parallax">
                <img src="./img/3.png" alt="" class="">
            </div>
    </div>
    <br>
    <div class="container ">
        <h2 class="blue-text section-heading text-lighten-1 bold-txt hide-on-med-and-down">History of WISE</h2>
        <h3 class="blue-text section-heading text-lighten-1 bold-txt hide-on-large-only center">History of WISE</h3>
        <p class=" grey-text text-darken-3 flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A repellendus at, nam illo rerum ullam expedita voluptatum porro. Sequi, optio! Hic vitae officia natus, numquam molestias, expedita, alias amet nisi harum repudiandae minus omnis reprehenderit corporis aliquam! Unde numquam corrupti quod, ipsam, pariatur provident magnam nam enim dolorem reiciendis illo! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt officia vitae odit, alias officiis quae beatae vero qui delectus sit perspiciatis cum, porro veniam. Blanditiis alias quod quos, facere cum debitis est officiis ducimus molestias quidem possimus, optio exercitationem porro fugiat non laudantium unde error consequuntur quae mollitia, inventore nisi?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolor necessitatibus neque eveniet deleniti quas, animi iusto dolores velit minima. Exercitationem perspiciatis ipsum deleniti obcaecati eveniet porro neque, id voluptatem numquam molestias cumque autem aliquam esse nihil nam beatae quibusdam illum adipisci. Sequi suscipit delectus libero facilis sed ipsa quisquam?</p>
        <br>
        <h2 class="blue-text section-heading bold-txt hide-on-med-and-down">Our Vision</h2>
        <h3 class="blue-text section-heading bold-txt hide-on-large-only center">Our Vision</h3>
    </div>
        
    <!-- Vision Section with Parallax -->
    <div class="parallax-container">
        <div class="banner-div parallax">
            <img src="./img/3.png" alt="Our Vision Background" class="responsive-img">
            <h5 class="white-text hide-on-med-and-down">"Empowering young minds for a brighter tomorrow."</h5>
            <p class="white-text hide-on-large-only">"Empowering young minds for a brighter tomorrow."</p>
        </div>
    </div>
    

    <div class="container">
        

        <h3 class="Blue-text bold-txt section-heading">Our Team</h3>
        <div class="row">
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/3.png" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <h6 class="bold-txt pink-text card-title">Our vision</h6>
                        <p class="grey-text text-darken-3">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam vel nostrum ex, alias aperiam illo distinctio eaque cupiditate laboriosam itaque?
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/3.png" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <h6 class="bold-txt pink-text card-title">Our vision</h6>
                        <p class="grey-text text-darken-3">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam vel nostrum ex, alias aperiam illo distinctio eaque cupiditate laboriosam itaque?
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/3.png" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <h6 class="bold-txt pink-text card-title">Our vision</h6>
                        <p class="grey-text text-darken-3">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam vel nostrum ex, alias aperiam illo distinctio eaque cupiditate laboriosam itaque?
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values Section -->
        <h4 class="blue-text bold-txt">Our Values</h4>
        <div class="divider blue"></div>
        <br>
        <div class="row">
            <div class="col s3 center values-item pink-text">Innovation</div>
            <div class="col s3 center values-item pink-text">Excellence</div>
            <div class="col s3 center values-item pink-text">Respect</div>
            <div class="col s3 center values-item pink-text">Teamwork</div>
        </div>
        <div class="divider blue"></div>
    </div>

    <br> <br>

    <!-- Call to Action Section -->
    <div class="cta-section blue">
        <h4>Ready to join the WISE Community?</h4>
        <p>
            Enroll your child today and take the first step towards a brighter future.
            <br>
            <a href="./enroll.php">Click here to get started</a>
        </p>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
            $('.slider').slider();
            $('.parallax').parallax();
            $('.collapsible').collapsible();
        });
        $(window).scroll(function () {
                const parallaxHeight = $('.parallax').height(); 
                if($(window).scrollTop() > parallaxHeight){
                    $(".navbar").addClass("scrolled");
                } else {
                    $(".navbar").removeClass("scrolled");
                }
            });
    </script>
</body>
</html>