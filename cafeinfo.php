<!DOCTYPE html>
<?php
	session_start();
	?>
<html>

<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
	  background-image:url("cafe background.jpg");
	  background-size:100% 100%;
      position: relative; 
  }
  
  
  #section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
  b{
	padding-top:15px;
	float:right;
	color: #fff;
  }
  #section1{
	  
	  background-image: url("style.PNG");
  }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="aboutus.php">LET'S MEET!</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="travel.php" >Travelling</a>
				</li>
          <li><a href="cafe.php">Cafe</a></li>
          <li><a href="restaurantinfo.php">Restaurants</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hotels<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41" >Expensive Rate</a></li>
              <li><a href="#section42">
		
		Nominal Rate!
		</a>

		

		</li>
            </ul>
		
			
          </li>
		
		</ul>
		<b>
		<?php
			echo "welcome ";
			echo $_SESSION['name'];
		?>
		
		</b>
      </div>
    </div>
 </div>
</nav>    
<br><br><br><h1><kbd>Cafe</kbd></h1>

<div class="container">
 
  <div class="row">
    
		<div class="col-lg-4">	
      <div class="thumbnail">
	  
	  <h4><u><strong><kbd>Melt in.</kbd></strong></u></h4>
	  
        <a href="melt in(1).jpg">
          <img src="melt in(1).jpg">
         </a>  
		  <div class="caption">
            <p>Lorem ipsum donec id elit non mi portagravida at eget metus.</p>
          </div>
        </div>
      </div>
    
    <div class="col-lg-4">
      <div class="thumbnail">
	  <h4><u><strong><kbd>Mocha</kbd></u></strong></h4>
        <a href="mocha(1).jpg" target="_blank">
          <img src="mocha(1).jpg">
		   </a>
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
       
      </div>
    </div>
    <div class="col-lg-4">
      
	  <div class="thumbnail">
	  <h4><u><strong><kbd>Java+</kbd></u></strong></h4>
        <a href="java+.jpg" target="_blank">
          <img src="java+.jpg" alt="Fjords" style="width:100%">
         </a>  
		  <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        
      </div>
    </div>
	 
  
 </div>
 </div>

 <div class="container">
 
  <div class="row">
    
		<div class="col-lg-4">	
      <div class="thumbnail">
	  
	  <h4><u><strong><kbd>The Cafe Baraco</kbd></strong></u></h4>
	  
        <a href="The Cafe Baraco.jpg">
          <img src="The Cafe Baraco.jpg">
         </a>  
		  <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </div>
      </div>
    
    <div class="col-lg-4">
      <div class="thumbnail">
	  <h4><u><strong><kbd>The Dark Roast</kbd></u></strong></h4>
        <a href="the dark roast.jpg" target="_blank">
          <img src="the dark roast.jpg">
		   </a>
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
       
      </div>
    </div>
    <div class="col-lg-4">
      
	  <div class="thumbnail">
	  <h4><u><strong><kbd>Qwiches</kbd></u></strong></h4>
        <a href="qwiches.jpg" target="_blank">
          <img src="qwiches.jpg" alt="Fjords" style="width:100%">
         </a>  
		  <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        
      </div>
    </div>
	 
  
 </div>
 </div>

 