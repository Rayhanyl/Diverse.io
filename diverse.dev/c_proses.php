<?php
include ('db/db.php');
session_start();

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

    // ambil data dari formulir
    $id_book = $_POST['id_book'];
    $product = $_POST['product'];
    $user = $_POST['user'];
    $status = $_POST['status'];
    $foto = $_POST['foto'];

    // buat query update
    $sql = "UPDATE tb_booking SET product='$product', user='$user', status='$status' WHERE id_book=$id_book";
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

?>
