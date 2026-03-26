<?php
    include "koneksi.php"; //wajib ada jika mau berinteraksi dengan databse
    // require "koneksi.php";

    //menangkap data inputan
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //manggil data dari database
    $query = mysqli_query($koneksi, 
        "SELECT * FROM users WHERE username = '$user'");
    
    //menyimpan data yang diambil dari query di atas dalam bentuk array
    $data = mysqli_fetch_array($query);

    if ($data != NULL) { // apakah data itu ada?
        if ($data['password'] == $pass) { //jika data ada, cek pw
            echo "Halo $user";
        } else {
            echo "Password salah";// jika pw berbeda
        }
    } else {
        echo "Akun tidak ditemukan"; //jika data tidak ditemukan
    }
?>