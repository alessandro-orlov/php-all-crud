<?php
include __DIR__ . "/../../database.php";

// initialize variables
$room_id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];

// MySql Query
$sql = "UPDATE `users` SET `name` = '$name', `lastname` = '$lastname',  `updated_at` = CURRENT_TIME() WHERE `users`.`id` = $room_id";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo '<a href=' . $base_url . '>Return to the main page</a>';
  // header('Location: '. $base_url);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

