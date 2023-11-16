<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Vendora Store</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/tooplate-main.css">
    <link rel="stylesheet" href="../assets/css/owl.css">

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
    $query = mysqli_query($conn, "SELECT * from produk as p join size_produk as zp on p.id_size = zp.id_size join status_produk as sp on p.id_status = sp.id_status ORDER BY p.id ASC;");
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Vans.php">Vans</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Adidas.php">Adidas</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Nike.php">Nike</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Puma.php">Puma</a></li>
                        </ul>
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
    <!-- Items Starts Here -->
    <div class="featured-page">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Featured Items</h1>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <?php
                        if (mysqli_num_rows($query) > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                                if ($data["id_brand"] == '1' && $data["id_status"] == '1') {

                                    ?>
                                    <div class="col-lg-4">
                                        <a href="single-product.php?id=<?php echo $data["id"] ?>">
                                            <div class="item">
                                                <div class="thumb">
                                                    <img src="<?php echo $data["image"] ?>" alt="">
                                                </div>
                                                <div class="down-content">
                                                    <h4>
                                                        <?php echo $data["nama_produk"] ?>
                                                    </h4>
                                                    <span>
                                                        <?php echo rupiah($data["harga"]); ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="page-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li class="current-page"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Featred Page Ends Here -->


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
                                                        onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                                                        value="Your Email..." required="">
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


            <script language="text/Javascript">
                cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
                function clearField(t) {                   //declaring the array outside of the
                    if (!cleared[t.id]) {                      // function makes it static and global
                        cleared[t.id] = 1;  // you could use true and false, but that's more typing
                        t.value = '';         // with more chance of typos
                        t.style.color = '#fff';
                    }
                }
                <?php
                function rupiah($angka)
                {

                    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                    return $hasil_rupiah;

                }

                ?>

            </script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>
</body>

</html>