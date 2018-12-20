<?php include '../helper/connection.php'; 

$id_customer = $_GET["id_customer"];

$query = "SELECT * FROM customer WHERE id_customer = $id_customer";
$result = mysqli_query($con, $query);

$item = '';
if(mysqli_num_rows($result) == 1) {
    $item = mysqli_fetch_assoc($result);
} else {
    echo "Data tidak ditemukan";
}

$nama = $row['nama'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Profile</title>
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
                            <div class="user_box_nama user_box_link"><a href="#">Halo, <?php echo $nama ?></a></div>
                            |
							<div class="user_box_logout user_box_link"><a href="../../index.php">logout</a></div>
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
							<div class="logo"><a href="user.php"><img src="../../user-index/images/logo.png" alt="">tiket travel</a></div>
                        </div>
                    </div>
				</div>
			</div>	
		</nav>

	</header>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="../../user-index/images/blog_3.jpg"></div>
		<div class="home_content">
			<div class="home_title">Edit Profile</div>
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
                    <h2 class="mt-3 text-center">Biodata</h2>
                        <div class="row mt-5">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <form action="../process/actionEditProfile.php" method="POST">

                                    <input type="hidden" name="id_customer" value="<?php echo $item['id_customer'] ?>">
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required 
                                            value="<?php echo $item["nama"] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Alamat</label>
                                        <div class="col-md-9">
                                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required 
                                            value="<?php echo $item["alamat"] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">No Telp</label>
                                        <div class="col-md-9">
                                            <input type="number" name="no_telp" id="no_telp" class="form-control" placeholder="No Telp" required 
                                            value="<?php echo $item["no_telp"] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <div class="col-md-4">
                                            <a name="backBtn" id="backBtn" class="btn btn-dark btn-block" href="../display/displayMaskapai.php" role="button">Kembali</a>
                                        </div>
                                        <div class="col-md-4">
                                            <button name="clearFormBtn" id="clearFormBtn" class="btn btn-warning btn-block" role="button" onclick="clearForm()">Clear</button>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="submit" name="tambah" class="btn btn-success btn-block" value="Update"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
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