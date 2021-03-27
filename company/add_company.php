<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/company/company.php');
$id=$_POST['id'];
$flag=$_POST['flag']
$link=new connection();
if($flag==1){
$sql="INSERT INTO prep(c_id,u_id) VALUES('$id','".$_SESSION['user_id']."')";
}
else{
	$sql="DELETE FROM prep WHERE u_id='".$_SESSION['user_id']."' HAVING c_id='$id'";
}
if(mysqli_query($link->connect(),$sql)){
	return true;
}
