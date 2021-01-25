<?php
require_once("inc/dbcontroller.php");
$db_handle = new DBController();
$host = "localhost";
$user = "";
$password = "";
$database = "";
$sql1 = "SELECT * FROM employee ";
$faq = $db_handle->runQuery($sql1);
?>
<!doctype html>
<html lang="en">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Leaveio</title>
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
    

<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Employee List</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel px-4">
            <div class="adv-table px-7">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th class="hidden-phone">Role</th>
                    <th class="hidden-phone">Team</th>
                    <th class="hidden-phone">Contact</th>
                    <th class="hidden-phone">Status</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
		   if (is_array($faq) || is_object($faq))
		   {
		  foreach($faq as $k=>$v) {
		  
		  ?>
		          <tr class="gradeA">
                    <td><?php echo $faq[$k]["emp_id"]; ?></td>
                    <td><?php echo $faq[$k]["f_name"].' '.$faq[$k]["l_name"]; ?></td>
                    <td class="hidden-phone"><?php echo $faq[$k]["role"]; ?></td>
                    <td class="center hidden-phone"><?php echo $faq[$k]["team"]; ?></td>
                    <td class="center hidden-phone"><?php echo $faq[$k]["phone"]; ?><br><?php echo $faq[$k]["email"]; ?></td>
                    <td class="center hidden-phone">
                    <a href="https://pick-a-bag.000webhostapp.com/change_stat.php?em_id=<?php echo $faq[$k]["emp_id"]; ?>&status=<?php echo $faq[$k]["status"]; ?>"<?php 
                    if( $faq[$k]["status"]=='Active'){?> <button class="btn btn-success"> <?php echo $faq[$k]["status"];}else{
                    ?><button class="btn btn-danger"> <?php echo $faq[$k]["status"];}?></a></td>
                  </tr>
                  <?php
              }} ?>

</tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Leaveio</strong>. All Rights Reserved
        </p>
        
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Employee ID :</td><td>(' + aData[1] + ') ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Details :</td><td><a href="https://pick-a-bag.000webhostapp.com/employee_card.php?em_id=' + aData[1] + '">Click here</a></td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>
