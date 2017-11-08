
<?php
$servername = "localhost";
$username = "root";
$password = "mi<Abhijeet>-F25";
$dbname = "payrolladmin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$emp_id = $_GET['empid'];
$emp_id = trim($emp_id);
$sql = "SELECT * FROM employee WHERE empid = '$emp_id'";

$result = mysqli_query($conn, $sql);
/*if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}*/
/*echo "$result";*/
$row = mysqli_fetch_array($result);

$name= $row['fullname'];

$empid= $row['empid'];

$address= $row['address'];

$salary_type= $row['salary_type'];

$deptname= $row['deptname'];

$salary_type= $row['salary_type'];

$basic_salary= $row['basic_salary'];

$education= $row['education'];

$location= $row['location'];
mysqli_close($conn);
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

    <title>Payroll Admin</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
    <script>
function validateForm() {
    confirm("Do you want to continue?");
}
</script>
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Payroll <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
    
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important"></span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue"></p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    
                                    <span class="small italic pull-right"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    
                                    <span class="small italic pull-right"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    
                                    <span class="small italic pull-right"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    
                                    <span class="small italic pull-right"></span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/Admin-logo.jpg">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
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
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Accounts</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="addaccount.php">Add Account</a></li>
                          <li><a class="" href="addaccount2.php">Change Username</a></li>
                          <li><a class="" href="addaccount3.php">Change Password</a></li>
                          <li><a class="" href="addaccount4.php">Change Email</a></li>                          
                          <li><a class="" href="deleteaccount.php">Delete Account</a></li>
                      </ul>
                  </li> 
                  <!--      
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Elements</a></li>
                          <li><a class="" href="buttons.html">Buttons</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>
                    -->
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Employee</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="updateemployee.php">Insert Info</a></li>
                          <li><a class="" href="updateemployee2.php">Update Info</a></li>
                          <li><a class="" href="updateemployee3.php">Delete Info</a></li>
                          <li><a class="" href="updateemployee4.php">View Info</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Payment</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="updatepayment.php">Insert Info</a></li>
                          <li><a class="" href="updatepayment2.php">Update Info</a></li>
                          <li><a class="" href="updatepayment3.php">Delete Info</a></li>
                      </ul>
                  </li>
                             
                   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Payment Info</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="paymentinfo.php">Single Employee</a></li>
                          <li><a class="" href="paymentinfo2.php">All Employees</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="adminaccount.php" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Admin Account</span>
                      </a>    
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
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Update Info</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Update Info</li>                          
                    </ol>
                </div>
            </div>
            <div class="panel-body">
            <form class="form-horizontal " method="post" action="emp2.php" onsubmit="return validateForm()" name="myform1">
              <div class="form-group">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="fullname" value='<?php echo  $name; ?>'>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Employee ID</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="empid" value='<?php echo  $empid; ?>'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="address" value='<?php echo  $address; ?>'>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Departments</label>
                  <div class="col-lg-10">
                    <select class="form-control m-bot15" name="deptname">
                      <option <?php if (!empty($deptname) && $deptname == 'Electrical')  echo 'selected = "selected"'; ?> >Electrical</option>
                      <option <?php if (!empty($deptname) && $deptname == 'AC')  echo 'selected = "selected"'; ?> >AC</option>
                      <option <?php if (!empty($deptname) && $deptname == 'Carpenter')  echo 'selected = "selected"'; ?> >Carpenter</option>
                      <option <?php if (!empty($deptname) && $deptname == 'Plumber')  echo 'selected = "selected"'; ?> >Plumber</option>
                      <option <?php if (!empty($deptname) && $deptname == 'Mason')  echo 'selected = "selected"'; ?> >Mason</option>
                      <option <?php if (!empty($deptname) && $deptname == 'BMS')  echo 'selected = "selected"'; ?> >BMS</option>
                      <option <?php if (!empty($deptname) && $deptname == 'Administration')  echo 'selected = "selected"'; ?> >Administration</option>
                      <option <?php if (!empty($deptname) && $deptname == 'HouseKeeping')  echo 'selected = "selected"'; ?> >HouseKeeping</option>
                      <option <?php if (!empty($deptname) && $deptname == 'Helper')  echo 'selected = "selected"'; ?> >Helper</option>
                      <option <?php if (!empty($deptname) && $deptname == 'Painter')  echo 'selected = "selected"'; ?> >Painter</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Salary Type</label>
                                      <div class="col-lg-10">

                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="daily" <?php echo ($salary_type=='daily')?"checked":"" ;?>>
                                                  Daily
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="monthly" <?php echo ($salary_type=='monthly')?"checked":"" ;?>>
                                                  Monthly
                                              </label>
                                          </div>

                                      </div>
                                  </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Education Details</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="degree" value='<?php echo  $education; ?>'>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Locations</label>
                  <div class="col-lg-10">
                    <select class="form-control m-bot15" name="location">
                      <option <?php if (!empty($location) && $location == 'Pune')  echo 'selected = "selected"'; ?>>Pune</option>
                      <option <?php if (!empty($location) && $location == 'Mumbai')  echo 'selected = "selected"'; ?>>Mumbai</option>
                      <option <?php if (!empty($location) && $location == 'Benglore')  echo 'selected = "selected"'; ?>>Benglore</option>
                      <option <?php if (!empty($location) && $location == 'Delhi')  echo 'selected = "selected"'; ?>>Delhi</option>
                    </select>
                  </div>
              </div>   

              <center><input type="submit" value="Submit" >
                    <input type="submit" value="Cancel">
            <br><br>
                          </div>
                      </section>
                  </div>
              </div>
            </form>                  

</section>
      </section>    
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>