<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/signup/signup.php');

class Company extends connection{
	use Sanitize;
	public function get_company_vacancies($id){
		$link=$this->connect();
		$id=mysqli_real_escape_string($link,$this->test_input($id));

		$sql="SELECT * FROM vacancies";
		$res=mysqli_query($link,$sql);
		if($res!=NULL){
			return $res;
		}
	}

	public function add_company_to_user($id){
		$link=$this->connect();
		$id=mysqli_real_escape_string($link,$id);

		$sql="INSERT INTO prep(c_id,u_id) VALUES('$id','".$_SESSION['user_id']."'')";//inserting into the table prep
		if(mysqli_query($link,$sql)){
			return $link->error;
		}
		else{
			return false;
		}
	}

	public function check_if_company_added($id){
		$link=$this->connect();
		$id=mysqli_real_escape_string($link,$this->test_input($id));
		$user=$_SESSION['user_id'];

		$sql="SELECT c_id FROM prep WHERE u_id='$user'";
		
		$res=mysqli_query($link,$sql);
        if($res!=NULL){
        	while($row=mysqli_fetch_array($res)){
        		if($row['c_id']==$id){
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        }
	}

	public function get_resources($c_id){
		$link=$this->connect();
		$c_id=mysqli_real_escape_string($link,$c_id);

		$sql="SELECT * FROM resources WHERE id='$c_id'";
		$res=mysqli_query($link,$sql);
		if($res!=NULL){
			return $res;
		}
		else{
			return NULL;
		}
	}

	public function get_company_details($c_id){
		$link=$this->connect();
		$c_id=mysqli_real_escape_string($link,$this->test_input($c_id));

		$sql="SELECT * FROM company WHERE id='$c_id'";
		$res=mysqli_query($link,$sql);
		if($res!=NULL){
			return $res;
		}
	}
}

?>