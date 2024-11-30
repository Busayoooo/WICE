<?php

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
    <title>Login Page</title>
</head>
<style>
    .input-field .prefix.active, label.active{
        color: #2196F3 !important;
    }
    .input-field input:focus {
            border-bottom: 1px solid #2196F3 !important;
            box-shadow: 0 1px 0 0 #2196F3 !important;
    }
    .input-field .prefix.active {
        color: #2196F3;
    }
    .input-field .prefix {
        color: #2196F3;
    }

</style>
<body>
    <br> <br> <br> <br> <br> <br>
    <div class="container outline z-depth-5">
        <h1 class="center">eCampus Login</h1>
        <form action="./login.php" method="post">
            <div class="row container">
                <div class="input-field col s12">
                    <i class="material-icons prefix">person</i>
                    <input type="email" name="username" id="username">
                    <label for="username">Username</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password" id="password">
                    <label for="password">Password</label>
                </div>
                <div class="container">
                    
                    <input class="right btn white-text btn-flat blue" type="submit" name="login" id="login" value="Login">
                </div>
            </div>
        </form>

    </div>
</body>
</html>