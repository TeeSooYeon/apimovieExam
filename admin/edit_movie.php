<?php
// Get genre list
$json2 = file_get_contents('https://api-packages.herokuapp.com/movie_api/category/read.php');
$data2 = json_decode($json2,true);
$cat = $data2['records'];

// Get movie data
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
            <form method="POST" action="process.php?action=edit" id="edit">
            <input type="hidden" value="<?php echo $id; ?>" name="id"/>
            <h3 class="sub">Title: <input type="text" name="title" autocomplete="off" value="<?php echo $name; ?>" required/></h3>
            <h3 class="sub">
                Genre:
                <select name="genre" form="edit">
                    <option value="<?php echo $genre;?>"><?php echo $genre;?> (Current)</option>
                <?php
                    foreach($cat as $value){
                        $gen_name = $value['name'];
                ?> 
                    <option value="<?php echo $gen_name;?>"><?php echo $gen_name;?></option>
                <?php 
                    }
                ?>
                </select> <br> <br>
                Year: <input type="number" name="year" min="1969" max="2969" autocomplete="off" value="<?php echo $year; ?>" required/><br> <br>
                Price: (PHP) <input type="number" name="price" min="1" max="9999" autocomplete="off" value="<?php echo $price; ?>" required/> 
            </h3>
            <textarea name="desc" class="view_movie" form="edit">
                <?php echo $desc;?>
            </textarea> <br> <br>
            <input type="submit" name="submit" value="Update"/>
            <input type="submit" name="submit" value="Cancel"/>
            </form>
        </div>
    </div>
</html>