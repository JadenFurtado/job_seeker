<?php

class connection{
	public function connect(){
		$link=new mysqli("localhost","root","","job_prep");
		return $link;
	}
}

?>