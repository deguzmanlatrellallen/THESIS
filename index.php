<?php
include 'db_config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Reservation Homepage</title>
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
    <form class="content-form" action="book.php">
        <h2>Welcome to Our Hotel</h2>
        <p>Book your stay with us now!</p>
        <input type="submit" value="Book Now" class="book-now-button">
    </form>
</div>

<div class="contact-info">
    <p>Contact us: email@example.com | Phone: 123-456-7890</p>
</div>
</body>
</html>
