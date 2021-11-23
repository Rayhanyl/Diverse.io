<?php include ('templates/header.php'); ?>
<?php include ('db/db.php'); ?>

 <!-- Content Header -->
  <div style="margin-top:210px;padding:15px 15px;">
    <div class="container">
      <div class="row">
        <div class="col-lg">
          <div class="container">
            <p style="font-size:40px;"><b><i>Choices of Our Subscription Boxes.</i></b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content Header -->

    <!-- Barrier -->
  <div class="container">
    <div class="pembatas">
    </div>
  </div>
  <!-- Barrier -->

  <!-- Features -->
  <div class="container">
    <div class="row">
    	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
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
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>

  <!-- Barrier -->
  <div class="container">
    <div class="pembatas">
      <hr>
    </div>
  </div>
  <!-- Barrier -->

  <div class="container">
    <div class="row">
<?php 
$data = $conn->query("SELECT * FROM tb_product INNER JOIN tb_type ON tb_product.type = tb_type.id_type");
  while($row = $data->fetch_assoc()) {
?>
          <div class="col-lg-3 mt-4 mb-4">
            <div class="card" style="border-radius:15px;">
              <img class="responsive rounded-circle" src="assets/img/product/<?php echo htmlentities($row['picture_prdct']);?>">
              <div class="card-body">
                <div class="card-title"><strong><?= $row['product_name']?></strong></div>
                <hr>
                <p class="card-text justify" style="font-size:10px;"><?= $row['deskripsi']?></p>
              </div>
              <div class="card-footer">
                <p class="card-text"><strong>Rp.</strong><?= $row['harga']?>., /10Pax</p>
                <?php if (empty($_SESSION['role'])){ ?>
                  <a data-toggle="modal" data-target="#myModal"><i class="fas fa-shopping-cart" > Buy</i></a>
                <?php } else { ?>
                <?php if ($_SESSION['role'] == 'admin'){ ?>
                  <a><i class="fas fa-shopping-cart">
                  Buy</i></a>
                  <?php } else { ?>
                  <?php if ($_SESSION['role'] == 'user'){ ?>
                  <a href="payment.php?id_product=<?=$row['id_product']?>"><i class="fas fa-shopping-cart"> Buy</i></a>
                  <?php } } }?>
              </div>
            </div>
          </div>
<?php } ?>
    </div>
  </div>
<?php include ('templates/footer.php'); ?>