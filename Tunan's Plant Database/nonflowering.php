<?php
session_start();
include('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-Flowering Plants Care</title>
    <style>
        /* Add your CSS styling here */
    </style>
</head>
<body>

    <h1>Non-Flowering Plants Care</h1>

    <div>
        <h2>Non-Flowering Plants</h2>
        <p><strong>Examples:</strong> Ferns, Mosses, Conifers, Gymnosperms</p>
        <ul>
            <li>Keep the plant moist, but be careful not to overwater.</li>
            <li>Place the plant in a bright location, but avoid full sun.</li>
            <li>Keep the plant in a cool place.</li>
        </ul>
    </div>

</body>
</html>
