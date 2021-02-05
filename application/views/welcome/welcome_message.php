<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/'); ?> vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

	<script src="https://kit.fontawesome.com/068305fceb.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">

	<style>
		body,
		html {
			height: 100%;
		}

		body {
			/* The image used */
			background-image: url("assets/img/img5.jpg");

			/* Full height */
			height: 100%;

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}


		.card {
			background: rgba(0, 0, 0, 0.6);
		}
	</style>

	<title>E-Respond</title>
</head>

<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 mt-5">
				<div class="card text-center text-white mt-5">
					<h1><i class="mt-5 fas fa-laugh-beam fa-3x"></i></h1>
					<h1>Welcome to E-Respond Web Navigation Reporting System</h1>
					<div class="card-body">
						<h3><a href="<?= base_url('welcome/survey'); ?>" class="btn btn-primary btn-lg">Take a Survey</a>
					</div>
					<div class="card-body">
						<p>Are you an expert user? Click <a href="<?= base_url('auth'); ?>">Here</a> to Login.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<scri src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->

</body>

</html>