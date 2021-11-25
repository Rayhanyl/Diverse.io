<?php include ('templates/header.php'); ?>

 <!-- Content Header -->
  <div style="margin-top:210px;padding:10px 10px;">
  <div class="jumbotron" style="  background-image:linear-gradient(to left, #90e0ef, #caf0f8, #edf2f4);">
          <h1>How to change payment status!</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
  <hr>
  <p style="font-size: 25px;"><i><strong>purchased items</strong></i></p>            
  <table class="table table-striped" style="font-size:15px;">
    <thead>
      <tr>
        <th>Customer</th>
        <th>No Telephone</th>
        <th>Address</th>
        <th>Product</th>
        <th>Price</th>
        <th>Payment</th>
        <th>Recipt</th>
        <th>Status</th>
        <th>Verification</th>
      </tr>
    </thead>
    <tbody>
    <?php 
$data = $conn->query("SELECT * FROM tb_payment INNER JOIN tb_product ON tb_payment.product = tb_product.id_product INNER JOIN tb_user ON tb_payment.user = tb_user.id_user ");
      while($row = $data->fetch_assoc()) {
?>
      <tr>
        <td><?= $row['name_user'];?></td>
        <td>+62<?= $row['phone'];?></td>
        <td class="justify"><?= $row['pay_address'];?></td>
        <td class="max title"><?= $row['product_name'];?></td>
        <td>Rp.<?= $row['product_price'];?></td>
        <td><?= $row['pay_option'];?></td>
        <td>
          <img src="assets/img/bukti/<?php echo htmlentities($row['pay_picture']);?>" width="70" height="70">
        </td>
        <td><?= $row['pay_status'];?></td>
        <td class="text-center">
        <a href="confirm_status.php?id_payment=<?= $row['id_payment'] ?>" class="btn btn-sm btn-primary">
          <i class="fa fas fa-edit"></i>
        </a>
<!--         <a onclick="deleteData(<?= $row['id_payment'] ?>)" class="btn btn-sm btn-danger"
        style="color:#fff;cursor:pointer"><i class="fa fas fa-trash"></i></a> -->
        </td>
      </tr>
      <?php }?>
    </tbody>
  </table>

</div>
  </div>
  <!-- Content Header -->

  <!-- Barrier -->
  <div class="container">
    <div class="pembatas">
    </div>
  </div>
  <!-- Barrier -->

  <script>
    function deletData(id_payment) {
      var r = confirm("Anda yakin ingin hapus data pembelian?");
      if (r == true) {
        location.href = "delet.php?aksi=hapus&id_payment=" + id_payment;
      }
    }
  </script>
  <?php include ('templates/footer.php'); ?>
 