
<?php
include "config.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Kasarani Catering College</title>
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link rel="stylesheet" type="text/css" href="main.css">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->

  
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="home.php" class="logo">Kasarani Catering <span class="lite">College</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form" action=" search.php" method="POST">
              <input class="form-control" placeholder="Search" type="text" name="search">
              <button class="btn btn-primary" type="submit" name="submit"> Search</button>
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                           <span class="badge bg-important"> <?php 
                          
                            $feedback="SELECT * from students WHERE status = 'Active' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo $rows;
                            // Free result set
                            mysqli_free_result($result);
                            }


                            ?></span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have <?php echo $rows;   ?> Active Students</p>
              </li>
   
              <li class="external">
                <a href="active.php">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important"> <?php 
                          
                            $feedback="SELECT * from users WHERE status = 'unread' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo $rows;
                            // Free result set
                            mysqli_free_result($result);
                            }


                            ?>


                            </span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have <?php echo $rows;   ?> new messages</p>
              </li>
              <li>
               
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">


                              <?php 
                          
                            $feedback="SELECT * from students WHERE status = 'Graduated' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo $rows;
                            // Free result set
                            mysqli_free_result($result);
                            }


                            ?>
                              


                            </span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have <?php echo $rows; ?> Graduates</p>
              </li>
              <li>
                <a href="graduate.php">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/admin-01.png">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="home.php"><i class="icon_profile"></i> Home</a>
              </li>
              
              <li>
                <a href="active.php"><i class="icon_clock_alt"></i> Active Students</a>
              </li>
              <li>
                <a href="graduate.php"><i class="icon_chat_alt"></i> Graduates</a>
              </li>
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="home.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>New Student</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="register.php">Register Student</a></li>
              <!-- <li><a class="" href="form_validation.html">Form Validation</a></li> -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Students Details</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="active.php">Active Students</a></li>
              <li><a class="" href="graduate.php">Graduates</a></li>
              <li><a class="" href="display.php">All Students</a></li>
            </ul>
          </li>
          
          <li>
            <a class="" href="total.php">
                          <i class="icon_piechart"></i>
                          <span>Fees Payments</span>

                      </a>

          </li>
          
      

          <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>School Branches</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="kasaranicampus.php">Kasarani Campus</a></li>
              <li><a class="" href="machakoscampus.php"><span>Machakos Campus</span></a></li>
              <li><a class="" href="kituicampus.php"><span>Kitui Campus</span></a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Pages</li>
              <li><i class="fa fa-square-o"></i>Register Students</li>
            </ol>
          </div>
        </div>


<!-- start -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<?php

 
  if($con){
  $studid = $_GET['GetID'];
  
  $query = "SELECT * FROM students where studentid = $studid";
  $result = mysqli_query($con, $query);


  while($row = mysqli_fetch_assoc($result)){
    $studentid = $row['studentid'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $address = $row['address'];
    $town= $row['town'];
    $county = $row['county'];
    $postal = $row['postal'];
    $grade = $row['grade'];
    $course = $row['course'];
    $dob = $row['dob'];
    $religion = $row['religion'];
    $course_duration = $row['course_duration'];
    $campus = $row['campus'];
    $idno = $row['idno'];
    $paid_by = $row['paid_by'];
    $dateofadmin = $row['dateofadmin'];
    $gender = $row['gender'];
    $tel = $row['tel'];
    $email = $row['email'];
    $adminno = $row['adminno'];
    $fees_paid = $row['fees_paid'];
    $admitted_by= $row['admitted_by'];
    $additional= $row['additional'];

    
  }

  }
  else
  {
    echo "error";
  }
  

  ?>
 

<div class="container">
    <h1 class="well">School Registration Form</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <form action="studentsupdate.php" method="POST">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>First Name</label>
                <input type="text" name="fname" value="<?php echo $fname   ?>" placeholder="Enter First Name Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Last Name</label>
                <input type="text" name="lname" value="<?php echo $lname   ?>" placeholder="Enter Last Name Here.." class="form-control">
              </div>
            </div>          
            <div class="form-group">
              <label>Address</label>
               <input  type="text" name="address" value="<?php echo $address  ?>" class="form-control" rows="3">
            </div>    
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Town</label>
                <input type="text"  placeholder="Enter Town Name Here.." name="town" value="<?php echo $town   ?>" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>County</label>
                <input type="text" name="county" value="<?php echo $county   ?>" placeholder="Enter County Name Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Postal Code</label>
                <input type="text" name="postal" value="<?php echo $postal   ?>" placeholder="Enter Postal Code Here.." class="form-control">
              </div>    
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>KCSE Grade</label>
                <input type="text" name="grade" value="<?php echo $grade   ?>" placeholder="Enter Grade Here.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Course</label>
                <input type="text" name="course" value="<?php echo $course   ?>" placeholder="Enter Grade Here.." class="form-control">
              </div>
            </div> 

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Date of Birth.</label>
                <input type="date" name="dob" value="<?php echo $dob   ?>" placeholder="Enter DoB Here.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Religion</label>
                <input type="text" name="religion" value="<?php echo $religion   ?>" placeholder="Enter Grade Here.." class="form-control">
              </div>
            </div>


            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Course Duration</label>
                <input type="text" name="course_duration" value="<?php echo $course_duration   ?>" placeholder="Enter Duration Here.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Campus</label>
                <input type="text" name="campus" value="<?php echo $campus   ?>" placeholder="Enter Grade Here.." class="form-control">
              </div>
            </div>  


             <div class="row">
              <div class="col-sm-6 form-group">
                <label>ID No.</label>
                <input type="text" name="idno" value="<?php echo $idno   ?>" placeholder="Enter ID Here.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Fees Paid By</label>
                <input type="number" name="paid_by" value="<?php echo $paid_by   ?>" placeholder="Enter Grade Here.." class="form-control">
              </div>
            </div> 


            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Date of Admission</label>
               <input  type="date" name="dateofadmin" value="<?php echo $dateofadmin   ?>" class="form-control" placeholder="Enter Date of Admission">
              </div>   
             <div class="col-sm-6 form-group">
                <label>Gender</label>
                <input type="text" name="gender" value="<?php echo $gender   ?>" placeholder="Enter Grade Here.." class="form-control">
              </div>
            </div>        
          <div class="form-group">
            <label>Active Phone Number</label>
            <input type="text" name="tel" value="<?php echo $tel   ?>" placeholder="Enter Phone Number Here.." class="form-control">
          </div>    
          <div class="form-group">
            <label>Active Email Address</label>
            <input type="text" name="email" value="<?php echo $email   ?>" placeholder="Enter Email Address Here.." class="form-control">
          </div>  
          <div class="form-group">
            <label>Admission No.</label>
            <input type="text" name="adminno" value="<?php echo $adminno  ?>" placeholder="Enter Admission No. Here.." class="form-control">
          </div>

          <div class="row">
              <div class="col-sm-6 form-group">
                <label>Fees Paid</label>
               <input  type="text" name="fees_paid" value="<?php echo $fees_paid  ?>" class="form-control" placeholder="ksh.1,000.00">
              </div>   
             <div class="col-sm-6 form-group">
                <label>Admitted By:</label>
               <input  type="text" name="admitted_by" value="<?php echo $admitted_by   ?>" class="form-control" placeholder="Mr.kelvin">
              </div> 
            </div> 
            <div class="form-group">
              <label>Additional Information</label>
               <input  type="text" name="additional" value="<?php echo $additional  ?>" class="form-control" placeholder="ksh.1,000.00">
            </div>   
            <div class="form-group">
              <label>Primary Key <b style="color: red">(Dont Edit)</b></label>
               <input  type="text" name="studentid" value="<?php echo $studentid  ?>" class="form-control" placeholder="ksh.1,000.00">
            </div>     

          <button type="update" name="update" class="btn btn-lg btn-info">Save Changes</button>         
          </div>
        </form> 
        </div>
  </div>
  </div>
<!-- end -->




      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://softwaretechn.co.ke">Software Technology Kenya</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>


</body>

</html>
