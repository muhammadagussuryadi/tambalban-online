<!doctype html>
<html lang="en" dir="ltr">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords"
		content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

	<!-- Title -->
	<title>Tambal Ban Online</title>

	<!--- Favicon --->
	<link rel="icon" href="<?= base_url()?>/assets/img/brand/logo-black.png" type="image/x-icon" />

	<!--- Icons css --->
	<link href="<?= base_url()?>/assets/css/icons.css" rel="stylesheet">

	<!--- Right-sidemenu css --->
	<link href="<?= base_url()?>/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!--- Custom Scroll bar --->
	<link href="<?= base_url()?>/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!--- Style css --->
	<link href="<?= base_url()?>/assets/css/style.css" rel="stylesheet">
	<link href="<?= base_url()?>/assets/css/boxed.css" rel="stylesheet">
	<link href="<?= base_url()?>/assets/css/skin-modes.css" rel="stylesheet">

	<!--- Animations css --->
	<link href="<?= base_url()?>/assets/css/animate.css" rel="stylesheet">
	<link href="<?= base_url()?>/assets/css/custom.css" rel="stylesheet">

</head>

<body class="main-body  app">


	<!-- Loader -->
	<div id="global-loader">
		<img src="<?= base_url()?>/assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- page -->
	<div class="page">

		<?= $this->include('frontend/layouts/top');?>

		<!-- main-content opened -->
		<div class="main-content horizontal-content">

			<!-- container opened -->
			<div class="container">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div>

						<h4 class="content-title mb-2">Hi, <?php echo (session()->login_session['name'] ? session()->login_session['name'] : 'Selamat datang !'); ?></h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Bengkel</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class=" d-flex right-page">
							
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row -->
				<?= $this->renderSection('content'); ?>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!-- Footer opened -->
		<div class="main-footer ht-40">
			<div class="container-fluid pd-t-0-f ht-100p">
				<span>Copyright © 2022 <a href="#">Tablon</span>
			</div>
		</div>
		<!-- Footer closed -->
	</div>
	<!-- end page -->

	<!--- Back-to-top --->
	<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

	<!--- JQuery min js --->
	<script src="<?= base_url()?>/assets/plugins/jquery/jquery.min.js"></script>

	<!--- Bootstrap Bundle js --->
	<script src="<?= base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!--- Ionicons js --->
	<script src="<?= base_url()?>/assets/plugins/ionicons/ionicons.js"></script>

	<!--- Moment js --->
	<script src="<?= base_url()?>/assets/plugins/moment/moment.js"></script>

	<!--- JQuery sparkline js --->
	<script src="<?= base_url()?>/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

	<!--- P-scroll js --->
	<script src="<?= base_url()?>/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url()?>/assets/plugins/perfect-scrollbar/p-scroll.js"></script>

	<!--- Sticky js --->
	<script src="<?= base_url()?>/assets/js/sticky.js"></script>

	<!--- Rating js --->
	<script src="<?= base_url()?>/assets/plugins/rating/jquery.rating-stars.js"></script>
	<script src="<?= base_url()?>/assets/plugins/rating/jquery.barrating.js"></script>

	<!--- Custom Scroll bar Js --->
	<script src="<?= base_url()?>/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

	<!--- Horizontalmenu js --->
	<script src="<?= base_url()?>/assets/plugins/horizontal-menu/horizontal-menu.js"></script>

	<!--- Right-sidebar js --->
	<script src="<?= base_url()?>/assets/plugins/sidebar/sidebar.js"></script>
	<script src="<?= base_url()?>/assets/plugins/sidebar/sidebar-custom.js"></script>

	<!--- Eva-icons js --->
	<script src="<?= base_url()?>/assets/js/eva-icons.min.js"></script>

	<!--- Index js --->
	<script src="<?= base_url()?>/assets/js/script.js"></script>

	<!--- Custom js --->
	<script src="<?= base_url()?>/assets/js/custom.js"></script>

</body>

</html>