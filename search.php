<?php include ('templates/header.php'); ?>

<div style="margin-top:210px;padding:15px 15px;">
	<div class="container">
		<h3>
			<a href="shop.php"style="text-decoration: none !important; color: black;">
				<i class="fas fa-arrow-left"></i> Back To Shop
			</a>
		</h3>
		<div class="row mt-5 mb-4">
			<!-- Input Search Product -->
			<div class="col-lg">
				<form action="#" method="POST">
					<div class="form-group">
						<label><h4><i>Search Product here!</i></h4></label>
						<input class="form-control" type="text" name="search" id="search" placeholder="Type Your Product Name">
					</div>
					<button class="btn btn-success" type="btn" type="submit" name="submit" id="submit" value="CARI" style="width:100%;">
						Search Product <i class="fas fa-search"></i>
					</button>
				</form>
			</div>
			<!-- Input Search Product -->


			<!--  -->
			<?php
			//menampilkan data
				if ((isset($_POST['submit'])) AND ($_POST['search'] <> "")) {
				  $search = $_POST['search'];
				  $sql = mysqli_query($conn, "SELECT * FROM tb_product tb_product INNER JOIN tb_category ON tb_product.category = tb_category.id_category WHERE product_name LIKE '%$search%'") or die(mysql_error());
				    //menampilkan jumlah hasil pencarian
				  $jumlah = mysqli_num_rows($sql); 
				  if ($jumlah > 0) {
				    while ($hasil = $sql->fetch_assoc()){
				        $id_product = stripslashes ($hasil['id_product']);
				        $category = stripslashes ($hasil['category']);
				        $product_name = stripslashes ($hasil['product_name']);
				        $product_price = stripslashes ($hasil['product_price']);
				        $company = stripslashes ($hasil['company']);
				        $location = stripslashes ($hasil['location']);
				        $product_decs = stripslashes ($hasil['product_decs']);
				        $prdct_pos = stripslashes ($hasil['prdct_pos']);
				        $prdct_nev = stripslashes ($hasil['prdct_nev']);
				        $indication = stripslashes ($hasil['indication']);
				        $qr_product = stripslashes ($hasil['qr_product']);
				        $product_picture = stripslashes ($hasil['product_picture']);
				        }
			?>
			<!--  -->

			<!-- Menampilkan Data Product -->
			<div class="col-lg">
				<p style="font-size:14px;"><i class="fas fa-arrow-left"></i> SEARCH ANOTHER PRODUCT</p>
				<p class="justify">
					<h2><?=$product_name?></h2>
					<h5 style="color:#495057;"><?=$category?></h5>
					<p class="pt-2">
						<div class="row">
							<div class="col-md">
								<p class="text-center bg-success" style="border-radius:25px;">
									Positive
									<p class="pl-2" style="color:green;"><?=$prdct_pos?></p>
								</p>
							</div>
							<div class="col-md">
								<p class="text-center bg-danger" style="border-radius:25px;">
									Negative
									<p class="pl-2" style="color:red;"><?=$prdct_nev?></p>
								</p>
							</div>
						</div>
					</p>
					<p class="left" style="color: #6c757d;">
						From our database and analiysis, the product that you search contains
						<?=$prdct_pos?>,<?=$prdct_nev?>. it can be concluded, this product
						is
						<?php
							if($indication == '1'){ ?>
										eco-friendly
							<?php	}else if($indication == '2'){ ?> 
										not eco-friendly
						<?php } ?> 
					</p>
					<hr>
					<p><h5>Rp.<?=$product_price?></h5></p>
					<p style="font-size:13px; color:#6c757d;"><i class="fas fa-map-marked-alt"></i> <?=$location ?></p>
					<p style="font-size:13px; color:#6c757d;"><i class="fas fa-building"></i> <?=$company ?></p>
				</p>
		<?php
			if($indication == '1'){ ?>
					<button class="btn btn-success" style="width:100%;">
						ECO-FRIENDLY CERTIFIED
					</button>
			<?php	}else if($indication == '2'){ ?> 
					<button class="btn btn-danger" style="width:100%;">
						NOT ECO-FRIENDLY CERTIFIED
					</button>	
		<?php	
			}
			?>


			

			</div>
			<!--  -->
<?php
	    }
	    else {
	   // menampilkan pesan zero data
		echo 'Maaf, hasil pencarian tidak ditemukan.';
	    } }
?>
			<!--  -->
		</div>
	</div>
</div>

<?php include ('templates/footer.php'); ?>