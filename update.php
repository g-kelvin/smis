<?php 
	
	
include "config.php"; 

 	if(isset($_GET['GetID']))
 	{
 		$studid = $_GET['GetID'];
 		 $qry = "UPDATE students SET status='Graduated' WHERE studentid=$studid";
 		$result = mysqli_query ($con, $qry);
 		if($result){
 			 header('refresh:0.1;url=display.php');
 		}
 		else
 		{
 			echo "Update Failed";
 		}
 	}

 ?>