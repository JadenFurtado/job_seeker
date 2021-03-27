<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/company/company.php');

$link=new connection();

$id=mysqli_real_escape_string($link->connect(),$_POST['id']);
$flag=mysqli_real_escape_string($link->connect(),$_POST['flag']);

if($flag==1){
$sql="INSERT INTO prep(c_id,u_id) VALUES('$id','".$_SESSION['user_id']."')";
}
else{
	$sql="DELETE FROM prep WHERE c_id='$id' AND u_id='".$_SESSION['user_id']."'";
}
if(mysqli_query($link->connect(),$sql)){
	return true;
}
else{
	
}
