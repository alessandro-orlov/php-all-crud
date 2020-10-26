<?php
include __DIR__ . '/../../env.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User details page</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div class="main-container">
    <h1>ADD NEW USER</h1>
    <h2>Form to add new user to the database</h2>
    <div>
        <form class="" action="add-user-server.php" method="post">
            <input type="text" name="name" placeholder="Name" value="">
            <input type="text" name="lastname" placeholder="Lastname" value="">
            <input type="submit" name="" value="save">
        </form>
    </div>
    <a href=" <?php echo $base_url ?> ">go back</a>
</div>
</body>
</html>
