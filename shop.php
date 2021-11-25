<?php include ('templates/header.php'); ?>

<!-- Bagian Shope -->
<div style="margin-top:210px;padding:15px 15px;">
	
	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid animate__animated animate__backInLeft" 
	style="  background-image:linear-gradient(to left, #90e0ef, #caf0f8, #edf2f4); border-radius:15px;">
	  <div class="container">
	    <h1><b><i>Choices of Our Subscription Boxes.</i></b></h1>      
	    <p>Featured Products.</p>
	    	<img class="responsive" src="assets/img/Partnership.png" width="400">
	  </div>
	</div>
	<!-- Jumbotron -->

  <div style="margin:7px 7px; width:100%; height:20px;">
  </div>

	<!-- Courosel -->
	  <!-- Features -->
  <div class="container">
    <h1 class="mb-4"><i>Catalog Products</i></h1>
    <div class="row">
    	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner mt-2">
    <div class="carousel-item active">
      <div class="cards-wrapper">
      <div class="card">
        <img src="assets/img/product/1.png" class="card-img-top " alt="Product" width="50">
        <div class="card-body">
          <h5 class="card-title">Charolte Box</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="assets/img/product/2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Emerald Box</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="assets/img/product/3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Verdant Box</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
      <div class="card">
        <img src="assets/img/product/4.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Charolte Box</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="assets/img/product/5.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Emerald Box</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="assets/img/product/6.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Verdant Box</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

    </div>
    </div>
  </div>
  <a class="carousel-control-prev bg-danger" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next bg-success" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
	<!-- Courosel -->

	<div style="margin:7px 7px; width:100%; height:20px;">
	</div>

	<!-- Catalog Product -->
  <div class="container">
    <p>
      <h1><i>Products for sale</i></h1>
      <h7>
        <a href="search.php" style="text-decoration: none !important; color: black;">
          <i>Search Your Product <strong style="color:#ed254e;">Click here!</strong></i> <i class="fas fa-search"></i>
        </a>
      </h7>
    </p>
    <hr class="mb-4" style=" border: 0;
    height: 2px; border-radius:25px;
    background-image: linear-gradient(to right, #ed254e, #ffea00, #37ff8b);">
    <div class="row"> 

    <!-- Query Mengambil data product -->
    <?php 
    $data = $conn->query("SELECT * FROM tb_product INNER JOIN tb_category ON tb_product.category = tb_category.id_category");
      while($row = $data->fetch_assoc()) {
    ?>
    <!-- Query Mengambil data product -->

      <div class="col-md-4 mt-2">
        <div class="card" style="border-radius:15px;">
          <div class="card-header text-center" style="background-color:white;">
            <img class="responsive rounded" src="assets/img/product/<?php echo htmlentities($row['product_picture']);?>">
          </div>
          <div class="card-body">
            <i style="font-size:18px; font-weight: bold;"><?= $row['product_name']?></i>
            <p style="font-size:12px;"><i><?= $row['category']?></i></p>
            <p class="max title"><?= $row['product_decs']?></p>
            <div class="row text-center">
              <div class="col-sm">
                <p>Rp.<?= $row['product_price']?>.</p>
              </div>
              <div class="col-sm">
              <?php if (empty($_SESSION['role'])){ ?>
                <a class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fas fa-shopping-cart" > Buy</i></a>
              <?php } else { ?>
              <?php if ($_SESSION['role'] == 'admin'){ ?>
                <a class="btn btn-success"><i class="fas fa-shopping-cart"> Buy</i></a>
              <?php } else { ?>
              <?php if ($_SESSION['role'] == 'user'){ ?>
                <a href="payment.php?id_product=<?=$row['id_product']?>"><i class="fas fa-shopping-cart"> Buy</i></a>
              <?php } } }?> 
              </div>              
            </div>
          </div>
        </div>
      </div>

      <!-- Tag Penutup -->
      <?php } ?>
      <!-- Tag Penutup -->
    
    </div>
  </div>
	<!-- Catalog Product -->

</div>
<!-- Bagian Shope -->


<?php include ('templates/footer.php'); ?>