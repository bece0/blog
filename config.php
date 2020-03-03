<?php
$servername = "localhost";
$db_username = "root";
$db_password = "123456";
$db_name = "blog";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $db_name);
$baglanti = false;
// Check connection
if ($conn->connect_error) {
    echo "Baglanti saglanamadi : " . $conn->connect_error;
} else{
    $baglanti = true;
}
//echo "Connected successfully";
?>

