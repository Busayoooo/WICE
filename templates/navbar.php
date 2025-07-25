<?php
$current_file = $_SERVER['PHP_SELF'];
$base = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/WICE' : '';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/WICE/">
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

    .navbar {
        background-color: #fff;
    }

    .nav-link {
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
        background: #2196F3;
        transform: scaleX(0);
        transition: transform 0.3s ease-in-out;
        transform-origin: right;
    }

    .nav-link:hover::after,
    .nav-list.active .nav-link::after {
        transform: scaleX(1);
        transform-origin: left;
    }

    .nav-link:hover {
        background-color: #FFFFFF;
    }

    .nav-list {
        background-color: transparent !important;
        margin-right: 15px;
    }

    .nav-list.active a {
        font-weight: 600;
        color: #1565C0 !important;
        background-color: rgba(33, 150, 243, 0.1);
        border-radius: 5px;
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
        background-color: #F472B6;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .hidden {
        opacity: 0;
        transform: translateY(50px);
    }

    .visible {
        opacity: 1;
        transform: translateY(0);
    }

    .fade-in-top.hidden {
        transform: translateY(-50px);
    }

    .fade-in-top.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .fade-in-left.hidden {
        opacity: 0;
        transform: translateX(-50px);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    .fade-in-left.visible {
        opacity: 1;
        transform: translateX(0);
    }

    .fade-in-right.hidden {
        transform: translateX(50px);
    }

    .fade-in-right.visible {
        opacity: 1;
        transform: translateX(0);
    }

    .fade-in-bottom.hidden {
        transform: translateY(50px);
    }

    .fade-in-bottom.visible {
        opacity: 1;
        transform: translateY(0);
    }

    i {
        color: #2196F3;
    }
</style>

<body>
    <header>
        <div class="navbar-fixed z-depth-2">
            <nav class="nav-wrapper navbar">
                <div class="container">
                    <!-- Sidenav Trigger -->
                    <a href="#" id="sidenav" data-target="sidenav" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                    <div class="row">
                        <div class="col l2 s12 center-on-small-only">
                            <a href="<?= $base ?>/" class="brand-logo bold-txt blue-text">
                                <img src="./img/logo.png" alt="School Logo" width="70px">
                            </a>
                        </div>
                        <ul class="col l10 hide-on-med-and-down right push-l4">
                            <li class="nav-list <?= stripos($current_file, 'index.php') ? 'active' : ''; ?>">
                                <a href="<?= $base ?>/" class="blue-text nav-link">
                                    <i class="material-icons left">home</i>Home
                                </a>
                            </li>
                            <li class="nav-list <?= stripos($current_file, 'aboutUs.php') ? 'active' : ''; ?>">
                                <a href="<?= $base ?>/aboutUs" class="blue-text nav-link">
                                    <i class="material-icons left">people</i>About Us
                                </a>
                            </li>
                            <li class="nav-list <?= stripos($current_file, 'academics.php') ? 'active' : ''; ?>">
                                <a href="<?= $base ?>/academics" class="blue-text nav-link">
                                    <i class="material-icons left">school</i>Academics
                                </a>
                            </li>
                            <li class="nav-list <?= stripos($current_file, 'contactUs.php') ? 'active' : ''; ?>">
                                <a href="<?= $base ?>/contactUs" class="blue-text nav-link">
                                    <i class="material-icons left">contact_mail</i>Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Mobile Sidenav -->
        <ul class="sidenav" id="sidenav">
            <li class="<?= stripos($current_file, 'index.php') ? 'active' : ''; ?>">
                <a href="<?= $base ?>/" class="blue-text">
                    <i class="material-icons left">home</i>Home
                </a>
            </li>
            <li class="<?= stripos($current_file, 'aboutUs.php') ? 'active' : ''; ?>">
                <a href="<?= $base ?>/aboutUs" class="blue-text">
                    <i class="material-icons left">people</i>About Us
                </a>
            </li>
            <li class="<?= stripos($current_file, 'academics.php') ? 'active' : ''; ?>">
                <a href="<?= $base ?>/academics" class="blue-text">
                    <i class="material-icons left">school</i>Academics
                </a>
            </li>
            <li class="<?= stripos($current_file, 'contactUs.php') ? 'active' : ''; ?>">
                <a href="<?= $base ?>/contactUs" class="blue-text">
                    <i class="material-icons left">contact_mail</i>Contact Us
                </a>
            </li>
        </ul>

    </header>
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker();
            $('.sidenav').sidenav();
            $('.tooltipped').tooltip();
            $('.slider').slider();
        });
    </script>
</body>

</html>