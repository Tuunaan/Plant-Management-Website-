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
    <title>Indoor Plant Care Schedule</title>
    <style>
        /* ... Your CSS goes here ... */
    </style>
</head>
<body>

    <h1 class="title">Indoor Plants Care Schedule</h1>

    <div class="grid-container">
        <?php
        // Define your plants and care instructions
        $plants = [
            'Foliage Plants' => [
                'examples' => ['Spider Plant', 'Snake Plant', 'Peace Lily', 'Boston Fern'],
                'care' => 'Place in a sunny room for indirect, natural light. Water frequently to maintain damp soil. Keep at room temperature, avoiding extreme heat and cold.'
            ],
            'Flowering Indoor Plants' => [
                'examples' => ['Orchids', 'African Violets', 'Anthurium', 'Christmas Cactus'],
                'care' => 'Remove decorative sleeves, faded flowers, and yellowing leaves. Snip off dead foliage at the base of the leaf stem.'
            ],
            // ... other plant categories ...
        ];

        // Loop through each plant category to display the boxes
        foreach ($plants as $category => $data) {
            echo '<div class="plant-box">';
            echo "<h3>$category</h3>";
            echo '<p class="highlight">Examples: ' . implode(', ', $data['examples']) . '</p>';
            echo "<p><span class=\"highlight\">Care Instructions:</span> {$data['care']}</p>";
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>
