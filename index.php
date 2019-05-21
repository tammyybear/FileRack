<?php include "controllers/partials_functions.php" ?>

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <?php get_headBlade() ?>
</head>

<body>
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="resources/img/logo-dark.png" alt="FileRack Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" method="post" action="login_action.php">
								<div class="form-group">
									<label for="username" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<!-- <input type="checkbox">
										<span>Remember me</span> -->
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="forgot_password.php">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Barangay Dela Paz Norte Records Management System</h1>
							<p>by OLFU Students | BSIT</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
