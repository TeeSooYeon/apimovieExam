<?php
class Admin{
    public $db;
	
	public function __construct(){
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Database connection error.";
			exit;
		}
    }
    
    // Check Session
    public function get_session(){	
		if(isset($_SESSION['login']) && $_SESSION['login'] == true){
			return true;
		}else{
			return false;
		}
	}
	
	public function check_login($user, $password){
		$sql = "SELECT * FROM tbl_admin WHERE admin_username = '$user' AND admin_pass = '$password';";
		$result = mysqli_query($this->db,$sql);
		$row = mysqli_fetch_assoc($result);
		$count_row = $result->num_rows;
		if($count_row == 1){
			$_SESSION['login'] = true;
			return true;
		}else{
			return false;
		}
    }
}
?>