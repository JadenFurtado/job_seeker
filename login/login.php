<?php

session_start();
//include($_SERVER['DOCUMENT_ROOT'].'/jobprep/config.php');
include($_SERVER['DOCUMENT_ROOT'].'/jobprep/signup/signup.php');
class Users extends connection{
	use Sanitize;
	public function user_login($email,$password){
		$link = $this->connect();

		$email=mysqli_real_escape_string($link,$this->test_input($email));
		$password=mysqli_real_escape_string($link,$this->test_input($password));
		$sql="SELECT * FROM users WHERE email_id='$email'";
		$res=mysqli_query($link,$sql);
		while($row=mysqli_fetch_array($res)){
			$hash=$row['passwords'];
			$id=$row['id'];
		}
		if(password_verify($password,$hash)){
			$_SESSION['user_id']=$id;
			return true;
		}
	} 
}

?>