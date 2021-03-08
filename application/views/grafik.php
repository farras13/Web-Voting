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

<section id="satu">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3 order-lg-2">
				<div class="p-5">
					<center>
						<img class="img-fluid rounded-circle" src="<?= base_url() ?>assets/img/04.jpg" style="margin-bottom: 20px;" alt="">
						<h2 class="display-6">Paslon 1</h2>
						<h4 id="c1"><?= $count[0]['hasil']; ?></h4>
						<button class="btn btn-block" style="background-color: red;"></button>
					</center>
					
				</div>
			</div>
			<div class="col-lg-6 order-lg-2">
				<div class="p-5">
					<center>
						<h2 class="display-4">Live Vote Report </h2>
						<canvas id="myChart" width="400" height="600"></canvas>
					</center>
				</div>
			</div>
			<div class="col-lg-3 order-lg-2">
				<div class="p-5">
					<center>
						<img class="img-fluid rounded-circle" src="<?= base_url() ?>assets/img/04.jpg" style="margin-bottom: 20px;" alt="">
						<h2 class="display-6">Paslon 2</h2>
						<h4 id="c2"><?= $count[1]['hasil']; ?></h4>
						<button class="btn btn-block" style="background-color: black;"></button>
					</center>
				</div>
			</div>
		</div>
	</div>
</section>
