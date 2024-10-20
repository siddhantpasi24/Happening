<?php
$email = $_POST['email'];
if ( !empty($email)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "form";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
     
}
?>