<?php
include __DIR__ . '/server.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP ALL CRUD</title>
    <meta name="description" content="all crud operations with php">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="main-container">
      <h1 class="center">PHP CRUD</h1>
      <h2 class="center">Basic create, read, update, delete method with php</h2>
      <div class="new-user">
          <a href=" <?php echo $base_url . '/users/create/new-user.php' ?> ">add new user</a>
      </div>
      <h3>All users:</h3>
      <div>
          <ul>
          <?php foreach ($users as $user) { ?>
              <li>
                  <?php echo $user['name']; ?> <?php echo $user['lastname']; ?>
                  <a href=" <?php echo $base_url . '/users/show/user-details.php?id=' . $user['id']; ?>">details</a>
                  <a href=" <?php echo $base_url . '/users/edit/edit-user.php?id=' . $user['id']; ?> ">edit</a>
                  <form action="<?php echo $base_url . '/users/delete/delete-user.php' ?>" method="post">
                      <input type="hidden" name="id" value="<?php echo $user['id'];?>">
                      <input class="delete" type="submit" value="Delete">
                  </form>
               </li>
          <?php } ?>
          </ul>
          <p>
            prova link <a href="<?php echo $base_url . 'prova.php' ?>">prova</a>
          </p>
      </div>
    </div>
  </body>
</html>
