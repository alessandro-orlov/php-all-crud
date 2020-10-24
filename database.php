<?php

  // link env.php with all needed data
  include __DIR__ . "/env.php";

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn && $conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>
