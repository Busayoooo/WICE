<?php
include("./templates/header.php");
include("./templates/connect.php");

$name = "";
$phone_number = "";
$email = "";
$message = "";

// select all from products table
$select_query = "SELECT * FROM `messages`";

$send_query = mysqli_query($db_connect, $select_query);

$registrants = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

// print_r($fetch_query);


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // insert query, to insert the data into the database
    $insert_query = "INSERT INTO `messages`(`name`, `phone_number`, `email`, `message`) VALUES ( '$name', '$phone_number', '$email', '$message')";

    // send query to server
    $send_query = mysqli_query($db_connect, $insert_query);

    if ($send_query) {
        // echo 'Registration successful';    
    }


    if ($send_query) {
    } else {
        echo 'error: ' . mysqli_error($db_connect);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Contact Us</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
        }

        .page-header {
            text-align: center;
            padding: 20px 0;
            color: #2196F3;
        }

        .form-bg {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-bg:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease;
        }

        .video-txt {
            position: absolute;
            top: 35%;
            left: 5%;
        }

        .fade-in-left.hidden {
            opacity: 0;
            /* Completely transparent */
            transform: translateX(-50px);
            /* Start 50px to the left */
            transition: opacity 1s ease-out, transform 1s ease-out;
            /* Smooth transition */
        }

        /* Visible state (triggered by adding the 'visible' class) */
        .fade-in-left.visible {
            opacity: 1;
            /* Fully visible */
            transform: translateX(0);
            /* Move to original position */
        }

        /* Fade-in from the bottom */
        .fade-in-top.hidden {
            transform: translateY(-50px);
            /* Start 50px below */
        }

        .fade-in-top.visible {
            opacity: 1;
            transform: translateY(0);
            /* Move to its original position */
        }

        .btn-custom {
            background-color: rgb(52, 55, 253);
            color: white;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #1565C0;
        }

        .social {
            padding-left: 150px;
        }

        .socials {
            padding: 30px 0;
            background-color: rgb(52, 55, 253);
            color: white;
        }

        .socials a {
            color: #ffffff;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: color 0.3s;
        }

        .socials a:hover {
            color: #ff4081;
        }

        .social-icons i {
            font-size: 1.8rem;
        }

        .address {
            padding: 20px 0;
        }

        .faq {
            margin: 20px 0;
        }

        /* .faq h5 {
        font-weight: 700;
        color: #2196F3;
    } */
        div.page-header p {
            padding: 0px 20px;
        }

        .form-bg {
            background-color: rgb(221, 224, 235);
            padding: 20px 20px;
        }

        div.banner-div div a {
            border-radius: 30px !important;
            text-transform: none !important;
        }

        .container-fluid {
            width: 100%;
            max-width: 100%;
            height: 350px;
            position: relative;
        }

        .container-fluid img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(40%);
        }

        .text-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2rem;
            font-weight: bold;
            z-index: 2;
        }

        /* Default Button Style (Outline) */
        .btn-outline {
            background-color: transparent !important;
            color: #2196F3 !important;
            transition: all 0.3s ease-in-out !important;
            border: solid #2196F3 !important;
            border-radius: 30px !important;
        }

        /* Hover Effect */
        .btn-outline:hover {
            background-color: #2196F3 !important;
            color: #fff !important;
        }

        .btn-outline i {
            color: #2196F3 !important;
        }

        .btn-outline:hover i {
            color: #FFFFFF !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="image-container">
            <img src="./img/20240214_125218.jpg" alt="Background Image">

            <!-- Medium and Large Screens -->
            <div class="text-container hide-on-small-only">
                <h1>Contact Us</h1>
            </div>

            <!--Small Screens -->
            <div class="text-container hide-on-med-and-up">
                <h1 style="font-size: 2.5rem;">Contact Us</h1>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <!-- Form and Contact Information -->
        <div class="row grey lighten-4 hidden fade-in-right">
            <!-- Office Information -->
            <div class="col s12 l4">
                <h4 class="blue-text center-on-small-only center-align" style="padding-bottom: 10px;">Reach Out to Us
                </h4>
                <div class=" hide-on-med-and-down" style="padding-bottom: 10px;">
                    <i class=" material-icons medium left">map</i>
                    <p class=""><strong style="font-size: 1.2rem; font-weight: bold;">Address</strong><br> Behind Chief
                        Omokemi House, Moborode Street, Iwopin, Ogun State</p>
                </div>
                <div class=" hide-on-med-and-down" style="padding-bottom: 10px;">
                    <i class=" material-icons medium left">mail</i>
                    <p class=""><strong style="font-size: 1.2rem; font-weight: bold;">Email</strong><br> <a
                            style="text-decoration: underline; color: #2196F3;"
                            href="mailto:Wceiwopin@gmail.com">Wceiwopin@gmail.com</a></p>
                </div>
                <div class=" hide-on-med-and-down" style="padding-bottom: 10px;">
                    <i class=" material-icons medium left">phone</i>
                    <p class=""><strong style="font-size: 1.2rem; font-weight: bold;">Phone</strong><br> <a
                            style="text-decoration: underline; color: #2196F3;" href="tel:+2348135958262">+234 813 595
                            8262</a></p>
                </div>
                <div class="container hide-on-large-only center-align">
                    <p class=""><strong style="font-size: 1.2rem; font-weight: bold;">Address <br></strong>Behind Chief
                        Omokemi House, Moborode Street, Iwopin, Ogun State</p>
                    <p class=""><strong style="font-size: 1.2rem; font-weight: bold;">Email <br></strong> <a
                            style="color: #2196F3;" href="mailto:Wceiwopin@gmail.com">Wceiwopin@gmail.com</a></p>
                    <p class=""><strong style="font-size: 1.2rem; font-weight: bold;">Phone <br></strong> <a
                            style="color: #2196F3;" href="tel:+2348135958262">+234 813 595 8262</a></p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col s12 l8">
                <h4 class="blue-text hide-on-med-and-down center-align">Need More info? Drop a Message!</h4>
                <h4 class="primary-text hide-on-large-only center">Need Assistance? Drop Us a Message!</h4>
                <form action="./contactUs.php" method="post" id="contact-form">
                    <div class="row">
                        <div class="input-field col l6 s12">
                            <input type="text" name="name" id="name" required>
                            <label for="name">Your Name</label>
                        </div>
                        <div class="input-field col l6 s12">
                            <input type="email" name="email" id="email" required>
                            <label for="email">Your Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="subject" id="subject" required>
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="message" id="message" class="materialize-textarea" required></textarea>
                            <label for="message">Your Message</label>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="input-field col s12">
                            <button class="btn btn-large btn-outline" type="submit" name="submit" id="submit"><i
                                    class=" material-icons left">send</i>Sumbit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
            $('.collapsible').collapsible();
            $('.modal').modal();
            $('.scrollspy').scrollSpy();
            $('.parallax').parallax();
            $('.slider').slider({
                height: 600
            });
            $(window).scroll(function () {
                const sliderHeight = $('.slider').height();
                if ($(window).scrollTop() > sliderHeight) {
                    $(".navbar").addClass("scrolled");
                } else {
                    $(".navbar").removeClass("scrolled");
                }
            });
            // Function to check if an element is in the viewport
            function isInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            // Add 'visible' class to elements with a delay
            function addFadeInClass() {
                const elements = document.querySelectorAll('.fade-in-bottom');
                elements.forEach((element, index) => {
                    if (isInViewport(element)) {
                        setTimeout(() => {
                            element.classList.add('visible');
                        }, index * 200); // Stagger delay of 200ms per card
                    }
                });
            }

            // Trigger animation on scroll and initial load
            window.addEventListener('scroll', addFadeInClass);
            window.addEventListener('load', addFadeInClass);


            // Function to check if an element is in the viewport
            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return (
                    rect.top < (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.bottom > 0
                );
            }

            // Function to add 'visible' class to elements in the viewport
            function addVisibleClass() {
                $('.hidden').each(function () {
                    if (isElementInViewport(this)) {
                        $(this).addClass('visible');
                    }
                });
            }

            // Check elements on scroll
            $(window).on('scroll', function () {
                addVisibleClass();
            });

            // Initial check
            addVisibleClass();
        });
    </script>

    <?php include("./templates/footer.php"); ?>
</body>

</html>