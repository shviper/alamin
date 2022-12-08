<?php
$servername = "localhost";
$username = "alaminxy_p_info";
$password = "##123##*alamin";
$dbname = "p-info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    // echo "<h1> connected </h1>";
}



?>

