
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

    .navbar{
        background-color:rgb(52, 55, 253);
        color: white;
    }
    .navbar a{
        color:white ;
    }
    .background{
        background-color: #FFFFFF !important;
    }
    .primary{
        background-color: rgb(52, 55, 253) !important;
    }
    .primary-text{
        color: rgb(52, 55, 253) !important;
    }
    .secondary{
        background-color: #F3F4F6 !important;
    }
    .secondary-text{
        color: #F3F4F6;
    }
    .accent{
        background-color: #F472B6 !important;
    }
    .accent-text{
        color: #F472B6 !important;
    }
    .general{
        color: #374151 !important;
    }

    .slider .indicators .indicator-item.active {
        background-color: #2196f3;
    }
    .bold-txt{
        font-weight: bold;
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

</style>
<body>
    <header>
        <div class="navbar-fixed fixed-top z-depth-2">
            <nav class=" nav-wrapper  navbar">
                <div class="container">
                    <div class="row">
                        <div class="col l2 s12 center-on-small-only ">
                            <a href="index.php" class="brand-logo bold-txt" >WICE</a>
                            <a href="#sidenav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        </div>
                        <ul class="col l10 hide-on-med-and-down right push-l4">
                            <li>
                                <a href="index.php"><i class="material-icons left">home</i>Home</a>
                            </li>
                            <li>
                                <a href="aboutUs.php"><i class="material-icons left">people</i>About Us</a>
                            </li>
                            <li>
                                <a href="academics.php"><i class="material-icons left">school</i>Academics</a>
                            </li>
                            <li>
                                <a href="contactUs.php"><i class="material-icons left">contact_mail</i>Contact Us</a>
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


        <!-- Hero section -->
    <div class="slider">
        <ul class="slides">
            <li>
                <div class="banner-div">
                    <img src="./img/20240214_125218.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3 class="bold-txt">Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large accent hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                        <h5 class="bold-txt">Welcome to Wisdom College of Excellence</h5>
                        <p class="white-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn hide-on-large-only accent hoverable">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240214_125622.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3 class="bold-txt">Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large accent hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class="bold-txt hide-on-large-only bold-txt">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only accent hoverable">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240525_090030.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3 class="bold-txt">Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large accent hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class="bold-txt hide-on-large-only">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only accent hoverable">Learn More</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-div">
                    <img src="./img/20240810_115158.jpg" alt="School Banner" class="responsive-img">
                    <div class="caption center-align hide-on-med-and-down">
                        <h3  class="bold-txt">Welcome to Wisdom College of Excellence</h3>
                        <p class="white-text flow-text">Skills for today, future leaders</p>
                        <a href="./aboutUs.php" class="btn btn-large accent hoverable">Learn More</a>
                    </div>
                    <div class="container video-txt white-text center hide-on-large-only">
                    <h5 class="bold-txt hide-on-large-only">Welcome to Wisdom College of Excellence</h5>
                    <p class="white-text">Skills for today, future leaders</p>
                    <a href="./aboutUs.php" class="btn hide-on-large-only accent hoverable">Learn More</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
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