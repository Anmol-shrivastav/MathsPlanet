<?php
session_start();
?>

<!doctype html>
<html>
  <head>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <script src="js/jquery.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
     <title>Class 9th</title>
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
		 table {
             font-family: arial, sans-serif;
             border-collapse: collapse;
             width: 100%;
         }

         td, th {
             border: 1px solid #FFF;
             text-align: left;
             padding: 8px;
         }

         tr:nth-child(even) {
             background-color:#dddddd;
         }
		 hr.new  {
			 border:1px solid #ccc;
		 }
		 
	     </style>
         
  </head>
  
  <body>
  
  <div style="width:100%; height:100px; background-color:#639; margin-top:-15px">
   <h1 style="color:white"><b><u>MathsPlanet</u></b><br><b><i>By Anmol Shrivastav.
   </i></b></h1>
 </div>
 <div class="container" style="margin-top:-10px">  <!-- container div -->
 
 <ul>
     <li><a href="index.php">Home
    </a> </li>
    
    <li><a href="contact.php">Contact</a></li>
    <li><a href="news.php">News</a></li>
    <li><a class="active" href="class9th.php">Class-IX</a></li>
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
 </nav>
 
   <div style="width:auto; height:auto">
   <h1 style="color:red"><i><strong><u>Mathematics Syllabus Offered By CBSE For Class 9th!!!
   </u></strong></i></h1>
  </div>
  
  
  
    <div><!--COURSE STRUCTURE CLASS-IX -->
    <div class="col-sm-4" style="height:auto">
    <h3><strong><u>COURSE STRUCTURE OF CLASS-IX </u>:</strong></h3>
    </div> <!-- col-sm-4 -->
    
    
    <div class="col-sm-8" style="height:auto">
<table>
  <tr>
    <th>Units</th>
    <th>Unit Name</th>
    <th>Marks</th>
  </tr>
  <tr>
    <td>I</td>
    <td>NUMBER SYSTEM</td>
    <td>08</td>
  </tr>
  <tr>
    <td>II</td>
    <td>ALGEBRA</td>
    <td>17</td>
  </tr>
  <tr>
    <td>III</td>
    <td>COORDINATE GEOMETRY</td>
    <td>04</td>
  </tr>
  <tr>
    <td>IV</td>
    <td>GEOMETRY</td>
    <td>28</td>
  </tr>
  <tr>
    <td>V</td>
    <td>MENSURATION</td>
    <td>13</td>
  </tr>
  <tr>
    <td>VI</td>
    <td>STATISTICS & PROBABILITY</td>
    <td>10</td>
  </tr>
  <tr>
    <td></td>
    <td>Total</td>
    <td>80</td>
    </tr>
</table>
    </div> <!-- col-sm-8 -->
    
   </div>  <!--COURSE STRUCTURE CLASS-IX -->
       
   <div>    <!--CLASSIFICATION OF CHAPTERS-->
      <div class="col-sm-4" style="height:auto">
         <h3><strong><u>CLASSIFICATION OF CHAPTERS </u>:</strong></h3>
      </div>   <!-- col-sm-4 -->
      
      <div class="col-sm-8">
         <table>
  <tr>
    <th>Units</th>
    <th>Unit Name</th>
    <th>Included Chapters</th>
  </tr>
  <tr>
    <td>I</td>
    <td>NUMBER SYSTEM</td>
    <td>Real Numbers</td>
  </tr>
  <tr>
    <td>II</td>
    <td>ALGEBRA</td>
    <td>Polynomials, Linear equation in two variables</td>
  </tr>
  <tr>
    <td>III</td>
    <td>COORDINATE GEOMETRY</td>
    <td>Coordinate Geometry</td>
  </tr>
  <tr>
    <td>IV</td>
    <td>GEOMETRY</td>
    <td>Introduction to Euclid Geometry, Lines and Angels, Triangles, Quadrilaterals, Area,
    Circles, Constructions</td>
  </tr>
  <tr>
    <td>V</td>
    <td>MENSURATION</td>
    <td>Areas, Surface Area and Volumes</td>
  </tr>
  <tr>
    <td>VI</td>
    <td>STATISTICS & PROBABILITY</td>
    <td>Statistics and Probability</td>
  </tr>
</table>
      </div>   <!-- col-sm-8 -->
      
  </div>   <!--CLASSIFICATION OF CHAPTERS-->
  
  
  
  <table class="table-responsive">
    
     <tr><strong><h1 align="center">
     <marquee scrollamount="5" direction="right" behavior="alternate">
     STUDY MATERIALS</marquee></h1></strong></tr>
     </marquee>
     <tr><td>
     <img src="images/cbse last year paper.png" style="width:auto; height:auto">
     CBSE Previous Year Paper's</td>
     <td><a href="#paper1">Paper 1</a></td>
     <td><a href="#paper2">Paper 2</a></td>
     <td><a href="#paper3">Paper 3</a></td></tr>
     
     <tr><td>
     <img src="images/cbse sample paper.jpg" style="width:auto; height:auto">
     CBSE Sample Paper's</td>
     <td><a href="#paper1">Sample Paper 01</a></td>
     <td><a href="#paper2">Sample Paper 02</a></td></tr>
     </table>
     
     <table class="table-responsive" align="center">
     <th><img src="images/Cbse notes.png" style="width:auto; height:auto">
     CBSE Revision Note's</th>
     
     <tr><td>Chapter 1</td>
     <td><a href="#1">Number Systems</a></td></tr>
     
     <tr><td>Chapter 2</td>
     <td><a href="#2">Polynomials</a></td></tr>
     
     <tr><td>Chapter 3</td>
     <td><a href="#3">Coordinate Geometry</a></td></tr>
     
     <tr><td>Chapter 4</td>
     <td><a href="#3">Linear Equations in Two Variables</a></td></tr>
      
     <tr><td>Chapter 5</td>
     <td><a href="#3">Introduction to Euclids Geometry</a></td></tr>
     
     <tr><td>Chapter 6</td>
     <td><a href="#3">Lines and Angles</a></td></tr>
     
     <tr><td>Chapter 7</td>
     <td><a href="#3">Triangles</a></td></tr>
     
     <tr><td>Chapter 8</td>
     <td><a href="#3">Quadrilaterals</a></td></tr>
     
     <tr><td>Chapter 9</td>
     <td><a href="#3">Areas of Parallelograms and Triangles</a></td></tr>
     
     <tr><td>Chapter 10</td>
     <td><a href="#3">Circles</a></td></tr>
     
     <tr><td>Chapter 11</td>
     <td><a href="#3">Constructions</a></td></tr>
     
     <tr><td>Chapter 12</td>
     <td><a href="#3">Herons Formula</a></td></tr>
     
     <tr><td>Chapter 13</td>
     <td><a href="#3">Surface Areas and Volumes</a></td></tr>
     
     <tr><td>Chapter 14</td>
     <td><a href="#3">Statistics</a></td></tr>
     
     <tr><td>Chapter 15</td>
     <td><a href="#3">Probability</a></td></tr>
     
  </table>  
  
  <hr class="new">
  
   <footer align="center">&copy;Copyright 2020 &nbsp; | &nbsp;&reg;Mathsplanet.com &nbsp;
     | &nbsp; &trade;Terms and condition</footer>
     
       
  </div> <!-- container div -->
  
  </body>
</html>
<!--













 