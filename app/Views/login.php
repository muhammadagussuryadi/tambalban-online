<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="949277402840-h2saam0go4h50o9butu5jc28kjbah2bg.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>

	<!-- Title -->
	<title> Tambal Ban Online </title>

	<!--- Favicon --->
	<link rel="icon" href="<?= base_url() ?>/assets/img/brand/favicon.png" type="image/x-icon" />

	<!--- Icons css --->
	<link href="<?= base_url() ?>/assets/css/icons.css" rel="stylesheet">

	<!--- Right-sidemenu css --->
	<link href="<?= base_url() ?>/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!--- Custom Scroll bar --->
	<link href="<?= base_url() ?>/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!--- Style css --->
	<link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>/assets/css/skin-modes.css" rel="stylesheet">

	<!--- Animations css --->
	<link href="<?= base_url() ?>/assets/css/animate.css" rel="stylesheet">

	<style type="text/css">
		.abcRioButton{
			width:100% !important;
		}
	</style>

</head>

<body class="main-body bg-light">

	<!-- Loader -->
	<div id="global-loader">
		<img src="<?= base_url() ?>/assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- page -->
	<div class="page">

		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
					<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
						<div class="my-auto authentication-pages">
							<div>
								<img src="<?= base_url() ?>/assets/img/brand/logo-black.png" class=" m-0 mb-4" width="150" alt="logo">
								<h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
								<p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
									has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
									galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
					<div class="p-5 wd-md-50p">
						<div class="main-signin-header">
							<h2>Welcome back!</h2>
							<h4>Please sign in to continue</h4>
							<form action="<?= base_url()?>/login" method="post">
								<div class="form-group">
									<label>Username/Password</label>
                  <input class="form-control" placeholder="Username / email" type="text" name="username" value="">
								</div>
								<div class="form-group">
									<label>Password</label>
                  <input class="form-control" placeholder="Password" type="password" name="password" value="">
								</div>
                <button class="btn btn-main-primary btn-block">Sign In</button>
							</form>
						</div>
            <div class="main-signin-footer mt-3 mg-t-5">
							<p><a href="" class="g-signin2" data-onsuccess="onSignIn" data-theme="dark">Login with Google</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->
	</div>
	<!-- End page -->

	<!--- JQuery min js --->
	<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>

	<!--- Bootstrap Bundle js --->
	<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!--- Ionicons js --->
	<script src="<?= base_url() ?>/assets/plugins/ionicons/ionicons.js"></script>

	<!--- Moment js --->
	<script src="<?= base_url() ?>/assets/plugins/moment/moment.js"></script>

	<!--- Eva-icons js --->
	<script src="<?= base_url() ?>/assets/js/eva-icons.min.js"></script>

	<!--- Rating js --->
	<script src="<?= base_url() ?>/assets/plugins/rating/jquery.rating-stars.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/rating/jquery.barrating.js"></script>

	<!--- Index js --->
	<script src="<?= base_url() ?>/assets/js/script.js"></script>

	<!--- Custom js --->
	<script src="<?= base_url() ?>/assets/js/custom.js"></script>

	<script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>

</body>

</html>