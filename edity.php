<?php 
	
include "config.php"; 

	
 	if(isset($_GET['GetID']))
 	{
 		$studid = $_GET['GetID'];
 		 $qry = "UPDATE users SET status='read' WHERE id=$studid";
 		$result = mysqli_query ($con, $qry);
 		if($result){
 			 header('refresh:0.1;url=home.php');
 		}
 		else
 		{
 			echo "Update Failed";
 		}
 	}

 ?>