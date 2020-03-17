<?php
$id = $_GET['id'];
$json = file_get_contents('https://api-packages.herokuapp.com/movie_api/movies/read_one.php?id='.$id);
$data = json_decode($json,true);
$details = array('records' => $data);
$result = $details['records'];
$name = $result['name'];
$genre = $result['genre'];
$price = $result['price'];
$desc = $result['description'];
$year = $result['year'];
?>
<!DOCTYPE html>
<html>
    <div class="center">
        <div class="movie_box">
            <div class="image"></div>
            <h1 class="title"><?php echo $name; ?></h1>
            <h3 class="sub">
                Genre: <?php echo $genre; ?> <br> <br>
                Year: <?php echo $year; ?> <br> <br>
                Price: (PHP) <?php echo $price; ?>
            </h3>
            <textarea class="view_movie" readonly>
                <?php echo $desc;?>
            </textarea> <br> <br>
            <a class="button" href="#">+ Watchlist</a>
            <a class="button" href="#">+ Favorite</a>
        </div>
    </div>
</html>