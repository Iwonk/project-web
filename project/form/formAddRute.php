<?php
include '../helper/connection.php';
?>

<html class="no-js" lang="en">

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../../assets/css/typography.css">
    <link rel="stylesheet" href="../../assets/css/default-css.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div>
                    <a class="navbar-brand" href="../../starter.php">ADMIN</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i>
                                    <span>Menu Tiket</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="#" aria-expanded="true">Pesawat</a>
                                        <ul class="collapse">
                                            <li><a href="../display/displayMaskapai.php">Maskapai</a></li>
                                            <li class="active"><a href="../display/displayRute.php">Rute</a></li>
                                            <li><a href="../display/displayPenerbangan.php">Penerbangan</a></li>
                                            <li><a href="../display/displayData.php">Data</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" aria-expanded="true">Kapal</a>
                                        <ul class="collapse">
                                            <li><a href="../display/displayKapal.php">Kapal</a></li>
                                            <li><a href="../display/displayRuteKapal.php">Rute</a></li>
                                            <li><a href="../display/displayPelayaran.php">Pelayaran</a></li>
                                            <li><a href="../display/displayDataPelayaran.php">Data</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../../logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- MAIN CONTENT GOES HERE -->
                <h2 class="mt-3 text-center">Tambah Data Rute</h2>
                <div class="row mt-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="../process/actionAddRute.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">ID</label>
                                <div class="col-md-8">
                                    <input type="number" name="id_rute" id="id_rute" class="form-control" placeholder="ID Rute" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Rute</label>
                                <div class="col-md-4">
                                    <select name="id_kota1" class="form-control">
                                        <?php
                                            $query = "SELECT * FROM kota1";
                                            $result = mysqli_query($con, $query);

                                            if (mysqli_num_rows($result) > 0){
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                    echo "
                                                    <option value='".$row['id_kota1']."'>".$row['kota1']."</option>  
                                                    ";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="id_kota2" class="form-control">
                                        <?php
                                            $query = "SELECT * FROM kota2";
                                            $result = mysqli_query($con, $query);

                                            if (mysqli_num_rows($result) > 0){
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                    echo "
                                                    <option value='".$row['id_kota2']."'>".$row['kota2']."</option>  
                                                    ";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <div class="col-md-4">
                                    <a name="backBtn" id="backBtn" class="btn btn-dark btn-block" href="../display/displayRute.php" role="button">Kembali</a>
                                </div>
                                <div class="col-md-4">
                                    <button name="clearFormBtn" id="clearFormBtn" class="btn btn-warning btn-block" role="button" onclick="clearForm()">Clear</button>
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" name="tambah" class="btn btn-success btn-block" value="Tambah"/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <script>
                function clearForm() {
                    $('#id_rute').val('');
                }
            </script>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Admin Administrator</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="../../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/metisMenu.min.js"></script>
    <script src="../../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../../assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="../../assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="../../assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="../../assets/js/plugins.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>
