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
    $name =  $_POST['name'];
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

        .video-txt{
        position:absolute;
        top: 35%;
        left: 5%;
    }

        .fade-in-left.hidden {
        opacity: 0; /* Completely transparent */
        transform: translateX(-50px); /* Start 50px to the left */
        transition: opacity 1s ease-out, transform 1s ease-out; /* Smooth transition */
    }

    /* Visible state (triggered by adding the 'visible' class) */
    .fade-in-left.visible {
        opacity: 1; /* Fully visible */
        transform: translateX(0); /* Move to original position */
    }

    /* Fade-in from the bottom */
    .fade-in-top.hidden {
        transform: translateY(-50px); /* Start 50px below */
    }

    .fade-in-top.visible {
        opacity: 1;
        transform: translateY(0); /* Move to its original position */
    }

        .btn-custom {
            background-color: #2196F3;
            color: white;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #1565C0;
        }

        .social{
            padding-left: 150px;
        }

        .socials {
            padding: 30px 0;
            background-color: #2196F3;
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
        div.page-header p{
            padding: 0px 20px;
        }
        .form-bg{
            background-color: rgb(221, 224, 235);
            padding: 20px 20px;
        }
        div.banner-div div a{
        border-radius: 30px !important ; 
        text-transform: none !important ;
    }
    </style>
</head>
<body>
    <!-- Page Header -->
<div class="page-header">
    <h1 class="blue-text hide-on-med-and-down hidden fade-in-top">Get in <span class="pink-text text-accent-2">Touch</span></h1>
    <h2 class="blue-text hide-on-large-only hidden fade-in-top">Get in <span class="pink-text text-accent-2">Touch</span></h2>
    <p class="flow-text grey-text text-darken-1 hidden fade-in-bottom">We'd love to hear from you! Let us know how we can help.</p>
</div>

    <div class="container">
        <!-- Form and Contact Information -->
        <div class="row form-bg hidden fade-in-right">
            <!-- Contact Form -->
            <div class="col s12 l6">
                <h4 class="blue-text hide-on-med-and-down">Need Assistance? Drop Us a Message!</h4>
                <h4 class="blue-text hide-on-large-only center">Need Assistance? Drop Us a Message!</h4>
                <form action="./contactUs.php" method="post" id="contact-form">
                    <div class="input-field">
                        <input type="text" name="name" id="name" required>
                        <label for="name">Your Name</label>
                    </div>
                    <div class="input-field">
                        <input type="tel" name="phone_number" id="phone_number" required>
                        <label for="phone_number">Your Phone Number</label>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" id="email" required>
                        <label for="email">Your Email</label>
                    </div>
                    <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea" required></textarea>
                        <label for="message">Your Message</label>
                    </div>
                    <div class="input-field center">
                        <input class="btn btn-large blush-pink creamy-white-text center" type="submit" name="submit" id="submit" value="Send" >
                    </div>
                </form>
            </div>

            <!-- Office Information -->
            <div class="col s12 l6">
                <h4 class="blue-text center-on-small-only">Reach Out to Us</h4>
                <div class=" hide-on-med-and-down">
                <p class=""><strong>Address:</strong>Behind Chief Omokemi House, Moborode Street, Iwopin, Ogun State</p>
                <p class=""><strong>Email:</strong> <a href="mailto:Wceiwopin@gmail.com
">Wceiwopin@gmail.com
</a></p>
                <p class=""><strong>Phone:</strong> <a href="tel:+2348135958262">+234 813 595 8262</a></p>
                </div>
                <div class="container hide-on-large-only">
                <p class=""><strong>Address:</strong>Behind Chief Omokemi House, Moborode Street, Iwopin, Ogun State</p>
                <p class=""><strong>Email:</strong> <a href="mailto:Wceiwopin@gmail.com
">Wceiwopin@gmail.com
</a></p>
                <p class=""><strong>Phone:</strong> <a href="tel:+2348135958262">+234 813 595 8262</a></p>
                </div>
                <p class="center-on-small-only"><strong>Operating Hours:</strong></p>
                <ul class="center-on-small-only">
                    <li>Monday - Friday: 8:00 AM - 2:00 PM</li>
                    <li>Saturday: Closed</li>
                    <li>Sunday: Closed</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Social Links Desktop-->
    <div class="socials center scrollspy hide-on-med-and-down hidden fade-in-bottom">
        <h4>Follow Us on Social Media</h4>
        <div class="row social">
            <div class="col s12 m3">
                <a href="mailto:Wceiwopin@gmail.com" class="center"><i class="material-icons social-icons">email</i>Email</a>
            </div>
            <div class="col s12 m3">
                <a href="tel:+2348135958262" class="center"><i class="material-icons social-icons">phone</i>Phone</a>
            </div>
            <div class="col s12 m3">
                <a href="" class="center"><i class="material-icons social-icons">camera_alt</i>Instagram</a>
            </div>
            <div class="col s12 m3">
                <a href="#" class="center"><i class="material-icons social-icons">facebook</i>Facebook</a>
            </div>
        </div>
    </div>
    <!-- Social Links Mobile-->
    <div class="socials center hide-on-large-only hidden fade-in-bottom">
        <h4>Follow Us on Social Media</h4>
        <br>
        <div class="row container center">
            <div class="col s6 m3">
                <a href="#" class="center"><i class="material-icons social-icons">email</i>Email</a>
            </div>
            <div class="col s6 m3">
                <a href="#" class="center"><i class="material-icons social-icons">phone</i>Phone</a>
            </div>
            <div class="col s6 m3">
                <a href="#" class="center"><i class="material-icons social-icons">camera_alt</i>Instagram</a>
            </div>
            <div class="col s6 m3">
                <a href="#" class="center"><i class="material-icons social-icons">facebook</i>Facebook</a>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- FAQ Section -->
        <div class="faq hidden fade-in-right">
            <h5 class="blue-text bold-txt section-heading">Frequently Asked Questions</h5>
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">help_outline</i>What is the school's admission process?</div>
                    <div class="collapsible-body"><span>Our admission process involves an online application, a personal interview, and document submission. You can contact us for more details.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">help_outline</i>How can I schedule a school visit?</div>
                    <div class="collapsible-body"><span>You can schedule a visit by calling our office or using the form above to request an appointment.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">help_outline</i>What programs do you offer?</div>
                    <div class="collapsible-body"><span>We offer a wide range of programs from nursery to secondary levels, with extracurricular activities like sports, arts, and more.</span></div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
            $('.collapsible').collapsible();
            $('.modal').modal();
            $('.scrollspy').scrollSpy();
            $('.parallax').parallax();
            $('.slider').slider({
                height:600
            });
            $(window).scroll(function () {
                const sliderHeight = $('.slider').height(); 
                if($(window).scrollTop() > sliderHeight){
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