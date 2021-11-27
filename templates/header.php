<?php include ('db/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Diverse.io</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/shope.css">
  <link href="assets/css/fontawesome/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!--load all styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
session_start()
?>
<body>
  <!-- Header -->
  <!-- Navbar -->
  <div id="navbar">
    <a class="animate__animated animate__backInLeft" href="#default" id="logo">Diserve.IO</a>
    <div class="animate__animated animate__fadeInUp animate__delay-1s" id="navbar-right">
      <a href="index.php"><i class="fas fa-home "></i> Home</a>
      <a href="shop.php"><i class="fab fa-shopify "></i> Shop</a>
      <a href="scan.php"><i class="fas fa-qrcode "></i> Scan</a>
      <a href="info.php"><i class="fas fa-info-circle "></i> Info</a>
      <a href="help.php"><i class="fas fa-question "></i> Help</a>
      <?php if (empty($_SESSION['role'])){ ?>
      <a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-sign-in-alt"></i> Login</a>
      <?php } else { ?>
      <?php if ($_SESSION['role'] == 'admin'){ ?>
            <a href="confirm.php"><i class="fas fa-clipboard-check"></i></i> Confirm</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      <?php } else { ?>
      <?php if ($_SESSION['role'] == 'user'){ ?>
        <a href="purchase.php"><i class="fas fa-shopping-basket"></i> purchase</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      <?php } } }?>
    </div>
  </div>
  <!-- Navbar -->


  <!-- Login Form -->
  <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Welcome</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="logind.php" method="post">
          <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="username">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
          </div>
          <button type="submit" value="LOGIN" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#regist">Register</button>
        </form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
  <!-- Login Form -->

<!-- Regist Form -->
<div class="modal" id="regist">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Regist Here!</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="register.php" method="post">
          <!-- Row 1 -->
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="name">Username:</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username">
              </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password">
              </div>
            </div>
          </div>
           <!-- Row 1 -->
           <!-- Row 2 -->
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="name_user">Name:</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name_user">
              </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
              </div>
            </div>
          </div>
           <!-- Row 2 -->
           <!-- Row 3 -->
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter nomer 821.." name="phone">
              </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" placeholder="Enter Address" name="address">
              </div>
            </div>
          </div>
          <input type="text" name="role" value="user" hidden>
          <button type="submit" name="register" class="btn btn-primary" value="Daftar">Register</button>
           <!-- Row 3 -->
        </form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- Regist Form -->

                                          <!-- BAGIAN FORM LAMA -->
          <!-- <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
          </div>
          <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" placeholder="Enter Username" name="username">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter Email" name="email">
          </div>
          <div class="form-group">
            <label for="no_tlp">Phone Number</label>
            <input type="text" class="form-control" placeholder="Enter nomer 62.." name="no_tlp">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" placeholder="Enter Address" name="address">
          </div>
          <input type="text" name="role" value="user" hidden>
          <button type="submit" name="register" class="btn btn-primary" value="Daftar">Register</button> -->