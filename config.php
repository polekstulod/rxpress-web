<?php
$host = 'mariadb';
$username = 'root';
$password = 'root';
$database = 'rxpressdb';

$con = mysqli_connect($host, $username, $password, $database);
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
