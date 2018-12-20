<?php include '../helper/connection.php'; 
if(isset($_GET['id_customer']))
{
    $id_customer = $_GET['id_customer'];
}

session_start();

$id_customer = $_SESSION["id_customer"];
$query = "SELECT * FROM customer WHERE id_customer = $id_customer";

$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);

$nama = $row['nama'];
$gambar = $row["gambar"];

if(!$_SESSION['id_customer'])
{
    echo "Silakan login terlebih dahulu";
    header("location:../../index.php");
}
else
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Transaksi</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../user-index/styles/bootstrap4/bootstrap.min.css">
<link href="../../user-index/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../user-index/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../user-index/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../../user-index/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../../user-index/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../../user-index/styles/single_listing_styles.css">
<link rel="stylesheet" type="text/css" href="../../user-index/styles/single_listing_responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="user_box ml-auto">
							<img class="avatar user-thumb" src="../img/<?php echo $gambar ?>" alt="avatar" style="height: 25px; weight: 25px; border-radius: 50%; margin-right: 12px;">
                            <div class="user_box_nama user_box_link"><a href="#">Halo, <?php echo $nama ?></a></div>
                            |
							<div class="user_box_history user_box_link"><a href="#">history</a></div>
							|
							<div class="user_box_logout user_box_link"><a href="../../logout.php">logout</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="../../user.php"><img src="../../user-index/images/logo.png" alt="">tiket travel</a></div>
                        </div>
                    </div>
				</div>
			</div>	
		</nav>

	</header>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="../../user-index/images/listing_hotel.jpg"></div>
		<div class="home_content">
			<div class="home_title">transaction history</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="listing">

		<!-- Search -->

		<!-- Single Listing -->

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="single_listing">
                    <table id="data" class="table table-stripped text-center mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Penerbangan</th>
                                <th>Jadwal</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = 
                        "SELECT t.id_transaksi, m.nama_maskapai, k1.kota1, k2.kota2, dp.jadwal, dp.harga FROM transaksi t, detail_penerbangan dp, penerbangan p, maskapai m, rute r, kota1 k1, kota2 k2
                        WHERE t.id_detail_penerbangan = dp.id_detail AND
                        dp.id_penerbangan = p.id_penerbangan AND
                        p.id_maskapai = m.id_maskapai AND
                        p.id_rute = r.id_rute AND
                        r.kota1 = k1.id_kota1 AND
                        r.kota2 = k2.id_kota2 AND
                        t.id_customer = $id_customer";

                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "
                                <tr>
                                    <td>" .$row["id_transaksi"]. "</td>
                                    <td>" .$row["nama_maskapai"]. " <br> ".$row['kota1']." - ".$row['kota2']."</td>
                                    <td>" .$row["jadwal"]. "</td>
                                    <td>" .$row["harga"]. "</td>
                                </tr>
                                ";
                            }
                        }
                        ?>
                        </tbody>
                    </table>

                    <br><br><br>

                    <table id="data" class="table table-stripped text-center mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Pelayaran</th>
                                <th>Jadwal</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = 
                        "SELECT t.id_transaksi, k.nama_kapal, p1.pelabuhan1, p2.pelabuhan2, dp.jadwal,dp.harga FROM transaksi t, detail_pelayaran dp, pelayaran p, kapal k, rute_kapal rk, pelabuhan1 p1, pelabuhan2 p2
                        WHERE t.id_detail_pelayaran = dp.id_detail AND
                        dp.id_pelayaran = p.id_pelayaran AND
                        p.id_kapal = k.id_kapal AND
                        p.id_rute_kapal = rk.id_rute_kapal AND
                        rk.pelabuhan1 = p1.id_pelabuhan1 AND
                        rk.pelabuhan2 = p2.id_pelabuhan2 AND
                        t.id_customer = $id_customer";

                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "
                                <tr>
                                    <td>" .$row["id_transaksi"]. "</td>
                                    <td>" .$row["nama_kapal"]. " <br> ".$row['pelabuhan1']." - ".$row['pelabuhan2']."</td>
                                    <td>" .$row["jadwal"]. "</td>
                                    <td>" .$row["harga"]. "</td>
                                </tr>
                                ";
                            }
                        }
                        mysqli_close($con); 
                        ?>
                        </tbody>
                    </table>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="../../user-index/js/jquery-3.2.1.min.js"></script>
<script src="../../user-index/styles/bootstrap4/popper.js"></script>
<script src="../../user-index/styles/bootstrap4/bootstrap.min.js"></script>
<script src="../../user-index/plugins/easing/easing.js"></script>
<script src="../../user-index/plugins/parallax-js-master/parallax.min.js"></script>
<script src="../../user-index/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../../user-index/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="../../user-index/js/single_listing_custom.js"></script>

</body>

</html>
<?php } ?>