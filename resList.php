<?php
include 'db_config.php';

// Retrieve reservation list from the database
$stmt = $db->prepare("SELECT * FROM bookings");
$stmt->execute();
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reservation List - Beatriz Rafaela Resort</title>
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
    <h1>Reservation List</h1>
    <ul>
        <?php foreach ($bookings as $booking): ?>
            <li><?php echo $booking['id']; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
