<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "login_signup";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed. Please try again later.");
}


if (!$conn->set_charset("utf8")) {
    echo "Error loading character set utf8: " . $conn->error;
}

?>
