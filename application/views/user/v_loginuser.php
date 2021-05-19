<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Login User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/registerUser/css/userr.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/halamanUtama/img/core-img/logowbb.png">
</head>

<body>
	<section class="popular-courses-area section-padding-100-0" style="background-image: url(<?php echo base_url() ?>assets/halamanUtama/img/core-img/texture.png);">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="h-100vh row justify-content-center align-items-center">
						<div class="col-md-6 b-right">
							<button type="button" class="close" aria-label="Close" onclick="window.location.href='	<?php echo base_url() ?>'">
								<span aria-hidden="true">&times;</span>
								<link rel="stylesheet" type="text/css" href="">
							</button>
							<h3 align="center">Login Siswa</h3>
							<?php
							$info = $this->session->flashdata('info');
							if (!empty($info)) {
								echo $info;
							}
							?>
							<form action="<?php echo base_url('Controller_Login_User/ceklogin') ?>" method="post">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="ion-android-person"></i>
										</span>
									</div>
									<input type="text" name="username_user" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="ion-ios-locked-outline"></i>
										</span>
									</div>
									<input type="Password" name="password_user" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<button class="btn w-100">Continue</button>

						</div>
						</form>
						<div class="col-md-5">
							<div class="text text-center">
								<h3>SMAN 2 Mojokerto</h3>
								<p>E-Learning SMANDA</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
</body>

</html>