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

    .outline{
        border: solid #2196f3;
        /* border: solid #E91E63; */
        border-width:1px;
        border-radius: 1px;
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
</style>
<body class="background">
    <br>
    <div class="slider">
            <ul class="slides">
                <li>
                    <img src="" alt="" class="responsive-img">
                </li>
            </ul>
    </div>
    <div class="container">
        <h3 class=" blue-text bold-txt center">Overview of WISE</h3>
        <div class="divider blue"></div>
        <p class=" grey-text text-darken-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. A repellendus at, nam illo rerum ullam expedita voluptatum porro. Sequi, optio! Hic vitae officia natus, numquam molestias, expedita, alias amet nisi harum repudiandae minus omnis reprehenderit corporis aliquam! Unde numquam corrupti quod, ipsam, pariatur provident magnam nam enim dolorem reiciendis illo! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt officia vitae odit, alias officiis quae beatae vero qui delectus sit perspiciatis cum, porro veniam. Blanditiis alias quod quos, facere cum debitis est officiis ducimus molestias quidem possimus, optio exercitationem porro fugiat non laudantium unde error consequuntur quae mollitia, inventore nisi?
        </p>
        <div class="divider blue"></div>

        <br>

        <h4 class="pink-text bold-txt">Our Mission</h4>
        <div class="divider secondary-color"></div>
        <p class="grey-text text-darken-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. A repellendus at, nam illo rerum ullam expedita voluptatum porro. Sequi, optio! Hic vitae officia natus, numquam molestias, expedita, alias amet nisi harum 
        </p>
        <div class="divider secondary-color"></div>

        <h2 class="blue-text">News</h2>
        <div class="outline">
            <div class="row">
                <div class="col l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="" alt="" class="responsive-img">
                        </div>
                        <div class="card-content">
                            <p class="blue-text text-lighten-1">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam vel nostrum ex, alias aperiam illo distinctio eaque cupiditate laboriosam itaque?
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="" alt="" class="responsive-img">
                        </div>
                        <div class="card-content">
                            <p class="blue-text text-lighten-1">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam vel nostrum ex, alias aperiam illo distinctio eaque cupiditate laboriosam itaque?
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="" alt="" class="responsive-img">
                        </div>
                        <div class="card-content">
                            <p class="blue-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam vel nostrum ex, alias aperiam illo distinctio eaque cupiditate laboriosam itaque?
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
            $('.slider').slider();
        });
    </script>
</body>
</html>