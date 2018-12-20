<?php include 'project/helper/connection.php'; 

$id_rute = $_GET['id_rute'];

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
    header("location:index.php");
}
else
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Listing User</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="user-index/styles/bootstrap4/bootstrap.min.css">
<link href="user-index/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="user-index/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="user-index/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="user-index/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="user-index/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="user-index/styles/single_listing_styles.css">
<link rel="stylesheet" type="text/css" href="user-index/styles/single_listing_responsive.css">
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
							<img class="avatar user-thumb" src="project/img/<?php echo $gambar ?>" alt="avatar" style="height: 25px; weight: 25px; border-radius: 50%; margin-right: 12px;">
                            <div class="user_box_nama user_box_link"><a href="#">Halo, <?php echo $nama ?></a></div>
                            |
							<div class="user_box_history user_box_link"><a href="project/display/displayTransaksi.php">history</a></div>
							|
							<div class="user_box_logout user_box_link"><a href="logout.php">logout</a></div>
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
							<div class="logo"><a href="user.php"><img src="user-index/images/logo.png" alt="">tiket travel</a></div>
                        </div>
                    </div>
				</div>
			</div>	
		</nav>

	</header>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="user-index/images/single_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">the offers</div>
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

						<?php
							$query = 
							"SELECT dp.id_detail, m.nama_maskapai, k1.kota1, k2.kota2, dp.jadwal, dp.harga FROM detail_penerbangan dp, penerbangan p, maskapai m, rute r, kota1 k1, kota2 k2
							WHERE p.id_rute = r.id_rute AND
							dp.id_penerbangan = p.id_penerbangan AND
							r.kota1 = k1.id_kota1 AND
							r.kota2 = k2.id_kota2 AND
							p.id_maskapai = m.id_maskapai AND
							p.id_rute = $id_rute";

                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "
                                    <!-- Room -->
									<div class='room'>

									<!-- Room -->
										<div class='row'>
											<div class='col-lg-8'>
												<div class='room_content'>
													<div class='room_title'>".$row['nama_maskapai']."</div>
													<div class='room_price'>".$row['kota1']." - ".$row['kota2']."</div>
													<div class='room_text'>".$row['jadwal']."</div>
													<div class='room_extra'>Rp".$row['harga']."</div>
												</div>
											</div>
											<div class='col-lg-4 text-lg-right'>
												<div class='room_button'>
													<div class='button book_button trans_200'><a href='project/process/actionBookingPenerbangan.php?id_detail=".$row['id_detail']."'>book<span></span><span></span><span></span></a></div>
												</div>
											</div>
										</div>	
									</div>
                                    ";
                                }
                            }
                            mysqli_close($con); 
                            ?>
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

<script src="user-index/js/jquery-3.2.1.min.js"></script>
<script src="user-index/styles/bootstrap4/popper.js"></script>
<script src="user-index/styles/bootstrap4/bootstrap.min.js"></script>
<script src="user-index/plugins/easing/easing.js"></script>
<script src="user-index/plugins/parallax-js-master/parallax.min.js"></script>
<script src="user-index/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="user-index/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="user-index/js/single_listing_custom.js"></script>

</body>

</html>
<?php } ?>