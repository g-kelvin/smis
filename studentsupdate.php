 <?php
    
include "config.php"; 

    $query = "SELECT * FROM students";

     if(isset($_POST['update']))
     {
    $studid = $_POST['studentid'];
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

        $query = "UPDATE students  set fname = '$fname', lname = '$lname', address = '$address' , town = '$town' , county = '$county' , postal = '$postal' , grade = '$grade' , course = '$course' , dob = '$dob' , religion = '$religion' , course_duration = '$course_duration' , campus = '$campus' , idno = '$idno' , paid_by = '$paid_by' , dateofadmin = '$dateofadmin' , gender = '$gender' , tel = '$tel' , email = '$email' , adminno = '$adminno' , fees_paid = '$fees_paid' , admitted_by = '$admitted_by' , additional = '$additional'  where studentid = '$studid' ";

        $result = mysqli_query($con, $query);
        if($result){
          header('location: home.php');
            
        }
        else
        {
            echo "please check ur query";
        }

     }
     else
     {
        echo "fail";
     }
    
    


  ?>


     