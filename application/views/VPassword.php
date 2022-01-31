<!doctype html>
<html lang="en">
  <head>
  	<title>Login 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url();?>asset/asset2/css/style.css">

	</head>
	<body>
	<?php
	$dataSession = $this->session->userdata("alert"); 
	if($dataSession == "passwordBaru"){?>
		<script>alert("Silahkan masukkan password baru");</script>
	<?php
	$this->session->unset_userdata("alert");
	}
	?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
				<?php 
				$dataSession = $this->session->userdata('updatePass');
				if($dataSession != null){?>
					<h3 class="text-center mb-0">Password Baru</h3>
					<p class="text-center">Masukkan Password</p>
				  <form action="ProsesPasswordBaru" class="login-form" method="post">
						<div class="form-group">
							<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
							<input type="password" class="form-control" name="username" placeholder="password" required>
						</div>
					  <div class="form-group">
						  <button type="submit" class="btn form-control btn-primary rounded submit px-3">Ganti Password</button>
					  </div>
				</form>
				<?php 
				}else{
				?>
		      	<h3 class="text-center mb-0">Form Lupa Password</h3>
		      	<p class="text-center">Masukkan Username</p>
				<form action="ProsesLupaPassword" class="login-form" method="post">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control" name="username" placeholder="username" required>
		      		</div>
					<div class="form-group">
						<button type="submit" class="btn form-control btn-primary rounded submit px-3">Ganti Password</button>
					</div>
	          </form>
			  <?php
				}
			  ?>
			</div>
				</div>
			</div>
		</div>
	</section>

  <script src="<?= base_url();?>asset/asset2/js/jquery.min.js"></script>
  <script src="<?= base_url();?>asset/asset2/js/popper.js"></script>
  <script src="<?= base_url();?>asset/asset2/js/bootstrap.min.js"></script>
  <script src="<?= base_url();?>asset/asset2/js/main.js"></script>

	</body>
</html>

