<?php
include ('db/db.php');
session_start();

		$image1=$_FILES["img1"]["name"];
		$newimg1 = date('dmYHis').$image1;
		$id_payment = $_POST['id_payment'];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"assets/img/bukti/".$newimg1);

		$sql="UPDATE tb_payment SET pay_picture='$newimg1', pay_status='Waiting For Confirmation' WHERE id_payment='$id_payment'";
		$lastInsertId = mysqli_query($conn, $sql);
		if($lastInsertId){
			echo "<script>alert('Upload Bukti Pembayaran Berhasil!');</script>";
			echo "<script type='text/javascript'> document.location = 'purchase.php'; </script>";
		}else {
			echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
			echo "<script type='text/javascript'> document.location = 'upload_recipt.php'; </script>";
		}
?>

