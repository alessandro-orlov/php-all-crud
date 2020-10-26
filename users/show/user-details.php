<?php
include __DIR__ . '/server-show.php';
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
    <h1>USER DETAILS</h1>
    <ul>
        <li> Name: <?php echo $user['name']; ?> </li>
        <li> Lastname: <?php echo $user['lastname']; ?> </li>
    </ul>
    <a href=" <?php echo $base_url ?> ">go back</a>
</div>
</body>
</html>
