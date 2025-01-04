<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Category Page</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
            padding: 50px 0px;
    }
        .container {
            background: white;
            padding: 30px;
            border-radius: 50px;
        }
        h1, h3 {
            font-weight: bold;
            color: #1565C0; /* Blue */
        }
        h6 {
            color: #555555; /* Gray */
        }
        .category {
            margin-bottom: 20px;
            border-radius: 50px;
            font-size: 1.2rem;
        }
        .category:hover {
            background: #f48fb1 !important; /* Pink lighten-2 */
            color: white !important;
        }
        .outline {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <br>
    <div class="container outline z-depth-3 ">
        <div class="center">
            <h1 class="blue-text  hide-on-med-and-down">Welcome To <span class="pink-text">WISE</span></h1>
            <h3 class="blue-text hide-on-large-only">Welcome To <span class="pink-text">WISE</span></h3>
            <h6>Select a category to proceed</h6>
        </div>
        <div class="row center">
            <a href="./login.php" class="category blue lighten-2 white-text btn btn-large col s12">Student</a>
            <a href="./staff_sign-up.php" class="category blue white-text btn btn-large col s12">Staff</a>
            <a href="./homepage.php" class="category blue darken-2 white-text btn btn-large col s12">Visitor</a>
        </div>
    </div>

    <script src="./js/jquery.js"></script>
    <script src="./js/materialize.js"></script>
</body>
</html>