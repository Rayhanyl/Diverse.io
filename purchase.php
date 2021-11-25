<?php include ('templates/header.php'); ?>

 <!-- Content Header -->
  <div style="margin-top:210px;padding:10px 10px;">
    <div class="jumbotron" style="background-image:linear-gradient(to left, #90e0ef, #caf0f8, #edf2f4);">
      <div class="container">
        <h2>Procedure Of Payment!</h2>
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#Bank">Bank</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#OVO">OVO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#Dana">Dana</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div id="Bank" class="container tab-pane active"><br>
            <h3>Bank Transfer</h3>
            <p class="justify">
              <li>On the checkout page, click Pay</li>
              <li>You will be presented with three links for your payment. Click Bank Transfer</li>
              <li>You will be given the information regarding our account number for your payment and the amount of your purchase</li>
              <li>After you transferred the money to our account, you will need to upload your payment invoice to our website to confirm your payment, and enter a code that will be sent to your phone. The code will be able to be used for 24 hours.</li>
            </p>
          </div>
          <div id="OVO" class="container tab-pane fade"><br>
            <h3>OVO</h3>
            <p class="justify">
              <li>On the checkout page, click Pay</li>
              <li>You will be presented with three links for your payment. Click OVO</li>
              <li>You will be given the information regarding our account number for your payment and the amount of your purchase</li>
              <li>After you transferred the money to our account, you will need to upload your payment invoice to our website to confirm your payment, and enter a code that will be sent to your phone. The code will be able to be used for 24 hours.</li>
            </p>
          </div>
          <div id="Dana" class="container tab-pane fade"><br>
            <h3>Dana</h3>
            <p class="justify">
              <li>On the checkout page, click Pay</li>
              <li>You will be presented with three links for your payment. Click Dana</li>
              <li>You will be given the information regarding our account number for your payment and the amount of your purchase</li>
              <li>After you transferred the money to our account, you will need to upload your payment invoice to our website to confirm your payment, and enter a code that will be sent to your phone. The code will be able to be used for 24 hours.</li>
            </p>
          </div>
        </div>
      </div>
    </div>
  <hr>
  <p style="font-size: 25px;"><i><strong>purchased items</strong></i></p>            
  <table class="table table-striped" style="font-size:15px;">
    <thead>
      <tr class="text-center">
        <th>Customer</th>
        <th>No Telephone</th>
        <th>Address</th>
        <th>Product</th>
        <th>Price</th>
        <th>Payment</th>
        <th>Recipt</th>
        <th>Status</th>
        <th>Enter Recipt</th>
      </tr>
    </thead>
    <tbody>
    <?php 
$data = $conn->query("SELECT * FROM tb_payment INNER JOIN tb_product ON tb_payment.product = tb_product.id_product 
                    INNER JOIN tb_user ON tb_payment.user = tb_user.id_user WHERE user='".$_SESSION['id_user']."'");
  while($row = $data->fetch_assoc()) {
?>
      <tr class="text-center">
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
        <td>
        <center><a href="purchase_recipt.php?id_payment=<?= $row['id_payment'] ?>" class="btn btn-sm btn-primary">
          <i class="fa fas fa-edit"></i>
        </a></center>
        </a>
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
  <?php include ('templates/footer.php'); ?>