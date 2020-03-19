<?php
include 'config.php';
include 'class.admin.php';

$admin = new Admin();
$message = null;

// NOTE TO Sir Rhix: User: admin , Pass: 12345

if($admin->get_session()){
    header("location: home.php");
}
if(isset($_REQUEST['submit'])){
    extract($_REQUEST);
    $login = $admin->check_login($adminid,md5($password));
    if($login){
		header("Location: home.php");
    }else{
		$message = "Invalid credentials, try again!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	  	<link rel="stylesheet" type="text/css" href="../css/util.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<title> Movie - Admin Login </title>
	</head>
	<body>
		<div class="limiter">
		<div class="container-login100" style="background-image: url("images/bg-01.jpg");">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
			<form class="login100-form validate-form flex-sb flex-w" method="POST" action="" name="login">
				<span class="login100-form-title p-b-53">
						Admin Log-In
				</span>
				<br><br>
				<?php if($message == null){}else{echo "<center>".$message."</center>";} ?>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" required name="adminid" placeholder="Username" autocomplete="off"/>
				</div>
				<div class="wrap-input100 validate-input" >
					<input class="input100" type="password" required name="password" placeholder="Password"/>
				</div>
				<div class="container-login100-form-btn m-t-17">
					<input class="login100-form-btn" type="submit" name="submit" value="Login"/>
				</div>
			</form>
			</div>
		</div>
		</div>
	</body>
</html>
