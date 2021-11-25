<?php include ('templates/header.php'); ?>

 <!-- Content Header -->
  <div style="margin-top:230px;padding:15px 15px;" >
   <div class="container" id="QR-Code">
    <!-- Panel -->
      <div style="float: right;">
        <h7>
          <a href="search.php" style="text-decoration: none !important; color: black;">
            <i>Search Your Product <strong style="color:#ed254e;">Click here!</strong></i> <i class="fas fa-search"></i>
          </a>
        </h7>
      </div>
    <h1 class="mt-4 mb-4">Scan Product Here</h1>
      <hr style=" border: 0;height: 2px;border-radius:25px;background-image:linear-gradient(to right, #bde0fe, #8093f1, #bde0fe);">
    <div class="panel panel-info">
        <div class="panel-heading">
          <div class="navbar-form navbar-left">
              <h4>Pick Your Camera</h4>
          </div>
          <div class="navbar-form navbar-right">
              <select class="form-control" id="camera-select"></select>
              <div class="form-group pt-2">
                  <button title="Decode Image" class="btn btn-danger btn-sm" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon">Decode QRcode</button>
                  <button title="Image shoot" class="btn btn-info btn-sm disabled" id="grab-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-picture"></span> Image Shoot</button>
                  <button title="Play" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-play">Play Camera</span></button>
               </div>
                <p style="padding-top:20px;padding-left:180px;font-size:20px; font-weight:bold;">Scan Qrcode Here! <i style=" font-size:20px; color:red;" class="fas fa-arrow-down animate__animated animate__bounce animate__infinite  infinite"></i></p>
          </div>
        </div>
      </div>
      <!-- Panel -->
     <div class="row text-center">

          <div class="col-xl pt-4">
            <div class="well" style="position: relative;display: inline-block;">
                <canvas width="420" height="340" id="webcodecam-canvas" style="border-radius:15px;"></canvas>
                <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
            </div>
          </div>
          <div class="col-xl pt-4">
            <div class="thumbnail" id="result">
                <div class="well" style="overflow: hidden; border-radius:25px;">
                    <img class="rounded" width="320" height="240" id="scanned-img" src="">
                </div>
              <hr style=" border: 0;height: 2px;border-radius:25px;background-image:linear-gradient(to right, #bde0fe, #8093f1, #bde0fe);">
                <div class="caption mt-4">
                    <h3>Scanned result</h3>
                    <p id="scanned-QR" 
                    style="padding:5px 5px 5px 5px;font-size:15px;font-family: sans-serif;font-weight: bold;">
                    </p>
                </div>
              <hr style=" border: 0;height: 2px;border-radius:25px;background-image:linear-gradient(to right, #bde0fe, #8093f1, #bde0fe);">
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
    <!-- Vertikal HR -->
<!--       <hr style="border:none;border-left:1px solid hsla(200, 10%, 50%,100);height:400px;width:1px;"> -->
    <!-- Vertikal HR -->

  <?php include ('templates/footer.php'); ?>