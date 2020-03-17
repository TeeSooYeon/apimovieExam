<?php
$load = (isset($_GET['page'])&& $_GET['page'] !='')? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
		<title> Sample Movies - Management Studios </title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
    <body>
        <div id="navigation_body">                                   <!--NAVIGATION BAR-->
            <div class="navbar">
                <ul>
                    <li><a href="home.php?page=#"> Live Premiere </a></li>
                    <li><a href="home.php?page=#"> Coming Soon </a></li>
                    <li><a href="home.php?page=movies"> Movie Database </a></li>
                    <li><a href="home.php?page=#"> Schedules </a></li>
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
                    case 'create-movie':
                        require_once('create_movie.php');
                    break;
                    case 'edit-movie':
                        require_once('edit_movie.php');
                    break;
                    case 'delete-movie':
                        require_once('delete_movie.php');
                    break;
                    default:
                        require_once('movie_list.php');
                    break;
                }
            ?>
        </div>
        <a href="logout.php"> Logout </a>
    </body>
</html>