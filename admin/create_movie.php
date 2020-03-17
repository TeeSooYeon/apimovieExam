<?php
// Get genre list
$json2 = file_get_contents('https://api-packages.herokuapp.com/movie_api/category/read.php');
$data2 = json_decode($json2,true);
$cat = $data2['records'];
?>
<!DOCTYPE html>
<html>
    <div class="center">
        <div class="movie_box">
            <div class="image"></div>
            <form method="POST" action="process.php?action=create" id="create">
            <h3 class="sub">Title: <input type="text" name="title" autocomplete="off" required/></h3>
            <h3 class="sub">
                Genre:
                <select name="genre" form="create">
                <?php
                    foreach($cat as $value){
                        $gen_name = $value['name'];
                ?> 
                    <option value="<?php echo $gen_name;?>"><?php echo $gen_name;?></option>
                <?php 
                    }
                ?>
                </select> <br> <br>
                Year: <input type="number" name="year" min="1969" max="2969" autocomplete="off" required/><br> <br>
                Price: (PHP) <input type="number" name="price" min="1" max="9999" autocomplete="off" required/> 
            </h3>
            <textarea name="desc" class="view_movie" form="create">Enter movie plot or details...</textarea> <br> <br>
            <input type="submit" name="submit" value="Create"/>
            <input type="submit" name="submit" value="Cancel"/>
            </form>
        </div>
    </div>
</html>