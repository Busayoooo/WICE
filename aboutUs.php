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
        <p class=" grey-text text-darken-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. A repellendus at, nam illo rerum ullam expedita voluptatum porro. Sequi, optio! Hic vitae officia natus, numquam molestias, expedita, alias amet nisi harum repudiandae minus omnis reprehenderit corporis aliquam! Unde numquam corrupti quod, ipsam, pariatur provident magnam nam enim dolorem reiciendis illo! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt officia vitae odit, alias officiis quae beatae vero qui delectus sit perspiciatis cum, porro veniam. Blanditiis alias quod quos, facere cum debitis est officiis ducimus molestias quidem possimus, optio exercitationem porro fugiat non laudantium unde error consequuntur quae mollitia, inventore nisi?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolor necessitatibus neque eveniet deleniti quas, animi iusto dolores velit minima. Exercitationem perspiciatis ipsum deleniti obcaecati eveniet porro neque, id voluptatem numquam molestias cumque autem aliquam esse nihil nam beatae quibusdam illum adipisci. Sequi suscipit delectus libero facilis sed ipsa quisquam?</p>

        <h4 class="pink-text bold-txt">Our vision and values</h4>
        <div class="divider pink"></div>
        <p class="grey-text text-darken-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi ut omnis tempora assumenda minus molestiae odit recusandae obcaecati ipsa eveniet!</p>
        <div class="divider pink"></div>

        <h4 class="blue-text bold-txt"> Location</h4>
        <p><strong>Lorem:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, necessitatibus. Lorem ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, illo!</p>
        <p><strong>Lorem:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, necessitatibus. Lorem ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, illo!</p>
        <p><strong>Lorem:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, necessitatibus. Lorem ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, illo!</p>

        <h4 class="pink-text bold-txt">Contact Information</h4>
        <div class="center">
            <h6 class="left">Want to ask a question, make enquiries or just talk to us?<a href="./contactUs.php" class="pink-text"> Click here!!!</a></h6>
            
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