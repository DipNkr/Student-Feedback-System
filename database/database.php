<?php


  class database
   {



 
     public $connect;

         public function connection()
	       {
	         $this->connect=mysqli_connect("localhost","root","","feedback");

           }
		
		
		
		
				
     public function checklogin()
         {
           if(!isset($_SESSION['uid']))  
            {
               echo"<script>location.href='../feed.php';</script>";    
            }  
         }

		
		
	 
	 
	  public function authentication($email,$pwd)
	      {
	        $this->connection();
	 
	        $res=mysqli_query($this->connect,"SELECT * FROM `login` WHERE `roll`='$email' and `pass`='$pwd'");
               if(mysqli_num_rows($res) == 1)
                   {
				   
				       $_SESSION['uid']= $email;
                        echo"<script>location.href='../student_home.php';</script>"; 
        
                   }
               else
                   {
                        echo"<script>alert('Your Login Id/Password does not exist');</script>";     
                   }         
	 
	 
	 
	      }
	 
	 
	 	
		public function getsub()
		{
		
		$this->connection();
		$res=mysqli_query($this->connect,"SELECT `sub-code` FROM `subject` ");
while($fetch=mysqli_fetch_array($res)) 
        {
?>            
<option value="<?php    print  $fetch[0];   ?>"><?php    print  $fetch[0];   ?></option>    
<?php    
        }  
		
		
		
		} 
		
		
		
		
		public function getname($uid)
 {
           
               $this->connection();  
              
                return $uid;    
    
               
 }
 
 
 
 
 public function submitfeedback($uid,$sub,$name,$feed1,$feed2,$feed3,$feed4,$feed5,$feed6,$improve)
	  {
	  $this->connection();
	  
	 
	 
	 
	  $sql=mysqli_query($this->connect,"insert into `feed-form`(`roll`,`sub-code`,`faculty-name`,`Clarity of communication`,`Quality of lectures`,`Effectiveness of discussions`,`Effectiveness of learning experience`,`Clear with subject concept`,`Involve Students`,`How can we improve our service?`) values('$uid','$sub','$name','$feed1','$feed2','$feed3','$feed4','$feed5','$feed6','$improve')");   
      echo" <script> alert('Submit Successfully , Thankyou for your precious Feedback');location.href='student_home.php'; </script>  "; 
     
 
      
	  } 
		
		
		
		
		public function hod($email,$pwd)
	      {
	        $this->connection();
	 
	        $res=mysqli_query($this->connect,"SELECT * FROM `hod-login` WHERE `hod-id`='$email' and `password`='$pwd'");
               if(mysqli_num_rows($res) == 1)
                   {
				   
				      
                        echo"<script>location.href='../hod_home.php';</script>"; 
        
                   }
               else
                   {
                        echo"<script>alert('Your Login Id/Password does not exist');</script>";     
                   }         
	 
	 
	 
	      }
	 
	 
	 
	 
	 public function code()
    {
$this->connection();
$res=mysqli_query($this->connect,"SELECT `sub-code` FROM `subject` ");
while($fetch=mysqli_fetch_array($res)) 
        {
?>            
<option value="<?php    print  $fetch[0];   ?>"><?php    print  $fetch[0];   ?></option>    
<?php    
        }  
    }
		
		
		
		
		
		public function fetch($sub)
    {
           
    $this->connection();          
    $sql=mysqli_query($this->connect,"SELECT `roll`,`faculty-name`,`Clarity of communication`,`Quality of lectures`,`Effectiveness of discussions`,`Effectiveness of learning experience`,`Clear with subject concept`,`Involve Students`,`How can we improve our service?` FROM `feed-form` WHERE `sub-code`='$sub' ");   
    while($fet=mysqli_fetch_array($sql))
     {
     ?><form method="post">

        <tr >
          
          <td><?php   print $fet[0];    ?></td>
          <td><?php   print $fet[1];    ?></td>
		  <td><?php   print $fet[2];    ?></td>
		  <td><?php   print $fet[3];    ?></td>
		  <td><?php   print $fet[4];    ?></td>
		  <td><?php   print $fet[5];    ?></td>
		  <td><?php   print $fet[6];    ?></td>
		  <td><?php   print $fet[7];    ?></td>
		  <td><?php   print $fet[8];    ?></td>
          
       </tr>
     </form>
    <?php  
 
  }
    }
	
	
	
	
	public function snd($email,$msg)
	{
	
	   $this->connection();   
	 mysqli_query($this->connect,"insert into `contact us`(`email`,`message`) values('$email','$msg' )");   
      echo" <script> alert('Submit Successfully ');location.href='feed.php'; </script>  "; 
	
	
	}
	
	
	
	
	public function admin($email,$pass)
	      {
	        $this->connection();
	 
	        $res=mysqli_query($this->connect,"SELECT * FROM `admin-login` WHERE `email`='$email' and `password`='$pass'");
               if(mysqli_num_rows($res) == 1)
                   {
				   
				      
                        echo"<script>location.href='admin_home.php';</script>"; 
        
                   }
               else
                   {
                        echo"<script>alert('Your Login Id/Password does not exist');</script>";     
                   }         
	 
	 
	 
	      }
		  
		  
		  
		  public function mssg()
		  {
		  
		  $this->connection();
		   $sql=mysqli_query($this->connect,"SELECT `email`,`message` FROM `contact us`  ");   
    while($fet=mysqli_fetch_array($sql))
     {
     ?><form method="post">

        <tr >
          
          <td align="left"><?php print $fet[0];    ?></td>
          <td align="left"><?php print $fet[1];    ?></td>
		 
          
       </tr>
     </form>
    <?php  
 
  }
		  
		  
		  
		  
		  }
	 
	
   
   
   
   
  }

$database= new database();
?>
