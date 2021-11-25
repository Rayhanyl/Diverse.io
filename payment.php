<?php include ('templates/header.php'); ?>

<!-- Query Get ID Product -->
<?php 
$data = $conn->query("SELECT * FROM tb_product INNER JOIN tb_category ON tb_product.category = tb_category.id_category where id_product='".$_GET['id_product']."'");
?>
<!-- Query Get ID Product -->

	<!-- Bagian Payment -->
  <div style="margin-top:210px;padding:5px 5px;">

  	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid animate__animated animate__backInLeft" 
	style="  background-image:linear-gradient(to left, #90e0ef, #caf0f8, #edf2f4); border-radius:15px;">
	  <div class="container">
	    <h1><b><i>Payment</i></b></h1>      
	    <p>Transfer to the account below for product payment:</p>
	    <p style="border-radius:5px; font-weight: bold;"> <i class="fas fa-credit-card"></i> 
	    BCA : 2621465732 / OVO : 082112440715 / DANA: 082112440715
		</p>
	  </div>
	</div>
	<!-- Jumbotron -->

	<!-- Pembayaran Product -->
	<div class="container">
	<h1>Payment Data</h1>
		<div class="row mt-4">
			<div class="col-xl">
				<form action="payment_proses.php" method="POST">
					<div class="form-group">
						<label>Customer:</label>
						<input class="form-control" type="text" name="name" value="<?php echo $_SESSION['name_user'];?>" disabled>
					</div>

					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label>Email:</label>
								<input class="form-control" type="text" name="email" value="<?php echo $_SESSION['email'];?>" disabled>
							</div>	
						</div>
						<div class="col-md">
								<div class="form-group">
								<label>Phone Number:</label>
								<input class="form-control" type="text" name="phone" value="<?php echo $_SESSION['phone'];?>" disabled>
							</div>	
						</div>
					</div>

					<div class="form-group">
						<label>Address:</label>
						<textarea class="form-control justify" type="text" rows="2" name="pay_address" placeholder="Enter Address"></textarea>
						<!-- <input class="form-control" type="text" name="pay_address" > -->
					</div>
					<div class="form-group">
						<label>Option Payment:</label>
						<select class="form-control" name="pay_option">
							<option>--Please select payment option--</option>
							<option value="Transfer Bank"><i style="font-weight:bold;">BCA: 2621465732</i></option>
							<option value="OVO">OVO	: 082112440715</option>
							<option value="DANA">DANA: 082112440715</option>
						</select>
					</div>
					<input type="hidden" name="pay_picture" value="picture"/>
			        <input type="hidden" name="id_product" value="<?= $_GET['id_product'] ?>">
			        <button type="submit" class="btn btn-success" name="confirm" value="submit" style="width:100%;">
			        	<i class="fas fa-shopping-cart"> Buy</i>
			        </button>
				</form>
			</div>
			<div class="col-xl">
				<hr style=" border: 0; height: 2px; border-radius:25px; background-image: linear-gradient(to right, #d9dcd6, #03045e, #d9dcd6);">
			    	<div class="d-flex pl-5" style="background-image:linear-gradient(to right, #90e0ef, #caf0f8, #edf2f4); border-radius:10px;">
			    <?php while($row = $data->fetch_assoc()) { ?>	
					  <div class="p-2">
					  	<p style="font-size:18px;"><b><?= $row['product_name'];?></b></p>
					  	<p style="font-size:15px;"><i><?= $row['category'];?></i></p>
					  	<p class="max title" style="font-size:13px;"><?= $row['product_decs'];?></p>
					<p style="font-size:12px; color:#6c757d;"><i class="fas fa-map-marked-alt"></i> <?=$row ['location'];?></p>
					<p style="font-size:12px; color:#6c757d;"><i class="fas fa-building"></i> <?=$row ['company'];?></p>
					  	<p style="font-size:20px;"><b><i>Rp.<?= $row['product_price'];?></i></b></p>
					  </div>
					  <div class="p-2 flex-grow-1 text-center">
					  	<img class="img-thumbnail" src="assets/img/product/<?php echo htmlentities($row['product_picture']);?>" width="200">
					  </div>
					</div>
			    <?php }?>
			   	<hr style=" border: 0; height: 2px; border-radius:25px; background-image: linear-gradient(to right, #d9dcd6, #03045e, #d9dcd6);">
			</div>
		</div>
	</div>
	<!-- Pembayaran Product -->

	<div style="margin:20px 10px; height:20px;">
		
	</div>


  </div>
	<!-- Bagian Payment -->

<?php include ('templates/footer.php'); ?>