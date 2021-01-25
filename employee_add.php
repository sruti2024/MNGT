<?php
require_once("inc/dbcontroller.php");
$db_handle = new DBController();
$sql1 = "SELECT * FROM employee ";
$faq = $db_handle->runQuery($sql1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>MNGT</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>MN<span>GT</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <li class="mt">
            <a  href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user"></i>
              <span>Employee</span>
              </a>
            <ul class="sub">
              <li><a class="active" href="employee_add.php">Add</a></li>
              <li><a href="employee.php">List</a></li>
            </ul>
            </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-clock-o"></i>
              <span>Leave</span>
              </a>
            <ul class="sub">
              <li><a href="leave.php">Apply</a></li>
              <li><a href="">View</a></li>
            </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>Add Employee</h3>
              
            </div>
            
           
 
            <div class="room-desk">
              <h4 class="pull-left">ADD Employee</h4>
              
              <br><br><br>
              <div class="room-box">
              <form action="gears/insert_employee.php" class="form-horizontal style-form" method="post">
                
                <div class="form-group">
                  <label class="control-label col-md-3">First Name</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Enter first name" name="f_name" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Last Name</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Enter Last name" name="l_name" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Age</label>
                  <div class="col-sm-6">
                    <input type="number" placeholder="Enter Age" name="age" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">State</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Enter State of residential" name="state" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Address</label>
                  <div class="col-sm-6">
                    <textarea type="text" row="3" placeholder="full address" name="address" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Education(highest degree and Instituition name)</label>
                  <div class="col-sm-6">
                    <textarea type="text" row="3" placeholder="Degree and Instituition" name="education" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Email ID</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="EmailID" name="email" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Phone no.</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Enter phone number" name="phone" class="form-control" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3">Role</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Enter Role" name="role" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Team</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Enter Team alloted" name="team" class="form-control" required>
                  </div>
                </div>
                <?php 
                $mysqli = new mysqli("localhost", "", "", ""); 
$query111 = "SELECT * FROM employee ORDER BY ID DESC LIMIT 1";

if ($result = $mysqli->query($query111)) {
    while ($row = $result->fetch_assoc()) {
        $field88name = $row["emp_id"];
    }
    $result->free();
}?>
               
                <input type="text" placeholder="status" id="status" name="emp_id" value="<?php echo $field88name ?>" required hidden>
                
                <input type="text" placeholder="status" id="status" name="status" value="Active" required hidden>
                <input type="text" id="timestamp" name="timestamp" value="<?php date_default_timezone_set("Asia/Calcutta"); echo date("Y/m/d") . "&nbsp;" . date("h:i:sa"); ?>" required readonly hidden>
                <button type="submit" name="upload" value="Upload" class="btn btn-primary"><span class="fa fa-check"></span>&nbsp Submit</button></center>
                
            </form>
            </div>
              
              
            </div>
            
          </aside>
          <aside class="right-side">
            <div class="user-head">
              <h4 class="pull-left">Total Employee:
              
            
               <?php 
               $mysqli = new mysqli("localhost", "", "", ""); 
$query = "SELECT count(*) AS count FROM employee";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["count"];
    }
    $result->free();
} echo $field1name;?></h4>
            </div>
            <div class="invite-row">
              <h4 class="pull-left">Employee Names:
              
            </h4></div>

<ul class="chat-available-user">
                <?php
		   if (is_array($faq) || is_object($faq))
		   {
		  foreach($faq as $k=>$v) {
		  ?>
              <li>
                <a href="chat_room.html">
                  <?php echo $faq[$k]["f_name"]; ?>&nbsp<?php echo $faq[$k]["l_name"]; ?>&nbsp
                  <span class="text-muted"><?php if($faq[$k]["status"]=="In-Active") { ?> <span class="label label-info label-mini"><?php echo $faq[$k]["status"];}?></span>
                                           <?php if($faq[$k]["status"]=="Active"){ ?><span class="label label-success label-mini"><?php echo $faq[$k]["status"];}?></span>
                                           <?php if($faq[$k]["status"]=="Purged"){ ?><span class="label label-danger label-mini"><?php echo $faq[$k]["status"];}?></span>
                                           </span>
                  </a>
              </li>
              <?php 
              }} ?>
              
            </ul>


          </aside>
        </div>
        <!-- page end-->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>MNGT</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
        </div>
        <a href="lobby.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
