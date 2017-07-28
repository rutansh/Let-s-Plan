<!DOCTYPE html>
<?php
	session_start();
	?>
	

	
<html>

<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="carousel.css">
  <script src="js_cara.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
	  function getId(val)
	  {
		$.ajax({
		  url:"getdata.php?cid="+val,
		  success: function(data)
			{
			  $("#budget").html(data);
			}

		});
	  }
	</script>
  <style>
  
  <!-- Gallery-->
 .days,{
	 
		margin:20px;
	  text-align:center;
 }
.thumb {

    margin-bottom: 30px;

}
.icon-alert
{
	color:yellow;
}
#win.icon-alert
{
	color:blue;
}
#mon.icon-alert
{
	color:green;
}
.opt{
	float:right;
}
b{
	padding-top:15px;
	float:right;
	color: #fff;
}
    
  </style>
  <script>
$(document).ready(function()
{
	
	$('#inputsearch').keyup(function()
	{
		var search =$(this).val();

			
			
			$.ajax({
				
				
				url:"sr.php",
				method:"post",
				data:{x:search},
				dataType:"text",
				success:function(data)
				{
					$('#result').html(data);
					
				}
			});
		
	});
});
</script>
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

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container">
                    <div class="col-md-12 ">
                        <img style="width:100%"src="leaping.jpg">
                    </div>
                    
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    
                    <div class="col-md-12 ">
                        <img  src="mocha.jpg">
                    </div>
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container">
                   
                    <div class="col-md-12 ">
                        <img  src="">
                    </div>     
                </div></div>
            </div>
            <!-- Item 4 -->
            <div class="item slide4">
                <div class="row"><div class="container">
                    
                    <div class="col-md-12">
                        
                    </div>  
                </div></div>
            </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        
        
    </div>
</div>
<!-- Gallery-->
<div class="container">


        <div class="row">



            <div class="col-lg-9">

                <h1 class="page-header">Travel Destinations! </h1></div> 
						
				<div class="col-lg-3">
				<form>
    <div class="form-group">
<br>
	<label for="inputsearch">Search<span class="glyphicon glyphicon-search"></span></label>
    <input class="form-control" name="inputsearch" id="inputsearch" type="Search" placeholder="enter destination">
	</div>
  
  </form></div>
<div class="col-lg-12">
				<h5 class="opt"><i><span class="glyphicon glyphicon-exclamation-sign icon-alert"></span>Summer</i>
				<i><span id="win" class="glyphicon glyphicon-exclamation-sign icon-alert"></span>Winter</i>
				<i><span id="mon" class="glyphicon glyphicon-exclamation-sign icon-alert"></span>Monsoon </i></h5>
				</div>



            
			
 <!--<div class="col-md-2">
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#">All</a></li>
    <li><a href="#">North</a></li>
    <li><a href="#">South</a></li>
    <li><a href="#">East</a></li>
	<li><a href="#">West</a></li>
  </ul>
</div>-->


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}	?> 

	<!-- <div class="container">
	 <div class="row">
	 <div class="col-md-3">
			<nav id="mainNavbar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#">North</a></li>
				<li ><a href="#">South</a></li>
				<li ><a href="#">East</a></li>
				<li ><a href="#">West</a></li>
			
			</ul>
			</nav>
 </div>
			
	 
	 </div>-->
	  	 
	 
	 <div class="row">
	 <div class="col-xs-12"></div>
		<div class="modal fade" id="searchmodal" tabindex="-1" role="dialog">
			<div class ="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Plan My Trip!</h4>
					
					</div>
					<div class="modal-body">
								<div class="days">
									<label >Days</label>
											<select name="days" onchange="getId(this.value);">

											<option value="">  Select Days</option>

											<?php

														$query = "SELECT * FROM days";
														$results = mysqli_query($con, $query);
      // loop
														foreach ($results as $days) {
												?>
						<option value="<?php echo $days["cid"]; ?>"> <?php echo $days["days"]; ?> </option>
							<?php
							}
							?>

									</select>
									</div>
									<br>
									<div class="budget">
										<label>Cost Range</label>
												<select id="budget"> 
												</select>
								    </div>
									<br>
						<button type="submit" class="btn btn-success" name="login">Let's Plan!</button>
			</form>
					
					</div>
					<div class="modal-footer">
						<button class="btn btn-primary" data-dismiss="modal">close</button>
						
					</div>
					
				
				</div>
			</div>
			</div>
		
		</div>
		
	<div id="result">

	<?php
	
      $query = "SELECT * FROM travel";
      $res = mysqli_query($con, $query);
	       // loop
		   ?>
		   
		
      <?php while($row=mysqli_fetch_array($res)) {
		
		?>
		
		
			
		
		<div class="col-md-4">
		<pre><font size="7"><kbd><?php echo $row["dest"];?></kbd></font>
		
		<img src="<?php echo $row["description"];?>" height="300" width="335">
		<center><button class="btn btn-primary btn-lg" id="<?php $row["id"] ?>"data-target="#searchmodal" data-toggle="modal">Search For <?php echo $row["dest"];?>!</button></center>
		
		</pre>
	</div>
	
		<?php 
		
			
		
	  }
	 
	  ?>
	  
	  </div>
    </div>
   
	</div>
 </div>       




 
        




</body>   
</html>
