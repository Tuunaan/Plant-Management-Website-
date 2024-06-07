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
    <title>Outdoor Plant Care Schedule</title>
    <style>
        /* ... Your CSS goes here ... */
    </style>
</head>
<body>

    <h1 class="title">Outdoor Plants Care Schedule</h1>

    <div class="grid-container">
        <?php
        // Define your outdoor plants and care instructions
        $outdoorPlants = [
            'Flowering Outdoor Plants' => [
                'examples' => ['Roses', 'Tulips', 'Daisies', 'Sunflowers'],
                'care' => 'Water more frequently (up to daily) when temperatures are high, humidity is low, during windy conditions, or as your plants grow larger. Water less frequently during periods of cooler temperatures, overcast days, or if you\'ve given your plants a significant trim.'
            ],
            'Shrubs and Bushes' => [
                'examples' => ['Azaleas', 'Boxwood', 'Hydrangeas', 'Forsythia'],
                'care' => 'Plant the Shrubs at the Right Time. Schedule the Watering Process. Follow Proper Feeding Habits. Prune at the Right Times.'
            ],
            // ... other outdoor plant categories ...
        ];

        // Loop through each outdoor plant category to display the boxes
        foreach ($outdoorPlants as $category => $data) {
            echo '<div class="plant-box">';
            echo "<h3>$category</h3>";
            echo '<p class="highlight">Examples: ' . implode(', ', $data['examples']) . '</p>';
            echo "<p>Care Schedule: {$data['care']}</p>";
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>
