<?php
include("./templates/connect.php");

// Create blank variables
$error_msg = "";
$first_name = $last_name = $email = $username = $password = $grade = $DOB = $gender = $phone_number = $address = $parent_full_name = $parent_email = $parent_phone_number = " ";

// Check if the submit button is pressed
if (isset($_POST['submit'])) {

    // store array to array variables
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $grade = $_POST['grade'];
    $DOB = $_POST['DOB'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $parent_full_name = $_POST['parent_full_name'];
    $parent_email = $_POST['parent_email'];
    $parent_phone_number = $_POST['parent_phone_number'];

    // Write the insert query
    $insert_query = "INSERT INTO `students_tb`(`first_name`, `last_name`, `email`, `username`, `password`, `grade`, `DOB`, `gender`, `phone_number`, `address`, `parent_full_name`, `parent_email`, `parent_phone_number`) VALUES ('$first_name','$last_name','$email','$username','$password','$grade', '$DOB','$gender','$phone_number','$address','$parent_full_name','$parent_email', '$parent_phone_number')";
    
    // Send query to the server
    $send_query = mysqli_query($db_connect, $insert_query);    

    if ($send_query) {
        header('Location: confirm_sign-up.php');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($db_connect);
    }
}else{
    $error_msg = "hi";

}
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
    .datepicker-date-display {
        background-color: #42A5F5 ;
    }
    .datepicker-cancel, .datepicker-clear, .datepicker-today, .datepicker-done {
        color: #42A5F5;
    }
    .input-field input:focus{
        border-bottom: 1px solid #42A5F5 !important;
        box-shadow: 0 1px 0 0 #42A5F5 !important;
    }

    /* changes the label and icon color */
    .input-field .prefix.active, label.active{
        color: #42A5F5 !important;;
    }
    .datepicker-table td.is-today {
        color: #42A5F5;
    }

    .datepicker-table td.is-selected {
        background-color: #42A5F5;
        color: #fff;
    }
</style>
<body>
    
    <div class="container">
        <h1 class="center blue-text text-lighten-1 hide-on-med-and-down">Student Sign-up</h1>
        <h3 class="center blue-text text-lighten-1 hide-on-large-only">Student Sign-up</h3>
        <form action="./student_sign-up.php" method="post">
            <div class="row container">
                <div class="col s6 l4 input-field">
                    <input type="text" name="first_name" id="first_name">
                    <label for="first_name">First Name</label>
                </div>
                <div class="col s6 l4 input-field">
                    <input type="text" name="last_name" id="last_name">
                    <label for="last_name">Last Name</label>
                </div>
                <div class="col s6 l4 input-field">
                    <input type="email" name="email" id="email">
                    <label for="email">Email</label>
                </div>
                <div class="col s6 l4 input-field">
                    <input type="text" name="username" id="username">
                    <label for="username">Username</label>
                </div>
                <div class="col s6 l4 input-field">
                    <input type="text" name="password" id="password">
                    <label for="passworrd">Password</label>
                </div>
                <div class="col s6 l4 input-field">
                    <input placeholder="Grade" list="Grade" name="grade">
                    <datalist id="Grade">
                        <option value="Creche">
                        <option value="Play Pen">
                        <option value="Pre-Nursery">
                        <option value="Nursery 1">
                        <option value="Nursery 2">
                        <option value="Pry 1">
                        <option value="Pry 2">
                        <option value="Pry 3">
                        <option value="Pry 4">
                        <option value="Pry 5">
                        <option value="JSS 1">
                        <option value="JSS 2">
                        <option value="JSS 3">
                        <option value="SSS 1">
                        <option value="SSS 2">
                        <option value="SSS 3">
                    </datalist>
                </div>
            </div>
            <div class="row container">
                <div class="col s6 l4 input-field">
                    <input type="text" class="datepicker" id="date" name="DOB">
                    <label for="date">Date of Birth</label>
                </div>
                <div class="col s6 l4 input-field">
                    <input type="tel" name="phone_number" id="phone_number">
                    <label for="phone_number">Phone number</label>
                </div>
                <div class="col s3 l4 input-field">
                    <input placeholder="Gender" list="Gender">
                    <datalist id="Gender">
                        <option value="Female">
                        <option value="Male">
                    </datalist>
                </div>
                <div class="col l12 s9 input-field">
                    <input type="text" name="address" id="address">
                    <label for="address">Contact adress</label>
                </div>
                <h4 class="blue-text text-lighten-1">Sponsor's details:</h4>
                <div class="col l5 s12 input-field">
                    <input type="text" name="parent_full_name" id="parent_full_name">
                    <label for="parent_full_name">Parent's full name</label>
                </div>
                <div class="col l4 s6 input-field">
                    <input type="text" name="parent_email" id="parent_email">
                    <label for="parent_email">Parent's Email</label>
                </div>
                <div class="col l3 s6 input-field">
                    <input type="text" name="parent_phone_number" id="parent_phone_number">
                    <label for="parent_phone_number">Parent's Phone No.</label>
                </div>
            </div>
            <div class="container">
                <!-- <a href="./student_sign-up_two.php" class="btn btn-large right blue lighten-1">Next</a> -->
                <input type="submit" name="submit" value="Next" id="submit" class="btn btn-large right blue lighten-1">
                <br>
            </div>
        </form>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
        });
    </script>
</body>
</html>