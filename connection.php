<?php


$conn = new mysqli("localhost","root","987794","crud");
if(!$conn) {
    die("Connection failed: " . $conn->connect_error);
}


?>