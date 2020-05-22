<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
            <title >Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
                  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jura">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya Sans">
           <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
		<script src="js/jquery_library.js"></script>
                 <script src="js/bootstrap.min.js"></script>
                 
	</head>
	<body class="w3-white">
    <br/>
<br/> 
<br/> 
<br/>
<br/> 
<br/><br/>
<br/> 
<br/>
<img src="images/logo.jpg" class="w3-round-small w3-left" alt="Norway" style="width:17%;height:150px">            
<p class="w3-xxxlarge ">Teegala Krishna Reddy</p>
  <p class="w3-xlarge "> Engineering College</p>
 <p class="w3-large">(Approved By AICTE, Affiliated to JNTUH)</p>
<br/> 



		<nav class="navbar navbar-default navbar-fixed-top"  style="background:#000">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>Online Notice Board</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
     
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">
    <div class="container" style="width:110%;height:410px" >
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/tkrec1.jpg" alt="..."  style="width:110%;height:400px">
      <div class="carousel-caption">
       
      </div>
    </div>
    <div class="item">
      <img src="images/tkrec3.jpeg" alt="..."  style="width:110%;height:400px">
      <div class="carousel-caption">
      
      </div>
    </div>
      <div class="item">
      <img src="images/tkrec4.jpeg" alt="..."  style="width:110%;height:400px">
      <div class="carousel-caption">
      
      </div>
    </div>
	
	 <div class="item">
      <img src="images/tkrec.jpg" alt="..."  style="width:100%;height:400px">
      <div class="carousel-caption">
      
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "
		";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->

<br/>
<br/>


<!-- footer-->




  <div class="container">
  

      
	
</div>

 


 	<img src="images/power1.jpg" class=" w3-bottommiddle" alt="Norway" style="width:100%;height:100px"> 	
<!-- footer-->
<br/>
<br/>
	</body>
</html>