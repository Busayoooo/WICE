
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

    .navbar{
        background: transparent !important;
        transition: 500ms background 0.2s ease, color 0.2s ease;
    }
    .navbar a{
        color: #2196f3;
        transition: color 0.2s ease;
    }
    .navbar.scrolled{
        background: #2196f3 !important;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 2);
    }
    .navbar.scrolled a{
        color: white !important;
    }
    .navbar{
        z-index: 10;
        position: fixed;
        width: 100%;
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
</style>
<body>
    <header>
        <div class="fixed-top z-depth-0">
            <nav class=" nav-wrapper navbar">
                <div class="container">
                    <div class="row">
                        <div class="col l2 s12 center-on-small-only ">
                            <a href="homepage.php" class="brand-logo blue-text" >WICE</a>
                            <a href="#sidenav" class="sidenav-trigger blue-text"><i class="material-icons">menu</i></a>
                        </div>
                        <ul class="col l10 hide-on-med-and-down right push-l4">
                            <li>
                                <a href="homepage.php" class="blue-text"><i class="material-icons left">home</i>Home</a>
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
                    </div>
                </div>
            </nav>
        </div>
        
        <ul class="sidenav navbar-fixed" id="sidenav">
        <li>
            <a href="homepage.php" class="blue-text"><i class="material-icons left">home</i>Home</a>
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