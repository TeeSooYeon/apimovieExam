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
								echo '<div class="container-login100" style="background-color: #e66b4c;">';
								echo '<span class="login100-form-title m-t-200 p-b-53">Enjoy Your Favorite Movie</span>';
								echo $login_button;	  
	  					}else{
								// Do nothing 
	  					}
        		}
				?>

				<?php
				if(isset($facebook_login_url)){
							 echo $facebook_login_url;
							echo '</div>';
				}else{
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
					}
				?>
			</div>
    </body>
	<div id="dropDownSelect1"></div>
	<script src="js/main.js"></script>
</html>
