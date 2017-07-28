<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db("signup",$con);
    $query=mysqli_query("select * from demo where name LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row[''];
    }
    echo json_encode($array);

	
	 
	
?>