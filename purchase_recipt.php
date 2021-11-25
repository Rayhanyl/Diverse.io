<?php include ('templates/header.php'); ?>

<?php
$data = $conn->query('SELECT * FROM tb_payment INNER JOIN tb_product ON tb_payment.product = tb_product.id_product INNER JOIN tb_user ON tb_payment.user = tb_user.id_user WHERE id_payment="'.$_GET['id_payment'].'"');
$row = $data->fetch_assoc()
?>


<div style="margin-top:210px;padding:10px 10px;">
	<div style="margin-top:50px;"></div>
	<div class="container">
		<div>
			<p style="font-size:18; font-weight:bold;"> <a href="purchase.php"><i class="fas fa-arrow-left"></i> Kembali</a></p>
		</div>
		<div class="card">
			<div class="card-header">
				<p class="card-title">
					<strong><h4><i>Insert Payment Recipt Picture</i></h4></strong>
					<p><h6>You pay with <?= $row['pay_option'];?></h6></p>
				</p>
			</div>
			<div class="card-body">
				<form action="upload_recipt.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id_payment" value="<?php echo $row['id_payment'] ?>"/>
					<input type="hidden" name="product" value="<?php echo $row['product'] ?>" readonly/>
					<input type="hidden" name="user" value="<?php echo $row['user'] ?>"readonly />
					<input type="hidden" name="pay_address" value="<?php echo $row['pay_address'] ?>" readonly/>
					<input type="hidden" name="pay_option" value="<?php echo $row['pay_option'] ?>"readonly />
					<div class="form-group">
						<input class="form-control" type="file" name="img1" accept="image/*" required>
					</div>
					  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
	<div style="margin-top:50px;"></div>

  <?php include ('templates/footer.php'); ?>