<?php include ('templates/header.php'); ?>
<?php include ('db/db.php'); ?>

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
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name Product</th>
        <th>Price</th>
        <th>Username</th>
        <th>Email</th>
        <th>No Telephone</th>
        <th>Payment Recipt</th>
        <th>Status</th>
        <th>Verification</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $data = $conn->query("SELECT * FROM tb_booking INNER JOIN tb_product ON tb_booking.product = tb_product.id_product INNER JOIN tb_user ON tb_booking.user = tb_user.id_user");
    while($row = $data->fetch_assoc()) {
    ?>
      <tr>
        <td><?= $row['nama'];?></td>
        <td>Rp.<?= $row['harga'];?>.,/10pax</td>
        <td><?= $row['username'];?></td>
        <td><?= $row['email'];?></td>
        <td><?= $row['no_tlp'];?></td>
        <td>
        <img src="image/bukti/<?php echo htmlentities($row['picture']);?>" width="70" height="70">
      </td>
        <td><?= $row['status'];?></td>
        <td>
        <a href="c_edit.php?id_book=<?= $row['id_book'] ?>" class="btn btn-sm btn-primary">
          <i class="fa fas fa-edit"></i>
        </a>
        <a onclick="deleteData(<?= $row['id_book'] ?>)" class="btn btn-sm btn-danger"
        style="color:#fff;cursor:pointer"><i class="fa fas fa-trash"></i></a>
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
    function deletData(id_book) {
      var r = confirm("Anda yakin ingin hapus data pembelian?");
      if (r == true) {
        location.href = "proses_update.php?aksi=hapus&id_book=" + id_book;
      }
    }
  </script>
  <?php include ('templates/footer.php'); ?>
 