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

        .faq h5 {
            font-weight: 600;
        }
        div.page-header p{
            padding: 0px 20px;
        }
    </style>
</head>
<body>
    <?php include("./templates/header.php"); ?>
<br>
    <!-- Page Header -->
<div class="page-header">
    <h1 class="blue-text hide-on-med-and-down">Get in <span class="pink-text text-accent-2">Touch</span></h1>
    <h2 class="blue-text hide-on-large-only">Get in <span class="pink-text text-accent-2">Touch</span></h2>
    <p class="flow-text grey-text text-darken-1">We'd love to hear from you! Let us know how we can help.</p>
</div>

    <div class="container">
        <!-- Form and Contact Information -->
        <div class="row form-bg">
            <!-- Contact Form -->
            <div class="col s12 l6">
                <h4 class="blue-text hide-on-med-and-down">Need Assistance? Drop Us a Message!</h4>
                <h4 class="blue-text hide-on-large-only center">Need Assistance? Drop Us a Message!</h4>
                <form action="./contact-handler.php" method="post" id="contact-form">
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
                        <button type="submit" class="btn btn-large btn-custom">Send</button>
                    </div>
                </form>
            </div>

            <!-- Office Information -->
            <div class="col s12 l6">
                <h4 class="blue-text center-on-small-only">Reach Out to Us</h4>
                <div class=" hide-on-med-and-down">
                <p class=""><strong>Address:</strong> 123 School Lane, City, State, ZIP Code</p>
                <p class=""><strong>Email:</strong> <a href="mailto:info@school.com">info@school.com</a></p>
                <p class=""><strong>Phone:</strong> <a href="tel:+123456789">+123 456 789</a></p>
                </div>
                <div class="container hide-on-large-only">
                <p class=""><strong>Address:</strong> 123 School Lane, City, State, ZIP Code</p>
                <p class=""><strong>Email:</strong> <a href="mailto:info@school.com">info@school.com</a></p>
                <p class=""><strong>Phone:</strong> <a href="tel:+123456789">+123 456 789</a></p>
                </div>
                <p class="center-on-small-only"><strong>Operating Hours:</strong></p>
                <ul class="center-on-small-only">
                    <li>Monday - Friday: 8:00 AM - 5:00 PM</li>
                    <li>Saturday: 9:00 AM - 2:00 PM</li>
                    <li>Sunday: Closed</li>
                </ul>
            </div>
        </div>
    </div>
        <!-- Social Links Desktop-->
        <div class="socials center hide-on-med-and-down">
            <h4>Follow Us on Social Media</h4>
            <div class="row social">
                <div class="col s12 m3">
                    <a href="#" class="center"><i class="material-icons social-icons">email</i>Email</a>
                </div>
                <div class="col s12 m3">
                    <a href="#" class="center"><i class="material-icons social-icons">phone</i>Phone</a>
                </div>
                <div class="col s12 m3">
                    <a href="#" class="center"><i class="material-icons social-icons">camera_alt</i>Instagram</a>
                </div>
                <div class="col s12 m3">
                    <a href="#" class="center"><i class="material-icons social-icons">facebook</i>Facebook</a>
                </div>
            </div>
        </div>
        <!-- Social Links Mobile-->
        <div class="socials center hide-on-large-only">
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
        <div class="faq">
            <h5>Frequently Asked Questions</h5>
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

    <!-- Footer -->
    <?php include("./templates/footer.php"); ?>

    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            // Initialize Materialize Components
            M.textareaAutoResize($('#message'));
            $('.collapsible').collapsible();
        });
    </script>
</body>
</html>