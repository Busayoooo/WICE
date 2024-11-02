<?php

include("./templates/connect.php");

// Create blank variables
$error_msg = "";
$password = $email = $first_name = $last_name = " ";

// Check if the submit button is pressed
if (isset($_POST['sign-up'])) {

    // store array to array variables
    $username = $_POST['username'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];;

    // Write the insert query
    $insert_query = "INSERT INTO `login_tb`(`username`, `email`, `first_name`, `last_name`, `password`) VALUES ('$username', '$email', '$first_name', '$last_name' , '$password')";
    
    // Send query to the server
    $send_query = mysqli_query($db_connect, $insert_query);    

    if ($send_query) {
        header('Location: login.php');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($db_connect);
    }
}else{
    $error_msg = "Password do not match";

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
<body>
    <br> <br> <br> <br>
    <div class="container">
        <h1 class="center blue-text text-lighten-1 hide-on-med-and-down">Student Sign-up</h1>
        <h3 class="center blue-text text-lighten-1 hide-on-large-only">Student Sign-up</h3>
        <form action="./student_sign-up_one.php" method="post">
            <div class="row container">
                <div class="col s6 l4 input-field">
                    <input type="text" name="f_name" id="f_name">
                    <label for="f_name">First Name</label>
                </div>
                <div class="col s6 l4 input-field">
                    <input type="text" name="l_name" id="l_name">
                    <label for="l_name">Last Name</label>
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
            <div class="container">
                <a href="./student_sign-up_two.php" class="btn btn-large right blue lighten-1">Next</a>
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