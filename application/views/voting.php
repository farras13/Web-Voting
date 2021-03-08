<header class="masthead text-center text-white">
	<div class="masthead-content">
		<div class="container">
			<h1 class="masthead-heading mb-0">Website E-voting</h1>
			<h2 class="masthead-subheading mb-0">We Will Have New Leader</h2>
			<a href="#satu" class="btn btn-primary btn-xl rounded-pill mt-5">Let's Start</a>
		</div>
	</div>
	<div class="bg-circle-1 bg-circle"></div>
	<div class="bg-circle-2 bg-circle"></div>
	<div class="bg-circle-3 bg-circle"></div>
	<div class="bg-circle-4 bg-circle"></div>
</header>

<section>
	<div class="container">
		<div style="margin-top: 60px;">
			<center>
				<h1>Visi & Misi <br> Pasangan Calon</h1>
			</center>
		</div>
		<div class="row align-items-center">
			<?php $a = 2;
			foreach ($paslon as $p) { ?>
				<div class="col-lg-6 order-lg-<?= $p->idPaslon; ?>">
					<div class="p-5">
						<h2 class="display-5"><?php if ($p->idPaslon == 1) { ?> <br> <?php }
																					echo $p->ketum ?> dan <?= $p->waktum ?></h2>
						<img src="<?= base_url('assets/img/0') . $p->idPaslon . '.jpg' ?>" width="410px" height="auto" alt="">
						<br><br>
						<h2 class="display-6">Visi :</h2>
						<p style="text-align: justify;"><?= $p->visi; ?></p>
						</p>
						<h2 class="display-6">Misi :</h2>
						<p style="text-align: justify;"><?= $p->misi; ?></p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<hr>

<section>
	<div class="container">
		<div style="margin-top: 60px;">
			<center>
				<h1>Vote Pasangan Calon</h1>
			</center>
		</div>
		<div class="row align-items-center">
			<?php
			$a = 0;
			foreach ($vote as $v) {
				if ($log['id'] == $v->auth) {
					$a = 1;
				} else {
					$a = 0;
				}
			}
			?>
			<form action="<?= base_url('Main/voting') ?>" method="POST">
				<div class="row align-items-center">
					<div class="col-lg-6 form-group">
						<div class="p-5">
							<img class="img-fluid rounded-circle" style="margin-bottom: 20px;" src="<?= base_url() ?>assets/img/05.jpg" alt=""><br>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
							<!-- <a href="<?= base_url('Main/vote'); ?>" class="btn btn-warning">CLick Me</a> -->
							<?php if ($a == 0) {
								echo '<center><input type="radio" value="1" name="rd1" id="rd1"></center>';
							} else {
								echo '';
							} ?>

						</div>
					</div>
					<div class="col-lg-6">
						<div class="p-5">
							<img class="img-fluid rounded-circle" style="margin-bottom: 20px;" src="<?= base_url() ?>assets/img/05.jpg" alt=""><br>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
							<!-- <a href="<?= base_url('Main/vote'); ?>" class="btn btn-warning">CLick Me</a> -->
							<?php if ($a == 0) {
								echo '<center><input type="radio" value="2" name="rd1" id="rd2"></center>';
							} else {
								echo '';
							} ?>
						</div>
					</div>
				</div>
				<?php
				if ($a == 0) {
					echo '<button class="btn btn-warning btn-block" type="submit">Submit</button>';
				} else {
					echo '<center><h4> Anda sudah melakukan vote </h4></center>';
				}
				?>

			</form>

		</div>
		<br><br><br><br>
	</div>
</section>
