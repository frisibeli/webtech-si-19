<?php
session_start();

if($_POST){
    $_SESSION['username'] = $_POST['username'];
    header('Location: home.php');
}
?>

<form method="post">
    <input type="text" name="username" />
    <button>Login</button>
</form>