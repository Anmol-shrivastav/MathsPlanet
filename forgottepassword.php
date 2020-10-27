<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con) {
mysqli_select_db($con, 'mathsplanet');
$email = $_POST['email'];
if($_POST) {
	$email = $_POST['email'];
	$q = mysqli_query("select * from signup where email='$email'&& password='password'");
	$data = mysqli_fetch_row($q);
	if($data>0)
	{
	   echo $data['password']; 	
	}   else  {
	   echo "User email not found in database";	
	}
}

}
?>