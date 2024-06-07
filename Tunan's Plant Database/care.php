<?php
session_start();
include('connect.php'); 

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Fetch plant data from the Care_schedule table
$Care_schedule_query = "SELECT * FROM Care_schedule";
$Care_schedule_result = $conn->query($Care_schedule_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Care Schedule</title>
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


       button {
            background-color: #4A8A78;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
   </style>
</head>

<body>
   <header>
       <h1>Care Schedule</h1>
   </header>

    <div class="container"> 
    <form action="careschedule.php" method="post">
        <button type="submit">View Care for categorized Plants</button></div>
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
