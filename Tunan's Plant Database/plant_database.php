<?php
session_start();
include('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Fetch plant data from the Plant_Database table
$plantData_query = "SELECT * FROM Plant_Database";
$plantData_result = $conn->query($plantData_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Database</title>
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
            color: #333;
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
    </style>
</head>
<body>
    <header>
        <h1>Plant Database</h1>
    </header>

    <div class="container">
        <h2>Plant Data</h2>

        <?php
        if ($plantData_result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>PlantDataID</th>
                        <th>Species</th>
                        <th>Plant Name</th>
                        <th>Season</th>
                        <th>Category</th>
                        <th>Soil Type</th>
                    </tr>";

            while ($plantData_row = $plantData_result->fetch_assoc()) {
                echo "<tr>
                        <td>{$plantData_row['PlantDataID']}</td>
                        <td>{$plantData_row['Species']}</td>
                        <td>{$plantData_row['Plant_Name']}</td>
                        <td>{$plantData_row['Season']}</td>
                        <td>{$plantData_row['Category']}</td>
                        <td>{$plantData_row['Soil_Type']}</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "No plant data found in the database.";
        }
        ?>
    </div>
</body>
</html>
