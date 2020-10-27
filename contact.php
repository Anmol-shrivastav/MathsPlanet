<?php
session_start();
?>

<!doctype html>
<html>
  <head>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <script src="js/jquery.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
     <title>Contact</title>
     <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              
         <style type="text/css">
		 body{
			 padding:0;
			 margin:0;
		 }
		 ul{
			 list-style-type:none;
			 margin:0;
			 padding:0;
			 overflow:hidden;
			 background-color:pink;
		 }
		 li{
			 float:left;
		 }
		 
		 li a{
			 display:block;
			 color:white;
			 text-align:center;
			 padding:14px 16px;
			 text-decoration:none;
		 }
		 li a:hover{
			 size:100px;
			 color:#111;
			 text-decoration:none;
		 }
		 a.active{
			 background-color:orange;
		 }
		 li a:hover:not(.active){
			 background-color:yellow;
		 }
		  #corner  {
			 border-radius:15px 70px;
			 border:2px solid orange;
			 padding:20px;
			 width:100%;
			 height:400px;
			 margin-top:-10px;
			 
		 }
		 hr.new  {
			 border:1px solid #ccc;
		 }
		 
	     </style>
         
   </head>
   
 <body>

 <div style="width:100%; height:auto; background-color:#639; margin-top:-20px">
   <h1 style="color:white"><b><u>MathsPlanet</u></b><br><b><i>By Anmol Shrivastav.</i></b></h1>
 </div>
 <div class="container" style="margin-top:-10px">
 <ul>
    <li><a href="index.php">Home
    </a> </li>
    
    <li><a class="active" href="contact.php">Contact</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="signuphtml.php">Signup
    </a></li>
     <?php 
	    if(isset($_SESSION['email']))  {
	   ?>
           <li><a  href="logout.php">Logout</a></li>
            <li style="float:right">
       <h4 class="glyphicon glyphicon-user" style="color:white">
	   <?php echo($_SESSION['email']); ?>
       </h4></li>
           <?php } else { ?>
      <li><a  href="loginhtml.php">Login</a></li>
       <?php } ?>
 </ul>
 <br>
 <div id="corner">  <!-- border div -->
 <h2 align="center" style="color:#F30">Contact Us:</h2>
 
 <h4 align="center">Email Id: anmolshrivastav.08@gmail.com</h4><BR>
 <h2 align="center" style="color:#f30">FEEL FREE TO CONTACT US</h2>
 
 </div>            <!-- border div -->
 <hr class="new">
 <footer align="center">&copy;Copyright 2020 &nbsp; | &nbsp;&reg;Mathsplanet.com &nbsp;
     | &nbsp; &trade;Terms and condition</footer>
 
 
 
 
 </div>   <!-- container div -->
 
 </body>
</html>
