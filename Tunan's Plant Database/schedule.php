<?php
session_start();
include('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Assuming you have a userID in your session
$userID = $_SESSION['userID'];

// Fetch care schedule data for a specific user
$Care_schedule_query = "SELECT * FROM Care_schedule WHERE UserID = $userID";
$Care_schedule_result = $conn->query($Care_schedule_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Care Schedule</title>
   <style>
       /* Your existing styles remain unchanged for brevity */
   </style>
</head>

<body>
   <header>
       <h1>Care Schedule</h1>
   </header>

   <div class="container"> 
       <form action="careschedule.php" method="post">
           <button type="submit">View Care for categorized Plants</button>
       </form>
   </div>

   <div class="container">
       <h2>Care Schedule Data</h2>

       <?php
       if ($Care_schedule_result->num_rows > 0) {
           echo "<table>
                   <tr>
                       <th>CareID</th>
                       <th>Category</th>
                       <th>Sub_Type</th>
                       <th>Size</th>
                       <th>Instructions</th>
                   </tr>";

           while ($Care_schedule_row = $Care_schedule_result->fetch_assoc()) {
               echo "<tr>
                       <td>{$Care_schedule_row['CareID']}</td>
                       <td>{$Care_schedule_row['Category']}</td>
                       <td>{$Care_schedule_row['Sub_Type']}</td>
                       <td>{$Care_schedule_row['Size']}</td>
                       <td>{$Care_schedule_row['Instructions']}</td>
                   </tr>";
           }

           echo "</table>";
       } else {
           echo "No care schedule data available.";
       }
       ?>
   </div>
</body>
</html>