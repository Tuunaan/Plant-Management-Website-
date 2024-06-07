<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tunan_plantdb";
$conn = new mysqli($servername, $username, $password, $dbname);
$conn = new mysqli("localhost", "root", "", "tunan_plantdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo " ";
// $conn->close();
?>


