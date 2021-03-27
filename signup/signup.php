<?php
include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/config.php');

class Signup extends connection{
	use Sanitize;
	public function user_signup($name,$email,$phone_no,$password){
		$link=$this->connect();

		$name=mysqli_real_escape_string($link,$this->test_input($name));
		$email=mysqli_real_escape_string($link,$this->test_input($email));
		$phone_no=mysqli_real_escape_string($link,$this->test_input($phone_no));
		$password=mysqli_real_escape_string($link,$this->test_input($password));

		$hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);//password hasing
		$sql="INSERT INTO users(name,email_id,phone_no,passwords)VALUES('$name','$email','$phone_no','$hash')";
		if(mysqli_query($link,$sql)){
			return true;
		}
		else{
			echo $link->error;
		}
	}

	public function company_signup($name,$email,$phone_no,$password){
		$link=$this->connect();

		$name=mysqli_real_escape_string($link,$this->test_input($name));
		$email=mysqli_real_escape_string($link,$this->test_input($email));
		$phone_no=mysqli_real_escape_string($link,$this->test_input($phone_no));
		$password=mysqli_real_escape_string($link,$this->test_input($password));

		$hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);//password hasing
		$sql="INSERT INTO company(name,email_id,phone_no,passwords)VALUES('$name','$email','$phone_no','$hash')";
		if(mysqli_query($link,$sql)){
			return true;
		}
		else{
			echo $link->error;
		}
	}
}

trait Sanitize{
	public function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}


?>