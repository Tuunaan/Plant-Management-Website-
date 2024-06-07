<?php
    session_start();
    include('connect.php');
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
    // echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    
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
    
    <form action="dashboard.php" method ="post">
        <header>
        <div style="
        display:flex;
        flex-direction: row;
        flex: 1;
        justify-content: space-between;
        align-items: center;
        ">
            
        <div style="padding-left:20px"><h1>The Plant Paradise - User Dashboard</h1></div>
            <div class="text">
                <nav>
                    <ul>
                        <li><a href="logout.php">Log-out</a></li>
                    </ul>
                </nav>
            </div>
        </div>




        </header>
        <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        </div>
    </form>
    
    <div class="container">
    <div class="plant_add-form ">
    <form action="process_plant_input.php" method="post">
        <div>
            <label for="name">Plant Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="species">Plant Species:</label>
            <input type="text" id="species" name="species" required>
        </div>
        <div>
            <label for="category">Plant Category:</label>
            <input type="text" id="category" name="category" required>
        </div>
        <div>
            <label for="age">Plant Age(yr):</label>
            <input type="number" id="age" name="age" required>
        </div>

        <div>
            <label for="description">Short Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <!-- <input type="submit" value="Add Plant(s)"> -->
            <button type="submit">Add Plant(s)</button>
        </div>

    </form>
    </div>
    </div>
    <div class="container">
            <form action="view_user_plants.php" method="post">
                <button type="submit">My Plants</button>
            </form>
    </div>
    <div class="container">
            <form action="plant_database.php" method="post">
                <button type="submit">Plant Database</button>
            </form>
    </div>
    <div class="container">
            <form action="care.php" method="post">
                <div><button type="submit">Plant Care</button></div>
            </form>
    </div>
    <div class="container">
            <form action="schedule.php" method="post">
                <button type="submit">Shop Plants</button></div>
            </form>
    </div>
    <div class="container">
            <form action="event.php" method="post">
                <button type="submit">Plant Events</button></div>
            </form>
    </div>
 
</body>
</html>
