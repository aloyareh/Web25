<?php
    $hostname = 'localhost'; // database yang mau diunnakan berada pada komputer yang sama dengan kodenya
    $username = 'root'; //defaultnya root, jika diganti disesuaiin sama punya masing masing
    $password = ''; //defaultnya kosong, jika ada silakan diisi 
    $database = 'tiket_bioskop'; //nama databse yang mau digunakan 
    // ada variabel untuk port
    // ada variabel untuk socket, dipake buat ganti port

    $koneksi = new mysqli($hostname, $username, $password, $database);

    //bikin pengendalian 
    if ($koneksi->connect_error) {
        die('Maaf, koneksi gagal: ' . $koneksi->connect_error);
    }

    // jika koneksi gagal, maka proses dihentikan 
    // dan menampilkan pesan "maaf, koneksi gagal: " diikuti alasan teknis kenapa gagal
    // kalau berhasil tidak akan menampilkan apapun (blank)

    // -> digunakan untuk ngecek 
    // => ditemukan dalam array
?>

