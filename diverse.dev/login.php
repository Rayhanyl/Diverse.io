<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'db/db.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from tb_user where username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    
    if($password==$data['password']){
        // cek jika user login sebagai admin
        if($data['role']=="admin"){
 
            $_SESSION['username'] = $data['username'];
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['no_tlp'] = $data['no_tlp'];
            $_SESSION['role'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:index.php");
    
        // cek jika user login sebagai user
        }else if($data['role']=="user"){
            // buat session login dan username
            $_SESSION['username'] = $data['username'];
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['no_tlp'] = $data['no_tlp'];
            $_SESSION['role'] = "user";
            // alihkan ke halaman dashboard user
            header("location:index.php");
    
        }
    }else{
        // alihkan ke halaman login kembali
        // header("location:index.php?pesan=gagal_password salah");
    }
 }
?>

