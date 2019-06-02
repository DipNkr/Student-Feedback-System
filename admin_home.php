

<?php



include_once("database/database.php");

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
      
	    <a class="active" href="#" >ADMIN HOME</a>
        <ul class="nav navbar-nav navbar-right">
		<a href="#" >
        <span class="glyphicon glyphicon-home"></span> ADMIN   </a>
        <a href="feed.php" >
        <span class="glyphicon glyphicon-log-out"></span> Log out</a>
        
      </ul>
     
       
    </div>
	




<div class="jumbotron">

<div class="container">
  
 <strong> <p style="font-size:30px">QUERIES</p></strong>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th><strong >EMAIL</strong></th>
        <th><strong>MESSAGE</strong></th>
       
      </tr>
    </thead>
    <tbody>
     <?php
	
     $database->mssg();
	  
     
	  ?>
      
    </tbody>
  </table>
</div>



</div>
	
	

</body>
</html>





  
