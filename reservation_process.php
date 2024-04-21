<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);

    
    if (empty($name) || empty($email) || empty($date)) {
        echo "Please fill out all fields";
        exit;
    }

    
    $stmt = $db->prepare("INSERT INTO users (username, email) VALUES (:username, :email)");
    $stmt->bindParam(':username', $name);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user_id = $db->lastInsertId();

    
    $stmt = $db->prepare("INSERT INTO bookings (user_id, check_in_date) VALUES (:user_id, :check_in_date)");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':check_in_date', $date);
    $stmt->execute();

   
    echo "Reservation successfully made!";
} else {
    echo "Invalid request!";
}
?>