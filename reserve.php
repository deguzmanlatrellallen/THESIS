<?php
include 'db_config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Reserve - Beatriz Rafaela Resort</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <img src="logo.jpg" alt="Hotel Logo" class="logo">
        <h1>Beatriz Rafaela Resort</h1>
    </header>

    <nav>
        <ul class="navbar">
            <li class="dropdown">
                <button class="menu-button">☰</button>
                <div class="dropdown-content">
                    <a href="reserve.php">Make a Reservation</a>
                    <a href="resList.php">View Reservation</a>
                </div>
            </li>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="act.php">Activities</a></li>
            <li><a href="con.php">Contact Us</a></li>
            <li><a href="pricing.php">Plans & Pricing</a></li>
            <li><a href="book.php">Book Online</a></li>
        </ul>
    </nav>
  
    <div class="container">
        <h1>Make a Reservation</h1>
        <form action="reservation_process.php" method="post">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br><br>

            <input type="submit" value="Submit Reservation">
        </form>
    </div>
</body>
</html>
