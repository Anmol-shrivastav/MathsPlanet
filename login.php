
<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con) {
mysqli_select_db($con, 'mathsplanet');
$email = $_POST['email'];
$password = $_POST['password'];


$q = "select * from signup where email= '$email'&&password = '$password'";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num ==1)  {
    $_SESSION['email'] = $email;
	echo "<script type='text/javascript'>alert('Successful Login');
	window.location='index.php';
	</script>";
}
else   {
     echo "<script type='text/javascript'>alert('Email or password is invalid');
	window.location='loginhtml.php';
	</script>";
}
}
else {
	echo "No connection";
}
?>