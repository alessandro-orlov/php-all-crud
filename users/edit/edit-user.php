<?php
  include __DIR__ . '/server-edit.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update User's Info</title>
    <link rel="stylesheet" href="/../../css/style.css">
  </head>
  <body>
    <div class="main-container">
        <h1>Edit user's info</h1>
        <div>
            <form action="update.php" method="post">
                <input hidden type="text" name="id" value="<?php echo $user['id'] ?> ">
                <input type="text" name="name" placeholder="Name" value="<?php echo $user['name'] ?> ">
                <input type="text" name="lastname" placeholder="Lastname" value="<?php echo $user['lastname'] ?>">
                <input type="submit" name="" value="save">
            </form>
        </div>
        <a href=" <?php echo $base_url ?> ">go back</a>
    </div>

  </body>
</html>
