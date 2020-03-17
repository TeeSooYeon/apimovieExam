<?php
if(isset($_POST['submit'])){
    $search = $_POST['search'];
    $json = file_get_contents('https://api-packages.herokuapp.com/movie_api/movies/search.php?name='.$search);
    $data = json_decode($json,true);
    
    $list = $data['records'];
}else{
    $json = file_get_contents('https://api-packages.herokuapp.com/movie_api/movies/read.php');
    $data = json_decode($json,true);
    
    $list = $data['records'];
}
?>
<!DOCTYPE html>
<html>
    <form class="center" method="POST" action="home.php?page=movies">
        <input type="text" name="search" autocomplete="off" placeholder="Enter Movie Name..."/>
        <input type="submit" name="submit" value="Search"/>
        <a class="button3" href="home.php?page=create-movie"> Create New Movie </a>
    </form>
    <table class="darkTable">
        <thead>
            <tr>
                <th>Movie Title</th>
                <th>Genre</th>
                <th>Price</th>
                <th>Year Released</th>
            </tr>
        </thead>
    <?php
      foreach($list as $result){
    ?>
    <tbody>
        <tr>
            <td> <a href="home.php?page=show-movie&id=<?php echo $result['id'];?>"> <?php echo $result['name']; ?> </a> </td>
            <td><?php echo $result['genre']; ?> </td>
            <td><?php echo $result['price']; ?> </td>
            <td><?php echo $result['year'];?> </td>
        </tr>
    </tbody>
    <?php
      }
    ?>
    </table>
</html>