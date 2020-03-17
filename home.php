<?php
$load = (isset($_GET['page'])&& $_GET['page'] !='')? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
		<title> Sample Movies Site </title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
    <body>
        <div id="navigation_body">                                   <!--NAVIGATION BAR-->
            <div class="navbar">
                <ul>
                    <li><a href="home.php?page=#live"> Live Premiere </a></li>
                    <li><a href="home.php?page=#coming_soon"> Coming Soon </a></li>
                    <li><a href="home.php?page=movies"> Search Movies </a></li>
                </ul>
            </div>
        </div>
        <div>
            <?php
                switch($load){
                    case 'movies':
                        require_once('movie_list.php');
                    break;
                    case 'show-movie':
                        require_once('movie_profile.php');
                    break;
                    default:
                        require_once('movie_list.php');
                    break;
                }
            ?>
        </div>
    </body>
    <a href="google_logout.php" onClick="location.href='facebook_logout.php'">Logout</a>
</html>