<?php include ('templates/header.php'); ?>
<?php include ('db/db.php'); ?>

<?php
$data = $conn->query('SELECT * FROM tb_booking INNER JOIN tb_product ON tb_booking.product = tb_product.id_product INNER JOIN tb_user ON tb_booking.user = tb_user.id_user WHERE id_book="'.$_GET['id_book'].'"');
$row = $data->fetch_assoc()
?>


<div style="margin-top:210px;padding:10px 10px;">
	<div style="margin-top:50px;"></div>
	<div class="container">
		<div>
			<p style="font-size:18; font-weight:bold;"> <a href="confirm.php"><i class="fas fa-arrow-left"></i> Kembali</a></p>
		</div>
		<div class="card">
			<div class="card-header">
				<p class="card-title">
					<strong><h4><i>Edit Status</i></h4></strong>
				</p>
			</div>
			<div class="card-body">
				<form action="c_proses.php" method="POST">
					<input type="hidden" name="id_book" value="<?php echo $row['id_book'] ?>" />
					<input type="hidden" name="product" value="<?php echo $row['product'] ?>" />
					<input type="hidden" name="user" value="<?php echo $row['user'] ?>" />
					<input type="hidden" name="foto" value="<?php echo $row['picture'] ?>" readonly/>
					<div class="form-group">
						<label>Status:</label>
						<select class="form-control" name='status'>
							<option value="<?= $row['status'] ?>"><?= $row['status'] ?></option>
							<option value="Already Paid">Already Paid</option>
							<option value="Invalid payment receipt">Invalid payment receipt</option>
						</select>
					</div>

					  <button type="submit" name="update" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
	<div style="margin-top:50px;"></div>

  <?php include ('templates/footer.php'); ?>