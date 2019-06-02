<?php


require("includes/modal.php");
include_once("database/database.php");

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vidya Feedback</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  <style>
  
  
  
  
  
    /* Remove the navbar's default margin-bottom and rounded borders */ 
	body {
  margin: 0;
  font-size: 28px;
}

.header {



  background-color: #f1f1f1;
  
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}



	/* Add a gray background color and some padding to the footer */
    footer {
      background-color:#333333;
      padding: 25px;
	  color:#FFFFFF;
	  font-style:italic;
	  font-family:"Times New Roman", Times, serif;
	  
    }
	
	
	 footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color:#FF0000;
  }
    
   
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
	
	
	
	

	
	
  
  </style>
  
  
  
  
</head>
<body>



 <div class="header" >
    
      <img src="media/log.jpg" class="img-responsive"/>
   
 </div>
 


<nav class="navbar navbar-inverse">
    <div  id="navbar">
      
        <a class="active" href="feed.php" >Home</a>
        <a href="about.php" >About</a>
        <a href="contact.php" >Contact</a>
      
     <ul class="nav navbar-nav navbar-right">
        <a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a>
      </ul>
    </div>
	
</nav>	
	
  


   <div  id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="media/feedback/2.jpg" alt="Image">
             
      </div>
	  
	  <div class="item ">
        <img src="media/feedback/5.jpg" alt="Image">
            
      </div>

      <div class="item ">
        <img src="media/feedback/1.jpg" alt="Image">
            
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>





  
<div class="container text-center">    
  <h3><b>STUDENT's FEEDBACK</b></h3><br>
  <div class="row">
    <div class="col-sm-6">
      <a href="includes/student.php" ><img src="media/feedback/click.jpg" alt="Image"></a>
      <p><b>Student's Zone</b></p>
    </div>
    <div class="col-sm-6"> 
     <a href="includes/faculty.php" > <img src="media/feedback/click.jpg" alt="Image"></a>
      <p><b>Hod's Zone</b></p>    
    </div>
    
  </div>
</div>



<br>






<footer class="container-fluid text-center" >
   
  <div class="col-sm-4 text-center">
<h3 style="font-size:40px"   >FEEDBACK</h3>
<hr>

<h4 style="font-size:23px">Online student feedback system is the web based feedback collecting system from the students and provides the automatic generation of a feedback which is given by students.</h4>
<h4 style="font-size:23px">  We have developed student feedback system to provide feedback in a quick and easy manner to the particular department.</h4>
<h4 style="font-size:23px"> So we called it a student’s feedback  system .</h4> 
</div>
<div class="col-sm-4 text-center">
 <p>  <a href="#" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
 <summary>
 <embed src="media/2.webm" width="325" height="230"  >
 </embed>
  </summary>
 <h1>@ Copyright 2018 Vidya College of Engineering</h1>
 
  </div>
<div class="col-sm-4 text-center">
<h3 style="font-size:40px">CONTACT US </h3>
<hr>

				<form action="#" method="post">
                  <label>
					<input style="color:#000000"  type="text" name="email" placeholder="Email" required />
					</label>
					<label>
					<textarea style="color:#000000"  name="msg" placeholder="Message" required></textarea><div>
					</label>
					<button type="submit" name="send" class="btn btn-primary">SEND</button>

				</form>
				
				
						   
<?php

if(isset($_POST['send']))
          {
           $email=$_POST['email'];$msg=$_POST['msg'];

             $database->snd($email,$msg);


           }
?> 
    				
				
				
<hr>
<h4>COLLEGE ADDRESS:-</h4>
<h4>Vidya Knowledge Park
Panchli Khurd, Uttar Pradesh 250002
</h4>

<h4>email:-vidya.edu.in</h4>


</div>
  
</footer>

</body>
</html>






