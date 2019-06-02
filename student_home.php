

<?php
session_start();
include("database/database.php");
$database->checklogin();
if(isset($_POST['submit']))
{ 
$uid=$_SESSION['uid'];
$sub=$_POST['sub'];
$name=$_POST['name'];
$feed1=$_POST['a'];
$feed2=$_POST['b'];
$feed3=$_POST['c'];
$feed4=$_POST['d'];
$feed5=$_POST['e'];
$feed6=$_POST['f'];
$improve=$_POST['improve'];

$database->submitfeedback($uid,$sub,$name,$feed1,$feed2,$feed3,$feed4,$feed5,$feed6,$improve);

}

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
       <a  href="includes/student.php" >STUDENT'S ZONE</a>
	    <a class="active" href="#" >FEEDBACK FORM</a>
        <ul class="nav navbar-nav navbar-right">
		<a href="#" >
        <span class="glyphicon glyphicon-home"></span> <?php  print $database->getname($_SESSION['uid']);     ?></a>
        <a href="logout.php" >
        <span class="glyphicon glyphicon-log-out"></span> Log out</a>
        
      </ul>
     
    </div>

   
		<div class="row">
			<div class="col-sm-5 col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-body">
					 
						<form role="form"   method="POST">
							
    			
						
						<input " type="hidden" name="formID" value="811217" />
						
						
						
		
			
				
						
						
  
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
       
            
			<div class="panel panel-default">
					<div class="panel-heading">
			<div class="btn btn-lg btn-primary btn-block" class="container" style="margin-top:5px">
             <b> FEEDBACK FORM</b>   
			
            <div id="subHeader_1" class="form-subHeader">
			
              Please provide your feedback below:            </div>
			  </div>
			  
          </div>
        
      </li>
	  
	  <br />
	  
	  <div class="form-group">
          <label for="sel1">Select Subject Code</label>
          <select class="form-control" name="sub" id="sub" required="">
           <?php      $database->getsub();  ?>
            </select>
     </div>
	  
	  
	  
	  
	  <div  class="form-group">
          <label  for="usr">Name of Faculty:</label>
          <input type="name" name="name" class="form-control" id="name" required="">
        </div>
      
	        <li class="form-line" data-type="control_matrix" id="id_4">
       
        <div id="cid_4" class="form-input-wide">
          <table width="350" height="329" cellPadding="4" cellSpacing="0" class="form-matrix-table" summary="" data-component="matrix">
            <tbody>
              <tr>
                <th width="237" style="border:none">                </th>
                <th width="24" class="form-matrix-column-headers form-matrix-column_0">
                  Best                </th>
                <th width="28" class="form-matrix-column-headers form-matrix-column_1">
                  <strong>Good</strong>                </th>
                <th width="36" class="form-matrix-column-headers form-matrix-column_2">
                  Worst                </th>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                 Clarity of communication                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_0_0" class="form-radio" name="a" value="Best" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_0_1" class="form-radio" name="a" value="Good" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_0_2" class="form-radio" name="a" value="Worst" />                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Quality of lectures                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_1_0" class="form-radio" name="b" value="Best" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_1_1" class="form-radio" name="b" value="Good" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_1_2" class="form-radio" name="b" value="Worst" />                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Effectiveness of discussions                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_2_0" class="form-radio" name="c" value="Best" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_2_1" class="form-radio" name="c" value="Good" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_2_2" class="form-radio" name="c" value="Worst" />                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Effectiveness of learning experience                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_3_0" class="form-radio" name="d" value="Best" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_3_1" class="form-radio" name="d" value="Good" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_3_2" class="form-radio" name="d" value="Worst" />                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Clear with subject concept                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_4_0" class="form-radio" name="e" value="Best" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_4_1" class="form-radio" name="e" value="Good" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_4_2" class="form-radio" name="e" value="Worst" />                </td>
              </tr>
              <tr>
                <th height="68" class="form-matrix-row-headers" style="text-align:left">
                  Involve Students                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_5_0" class="form-radio" name="f" value="Best" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_5_1" class="form-radio" name="f" value="Good" />                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="radio" id="input_4_5_2" class="form-radio" name="f" value="Worst" />                </td>
              </tr>
            </tbody>
          </table>
        </div>
		
		
      <div class="form-group">
          <label for="comment">	How can we improve our service?</label>
          <textarea class="form-control" name="improve" onkeyup="f1(this.vaue,this.id)" rows="5" cols="" id="improve" required=""></textarea>
        </div>
	  
	 
     
     <div class="container" style="margin-top:5px">
	    <div class="form-group">
	       <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Submit">
		</div>
	</div>
	 
    </ul>

  
 
</form>
					
						
						
						
				</div>		
						
					</div>
					
                </div>
			
		
</body>
</html>