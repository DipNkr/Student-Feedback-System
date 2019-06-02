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
      background-color: #f2f2f2;
      padding: 25px;
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
      
        <a  href="feed.php" ">Home</a>
        <a class="active" href="about.php" ">About</a>
        <a href="contact.php" ">Contact</a>
      
     
    </div>
 </nav> 

<div  class="jumbotron text-center" >
  <h1>ABOUT VIDYA</h1>
  

  
<div  class="container" >
  <p><b>Accreditation</b><br>

<b>Approved by AICTE, Ministry of HRD, Govt of India
Affiliated to Dr. A. P. J. Abdul Kalam Technical University (Formerly UPTU), Lucknow
Affiliated to Uttar Pradesh Board of Technical Education, Lucknow</b><br>

Engineering is a creative application of scientific principles to design or to develop structures, machines, apparatus, and processes to operate or to forecast the operational behaviour under specific conditions; all as respects an intended function, economics of operation and safety to life and property.<br>

Engineering Degree provides the candidates a stable platform within the sphere of Engineering & Technology and gives them an opportunity to achieve various breakthroughs in different industries. Vidya College of Engineering (VCE) offers Diploma, Bachelors & Masters Degree in Engineering for young aspirants who want to make a mark in this technological world.<br>

VCE was established in the year 2006 and look up a pace and passion to evolve as an engineering platform of Global ambience. The aim of Vidya College of Engineering is to provide you with all the analytical, design and computing skills that underpin modern engineering practice, while encouraging the creativity and problem-solving skills that are important to a good engineer.<br>

When you graduate, we believe you will be equipped to be flexible across the range of engineering disciplines, will have learnt the skills necessary for effective team leadership, and be able to apply new technologies in novel situations.<br>
</p>
  </div>
</div>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky)
   {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>
