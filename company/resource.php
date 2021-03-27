<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/signup/signup.php');

class resource extends connection{
	use Sanitize;
	public function add_resource($resource_name,$description,$type,$c_id,$res_link){
		$link=$this->connect();
		$resource_name=mysqli_real_escape_string($link,$this->test_input($resource_name));
		$description=mysqli_real_escape_string($link,$this->test_input($description));
		$type=mysqli_real_escape_string($link,$this->test_input($type));
		$res_link=mysqli_real_escape_string($link,$this->test_input($res_link));
		$sql="INSERT INTO resources(resource_name,type,description,id,u_id,link) VALUES('$resource_name','$type','$description','$c_id','".$_SESSION['user_id']."','$res_link')";
		if(mysqli_query($link,$sql)){
			return true;
		}
		else{
			echo $link->error;
		}
	}

	public function add_experience($c_id,$u_id,$experience,$my_pos,$start_date,$end_date){
		$link=$this->connect();
		$experience=mysqli_real_escape_string($link,$this->test_input($experience));
		$my_pos=mysqli_real_escape_string($link,$this->test_input($my_pos));
		$start_date=mysqli_real_escape_string($link,$this->test_input($start_date));
		$end_date=mysqli_real_escape_string($link,$this->test_input($end_date));

		$sql="INSERT INTO experience(c_id,u_id,experience,position,start_date,end_date) VALUES('$c_id','$u_id','$experience','$my_pos','$start_date','$end_date')";
		if(mysqli_query($link,$sql)){
			return true;
		}
		else{
			return false;
		}
	}

	public function get_user_resources($id){
		$link=$this->connect();

		$id=mysqli_real_escape_string($link,$this->test_input($id));

		$sql="SELECT * FROM resources WHERE id=(SELECT c_id FROM prep WHERE u_id='$id')";
		$res=mysqli_query($link,$sql);
		if($res!=NULL){
			return $res;
		}
	}

	public function get_resources(){
		$link=$this->connect();

		$sql="SELECT * FROM resources";

		$res=mysqli_query($link,$sql);
		return $res;
	}
}

?>