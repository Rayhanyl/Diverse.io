<?php include ('templates/header.php'); ?>
<?php include ('db/db.php'); ?>
<?php 
$data = $conn->query("SELECT * FROM tb_product INNER JOIN tb_type ON tb_product.type = tb_type.id_type where id_product='".$_GET['id_product']."'");
?>
 <!-- Content Header -->

  <div style="margin-top:210px;padding:5px 5px;">
    <div class="container">
      <div class="row">
        <div class="col-lg">
          <div class="container">
            <p style="font-size:40px;"><b><i>Payment</i></b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content Header -->
  <hr>
<!-- Form Payment -->
<div class="container">
  <div class="row">
    <div class="col-lg">
      <div class="card" style="border-radius:15px; background-color:#d7e3fc;">
        <div class="card-body">
          <form action="proses_input.php" method="POST">
            <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" class="form-control" value="<?php echo $_SESSION['username'];?>" disabled>
              </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label>Accept Payment</label>
                <p><strong>BNI</strong> No.Rek 26287654098</p>
              </div>
            </div>
            </div>
            <!--  -->
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="no_tlp">No Telephone:</label>
                <input type="text" class="form-control" placeholder="Enter No Telephone 62.." value="<?php echo $_SESSION['no_tlp'];?>" disabled>
              </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter Email" value="<?php echo $_SESSION['email'];?>" disabled>
              </div>
              <input type="hidden" name="foto" value="picture"/>
              <input type="hidden" name="id_product" value="<?= $_GET['id_product'] ?>">
            </div>
            </div>
              <hr>
            <button type="submit" class="btn btn-success" name="confirm" value="submit"><i class="fas fa-shopping-cart"> Buy</i></button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg">
      <div class="card" style="border-radius:15px; padding: 8px 5px 5px 8px; background-color:#d7e3fc;">
        <div class="row">
        <?php while($row = $data->fetch_assoc()) { ?>
          <div class="header">
            <img class="responsive rounded-circle mx-auto d-block" src="assets/img/product/<?php echo htmlentities($row['picture']);?>">
          </div>
        <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Form Payment -->
<hr>
  <!-- Barrier -->
  <div class="container">
    <div class="pembatas">
    </div>
  </div>
  <!-- Barrier -->
<?php include ('templates/footer.php'); ?>


