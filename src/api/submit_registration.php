<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';

$passMatch = false;
$lName = "";
$fName = "";
$mName = "";
$email = "";
$pass = "";
$cPass = "";
$userData = getUserData();

if($userData != -1){

}

if(isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['middle_name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['confirm_pass'])){
  $lName = $_POST['last_name'];
  $fName = $_POST['first_name'];
  $mName = $_POST['middle_name'];
  $email = $_POST['email'];
  $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $cPass = password_hash($_POST['confirm_pass'], PASSWORD_DEFAULT);

  $rdata = array($lName, $fName, $mName, $email, $pass);
  
  if($_POST['pass'] == $_POST['confirm_pass']){
    $passMatch = true;
    createAccount($rdata);
  }
}

function getUserData(){
	if(isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['middle_name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['confirm_pass'])){
		$lName = $_POST['last_name'];
		$fName = $_POST['first_name'];
		$mName = $_POST['middle_name'];
		$email = $_POST['email'];
		$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
		$cPass = password_hash($_POST['confirm_pass'], PASSWORD_DEFAULT);

		$rdata = array($lName, $fName, $mName, $email, $pass);
		return $rdata;
	} else return -1;
}

function createAccount($data){
  $con = openCon();
  $queryUser = "INSERT INTO `users`(`user_id`,`last_name`,`first_name`,`middle_name`,`email`) VALUES (NULL, '$data[0]', '$data[1]', '$data[2]', '$data[3]')";
  $queryAcct = "INSERT INTO `user_accounts`(`user_account_id`,`user_id`,`password`) VALUES (NULL, LAST_INSERT_ID(), '$data[4]')";

  $userRes = mysqli_query($con, $queryUser);
  $acctRes = mysqli_query($con, $queryAcct);

  if($userRes && $acctRes){
    echo "<script type='text/javascript'>alert('You have successfully registered!');</script>\n";
	} else echo "<script type='text/javascript'>alert('".mysqli_error($con)."');</script>\n";
}
?>
<head>
<title>Sign in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="src/img/logo.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body class="class">
	<header class="shadow bg-dark w-100" style="position: fixed; z-index: 100; top: 0; opacity: 85%;">
		<div class="d-flex">
			<div class="p-3">
				<img src="src/img/logo.png" width="50" alt="">
			</div>
			<div class="p-2 d-flex">
				<p class="text-dark align-self-center comp-name"> 
					<span>Numisworks Auction Product Trading</span>
				</p>
			</div>
		</div>
	</header>
	<main>
		<div class="class" class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<form class="login100-form validate-form" method="POST" action="submit_registration.php">
						<span class="login100-form-title p-b-43 p-t-80">
							Sign up
						</span>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="last_name">
							<span class="focus-input100"></span>
							<span class="label-input100">Last Name</span>
						</div>
						
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="first_name">
							<span class="focus-input100"></span>
							<span class="label-input100">First Name</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="middle_name">
							<span class="focus-input100"></span>
							<span class="label-input100">Middle Name</span>
						</div>

						<hr class="mt-4 pb-3">

						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" type="email" name="email">
							<span class="focus-input100"></span>
							<span class="label-input100">Email</span>
						</div>

            <?php
              if(!$passMatch){
                ?>
                <div class="alert-danger form-control">
                  <span>The password does not match!</span>
                </div>
                <?php
              }
            ?>

						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="pass">
							<span class="focus-input100"></span>
							<span class="label-input100">Password</span>
						</div>
 
						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="confirm_pass">
							<span class="focus-input100"></span>
							<span class="label-input100">Confirm Password</span>
						</div>

						<div class="container-login100-form-btn pt-4">
							<button type="submit" class="login100-form-btn">
								<strong>Sign in</strong>
							</button>
						</div>
            <br>
            <div class="container-login100-form-btn ">
							<p>Already have an account? <a href="index.php" class="text-primary">Sign in</a></p>
						</div>
					</form>

					<div class="login100-more" style="background-image: url('images/bg-01.png');">
					</div>
				</div>
			</div>
		</div>
	</main>

<!--===============================================================================================-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>