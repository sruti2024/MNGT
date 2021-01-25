<?php
require_once("inc/dbcontroller.php");
$db_handle = new DBController();
$sql1 = "SELECT * FROM leave_tbl ";
$faq = $db_handle->runQuery($sql1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
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
          <li><a class="logout" href="logout.php">Logout</a></li>
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
            <a class="active" href="index.html">
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
              <li><a href="employee_add.php">Add</a></li>
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
              <h3>Leave Application</h3>
              
            </div>
            
           
 
            <div class="room-desk">
              <h4 class="pull-left">Apply</h4>
              <a href="#" class="pull-right btn btn-theme02"> My Leaves</a>
              <br><br><br>
              <div class="room-box">
              <form action="gears/insert_leave.php" class="form-horizontal style-form" method="post">
                
                <div class="form-group">
                  <label class="control-label col-md-3">Starting Date(from)</label>
                  <div class="col-md-6">
                    <div data-date="2014-02-01T10:05:00Z" class="input-group date form_datetime-adv">
                      <input type="text" class="form-control" name="date_from" size="16" required>
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-theme02 date-reset"><i class="fa fa-times"></i></button>
                        <button type="button" class="btn btn-theme date-set"><i class="fa fa-calendar"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3">End Date(to)</label>
                  <div class="col-md-6">
                    <div data-date="2014-02-01T10:05:00Z" class="input-group date form_datetime-adv">
                      <input type="text" class="form-control" name="date_to" size="16" required>
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-theme02 date-reset"><i class="fa fa-times"></i></button>
                        <button type="button" class="btn btn-theme date-set"><i class="fa fa-calendar"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3">To</label>
                  <div class="col-sm-6">
                    <input type="email" placeholder="Enter mail" name="to_mail" class="form-control" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3">CC</label>
                  <div class="col-sm-6">
                    <input type="email" placeholder="Enter mail" name="cc" class="form-control">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3">Reason</label>
                  <div class="col-sm-6">
                    <textarea type="text" row="3" placeholder="Reason for leave" name="reason" class="form-control" required></textarea>
                  </div>
                </div>
                <input type="text" placeholder="status" id="status" name="status" value="applied" required hidden>
                <input type="text" id="timestamp" name="timestamp" value="<?php date_default_timezone_set("Asia/Calcutta"); echo date("Y/m/d") . "&nbsp;" . date("h:i:sa"); ?>" required readonly hidden>
                <button type="submit" name="upload" value="Upload" class="btn btn-primary"><span class="fa fa-check"></span>&nbsp Submit</button></center>
                
            </form>
            </div>
              
              
            </div>
            
          </aside>
          <aside class="right-side">
            <div class="user-head">
              <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
              <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
            </div>
            <div class="invite-row">
              <h4 class="pull-left">Leaves Taken</h4>
              
            </div>
            <ul class="chat-available-user">
                <?php
		   if (is_array($faq) || is_object($faq))
		   {
		  foreach($faq as $k=>$v) {
		  ?>
              <li>
                <a href="chat_room.html">
                  <?php echo $faq[$k]["date_from"]; ?>&nbsp&nbsp
                  <span class="text-muted"><?php if($faq[$k]["status"]=="applied") { ?> <span class="label label-info label-mini"><?php echo $faq[$k]["status"];}?></span>
                                           <?php if($faq[$k]["status"]=="approved"){ ?><span class="label label-success label-mini"><?php echo $faq[$k]["status"];}?></span>
                                           <?php if($faq[$k]["status"]=="denied"){ ?><span class="label label-danger label-mini"><?php echo $faq[$k]["status"];}?></span>
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
          &copy; Copyrights <strong>Leaveio</strong>. All Rights Reserved
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
