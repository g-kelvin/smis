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
                           $con=mysqli_connect("localhost","root", "","kasaranicatering");
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
                           $con=mysqli_connect("localhost","root", "","kasaranicatering");
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
                           $con=mysqli_connect("localhost","root", "","kasaranicatering");
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
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count">1</div>
              <a href="img/kasarani.pdf"  download="Kasaranicollegeflier"> <div class="title" style="color: white"> Download <span>School Fliers </span></div></a>
              
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-graduation-cap"></i>
              <div class="count">
                <?php 
                           $con=mysqli_connect("localhost","root", "","kasaranicatering");
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
                
              </div>
              <div class="title">Graduates</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-users"></i>
              <div class="count">
                <?php 
                           $con=mysqli_connect("localhost","root", "","kasaranicatering");
                            $feedback="SELECT * from students WHERE status = 'Active' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo $rows;
                            // Free result set
                            mysqli_free_result($result);
                            }


                            ?>
                
              </div>
              <div class="title">Active Students</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-building"></i>
              <div class="count">3</div>
              <div class="title">Branches</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


        <div class="row">
          <div class="col-lg-9 col-md-12">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                <div class="panel-actions">
                  <a href="home.php#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="home.php#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="home.php#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body-map">
                <div id="map" style="height:380px;"></div>
              </div>

            </div>
          </div>
          <div class="col-md-3">
            <!-- List starts -->
            <ul class="today-datas">
              <!-- List #1 -->
           <center>    <li>
                <!-- Graph -->
               <i class="fa fa-coffee" aria-hidden="true"></i>
                <div><span  class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text"><?php 
                           $con=mysqli_connect("localhost","root", "","kasaranicatering");
                            $feedback="SELECT * from students WHERE status = 'Active' AND Course = 'Cookery' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo "<b style = 'color: green'> ". $rows. " ". "</b>";
                            // Free result set
                            mysqli_free_result($result);
                            } ?>
                             <br>Cookery Students</div>
              </li> <br>
              <li>
                <i class="fa fa-diamond" aria-hidden="true"></i>
                
                <div><span class="spark"></span></div>
                <div class="datas-text">
                   <div class="datas-text"><?php 
                           $con=mysqli_connect("localhost","root", "","kasaranicatering");
                            $feedback="SELECT * from students WHERE status = 'Active' AND Course = 'Food Production' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo "<b style = 'color: green'> ". $rows. " ". "</b>";
                            // Free result set
                            mysqli_free_result($result);
                            } ?>
                             <br>Food Production Students</div>
                  
                </div>
              </li> <br>
              <li>
                <i class="fa fa-database" aria-hidden="true"></i>
                <div><span  class="spark"></span></div>
                <div class="datas-text">
                  <?php 
                           $con=mysqli_connect("localhost","root", "","kasaranicatering");
                            $feedback="SELECT * from students WHERE status = 'Active' AND Course = 'Food & Beverage' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo "<b style = 'color: green'> ". $rows. " ". "</b>";
                            // Free result set
                            mysqli_free_result($result);
                            } ?>
                             <br>Food & Beverage Students</div>


                </div>
              </li>


              <br>

            <center> <p>
               <i class="fa fa-university" aria-hidden="true"></i>
                <div><span  class="spark"></span></div>
                <div class="datas-text">
                  <?php 
                           $con=mysqli_connect("localhost","root", "","kasaranicatering");
                            $feedback="SELECT * from students WHERE status = 'Active' AND Course = 'Hotel Management' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo "<b style = 'color: green'> ". $rows. " ". "</b>";
                            // Free result set
                            mysqli_free_result($result);
                            } ?>
                             <br>Hotel Management Students</div>


                </div>
              </p>

            </center>




            
            </center>




            
             
            </ul>
          </div>


        </div>


        <!-- Today status end -->



        <div class="row">









          <!--/col-->
          <div class="col-md-3">

            <div class="social-box facebook">
              <i class="fa fa-facebook"></i>
              <ul>
                <li>
                  <strong>Official Account:</strong>
                </li>
                <li>
                  <strong><a href="https://www.facebook.com/"> Click Here</a></strong>
                </li>
              </ul>
            </div>
            <!--/social-box-->
          </div>
          <div class="col-md-3">

            <div class="social-box google-plus">
              <i class="fa fa-google-plus"></i>
             <ul>
                <li>
                  <strong>Official Account:</strong>
                </li>
                <li>
                  <strong><a href="https://mail.google.com/"> Click Here</a></strong>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box twitter">
              <i class="fa fa-twitter"></i>
               <ul>
                <li>
                  <strong>Official Account:</strong>
                </li>
                <li>
                  <strong><a href="https://twitter.com/"> Click Here</a></strong>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->

        </div>



        <!-- statics end -->





          <div class="col-lg-8">
            

            <!--Project Activity end-->
          </div>
        </div><br><br>

       
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://softwaretechn.co.ke/">Software Technology Kenya</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
