<!-- start -->
<?php 

include "config.php"; 

if($con){
  if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $town= $_POST['town'];
    $county = $_POST['county'];
    $postal = $_POST['postal'];
    $grade = $_POST['grade'];
    $course = $_POST['course'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $course_duration = $_POST['course_duration'];
    $campus = $_POST['campus'];
    $idno = $_POST['idno'];
    $paid_by = $_POST['paid_by'];
    $dateofadmin = $_POST['dateofadmin'];
    $gender = $_POST['gender'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adminno = $_POST['adminno'];
    $fees_paid = $_POST['fees_paid'];
    $admitted_by= $_POST['admitted_by'];
    $additional= $_POST['additional'];


    $qry=mysqli_query( $con," INSERT INTO `students` (`studentid`, `fname`,`lname`, `address`, `town`, `county`, `postal`, `grade`, `course`, `dob`, `religion`, `course_duration`, `campus`, `idno`, `paid_by`, `dateofadmin`, `gender`, `tel`, `email`, `adminno`, `fees_paid`, `admitted_by`, `additional` , `status`) VALUES (NULL, '$fname', '$lname', '$address', '$town', '$county', '$postal', '$grade', '$course', '$dob', '$religion', '$course_duration', '$campus', '$idno', '$paid_by', '$dateofadmin', '$gender', '$tel', '$email', '$adminno', '$fees_paid', '$admitted_by', '$additional' , 'Active' )" );
    if($qry)
    {
      header('refresh:0.1;url=display.php');
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


