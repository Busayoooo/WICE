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

</style>
<body class="background">
    <div class="parallax-container">
            <div class="parallax">
                <img src="./img/3.png" alt="" class="">
            </div>
    </div>
    <div class="container ">
        <h3 class=" blue-text text-lighten-1 bold-txt ">History of WISE</h3>
        <p class=" grey-text text-darken-3 flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A repellendus at, nam illo rerum ullam expedita voluptatum porro. Sequi, optio! Hic vitae officia natus, numquam molestias, expedita, alias amet nisi harum repudiandae minus omnis reprehenderit corporis aliquam! Unde numquam corrupti quod, ipsam, pariatur provident magnam nam enim dolorem reiciendis illo! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt officia vitae odit, alias officiis quae beatae vero qui delectus sit perspiciatis cum, porro veniam. Blanditiis alias quod quos, facere cum debitis est officiis ducimus molestias quidem possimus, optio exercitationem porro fugiat non laudantium unde error consequuntur quae mollitia, inventore nisi?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolor necessitatibus neque eveniet deleniti quas, animi iusto dolores velit minima. Exercitationem perspiciatis ipsum deleniti obcaecati eveniet porro neque, id voluptatem numquam molestias cumque autem aliquam esse nihil nam beatae quibusdam illum adipisci. Sequi suscipit delectus libero facilis sed ipsa quisquam?</p>
        <br>
        <h2>Our Vision</h2>
    </div>
        
    <div class="parallax-container">
        <div class="banner-div parallax">
            <img src="./img/3.png" alt="" class="center-align" width="1345px">
            <h5 class="black-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos est minus, libero unde voluptate praesentium ut quos beatae iusto fugiat!</h5>
        </div>
    </div>

    <div class="container">
        

        <h3 class="pink-text bold-txt">Our Team</h3>
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

        <h4 class="blue-text bold-txt">Our Values</h4>
        <div class="divider blue"></div>
        <div class="row">
            <div class="col l2 center">Lorem</div>
            <div class="col l2 center">Lorem</div>
            <div class="col l2 center">Lorem</div>
            <div class="col l2 center">Lorem</div>
            <div class="col l2 center">Lorem</div>
            <div class="col l2 center">Lorem</div>
        </div>
        <div class="divider blue"></div>
    </div>
    <br> <br>
    


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