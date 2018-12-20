<?php
include 'project/helper/connection.php';
?>


<html class="no-js" lang="en">

<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--20">
                <form action="project/process/actionRegister.php" method="POST" enctype="multipart/form-data">
                    <div class="login-form-head">
                        <h4>Sign Up</h4>
                        <p>Hello there, Sign Up and Enjoy the Deal</p>
                    </div>
                    <div class="login-form-body">
                        <?php
                            $query = "SELECT COUNT(id_customer) AS jumlah FROM customer";
                            $result = mysqli_query($con,$query);
                            $no = 1;

                            while ($isi = mysqli_fetch_array($result)) {
                                $jumlah = $isi['jumlah'];
                            }
                        ?>
                        <div class="form-gp">
                            <input type="hidden" name="id_customer" value="<?php echo $no+$jumlah ?>">
                        </div>
                        <?php
                            $query = "SELECT COUNT(id_user) AS jumlah FROM user";
                            $result = mysqli_query($con,$query);
                            $no = 1;

                            while ($isi = mysqli_fetch_array($result)) {
                                $jumlah = $isi['jumlah'];
                            }
                        ?>
                        <div class="form-gp">
                            <input type="hidden" name="id_user" value="<?php echo $no+$jumlah ?>">
                        </div>
                        <div class="form-gp">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-gp">
                            <label for="nama">Full Name</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-gp">
                            <input type="file" name="gambar" id="gambar" class="form-control-file">
                        </div>
                        <div class="form-gp">
                            <label for="alamat">Address</label>
                            <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-radio mr-sm-2">
                                    <input type="radio" class="custom-control-input" name="jenis_kelamin" id="customControlAutosizing" value="laki-laki">
                                    <label class="custom-control-label" for="customControlAutosizing">Male</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="custom-control custom-radio mr-sm-2">
                                    <input type="radio" class="custom-control-input" name="jenis_kelamin" id="customControlAutosizing2" value="perempuan">
                                    <label class="custom-control-label" for="customControlAutosizing2">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-gp">
                            <label for="no_telp">Phone</label>
                            <input type="number" name="no_telp" id="no_telp" class="form-control">
                        </div>
                        <div class="form-gp">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Do have an account? <a href="login.php">Sign in</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>