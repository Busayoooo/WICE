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
</style>
<body>
    <div class="container">
    <h3 class=" blue-text text-lighten-1 bold-txt ">History of WISE</h3>
    <div class="divider"></div>
        <p class=" grey-text text-darken-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. A repellendus at, nam illo rerum ullam expedita voluptatum porro. Sequi, optio! Hic vitae officia natus, numquam molestias, expedita, alias amet nisi harum repudiandae minus omnis reprehenderit corporis aliquam! Unde numquam corrupti quod, ipsam, pariatur provident magnam nam enim dolorem reiciendis illo! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt officia vitae odit, alias officiis quae beatae vero qui delectus sit perspiciatis cum, porro veniam. Blanditiis alias quod quos, facere cum debitis est officiis ducimus molestias quidem possimus, optio exercitationem porro fugiat non laudantium unde error consequuntur quae mollitia, inventore nisi?
        </p>
        <div>
            <div class="left"><img width="160px" src="./img/3.png" alt="" class="responsive-img"></div>
            <div class="right"><p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis deserunt eaque reiciendis blanditiis, tenetur, iusto nam dignissimos eos, commodi ut voluptates unde? Iure ipsa laboriosam necessitatibus perferendis at officiis vitae.</p></div>
            <br> <br> <br>
        </div>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi illo nemo impedit fuga sapiente, aliquid dolore saepe debitis molestiae alias voluptatem, unde, quas id! Iusto maxime sed laboriosam tempora. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad delectus assumenda debitis deserunt fugit! Omnis necessitatibus ullam iste nostrum tempore. Possimus?</p>
        <div class="divider"></div>
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