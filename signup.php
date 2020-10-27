
<?php
session_start();
$con = mysqli_connect('localhost','root');


if($con) {
mysqli_select_db($con, 'mathsplanet');
$name = $_POST['name'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$email = $_POST['email'];
if($password!=$repassword)   {
	echo "<script type='text/javascript'>alert('Password does not matched');
	window.location='signuphtml.php';
	</script>";
}
else   {

$q = "select * from signup where name='$name' && password = '$password' repassword ='$repassword' email= '$email' ";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num ==1)  {
   echo "<script type='text/javascript'>alert('We have already an account with this details');
	window.location='signuphtml.php';
	</script>";
}
else   {
     $qy = "insert into signup(name, password, repassword, email) values('$name', '$password', '$repassword', '$email')";
     mysqli_query($con, $qy);
	 echo "<script type='text/javascript'>alert('Successful signup');
	window.location='index.php';
	</script>";
}
}
}
else  {
     echo "<script>alert('No connection');</script>";
}


?>