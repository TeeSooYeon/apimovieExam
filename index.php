<?php 
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page']: '';
include('google_config/google_read.php');
if($login_button == true){
	include('facebook_config/facebook_read.php');
}
?>
<html> 
    <head>
      <title>Movies API</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	  	<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="text-align: center;"> 
<div class="limiter">
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<h1 style="{text-align:center}">Sign Up<h2>
			<br/><br/>
		<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
	  	<div style="margin: 0 auto;">
				<?php
						if($login_button == '')
						{
							switch($page){
								case 'home':
									require_once('home.php');
									break;
								case 'login':
									require_once('login.php');
								break;
								default:
									require_once('home.php');
									break;
							}
						}else{
          		if(isset($facebook_login_url)){
								echo $login_button;	  
	  					}else{
								// Do nothing 
	  					}
        		}
				?>

				<?php
				if(isset($facebook_login_url)){
							 echo $facebook_login_url;
				}else{
					switch($page){
								case 'main':
										require_once('index.php');
								break;
								case 'home':
										require_once('home.php');
								break;
								case 'login':
										require_once('login.php');
								break;
								default:
										require_once('home.php');
								break;
							}
					}
				?>
			</div>
		</div>
	</div>
</div>
    </body>
	<div id="dropDownSelect1"></div>
	<script src="js/main.js"></script>
</html>
