<?php
session_start();
?>
<!doctype html>
<html>
   <head>
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
       <script src="js/jquery.js" type="text/javascript"></script>
       <script src="js/bootstrap.min.js" type="text/javascript"></script>
       <title>Mathsplanet</title>
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
       <li>
       <a class="active" href="index.php">Home</a></li>
       <li><a href="contact.php">Contact</a></li>
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
      
 
 <div class="carousel slide" data-ride="carousel" id="abc" data-interval="2000">

<ol class="carousel-indicators">
<li data-target="#abc" data-slide-to="0" class="active"></li>
<li data-target="#abc" data-slide-to="1"></li>
<li data-target="#abc" data-slide-to="2" ></li>
<li data-target="#abc" data-slide-to="3" ></li>
<li data-target="#abc" data-slide-to="4" ></li>
<li data-target="#abc" data-slide-to="5" ></li>
</ol>

<div class="carousel-inner">
<div class="item">
<img src="images/1.jpg" style="width:100%; height:350px;">
</div>
<div class="item">
<img src="images/2.jpg" style="width:100%; height:350px;">
</div>
<div class="item">
<img src="images/3.png" style="width:100%; height:350px;">
</div>
<div class="item">
<img src="images/4.png" style="width:100%; height:350px;">
</div>
<div class="item">
<img src="images/5.png" style="width:100%; height:350px;">
</div>
<div class="item active">
<img src="images/6.jpg" style="width:100%; height:350px;">
</div>

<div class="carousel-caption">
<style>
h2 { color:red; }
</style>
<h2><b><i>Maths Planet By Anmol Shrivastav</i></b></h2>
</div>
<a class="left carousel-control "href="#abc" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span></a>     

<a class="right carousel-control "href="#abc" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div> 
</div>

<!--carousel part finish-->
     <div>
     <div class="col-sm-4" style="background-color:pink; height:200px">
       
      <marquee scrollamount="5" direction="left" behavior="alternate">
       <h3> <span class="glyphicon glyphicon-hand-down"></span>
       <b><i>View Study Materials</i> </b></h3>
       </marquee>
       <div>
       <a href="class9.php" name="class9">
       <i><h4>Class 9th</h4></i>
       </a></div>
       
        
       <div>
       <a href="class10.php" name="class10">
       <i><h4>Class 10th</h4></i>
       </a></div>

      </div>  <!-- closing of first col-lg-4 -->
      
      <div class="col-sm-8" style="background-color:white; height:200px">
      <br><br>
       <strong><u><i>Definition of Mathematics</u> :</i></strong>
       Mathematics is the study of such topics as quantity, structure, space, and change.
       It has no generally accepted definition.
       Through the use of abstraction and logic, mathematics 
       developed from counting, calculation, measurement, 
       and the systematic study of the shapes and motions 
       of physical objects.
      </div>
     
      
      
      </div> <!--closing of col-lg-8 div -->
      
     </div><!-- closing of main div of row -->
     
     <hr class="new">     
     <footer align="center">&copy;Copyright 2020 &nbsp; | &nbsp;&reg;Mathsplanet.com &nbsp;
     | &nbsp; &trade;Terms and condition</footer>
     
</div>      <!--container div closed-->

  

 </body>
</html>