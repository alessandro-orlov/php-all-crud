<?php

  include __DIR__ . "/../../database.php";

  $user_id = $_POST['id'];

  // MySql Query
  $sql = "DELETE FROM `users` WHERE `users`.`id` = $user_id";

  $execute = $conn->query($sql);

  $conn->close();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete page</title>
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body>
      <div class="main-container">
          <?php if ($results) { ?>
              <h1>Operation successfull</h1>
              <a href=" <?php echo $base_url ?>">go to main page</a>
          <?php } else { ?>
            <h1>ERROR</h1>
          <?php } ?>
      </div>
  </body>
</html>
