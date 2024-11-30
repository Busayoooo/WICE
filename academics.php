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
    .relative{
        position: relative;
    }

    .video-txt{
        position:absolute;
        top: 30%;
        left: 15%;
    }

    .form-bg{
    background-color: rgb(221, 224, 235);
    padding: 20px 20px;
}
</style>
<body class="background">
    <div class="relative hide-on-med-and-down">
        <video width="100%" class="responsive-video hi" autoplay loop>
            <source src="./img/header-bg-vid.mp4" type="video/mp4">
        </video>
        <!-- <div class="container center video-txt white-text">
            <h1>Every Dish Tells a <br> Story</h1>
            <h4>Explore, cook and create with us</h4>
            <button class="btn btn-large orange darken-4 white-text center">Get Started</button>
        </div> -->
    </div>
    <br>
    <div class="container">
        <h2 class="blue-text bold-txt">Curriculum</h2>
        <div class="row form-bg">
            <div class="col l6 s12">
                <img src="./img/7.png" alt="" class="responsive-img">
            </div>
            <div class="col l6 s12">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis eligendi fugit cupiditate sequi minima nesciunt obcaecati commodi dolores ipsam. Explicabo accusantium autem accusamus maiores consequuntur beatae laborum assumenda officia est, quasi dolor voluptates, cupiditate sit? Illum exercitationem similique maxime sed! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quisquam, maxime odio sed voluptatem pariatur. Iure, quis pariatur. Excepturi laboriosam deleniti ex, eum, mollitia temporibus ipsa sunt sit voluptatum consectetur quo consequuntur cum repellat, culpa iste. Exercitationem culpa accusamus voluptatem sequi placeat magnam dolore at? Autem voluptatem ratione fugit reiciendis quibusdam mollitia debitis, magni minus?  </p>
            </div>
        </div>
    </div>

    <div class="row blue">
        <br>
        <h2 class="background-text center">Classes Available</h2>
        <div class="col l3 grey-text text-darken-3 s6 center">
            <h5 class="center">Pre-School</h2>
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
    <div class="container">
        <h2 class="Blue-text">Register</h2>
        <div class="row form-bg">
            <div class="col s12 l6">
                <h3 class=" grey-text text-darken-1">Want to join the <span class="Blue-text">WISE</span> family?</h3>
                <p class=" grey-text flow-text">Click the button below to register now 👇</p>
                <a href="mailto:abassalex49@gmail.com" class= "hide-on-med-and-down blush-pink creamy-white-text btn btn-large left hoverable">Email us at<i class="right material-icons">email</i></a>
                <a class= "hide-on-large-only right blush-pink creamy-white-text btn btn-large left hoverable">Call us Now<i class="right material-icons">phone</i></a>
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
                            <input type="text" name="Class" id="Class">
                            <label for="description">Your desired class:</label>
                        </div>
                        
                        <div class="center input-field">
                            <input class="btn btn-large blush-pink creamy-white-text center" type="submit" name="submit" id="submit" value="Send" >
                        </div>
                    </form> 
                </div>
        </div>
    </div>
    <div class="parallax-container">
            <div class="parallax">
                <img src="./img/3.png" alt="" class="">
            </div>
    </div>
    <div class="container">
        <h2 class="blue-text ">Nursery</h2>
        <p class="flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem id ex repellat, ut laborum aliquid consequuntur asperiores tempora ab totam officiis quos voluptate, harum quod nihil dolor odit explicabo exercitationem. </p>
    </div>

    <div class="parallax-container">
            <div class="parallax">
                <img src="./img/3.png" alt="" class="">
            </div>
    </div>
    <div class="container">
        <h2 class="blue-text ">Primary</h2>
        <p class="flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem id ex repellat, ut laborum aliquid consequuntur asperiores tempora ab totam officiis quos voluptate, harum quod nihil dolor odit explicabo exercitationem. </p>
    </div>

    <div class="parallax-container">
            <div class="parallax">
                <img src="./img/3.png" alt="" class="">
            </div>
    </div>
    <div class="container">
        <h2 class="blue-text ">Secondary</h2>
        <p class="flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem id ex repellat, ut laborum aliquid consequuntur asperiores tempora ab totam officiis quos voluptate, harum quod nihil dolor odit explicabo exercitationem. </p>
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
                const hiHeight = $('.hi').height(); 
                if($(window).scrollTop() > hiHeight){
                    $(".navbar").addClass("scrolled");
                } else {
                    $(".navbar").removeClass("scrolled");
                }
            });
    </script>
</body>
</html>
