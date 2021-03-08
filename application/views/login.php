<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url() ?>assets/login/fonts/icomoon/style.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/login/css/owl.carousel.min.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/login/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<!-- Style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/login/css/style.css">

	<title>E-voting Login</title>
</head>

<body>
	<div class="content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 contents">
					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="form-block">
								<div class="mb-4">
									<h3>Sign In to <strong>E-voting</strong></h3>
									<p class="mb-4">Gunakan nim dan password yang sudah dikirim di email kampus masing-masing</p>
								</div>
								<form action="<?= base_url('Login/pros_log') ?>" method="post">
									<div class="form-group first">
										<label for="nim">Nim</label>
										<input type="number" class="form-control" id="nim" name="nim" min="0">
									</div>
									<div class="form-group last mb-4">
										<label for="password">Password</label>
										<input type="password" class="form-control" id="password" name="password">
									</div>
									<input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?= base_url() ?>assets/login/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url() ?>assets/login/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/login/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="<?= base_url() ?>assets/login/js/main.js"></script>
	
	<script>
  	$(document).ready(() => {
  		<?php if (isset($_SESSION['toast'])) { ?>
  			toastr.options.closeButton = true;
  			var toastvalue = "<?php echo $_SESSION['toast'] ?>";
  			var status = toastvalue.split(":")[0];
  			var message = toastvalue.split(":")[1];
  			if (status === "success") {
  				toastr.success(message, status);
  			} else if (status === "error") {
  				toastr.error(message, status);
  			} else if (status == "warn") {
  				toastr.warning(message, status);
  			}
  		<?php } ?>
  	});
  </script>
</body>

</html>
