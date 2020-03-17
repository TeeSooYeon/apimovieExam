<?php
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
    case 'create':
        if($_POST['submit'] == "Create"){
            $name = $_POST['title'];
            $genre = $_POST['genre'];
            $price = $_POST['price'];
            $description = $_POST['desc']; //sanitize
            $year = $_POST['year'];

            //echo $name ."<br>" ;
            //echo $genre ."<br>" ;
            //echo $price ."<br>" ;
            //echo $description ."<br>" ;
            //echo $year ."<br>" ;
            $s_desc = filter_var($description, FILTER_SANITIZE_STRING);
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api-packages.herokuapp.com/movie_api/movies/create.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS =>"{\n    \"name\" : \"$name\",\n    \"genre\" : \"$genre\",\n    \"price\" : \"$price\",\n    \"description\" : \"$s_desc\",\n    \"year\" : \"$year\"\n}",
                CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Content-Type: text/plain"
                ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            echo $response;
        }else{
            // Do nothing...
        }
        header("Location: index.php?page=movies");
    break;
    case 'edit':
        $id = $_POST['id'];
        if($_POST['submit'] == "Update"){
            $name = $_POST['title'];
            $genre = $_POST['genre'];
            $year = $_POST['year'];
            $price = $_POST['price'];
            $description = $_POST['desc'];
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api-packages.herokuapp.com/movie_api/movies/update.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS =>"{\n    \"id\" : \"$id\",\n    \"name\" : \"$name\",\n    \"genre\" : \"$genre\",\n    \"price\" : \"$price\",\n    \"description\" : \"$description\",\n    \"year\" : \"$year\"\n}",
                CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Content-Type: text/plain"
                ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            echo $response;
        }else{
            // Do nothing, go to header...
        }
        header("Location: index.php?page=show-movie&id=$id");
    break;
    case 'delete':
        $id = $_GET['id'];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-packages.herokuapp.com/movie_api/movies/delete.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS =>"{\n    \"id\" : \"$id\"\n}",
            CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Content-Type: text/plain"
            ),
        ));
        
        $response = curl_exec($curl);
            
        curl_close($curl);
        echo $response;
        header("Location: index.php?page=movies");
    break;
}
?>