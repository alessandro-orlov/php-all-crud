<?php

include __DIR__ . "/../../database.php";

// initialize variables
$name = $_POST['name'];
$lastname = $_POST['lastname'];

// MySql Query
$sql = "INSERT INTO `users` (`id`, `name`, `lastname`, `created_at`, `updated_at`) VALUES (NULL, '$name', '$lastname', CURRENT_TIME(), CURRENT_TIME())";
?>

<html>
<head>
    <title>User create</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div class="main-container">
    <?php if ($conn->query($sql) === TRUE) { ?>
    <?php  echo "<h1>New record created successfully</h1>"; ?>
    <?php echo "<a href=" . $base_url . ">Return to the main page</a>"; ?>
    <?php } else { ?>
      <?php echo "Error: " . $sql . "<br>" . $conn->error; ?>
    <?php } ?>

    <?php $conn->close(); ?>

  </div>
</body>
</html>
