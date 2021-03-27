<?php
include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/signup/signup.php');
//include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/config.php');

class Profile extends connection{
	use Sanitize;
	public function get_user_details($id){
		$link =$this->connect();
		
		$id=mysqli_real_escape_string($link,$this->test_input($id));

        $sql="SELECT * FROM users WHERE id='$id'";
		$res=mysqli_query($link,$sql);
		if($res!=NULL){
			return $res;
		}
		else{
			return false;
		}
	}

	public function get_user_preperation($id){
		$link =$this->connect();
		
		$id=mysqli_real_escape_string($link,$this->test_input($id));

        $sql="SELECT * FROM users WHERE id='$id'";
		$res=mysqli_query($link,$sql);
		if($res!=NULL){
			return $res;
		}
		else{
			return false;
		}
	}

	public function get_user_company_details($id,$c_id){
		$link=$this->connect();
		$id=mysqli_real_escape_string($link,$this->test_input($id));

		$sql="SELECT * FROM company WHERE id='$c_id'";
		$res=mysqli_query($link,$sql);
		if($res!=NULL){
			return $res;
		}
	}

	public function get_preperation($id){
		$link=$this->connect();
		$id=mysqli_real_escape_string($link,$this->test_input($id));
		$sql="SELECT * FROM prep WHERE u_id='$id'";
		$res=mysqli_query($link,$sql);
		if($res!=NULL){
			return $res;
		}
	}
}



?>