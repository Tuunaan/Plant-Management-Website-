<?php
session_start();
include('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];

// Get UserID from user_info table
$user_query = "SELECT UserID FROM user_info WHERE Username = '$username'";
$user_result = $conn->query($user_query);

if ($user_result->num_rows > 0) {
    $user_row = $user_result->fetch_assoc();
    $user_id = $user_row['UserID'];

    // Retrieve user's plants from user_plant table
    $plants_query = "SELECT * FROM user_plant WHERE UserID = '$user_id'";
    $plants_result = $conn->query($plants_query);
} else {
    echo "User not found";
    exit();
}

// Process plant deletion if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_plant'])) {
    $plant_id_to_delete = mysqli_real_escape_string($conn, $_POST['plant_id']);

    // Delete plant from user_plant table
    $delete_query = "DELETE FROM user_plant WHERE PlantID = '$plant_id_to_delete'";
    if ($conn->query($delete_query) === TRUE) {
        echo "Plant deleted successfully";
    } else {
        echo "Error deleting plant: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User Plants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #4A8A78;
            color: white;
            text-align: center;
            padding: 1em;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4A8A78;
            color: white;
        }

        .delete-form {
            display: inline-block;
        }

        .delete-button {
            background-color: #FF5252;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <h1>The Plant Paradise</h1>
</header>

<div class="container">
    <h2>My Plants</h2>

    <?php
    if ($plants_result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Species</th>
                    <th>Category</th>
                    <th>Age</th>
                    <th>Short Description</th>
                    <th>Action</th>
                </tr>";

        while ($plant_row = $plants_result->fetch_assoc()) {
            echo "<tr>
                    <td>{$plant_row['Name']}</td>
                    <td>{$plant_row['Species']}</td>
                    <td>{$plant_row['Category']}</td>
                    <td>{$plant_row['Age']}</td>
                    <td>{$plant_row['ShortDescription']}</td>
                    <td>
                        <form class='delete-form' method='post' action=''>
                            <input type='hidden' name='plant_id' value='{$plant_row['PlantID']}'>
                            <button type='submit' class='delete-button' name='delete_plant'>Delete</button>
                        </form>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No plants found for the user.";
    }
    ?>

    <br>
    <a href="dashboard.php">Add more Plants</a>
</div>

</body>
</html>
