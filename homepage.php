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
    .dark-text{
        color: #212121;
    }
    .secondary-color{
        background-color: #E91E63;
    }
    .banner-div{
        position: relative;
    } 

    .video-txt{
        position:absolute;
        top: 35%;
        left: 5%;
    }
</style>
<body class="background">
    <!-- Hero section -->
    <div class="slider">
        <ul class="slides">
            <li>
                <div class="banner-div">
                    <img src="" alt="" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                            <h3>Welcome to Wisdom International school of excellence</h3>
                            <p class="white-text">Brighter Future</p>
                            <a href="./aboutUs.php" class="btn btn-large pink lighten-2 hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class=" hide-on-large-only">Welcome to Wisdom International school of excellence</h5>
                    <p class="white-text">Brighter Future</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only pink lighten-2 hoverable">Learn More</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- Overview section -->
    <div class="container">
        <h2 class="blue-text bold-txt center hide-on-med-and-down">Overview of WISE</h2>
        <h4 class="blue-text bold-txt center hide-on-large-only">Overview of WISE</h4>
        <p class=" grey-text text-darken-2 flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A repellendus at, nam illo rerum ullam expedita voluptatum porro. Sequi, optio! Hic vitae officia natus, numquam molestias, expedita, alias amet nisi harum repudiandae minus omnis reprehenderit corporis aliquam! Unde numquam corrupti quod, ipsam, pariatur provident magnam nam enim dolorem reiciendis illo! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt officia vitae odit, alias officiis quae beatae vero qui delectus sit perspiciatis cum, porro veniam. Blanditiis alias quod quos, facere cum debitis est officiis ducimus molestias quidem possimus, optio exercitationem porro fugiat non laudantium unde error consequuntur quae mollitia, inventore nisi?
        </p>

        <br>
<!-- Mission Section -->
        <h3 class="pink-text bold-txt hide-on-med-and-down">Our Mission</h3>
        <h4 class="pink-text bold-txt hide-on-large-only">Our Mission</h4>
        <div class="divider secondary-color"></div>
        <p class="grey-text text-darken-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. A repellendus at, nam illo rerum ullam expedita voluptatum porro. Sequi, optio! Hic vitae officia natus, numquam molestias, expedita, alias amet nisi harum 
        </p>
        <div class="divider secondary-color"></div>

        <!-- News  Section -->
        <section class="">
        <h2 class=" blue-text center">News</h2>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./img/7.png" alt="" class="responsive-img">
                        </div>
                        <div class="card-content">
                            <span class="pink-text card-title">Sports Day 2024</span>
                            <p class="grey-text text-darken-2">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam vel nostrum ex, alias aperiam illo distinctio eaque cupiditate laboriosam itaque?
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="#Sports" class=" modal-trigger">Read More</a>
                            <div class="modal" id="Sports">
                                <div class="container">
                                    <h4 class="grey-text text-darken-3">Hi there,</h4>
                                    <p class="grey-text text-darken-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus recusandae neque vero dolore officia ducimus excepturi illo est! Ratione blanditiis id ad nobis, unde itaque quia voluptatem quidem optio?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./img/7.png" alt="" class="responsive-img">
                        </div>
                        <div class="card-content">
                            <span class="pink-text card-title">Sports Day 2024</span>
                            <p class="grey-text text-darken-2">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam vel nostrum ex, alias aperiam illo distinctio eaque cupiditate laboriosam itaque?
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="#Sports" class=" modal-trigger">Read More</a>
                            <div class="modal" id="Sports">
                                <div class="container">
                                    <h4 class="grey-text text-darken-3">Hi there,</h4>
                                    <p class="grey-text text-darken-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus recusandae neque vero dolore officia ducimus excepturi illo est! Ratione blanditiis id ad nobis, unde itaque quia voluptatem quidem optio?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./img/7.png" alt="" class="responsive-img">
                        </div>
                        <div class="card-content">
                            <span class="pink-text card-title">Sports Day 2024</span>
                            <p class="grey-text text-darken-2">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam vel nostrum ex, alias aperiam illo distinctio eaque cupiditate laboriosam itaque?
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="#Sports" class=" modal-trigger">Read More</a>
                            <div class="modal" id="Sports">
                                <div class="container">
                                    <h4 class="grey-text text-darken-3">Hi there,</h4>
                                    <p class="grey-text text-darken-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus recusandae neque vero dolore officia ducimus excepturi illo est! Ratione blanditiis id ad nobis, unde itaque quia voluptatem quidem optio?</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
        });
    </script>
</body>
</html>