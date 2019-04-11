<?php 
    session_start();

    if($_SESSION['user']){
        header('Location: home.php');
    }

    if($_POST['username']){
        $_SESSION['user'] = $_POST['username'];
        header('Location: home.php');
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <input type="text" name="username" placeholder="Enter username" /><br/>
        <input type="password" name="password" placeholder="Enter password" /><br/>
        <input type="submit" value="Login" />
    </form>
</body>
</html>