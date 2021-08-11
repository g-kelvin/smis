<!-- start -->
<?php 


include "config.php"; 

if($con){
  if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $pass = $_POST['pass'];
    $qry=mysqli_query( $con," INSERT INTO `users` (`user_name`, `pass`) VALUES ( '$user_name', '$pass')" );
    if($qry)
    {
    	 echo "Account Creation Successful";
      header('refresh:3;url=login.php');
    }

    else{
      echo "Data Posting Error";
    }

  
    
    }
    else{
      echo "No Data Posted";
    }
  
}
else{
  echo "Connection Declined";
}
?>


