<?php
include ('db/db.php');
session_start();

		$image1=$_FILES["img1"]["name"];
		$newimg1 = date('dmYHis').$image1;
		$id_book = $_POST['id_book'];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"image/bukti/".$newimg1);

		$sql="UPDATE tb_booking SET picture='$newimg1', status='Waiting For Confirmation' WHERE id_book='$id_book'";
		$lastInsertId = mysqli_query($conn, $sql);
		if($lastInsertId){
			echo "<script>alert('Upload Bukti Pembayaran Berhasil!');</script>";
			echo "<script type='text/javascript'> document.location = 'purchase.php'; </script>";
		}else {
			echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
			echo "<script type='text/javascript'> document.location = 'p_edit.php'; </script>";
		}
?>

