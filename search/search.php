<?php

include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/signup/signup.php');

class Search extends connection{
	use Sanitize;
	public function search_result($search){
		$link=$this->connect();
		$search=mysqli_real_escape_string($link,$this->test_input($search));
		$sql="SELECT * FROM company WHERE name LIKE '%$search%'";
		$res=mysqli_query($link,$sql);
		return $res;
	}
}

?>