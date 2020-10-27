<?php

session_start();

?>
<!doctype html>
<html>
   <head>
      <title>News</title>
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
			 
		 }
		 hr.new {
			 border:1px solid #CCC;
			 
		 }
		 .responsive  {
			 width:auto;
			 height:auto;
		 }
         hr.new {
			 border:1px solid #CCC;
			 
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
    
    <li><a href="contact.php">Contact</a></li>
    <li><a class="active" href="news.php">News</a></li>
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

<div class="col-sm-12" style="height:auto; margin-top:-7px">
  
  <h3> <span class="glyphicon glyphicon-pencil"></span>        
       <b><i><u>Important Links</u></i></b></h3>
       
       <div>
       <a href="http://cbse.nic.in/newsite/reg2019.html">
       <i><h4>ONLINE REGISTRATION CARD FOR CLASS IX/XI EXAMINATION 2020</h4></i>
       </a></div>

       <div>
       <a href="http://cbse.nic.in/newsite/attach/DATESHEET_PUBLIC%20NOTICE.pdf">
       <i><h4>DATE SHEET FOR BOARD EXAMINATION 2020  |  CLASS X   |  CLASS XII</h4></i>
       </a></div>
       <div>
       <a href="http://cbse.nic.in/newsite/exam-postpone-Notification-2020.pdf">
       <i><h4>NOTIFICATION - POSTPONEMENT OF BOARD EXAMINATION TILL 31/3/2020</h4></i>
       </a></div>
        <div>
       <a href"http://cbse.nic.in/newsite/attach/CBSE%20Exam%202020%20detials%20-%20Hindi.pdf">
       <i><h4>CBSE EXAM 2020 DETAILS</h4></i>
       </a></div>
       	
      
  
  </div>  <!-- col-sm-12 div-->

     
 <div class="col-sm-12" style="height:auto">
 <h1><u>CBSE Board class 10, Class 12 remaining exam dates 2020:</u></h1>
 </div> <!--  col-sm-12 -->
 
 <div>  <!--main div of second row -->
 <div class="col-sm-4" style="height:auto">
 <img src="images/stdpic.jpg" height="auto" width="230">
 </div> <!-- second col-sm-4 -->
 
 <div class="col-sm-8" style="height:auto">
 <p>We all know that the current situation of the nation is going through a worse stage and due to this; great affect has been on the education and CBSE board exams. But yes, the situation is going to calm down very soon and CBSE is going to come up with new and important notice very soon about Class 10, 12 re-exam dates 2020.

According to sources and other media portals, we got to know that CBSE is coming up with new exam dates for class 10 and 12 very soon. This is to inform you that CBSE will release the Board exam dates 10 days before conducting the exams.</p>
 </div> <!--  col-sm-8 -->
 </div>  <!--main div of second row --> 
  
   
  <div class="col-sm-12" style="height:auto">
  <h1><u>CBSE Board 2020: Important information about board exams</u></h1>
  </div>  <!-- col-sm-12 div -->
  
  <div class="col-sm-12" style="height:auto">
  <p>From the next examinations, CBSE is going to have changes in the examination pattern also. Before CBSE board exams, the board will release the notification about the change in paper pattern i.e. 20% objective type questions. This will be the new assessment pattern for CBSE exams.

A significant change, according to a circular released by the Board in March-mid this year, will be a 20 per cent of questions in theory papers of objective type questions including multiple choice questions (MCQs).</p>
  </div>  <!-- col-sm-12 div -->
 
  
  
 
 <div class="col-sm-12" style="height:auto">
 <footer align="center">&copy;Copyright 2020 &nbsp; | &nbsp;&reg;Mathsplanet.com &nbsp;
     | &nbsp; &trade;Terms and condition</footer>
 </div>
 
 </div>  <!-- container div close -->

 
 
   </body>
</html>