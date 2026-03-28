<?php 
session_start();
require 'koneksi.php';

//kalau sudah login tetep di index
if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}

//cek user udh pencet login atau blm
if(isset($_POST["login"])){
    require "process.php";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <form action=" " method="post">
        <label for="username">Username</label> <br>
        <input type="text" name="username" id="username"> <br><br>

        <label for="password">Password</label> <br>
        <input type="text" name="password" id="password"> <br><br>

        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>