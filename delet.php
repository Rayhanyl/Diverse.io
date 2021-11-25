<?php
if ($aksi == 'hapus') {
    $id_payment = $_GET['id_payment'];
    $hapus = $conn->query('DELETE FROM tb_payment WHERE id_payment="'.$id_payment.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "confirm.php"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
?>