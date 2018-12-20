<?php

include 'project/helper/connection.php';

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

<html lang="en">
<head>
<title>Tiket Travel</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="user-index/styles/bootstrap4/bootstrap.min.css">
<link href="user-index/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="user-index/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="user-index/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="user-index/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="user-index/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="user-index/styles/responsive.css">
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
							<div class="logo"><a href="#"><img src="user-index/images/logo.png" alt="">Tiket Travel</a></div>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>


	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(user-index/images/bali.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(user-index/images/jimbaran.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(user-index/images/raja-ampat.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>
			
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="user-index/images/departure.png" alt="">penerbangan</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="user-index/images/cruise.png" alt="">pelayaran</div>
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<form action="listing-user-penerbangan.php?id_rute=<?php echo $id_rute; ?>" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>rute</div>
								<select name="id_rute" id="id_rute" class="dropdown_item_select search_input">
								<?php
									$query = "SELECT * FROM rute r, kota1 k1, kota2 k2
									WHERE r.kota1 = k1.id_kota1 AND r.kota2 = k2.id_kota2 AND r.deleted=0";
									$result = mysqli_query($con, $query);

										if (mysqli_num_rows($result) > 0){
											while($row = mysqli_fetch_assoc($result))
											{
												$id_rute = $row['id_rute'];
												echo "
												<option value='".$row['id_rute']."'>".$row['kota1']." - ".$row['kota2']. "</option>  
												";
											}
										}
									?>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="listing-user-pelayaran.php?id_rute_kapal=<?php echo $id_rute_kapal; ?>" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>rute</div>
								<select name="id_rute_kapal" id="id_rute_kapal" class="dropdown_item_select search_input">
								<?php
									$query = "SELECT * FROM rute_kapal rk, pelabuhan1 p1, pelabuhan2 p2
									WHERE rk.pelabuhan1 = p1.id_pelabuhan1 AND rk.pelabuhan2 = p2.id_pelabuhan2 AND rk.deleted=0";
									$result = mysqli_query($con, $query);

										if (mysqli_num_rows($result) > 0){
											while($row = mysqli_fetch_assoc($result))
											{
												$id_rute_kapal = $row['id_rute_kapal'];
												echo "
												<option value='".$row['id_rute_kapal']."'>".$row['pelabuhan1']." - ".$row['pelabuhan2']. "</option>  
												";
											}
										}
									?>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
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
<script src="user-index/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="user-index/plugins/easing/easing.js"></script>
<script src="user-index/js/custom.js"></script>

</body>

</html>
<?php } ?>