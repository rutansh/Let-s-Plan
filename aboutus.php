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
  body{
	  background-image: url("background.jpg");
    background-color: #cccccc;
	background-size: 100% 100%;
	  
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
          <li><a href="cafeinfo.php">Cafe</a></li>
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
<br><br><br>

<br><br><br><br><br><br>

	
	
	
	<div class="container">
	<center><h1><font  color="white"size="18"><strong><kbd>About us</kbd></strong></font></h1></center>
	<br>
	<br>
 
  <div class="row">
  
    <div class="col-md-4">
	
      <div class="thumbnail">
	  
	  <h1><center>RUTANSH</center></h1>
	  
        <a href="rutansh.jpg" target="_blank">
          <img src="rutansh.jpg" alt="Lights" style="width:100%"class="img-responsive img-circle">
         </a>  
		  <div class="caption">
            <pre >One Day U Will Leave This World Behind So  Live A Life You Will Remember!.</pre>
          </div>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
	  <h1><center>JAINAM</center></h1>
        <a href="jainam.jpg" target="_blank">
          <img src="jainam.jpg" alt="Nature" style="width:100% " class=" img-responsive img-circle">
		   </a>
          <div class="caption">
            <pre>           I Believe In Peace!                                                    </pre>
          </div>
       
      </div>
    </div>
    <div class="col-md-4">
      
	  <div class="thumbnail">
	  <h1><center>RUSHI</center></h1>
        <a href="rushi.jpg" target="_blank">
          <img src="rushi.jpg" alt="Fjords" style="width:100%"class="img-responsive img-circle">
         </a>  
		  <div class="caption">
            <pre>            Music Is My Life!                                                   </pre>
          </div>
        
      </div>
    </div>
	 <div class="col-md-offset-4 col-md-4">
	
      <div class="thumbnail">
	  
	  <h1><center>KAUSHAL</center></h1>
	  
        <a href="b.jpg" target="_blank">
          <img src="b.jpg" alt="Lights" style="width:100%"class="img-responsive img-circle">
         </a>  
		  <div class="caption">
            <pre >Lorem ipsum donec id elit non mi porta gravida at eget metus.</pre>
          </div>
        
      </div>
    </div>
  </div>
</div>
    

	
	
	
 

