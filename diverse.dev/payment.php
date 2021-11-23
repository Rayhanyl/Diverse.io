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
            <p>
              Transfer to the account below for product payment:
            </p>
            <p class="bg-warning" style="border-radius:5px; font-weight: bold;">
              BNI: 2627568920 / BCA: 4567283974
            </p>
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
    <div class="col-xl">
      <div class="row">
        <?php while($row = $data->fetch_assoc()) { ?>
        <div class="col-md pt-4 animate__animated animate__backInUp">
            <hr style="background-color: #457b9d; height:1px; border-radius: 50px;">
            <img class="img-thumbnail" src="assets/img/product/<?php echo htmlentities($row['picture_prdct']);?>" width="200">
            <hr style="background-color: #457b9d; height:1px; border-radius: 50px;">
        </div>
        <div class="col-md-7 animate__animated animate__backInLeft">
          <hr style="background-color: #457b9d; height:1px; border-radius: 50px;">
          <p style="font-size:18px; color:#495057; font-weight: bold;"><?= $row['product_name']?></p>
          <p style="font-size:16px; color:#6c757d; "><i><?= $row['type']?></i></p>
          <p  style="font-size:20px; font-weight:bold;">Rp.<?= $row['harga']?>.,</p>
          <p>Decription:</p>
          <p><?= $row['deskripsi']?></p>
          <hr style="background-color: #457b9d; height:1px; border-radius: 50px;">
        </div>
      <?php }?>
      </div>
    </div>
    <div class="col-xl animate__animated animate__backInRight">
      <form action="proses_input.php" method="POST">
        <div class="row">
          <div class="col-md">
            <hr style="background-color: #457b9d; height:1px; border-radius: 50px;">
        <div class="form-group">
          <label style="font-size:16px;"><i>Customer:</i></label>
          <input class="form-control" type="text" name="name" value="<?php echo $_SESSION['name'];?>" style="width:auto;" disabled>
        </div>
        <div class="form-group">
          <label style="font-size:16px;"><i>Email:</i></label>
          <input class="form-control" type="text" name="email" value="<?php echo $_SESSION['email'];?>" style="width:auto;" disabled>
        </div>
        <div class="form-group">
          <label style="font-size:16px;"><i>Phone Number:</i></label>
          <input class="form-control" type="text" name="no_tlp" value="+<?php echo $_SESSION['no_tlp'];?>" style="width:auto;" disabled>
        </div>
        <hr style="background-color: #457b9d; height:1px; border-radius: 50px;">
          </div>
          <div class="col-md">
            <hr style="background-color: #457b9d; height:1px; border-radius: 50px;">
          <label style="font-size:16px;"><i>Address:</i></label>
          <p name="address">
            <?php echo $_SESSION['address'];?>
          </p>
          <hr style="background-color: #457b9d; height:1px; border-radius: 50px;">
          </div>
        <input type="hidden" name="picture" value="picture"/>
        <input type="hidden" name="id_product" value="<?= $_GET['id_product'] ?>">
        <button type="submit" class="btn btn-success" name="confirm" value="submit"><i class="fas fa-shopping-cart"> Buy</i></button>
        </div>
      </form>
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


