<?php
$hostname = "localhost";
$username = "Lome";
$password = "oseijoyalome2";
$database = "WICE";

$db_connect = mysqli_connect($hostname, $username, $password, $database);
if ($db_connect) {
}else {
    echo "Failed" . mysqli_connect_error();
}
