<?php require 'config/db.php';?>

Welcome <?php echo '<b>'.$_SESSION['user']['username'].'</b>';?>!

<a href="logout.php">Logout</a>