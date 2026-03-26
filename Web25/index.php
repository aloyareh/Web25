<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <a href="logout.php">logout</a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>Halo <?= $_SESSION["username"]; ?> </h1>
</body>
</html>