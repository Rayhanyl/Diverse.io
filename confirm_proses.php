<?php
include ('db/db.php');
session_start();

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

    // ambil data dari formulir
    $id_payment = $_POST['id_payment'];
    $product = $_POST['product'];
    $user = $_POST['user'];
    $pay_address = $_POST['pay_address'];
    $pay_option = $_POST['pay_option'];
    $pay_status = $_POST['pay_status'];
    $pay_picture = $_POST['pay_picture'];

    // buat query update
    $sql = "UPDATE tb_payment SET product='$product', user='$user', pay_address='$pay_address', pay_option='$pay_option',pay_status='$pay_status' WHERE id_payment=$id_payment";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: confirm.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
