<?php 

$hostname="localhost";
$username="root";
$password="";
$db="signup";
$con =mysqli_connect($hostname,$username,$password);
mysqli_select_db($con,$db);
session_start();

	
    
	$name = $_POST['inputUsername'];
	$pass = md5($_POST['inputPassword']);

	
	if(isset($_POST['login']))
	{
	
	
					
					$query="SELECT * FROM user where Name='$name' AND Password='$pass' ";
					$run=(mysqli_query($con,$query));
					
					
					if(mysqli_num_rows($run)>0)
					{
							$_SESSION['name']=$_POST['inputUsername'];
							Header("Location:scrollspy (2).php");
						
					}
					else{
						
							
							
							
							
							
							
							 echo"<script>if(confirm('invalid username or password')){
								 window.open('formcontrol.html');
							 }else{
								 window.open('formcontrol.html');
							 }</script>";
						   
												
					}
					
				
	
	}
	else
	{
		
		echo"pata nahi";
	}
?>