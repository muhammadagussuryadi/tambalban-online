<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<!-- Title -->
		<title>Tambalban Online</title>

		<!--- Favicon --->
		<link rel="icon" href="<?php echo base_url();?>/assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css --->
		<link href="<?php echo base_url();?>/assets/css/icons.css" rel="stylesheet">

		<!--- Right-sidemenu css --->
		<link href="<?php echo base_url();?>/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--- Custom Scroll bar --->
		<link href="<?php echo base_url();?>/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- Style css --->
		<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">
		<link href="<?php echo base_url();?>/assets/css/skin-modes.css" rel="stylesheet">

		<!-- Internal Data table css -->
		<link href="<?php echo base_url();?>/assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>/assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>/assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>/assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>/assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
		
		<link href="<?php echo base_url();?>/assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!--- Internal Sweet-Alert css --->
		<link href="<?php echo base_url();?>/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">

		<!--- Sidemenu css --->
		<link href="<?php echo base_url();?>/assets/css/closed-sidemenu.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="<?php echo base_url();?>/assets/css/animate.css" rel="stylesheet">

		<link href="<?php echo base_url();?>/assets/css/custom.css" rel="stylesheet">

		<!--- JQuery min js --->
		<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
		
		<!--- Select2.min js --->
		<script src="<?php echo base_url();?>/assets/plugins/select2/js/select2.min.js"></script>
		<style type="text/css">
			.pac-container {
					z-index: 99999 !important;
			}
		</style>
	</head>

	<body class="main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="<?php echo base_url();?>/assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->



		<!-- page -->
	<div class="page">

		<!-- main-sidebar opened -->
    <?= $this->include('backend/layouts/side') ?>
		<!-- main-sidebar closed -->

		<!-- main-content -->
		<div class="main-content h-100">

			<!-- main-header -->
			<?= $this->include('backend/layouts/top'); ?>
			<!-- /main-header -->

			<!-- container -->
			<div class="container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div>
						<?php
							if($titlePage == 'Dashboard'){
								echo '<h4 class="content-title mb-2">Hi, welcome back!</h4>';
							}else{
								echo '<h4 class="content-title mb-2">'.$titlePage.'</h4>';
							}
						?>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?= $titlePage ?></li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class=" d-flex right-page">
							<?php if(session()->getFlashData('success')){ ?>
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<?= session()->getFlashData('success') ?> &emsp;
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row -->
				<div class="main-content-body">
            <?= $this->renderSection('content'); ?>
        </div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!-- Footer opened -->
		<?= $this->include('backend/layouts/bottom'); ?>
		<!-- Footer closed -->
	</div>
		<!-- page closed -->

		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- Bootstrap Bundle js --->
		<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!--- Ionicons js --->
		<script src="<?php echo base_url();?>/assets/plugins/ionicons/ionicons.js"></script>

		<!--- Moment js --->
		<script src="<?php echo base_url();?>/assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js --->
		<script src="<?php echo base_url();?>/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- P-scroll js --->
		<!-- <script src="<?php echo base_url();?>/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/perfect-scrollbar/p-scroll.js"></script> -->


		<!--- Eva-icons js --->
		<script src="<?php echo base_url();?>/assets/js/eva-icons.min.js"></script>

		<!--- Rating js --->
		<script src="<?php echo base_url();?>/assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/rating/jquery.barrating.js"></script>

		<!--- Custom Scroll bar Js --->
		<script src="<?php echo base_url();?>/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--- Sidebar js --->
		<script src="<?php echo base_url();?>/assets/plugins/side-menu/sidemenu.js"></script>

		<!--- Right-sidebar js --->
		<script src="<?php echo base_url();?>/assets/plugins/sidebar/sidebar.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Internal Data tables -->
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/pdfmake.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/vfs_fonts.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>

		<!-- datatable js -->
		<script src="<?php echo base_url();?>/assets/js/table-data.js"></script>

		<!--- Internal Sweet-Alert js --->
		<script src="<?php echo base_url();?>/assets/plugins/sweet-alert/sweetalert.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>

		<!--- Index js --->
		<script src="<?php echo base_url();?>/assets/js/script.js"></script>

		<!--- Custom js --->
		<script src="<?php echo base_url();?>/assets/js/custom.js"></script>

	</body>
</html>