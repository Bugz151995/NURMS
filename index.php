<?php require 'src/api/session.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="src/img/logo.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="src/css/util.css">
	<link rel="stylesheet" type="text/css" href="src/css/index.css">
</head>
<body style="background-color: #666666;">
	<nav class="shadow bg-dark w-100" alt="Heading" style="position: fixed; z-index: 100; top: 0; opacity: 99%;">
		<div class="d-flex">
			<div class="p-3">
				<img src="src/img/logo_light.png" width="50" alt="">
			</div>
			<div class="p-2 d-flex">
				<p class="text-white align-self-center">
					<span>Numisworks Auction Product Trading</span>
				</p>
			</div>
		</div>
	</nav>
	<main>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<form class="login100-form validate-form" action="src/api/authenticate.php" method="POST">
						<span class="login100-form-title p-b-46 p-t-80">
							Sign in to continue
						</span>
						
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<?php 
								$hasVal = isset($_SESSION['EMAIL']);
								$styleInput = "";
								if($hasVal){
									$styleInput = "has-val";
								}
							?>
							<input class="input100 <?php echo $styleInput;?>" type="text" name="email">
							<span class="focus-input100"></span>
							<span class="label-input100">Email</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="pass">
							<span class="focus-input100"></span>
							<span class="label-input100">Password</span>
						</div>
	
						<div class="flex-sb-m w-full p-t-3 p-b-32">
							<div class="contact100-form-checkbox">&nbsp;</div>

							<div>
								<a href="#" class="txt1">
									Forgot Password?
								</a>
							</div>
						</div>
	
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" name="btnlogin">
								<strong>Sign in</strong>
							</button>
						</div>
						<br>
						<div class="container-login100-form-btn">
							<p>Don't have an account? <a href="sign-up.html" class="text-primary">Sign up</a></p>
						</div>
					</form>

					<div class="login100-more" style="background-image: url('src/img/bg-01.png');">
					</div>
				</div>
			</div>
		</div>
	</main>

<!--===============================================================================================-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="src/js/main.js"></script>

</body>
</html>