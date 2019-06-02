

<?php
session_start();
include("database/database.php");

  

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student's Zone</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
<link rel="stylesheet" type="text/css" href="css/style.php">

</head>




<body>

 <div class="header" >
    
      <img src="media/log.jpg" class="img-responsive"/>
   
 </div>



    <div  id="navbar">
      
        <a  href="feed.php" >Home</a>
       <a  href="includes/faculty.php" >HOD'S ZONE</a>
	    <a class="active" href="#" >FEEDBACK VIEW</a>
        <ul class="nav navbar-nav navbar-right">
		<a href="#" >
        <span class="glyphicon glyphicon-home"></span> <?php  print $database->getname($_SESSION['brnc']);     ?></a>
        <a href="hod-logut.php" >
        <span class="glyphicon glyphicon-log-out"></span> Log out</a>
        
      </ul>
     
       
    </div>
	
	
	<div class="container text-center">    
<br />
<div class="jumbotron">
   <strong><p>SEARCH FEEDBACK OF STUDENTS </p></strong><br />
   <form method="POST">  
   <div class="form-group">
          <label for="sel1">Select Subject Code</label>
          <select class="form-control" name="subcod" id="subcod" required="">
           <?php      $database->code();  ?>
            </select>
     </div> 
 
     <button type="submit" name="search" class="btn btn-primary">Search</button>  
    </form>
    
</div>  



<div class="jumbotron">

<div class="container">
  
 <strong> <p>FEEDBACKS OF STUDENTS</p></strong>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th><strong>Roll Number</strong></th>
        <th><strong>Faculty Name</strong></th>
        <th><strong>Clarity of communication</strong></th>
		<th><strong>Quality of lectures</strong></th>
		<th><strong>Effectiveness of discussions</strong></th>
		<th><strong>Effectiveness of learning experience</strong></th>
		<th><strong>Clear with subject concept</strong></th>
		<th><strong>Involve Students</strong></th>
		 <th><strong>How can we improve our service?</strong></th>
      </tr>
    </thead>
    <tbody>
     <?php
	 if(isset($_POST['search']))
       {
	   $sub=$_POST['subcod'];
      $database->fetch($sub);
	   }
     
	  ?>
      
    </tbody>
  </table>
</div>



</div>
	
	

</body>
</html>





  
