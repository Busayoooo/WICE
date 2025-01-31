<?php
$hostname = "localhost";
$username = "busayo";
$password = "Bus@yo220509";
$database = "wice";

$db_connect = mysqli_connect($hostname, $username, $password, $database);
if ($db_connect) {
}else {
    echo "Failed" . mysqli_connect_error();
}
?>