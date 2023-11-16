<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

  <title>Vendora - Product Detail</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/tooplate-main.css">
  <link rel="stylesheet" href="../assets/css/owl.css">
  <link rel="stylesheet" href="../assets/css/flex-slider.css">
  <!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
</head>

<body style="margin: 0;">
  <div id="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <span>Selamat datang di store kami</span>
        </div>
      </div>
    </div>
  </div>

    <?php
    include '../koneksi.php';

    $produk = mysqli_query($conn, "SELECT * from produk where id='$_GET[id]'");

    while ($p = mysqli_fetch_array($produk)) {
        $id = $p["id"];
        $nama_produk = $p["nama_produk"];
        $image = $p["image"];
        $harga = $p["harga"];
        $id_gender = $p["id_brand"];
        $id_ukuran = $p["id_size"];
        $id_status = $p["id_status"];
    }

    ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="../assets/images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <!-- Single Starts Here -->
  <div class="single-product">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="left-images">
            <img src="<?php echo $image ?>" alt="">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="right-content">
            <h4>
              <?php echo $nama_produk ?>
            </h4>
            <span>
              <?php echo rupiah($harga); ?>
            </span>
            <span>Casual shoes that give a luxurious impression and are guaranteed to be original</span>
            <div class="quote">
              <p>Order sekarang, nikmati discount 20% di awal bulan.</p>
            </div>
            <div class="quantity-content">
              <div class="left-content">
                <h6>Jumlah</h6>
              </div>
              <div class="right-content">
                <div class="quantity buttons_added">
                  <input type="button" value="-" class="minus">
                  <input id="quantity" type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty"
                    class="input-text qty text" size="4" pattern="" inputmode="">
                  <input type="button" value="+" class="plus">
                </div>
              </div>
            </div>

            <div class="total">
              <h4>Total:
                <input type="hidden" id="hargaSatuan" value="<?php echo $harga; ?>">
                <span id="rupiah">
                  <?php echo rupiah($harga) ?>
                </span>
              </h4>
              <br><br>
              <div class="main-border-button"><a href="#">Masukan keranjang</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Single Page Ends Here -->


  <!-- Similar Starts Here -->
  <div class="featured-items">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h1>You May Also Like</h1>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-carousel owl-theme">
            <a href="single-product.html">
              <div class="featured-item">
                <img src="../assets/images/item-01.jpg" alt="Item 1">
                <h4>Proin vel ligula</h4>
                <h6>$15.00</h6>
              </div>
            </a>
            <a href="single-product.html">
              <div class="featured-item">
                <img src="../assets/images/item-02.jpg" alt="Item 2">
                <h4>Erat odio rhoncus</h4>
                <h6>$25.00</h6>
              </div>
            </a>
            <a href="single-product.html">
              <div class="featured-item">
                <img src="../assets/images/item-03.jpg" alt="Item 3">
                <h4>Integer vel turpis</h4>
                <h6>$35.00</h6>
              </div>
            </a>
            <a href="single-product.html">
              <div class="featured-item">
                <img src="../assets/images/item-04.jpg" alt="Item 4">
                <h4>Sed purus quam</h4>
                <h6>$45.00</h6>
              </div>
            </a>
            <a href="single-product.html">
              <div class="featured-item">
                <img src="../assets/images/item-05.jpg" alt="Item 5">
                <h4>Morbi aliquet</h4>
                <h6>$55.00</h6>
              </div>
            </a>
            <a href="single-product.html">
              <div class="featured-item">
                <img src="../assets/images/item-06.jpg" alt="Item 6">
                <h4>Urna ac diam</h4>
                <h6>$65.00</h6>
              </div>
            </a>
            <a href="single-product.html">
              <div class="featured-item">
                <img src="../assets/images/item-04.jpg" alt="Item 7">
                <h4>Proin eget imperdiet</h4>
                <h6>$75.00</h6>
              </div>
            </a>
            <a href="single-product.html">
              <div class="featured-item">
                <img src="../assets/images/item-05.jpg" alt="Item 8">
                <h4>Nullam risus nisl</h4>
                <h6>$85.00</h6>
              </div>
            </a>
            <a href="single-product.html">
              <div class="featured-item">
                <img src="../assets/images/item-06.jpg" alt="Item 9">
                <h4>Cras tempus</h4>
                <h6>$95.00</h6>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Similar Ends Here -->


  <!-- Subscribe Form Starts Here -->
  <div class="subscribe-form">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h1>Subscribe on Vendora-Store now!</h1>
          </div>
        </div>
        <div class="col-md-8 offset-md-2">
          <div class="main-content">
            <p>If you have questions about our products and want to enjoy certain discounts, you can
              follow us on social
              media or send your email now</p>
            <div class="container">
              <form id="subscribe" action="" method="get">
                <div class="row">
                  <div class="col-md-7">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email"
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }"
                        onBlur="if(this.value == '') { this.value = 'Your Email...';}" value="Your Email..."
                        required="">
                    </fieldset>
                  </div>
                  <div class="col-md-5">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Subscribe
                        Now!</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Subscribe Form Ends Here -->



  <!-- Footer Starts Here -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="logo">
            <img src="../assets/images/logo.png" alt="">
          </div>
        </div>
        <div class="col-md-12">
          <div class="footer-menu">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">How It Works ?</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-12">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Ends Here -->


  <!-- Sub Footer Starts Here -->
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-text">
            <p>Vendora &copy; Your Website 2023
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sub Footer Ends Here -->


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/owl.js"></script>
  <script src="../assets/js/isotope.js"></script>
  <script src="../assets/js/flex-slider.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>


</body>

</html>