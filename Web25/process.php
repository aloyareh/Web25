<?php
    session_start();
    include "koneksi.php"; //wajib ada jika mau berinteraksi dengan databse
    // require "koneksi.php";

    //menangkap data inputan
    $user = $_POST['username']??'';
    $pass = $_POST['password']??'';

    //simpan data ke session
    $_SESSION["username"] = $user;
    $_SESSION["password"] = $pass;


    //manggil data dari database
    $query = mysqli_query($koneksi, 
        "SELECT * FROM users WHERE username = '$user'");
    
    //menyimpan data yang diambil dari query di atas dalam bentuk array
    $data = mysqli_fetch_array($query);

    global $data;
    if ($data != NULL) { // apakah data itu ada?
        if ($data['password'] == $pass) {
            $_SESSION["login"] = true; //jika data ada, cek pw
            header("location: index.php");
        } else {
            echo "Password salah";// jika pw berbeda
        }
    } else {
        echo "Akun tidak ditemukan"; //jika data tidak ditemukan
    }
?>