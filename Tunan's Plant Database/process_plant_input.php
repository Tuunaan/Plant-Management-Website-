<?php
session_start();
include('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $species = mysqli_real_escape_string($conn, $_POST['species']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Get UserID from user_info table
    $user_query = "SELECT UserID FROM user_info WHERE Username = '$username'";
    $user_result = $conn->query($user_query);

    if ($user_result->num_rows > 0) {
        $user_row = $user_result->fetch_assoc();
        $user_id = $user_row['UserID'];

        // Insert data into user_plant table
        $insert_query = "INSERT INTO user_plant (UserID, Name, Species, Category, Age, ShortDescription) 
                         VALUES ('$user_id', '$name', '$species', '$category', '$age', '$description')";

        if ($conn->query($insert_query) === TRUE) {
            echo "Plant information added successfully";

            // Provide a link to go back to the dashboard and add more plants
            echo "<br><a href='dashboard.php'>Go Back too Dashboard</a>";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    } else {
        echo "User not found";
    }

    $conn->close();
}
?>

