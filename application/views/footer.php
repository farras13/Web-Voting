  <!-- Footer -->
  <footer class="py-5 bg-black">
  	<div class="container">
  		<p class="m-0 text-center text-white small">Copyright &copy; Your Website 2020</p>
  	</div>
  	<!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->

  <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <script src="<?= base_url() ?>assets/grafik.js"></script>
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
