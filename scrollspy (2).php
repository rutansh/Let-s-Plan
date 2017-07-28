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
<script>
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
  <style>
  body {
      position: relative; 
  }
  
  
  #section1 {padding-top:50px;height:500px;color: black; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  
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
          <li><a href="#section1" >Travelling</a>
				</li>
          <li><a href="#section2">Cafe</a></li>
          <li><a href="#section3">Restaurants</a></li>
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

<div id="section1" class="container-fluid img-responsive" style="background-image: url('DSC02085.jpg');background-size: 100% 100%;">
   <a href="travel.php"><h1>Travelling</h1></a>
<h2>
  <a href=""  class="typewrite" data-period="2000" data-type='[ "Dream.", "Explore.", "Discover."]' style="color:Orange">
		<span class="wrap"></span>
  </a>
  </h2>
 <h3> Why do people travel? </h3>

<p>	A person travels for both pleasure and knowledge. Over the ages people sailed across the roaring sea, travelled on foot to see the babbling fountains, and climbed the snow-capped mountains.</p>

<p>Travelling is an important part of our life. There is craving in every person to see the other faces of nature and to know the other people of the world.</p>

</div>
<div id="section2" class="container-fluid" style="background-image: url('leaping.jpg');background-size: 100% 100%;">
  <a href="cafeinfo.php"><h1>Cafe</h1></a>
	<h2>
  <a href=""  class="typewrite" data-period="2000" data-type='[ "Smooth out your day, ","Everyday."]' style="color:Orange">
		<span class="wrap"></span>
  </a>
  </h2>
  <h3> Place to Hangout ,cafe? </h3>
  <p>place where your clothes be comfy,coffee be strong and monday's be short.</p>
  <p>A cup of coffee shared with friends is happiness tasted and time well spent.</p>
</div>
<div id="section3" class="container-fluid" style="background-image: url('rest.jpg');background-size: 100% 100%;">
  <a href="restaurantinfo.php"><h1>Restaurants</h1></a>
<h2>
  <a href=""  class="typewrite" data-period="2000" data-type='[ "Chef of Passion"]' style="color:Orange">
		<span class="wrap"></span>
  </a>
  </h2>
  <h3> Which Restaurants? </h3>
  
  <p>One cannot think well,love well,sleep well.<br>
  if one has not dined well.
  </p>
  <p></p>
</div>
<div id="section41" class="container-fluid" style="background-image: url('thhh.jpg');background-size: 100% 100%;>
  <a href="www.facebook.com"><h1>Hotels</h1></a>
   <h2> <a href=""  class="typewrite" data-period="2000" data-type='["Hotel at best prices"]' style="color:Orange">
		<span class="wrap"></span>
  </a>
  </h2>
  <h3> Best place For comfy night? </h3>
  
  
  <p></p></div>

</body>
</html>
