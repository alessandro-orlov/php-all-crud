<?php
include __DIR__ . "/../../database.php";

$user = $_GET['id'];

// MySql Query
$sql = "SELECT * FROM `users` WHERE `id` = $user";

$results = $conn->query($sql);

if ($results && $results->num_rows > 0) {

    $user = $results->fetch_assoc();

} elseif ($results) {

    // 0 results
    $room;

} else {
    echo "query error";
}
$conn->close();

