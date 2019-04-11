<?php
session_start();

echo $_SESSION['username'];
?>

<a href="logout.php">Logout</a>