<?php 
session_start();



?>
	
<html>

<body>

	</body>

</html>
<?php

	$hostname="localhost";
    $username="root";
    $password="";
    $db="signup";
	$con =mysqli_connect($hostname,$username,$password);
	mysqli_select_db($con,$db);		

	
		$name = $_POST['inputName'];
		$dob=	$_POST['inputDOB'];
		$mail=  $_POST['inputEmail'];
		$pass=  $_POST['inputPassword'];
		$mob=	$_POST['inputMobile'];
		
		
	
		
		
		
		$passwordmd5=md5($pass);
		$query="insert into user(Name,DOB,Email,Password,Mobile) values('$name','$dob','$mail','$passwordmd5','$mob')";
		mysqli_query($con,$query);
		$_SESSION['name']=$_POST['inputName'];
			Header("Location:scrollspy (2).php");
		
		
		
		
	
	
		



?>


	