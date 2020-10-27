<?php
session_start();
?>
<!doctype html>

<html>
   <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script> 
   <title>SignUp</title>
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
		 hr.new  {
			 border:1px solid #ccc;
		 }
		 
	     </style>
   
   </head>
   
   <body>
      <div style="width:100%; height:auto; background-color:#639; margin-top:-20px">
      <h1 style="color:white"><b><u>MathsPlanet</u></b><br><b><i>By Anmol Shrivastav.</i>
      </b></h1>
      </div>
      <div class="container" style="margin-top:-10px">
      <ul>
       <li><a href="index.php">Home
    </a> </li>
    
    <li><a  href="contact.php">Contact</a></li>
    <li><a href="news.php">News</a></li>
    <li><a class="active" href="signuphtml.php">Signup
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
      
      <div style="background-color:#CCC; width:100%; height:auto">  <!-- background div -->
      <form class="table-responsive">
       <tr><h1 style="color:red"><strong><i><u>Create Your Account</u></i></strong></h1></tr> 
      </form>
      
      <div align="center"> <!-- align center div -->
       
      <form action="signup.php" method="post">
  <div class="form-group">
    <label>Name :<h4 style="float:left; margin-top:2px; color:red">*</h4></label>
    <input type="text" id="namedata" style="width:200px" class="form-control" name="name"
    required>
  </div>
  <div class="form-group">
    <label>Password :<h4 style="float:left; margin-top:2px; color:red">*</h4></label>
    <input type="password" id="passworddata" style="width:200px" class="form-control" name="password" required>
    
  </div>
  
  <div class="form-group">
    <label>Re-enter Password :<h4 style="float:left; margin-top:2px; color:red">*</h4></label>
    <input type="password" id="repassworddata" style="width:200px" class="form-control" name="repassword" required>
    
  </div>
  
  
  <div class="form-group">
  <label>Email Address :<h4 style="float:left; margin-top:2px; color:red">*</h4></label>
  <input type="email"  id="emaildata" name="email" required
  style="width:300px" class="form-control" id="exampleInputEmail"
  placeholder="example123@gmail.com">
  <small id="emailHelp" class="form-text text-muted">
    We'll never share your email with anyone else.</small>
  </div>
  
  
    
  
  
  <div class="form-group" style="margin-left:20px">
    <button  id="signup" type="submit" class="btn btn-success">
     <style="color:white; text-decoration:none">SignUp</button>
  </div>
  
</form>
    </div>  <!-- align center div -->
    
      </div>     <!-- background div -->
      <hr class="new">
      
      <div class="col-sm-12" style="height:auto">
      <footer align="center">&copy;Copyright 2020 &nbsp; | &nbsp;&reg;Mathsplanet.com &nbsp;
     | &nbsp; &trade;Terms and condition</footer>
     </div>
      
      
      </div>  <!-- container div -->
   
  
   
   </body>

</html>