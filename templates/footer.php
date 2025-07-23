<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Document</title>
</head>
<style>
    /* Footer Styling */
.page-footer {
    padding-top: 30px;
}

.page-footer .container {
    max-width: 1280px;
}

.page-footer .row {
    margin-bottom: 0;
}

.page-footer h5 {
    font-weight: bold;
    margin-bottom: 15px;
}

.page-footer ul li {
    margin-bottom: 10px;
}

.page-footer ul li a:hover {
    text-decoration: underline
}

/* Icons in Contact Section */
.page-footer ul li i {
    margin-right: 5px;
    vertical-align: middle;
    color: white;
}
.footer-copyright{
    background: linear-gradient(135deg, #2196F3, #E91E63);
}
.page-footer{
    background-color: #2196F3;
}
    
</style>
<body>
<footer class="page-footer center-on-small-only">
    <div class="container">
        <div class="row">
            <div class="col l4 s12 center">
                <img src="./img/logo.png" alt="School Logo" width="230px" class="responsive-img brand-logo center">
            </div>

            <!-- Quick Links -->
            <div class="col l3 s12">
                <h5 class="white-text">Quick Links</h5>
                <ul>
                    <li><a class="white-text" href="./aboutUs.php">About Us</a></li>
                    <li><a class="white-text" href="./academics.php#target-section">Register</a></li>
                    <li><a class="white-text" href="./index.php#news">Latest News</a></li>
                    <li><a class="white-text" href="./contactUs.php">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="col l5 s12">
                <h5 class="white-text">Contact</h5>
                <ul>
                    <li><i class="material-icons tiny">phone</i> <a class="white-text" href="tel:+2348135958262">+234 813 595 8262</a></li>
                    <li><i class="material-icons tiny">email</i> <a class="white-text" href="mailto:info@wisdomcollegeofexcellence.org">info@wisdomcollegeofexcellence.org</a></li>
                    <li><i class="material-icons tiny">location_on</i> <span class="white-text">Behind Chief Omokemi House, Moborode Street, Iwopin, Ogun State</span></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-copyright center-align">
        <div class="container ">
            © <?php echo date("Y"); ?> Wisdom College of Excellence. All rights reserved.
            <a class="white-text" href="#!">Privacy Policy</a>
        </div>
    </div>
</footer>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
            $('.modal').modal();
            $('.scrollspy').scrollSpy();
            $('.parallax').parallax();
            })
    </script>
</body>
</html>