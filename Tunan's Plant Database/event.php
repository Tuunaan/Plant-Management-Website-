<?php
session_start();
include('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Fetch event data from the Event_Database table
$event_query = "SELECT * FROM Event_Database";
$event_result = $conn->query($event_query);

// Handle form submission for adding new events
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is for adding or updating an event
    if (isset($_POST['addEvent'])) {
        $userID = $_SESSION['userID']; // Assuming you have a userID in your session
        $eventName = $_POST['eventName'];
        $eventType = $_POST['eventType'];
        $eventDate = $_POST['eventDate'];
        $location = $_POST['location'];
        $description = $_POST['description'];

        $insert_query = "INSERT INTO Event_Database (UserID, EventName, EventType, EventDate, Location, Description) 
                         VALUES ('$userID', '$eventName', '$eventType', '$eventDate', '$location', '$description')";

        if ($conn->query($insert_query) === TRUE) {
            echo "New event added successfully!";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['updateEvent'])) {
        // Placeholder for updating event (You can redirect to a separate update page)
        echo "Update event placeholder";
    } elseif (isset($_POST['deleteEvent'])) {
        // Placeholder for deleting event (You can redirect to a separate delete confirmation page)
        echo "Delete event placeholder";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Plant Events</title>
   <style>
           <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color:#4A8A78;
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
            color: black;
        }

        .logout {
            float: right;
            margin-top: -30px;
        }
        .plant_add-form {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            font-size: 30px;
            color: white;
            line-height: 40px;
            text-align: left;
            display: flex;
            flex-direction: column;
            align-items: left;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #3D2B2B;
            padding:40px;
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
       <h1>Plant Events</h1>
   </header>


       <h2>Plant Event Data</h2>


       <?php
       if ($event_result->num_rows > 0) {
           echo "<table>
                   <tr>
                       <th>EventID</th>
                       <th>UserID</th>
                       <th>EventName</th>
                       <th>EventType</th>
                       <th>EventDate</th>
                       <th>Location</th>
                       <th>Description</th>
                       <th>Action</th>
                   </tr>";

           while ($event_row = $event_result->fetch_assoc()) {
               echo "<tr>
                       <td>{$event_row['EventID']}</td>
                       <td>{$event_row['UserID']}</td>
                       <td>{$event_row['EventName']}</td>
                       <td>{$event_row['EventType']}</td>
                       <td>{$event_row['EventDate']}</td>
                       <td>{$event_row['Location']}</td>
                       <td>{$event_row['Description']}</td>
                       <td class='event-buttons'>
                           <form action='event.php' method='post'>
                               <input type='hidden' name='eventID' value='{$event_row['EventID']}'>
                               <input type='hidden' name='userID' value='{$event_row['UserID']}'>
                               <button type='submit' name='updateEvent'>Update</button>
                               <button type='submit' name='deleteEvent'>Delete</button>
                           </form>
                       </td>
                   </tr>";
           }
        
           echo "</table>";
       } else {
           echo "No event data available.";
       }
       ?>
<div class="container">
<div class="plant_add-form">
       <form action="event.php" method="post">
        <div>
           <label for="eventName">Event Name:</label>
           <input type="text" id="eventName" name="eventName" required>
        </div>
        <div>
           <label for="eventType">Event Type:</label>
           <input type="text" id="eventType" name="eventType" required>
        </div>
        <div>
           <label for="eventDate">Event Date:</label>
           <input type="date" id="eventDate" name="eventDate" required>
        </div>
        <div>
           <label for="location">Location:</label>
           <input type="text" id="location" name="location" required>
        </div>
        <div>
           <label for="description">Description:</label>
           <textarea id="description" name="description" rows="4" required></textarea>
        </div>
           <button type="submit" name="addEvent">Add New Event</button>
       </form>
   </div>
</div>
</body>
</html>
