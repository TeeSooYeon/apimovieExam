<?php
include 'config.php';
include 'class.admin.php';

$admin = new Admin();
$message = null;

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
		<title> Movie - Admin Login </title>
	</head>
	<body>
		<div> <!-- BACKGROUND -->
		<div>
			<form method="POST" action="" name="login">
				<br><br>
				<?php if($message == null){}else{echo "<center>".$message."</center>";} ?>
				<div>
					<input type="text" required name="adminid" placeholder="Username" autocomplete="off"/>
				</div>
				<div>
					<input type="password" required name="password" placeholder="Password"/>
				</div>
				<div>
					<input type="submit" name="submit" value="Login"/>
				</div>
			</form>
			</div>
		</div>
	</body>
</html>