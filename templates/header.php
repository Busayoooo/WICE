<?php
$current_file = $_SERVER['PHP_SELF'];

// Debug test
// echo $current_file;
// if (stripos($current_file, 'Index.php') !== false) {
//     echo'Its here';
// }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f3f4f6;
    }
    .slider .indicators .indicator-item.active {
        background-color: #2196f3;
    }

    .outline{
        border: solid #2196f3;
        border: solid #E91E63;
        border-width:1px;
        border-radius: 1px;
    }
    .bold-txt{
        font-weight: bold;
    }
    .background{
        background-color: #f3f4f6;
    }
    .background-text{
        color: #f3f4f6;
    }
    .dark-text{
        color: #212121;
    }
    .secondary-color{
        background-color: #E91E63;
    }
    .light-text{
        color: #FFFFFF;
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

    /* Default hidden state */
    .hidden {
    opacity: 0;
    transform: translateY(50px); /* Start slightly below */
    transition: 1s all 0.1s ease-out; /* Smooth transition */
    }

    /* Visible state (triggered by JS) */
    .visible {
        opacity: 1;
        transform: translateY(0); /* Move to original position */
    }
    .fade-in-top.hidden {
        transform: translateY(-50px); /* Start 50px below */
    }

    .fade-in-top.visible {
        opacity: 1;
        transform: translateY(0); /* Move to its original position */
    }
    /* General hidden state */
    .fade-in-left.hidden {
        opacity: 0;
        transform: translateX(-50px); /* Start from the left */
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    /* When the section becomes visible */
    .fade-in-left.visible {
        opacity: 1;
        transform: translateX(0);
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

    /* Start Theddys Edits */

    .navbar {
        background-color: #fff;
        /* margin-bottom: 5px; */
    }
    .nav-link{
        position: relative;
        display: inline-block;
    }
    .nav-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 3px;
        background: #007bff;
        transform: scaleX(0);
        transition: transform 0.3s ease-in-out;
        transform-origin: right;
    }
    .nav-list{
        background-color: transparent !important;
        margin-right: 15px;
    }
    .nav-link:hover::after,
    .nav-list.active .nav-link::after {
        transform: scaleX(1);
        transform-origin: left;
    }
    .nav-link:hover{
        background-color: #FFFFFF;
    }

    /* End Theddys Edits */


</style>
<body>
    <header>
        <div class="navbar-fixed z-depth-2">
            <nav class=" nav-wrapper navbar">
                <div class="container">
                    <div class="row">
                        <div class="col l2 s12 center-on-small-only ">
                            <a href="index.php" class="brand-logo blue-text bold-txt" >WICE</a>
                            <a href="#sidenav" class="sidenav-trigger blue-text"><i class="material-icons">menu</i></a>
                        </div>
                        <ul class="col l10 hide-on-med-and-down right push-l4">
                            <li class="nav-list <?= stripos( $current_file, 'index.php' ) ? 'active' : '' ;  ?>">
                                <a href="index.php" class="blue-text nav-link"><i class="material-icons left">home</i>Home</a>
                            </li>
                            <li class="nav-list <?= stripos( $current_file, 'aboutUs.php' ) ? 'active' : '' ;  ?>">
                                <a href="aboutUs.php" class="blue-text nav-link"><i class="material-icons left">people</i>About Us</a>
                            </li>
                            <li class="nav-list <?= stripos( $current_file, 'academics.php' ) ? 'active' : '' ;  ?>">
                                <a href="academics.php" class="blue-text nav-link"><i class="material-icons left">school</i>Academics</a>
                            </li>
                            <li class="nav-list <?= stripos( $current_file, 'contactUs.php' ) ? 'active' : '' ;  ?>">
                                <a href="contactUs.php" class="blue-text nav-link"><i class="material-icons left">contact_mail</i>Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <ul class="sidenav navbar-fixed" id="sidenav">
            <li>
                <a href="index.php" class="blue-text"><i class="material-icons left">home</i>Home</a>
            </li>
            <li>
                <a href="aboutUs.php" class="blue-text"><i class="material-icons left">people</i>About Us</a>
            </li>
            <li>
                <a href="academics.php" class="blue-text"><i class="material-icons left">school</i>Academics</a>
            </li>
            <li>
                <a href="contactUs.php" class="blue-text"><i class="material-icons left">contact_mail</i>Contact Us</a>
            </li>
        </ul>
    </header>
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
            $('.sidenav').sidenav();
            $('.tooltipped').tooltip();
            $('.slider').slider();
        });
    </script>
</body>
</html>