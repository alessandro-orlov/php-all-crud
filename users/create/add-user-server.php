<?php

  include __DIR__ . "/../../database.php";

  // initialize variables
	$name = $_POST['name'];
  $lastname = $_POST['lastname'];

  // MySql Query
  $sql = "INSERT INTO `users` (`id`, `name`, `lastname`, `created_at`, `updated_at`) VALUES (NULL, '$name', '$lastname', CURRENT_TIME(), CURRENT_TIME())";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<a href='.$base_url.'>Return to the main page</a>';
    // header('Location: '. $base_url);
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

?>
