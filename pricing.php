<?php
include 'db_config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Plans & Pricing - Beatriz Rafaela Resort</title>
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
        <h1>Plans & Pricing</h1>
        <p>Plan 1: $100/night</p>
        <p>Plan 2: $150/night</p>
        <p>Plan 3: $200/night</p>
    </div>
</body>
</html>
