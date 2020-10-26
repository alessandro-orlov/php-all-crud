<?php
include __DIR__ . "/database.php";

// MySql Query
$sql = "SELECT * FROM `users` ORDER BY `id` DESC";

$results = $conn->query($sql);

if ($results && $results->num_rows > 0) {

  $users = [];

  // Put single row (that rappresents single room) in array ($rooms)
  while ($row = $results->fetch_assoc()) {
    $users[] = $row;
  }

} elseif ($results) {

  // 0 results
  $users = [];

} else {
  echo "query error";
}
$conn->close();
