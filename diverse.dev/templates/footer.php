<!-- Footer -->
<div class="footer">
  <div class="container">
    <div class="foot-img pt-2">
      <?php if (empty($_SESSION['role'])){ ?>
        <p class="p-1"><strong>Diverse.IO</strong></p>
      <?php } else { ?>
      <?php if ($_SESSION['role'] == 'admin'){ ?>
      <p class="p-1"><b><?php echo $_SESSION['name'];?></b></p>
      <?php } else { ?>
      <?php if ($_SESSION['role'] == 'user'){ ?>
      <p class="p-1"><b><?php echo $_SESSION['name'];?></b></p>
      <?php } } }?>
    </div>
    <div class="foot-content">
      <div class="d-flex flex-row">
          <div class="p-1">Scan Now</div>
          <div class="p-1">Shop Now</div>
      </div>
      <div class="d-flex flex-row">
          <div class="p-1">About</div>
          <div class="p-1">Features</div>
          <div class="p-1">Pricing</div>
          <div class="p-1">Carrers</div>
          <div class="p-1">Help</div>
          <div class="p-1">Privacy Policy</div>
      </div>
    </div>
    <div><strong>&copy; 2021 Diverse.io All rights servered</strong></div>
  </div>
</div>
<!-- Footer -->
  <!-- Header -->
  <script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "30px 10px";
        document.getElementById("logo").style.fontSize = "25px";
      } else {
        document.getElementById("navbar").style.padding = "80px 10px";
        document.getElementById("logo").style.fontSize = "35px";
      }
    }
  </script>
  <!-- Header -->
</body>
</html>