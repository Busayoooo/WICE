<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    <br> <br>
    <div class="container">
        <h1 class="center blue-text text-lighten-1 hide-on-med-and-down">Student Sign-up</h1>
        <h3 class="center blue-text text-lighten-1 hide-on-large-only">Student Sign-up</h3>
        <form action="./student_sign-up_two.php" method="post">
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
                    <input type="text" name="parent's_full_name" id="parent's_full_name">
                    <label for="parent's_full_name">Parent's full name</label>
                </div>
                <div class="col l4 s6 input-field">
                    <input type="text" name="parent's_email" id="parent's_email">
                    <label for="parent's_email">Parent's Email</label>
                </div>
                <div class="col l3 s6 input-field">
                    <input type="text" name="parent's_phone_number" id="parent's_phone_number">
                    <label for="parent's_phone_number">Parent's Phone No.</label>
                </div>
            </div>
            <div class="container">
                <a href="./confirm_sign-up.php" class="btn btn-large right blue lighten-1">submit</a>
            </div>
        </form>

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