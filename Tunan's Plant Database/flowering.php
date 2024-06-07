<?php
session_start();
include('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
$flowering_query = "SELECT * FROM Plant_Database WHERE Category = 'Flowering'";
$flowering_result = $conn->query($flowering_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowering Plants Care</title>
    <style>
        /* Add your CSS styling here */
    </style>
</head>
<body>

    <h1>Flowering Plants Care</h1>

    <div>
        <h2>Flowering Plants</h2>
        <p><strong>Examples:</strong> Roses, Orchids, Lilies, Hibiscus</p>
        <ul>
            <li>Keep the plant moist, but be careful not to overwater.</li>
            <li>Place the plant in a bright location, but avoid full sun.</li>
            <li>Keep the plant in a cool place and avoid drafts.</li>
            <li>When a new flower opens, carefully remove the yellow anthers.</li>
            <li>Cut off flowers as soon as they have collapsed.</li>
        </ul>
    </div>
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
