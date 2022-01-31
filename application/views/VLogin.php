<?php
	$dataSession = $this->session->userdata("status"); 
	if($dataSession != null){
		redirect(base_url('halamanAdmin/dashboard'));
	}
?> 
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url();?>asset/asset2/css/style.css">

	</head>
	<body>

	<!-- Alert -->
	<?php
	$dataSession = $this->session->userdata("alert"); 
	if($dataSession == "tidakAktif"){?>
	    <script>alert("Akun belum di aktifkan, silahkan hubungi super admin");</script>
	<?php
	$this->session->unset_userdata("alert");
	}else if($dataSession == "reset"){?>
		<script>alert("Akun berhasil di reset, silahkan hubungi admin untuk aktivasi akun");</script>
	<?php
	$this->session->unset_userdata("alert");
	}else if($dataSession == "passwordBaru"){?>
		<script>alert("password baru berhasil dibuat, silahkan Login kembali");</script>
	<?php
	}else if($dataSession == "passwordSalah"){?>
		<script>alert("Username atau password salah");</script>
	<?php
	$this->session->unset_userdata("alert");
	}
	?>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<h3 class="text-center mb-0">Admin Website </h3>
		      	<p class="text-center">Masukkan Username dan password</p>
				<form action="ProsesLogin" class="login-form" method="post">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control" name="username" placeholder="username" required>
		      		</div>
					<div class="form-group">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
					<input type="password" class="form-control" name="password" placeholder="password" required>
						
					</div>
					<div class="form-group">
						<button type="submit" class="btn form-control btn-primary rounded submit px-3">Login</button>
					</div>
	          </form>
			  <a href="lupaPassword" style="float:right;">Lupa password ?</a>
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

