<?php
include 'db_config.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $check_in_date = htmlspecialchars($_POST['date']);
  $nights = htmlspecialchars($_POST['nights']);
  $payment_method = htmlspecialchars($_POST['payment_method']);

    
    if (empty($name) || empty($email) || empty($check_in_date) || empty($nights) || empty($payment_method)) {
        echo "Please fill out all fields";
        exit;
    }

    
    $stmt = $db->prepare("INSERT INTO users (username, email) VALUES (:username, :email)");
    $stmt->bindParam(':username', $name);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user_id = $db->lastInsertId();

    
    $total_price = $nights * $room_price; 
    $stmt = $db->prepare("INSERT INTO bookings (user_id, check_in_date, total_nights, total_price, payment_method) 
                          VALUES (:user_id, :check_in_date, :total_nights, :total_price, :payment_method)");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':check_in_date', $check_in_date);
    $stmt->bindParam(':total_nights', $nights);
    $stmt->bindParam(':total_price', $total_price);
    $stmt->bindParam(':payment_method', $payment_method);
    $stmt->execute();

    
    $payment_success = true;

    if ($payment_success) {
        echo "Booking successfully made and payment processed!";
    } else {
        echo "Booking successful, but payment processing failed. Please contact customer support.";
    }
} else {
    echo "Invalid request!";
}
?>