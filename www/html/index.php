<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nirwan Adi Praesta">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Sekretariat Kabinet Republik Indonesia</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="js/amcharts.js"></script>
<script src="js/xy.js"></script>
<script src="js/responsive.min.js"></script>
<script src="https://amcharts.com/lib/3/plugins/export/export.js"></script>
<script src="js/data.js"></script>
<style>
#chartdiv {
  width: 100%;
  height: 100%;
  min-width: 300px;
  min-height: 700px;
  max-width: 700px;
  max-height: 700px;
}
</style>
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
<? include 'header.php';?>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
		<br/>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
				<br/>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-desktop fa-fw" aria-hidden="true"></i>Dashboard</a>
						<ul style="list-style: none;" id="side-menu">
						<li><a href="index.php" class="waves-effect"><i class="fa fa-dot-circle-o fa-fw" aria-hidden="true"></i>Keseluruhan</a></li>
						<li><a href="dashboard.php?eselon=2" class="waves-effect"><i class="fa fa-dot-circle-o fa-fw" aria-hidden="true"></i>Eselon 2</a></li>
						<li><a href="dashboard.php?eselon=3" class="waves-effect"><i class="fa fa-dot-circle-o fa-fw" aria-hidden="true"></i>Eselon 3</a></li>
						<li><a href="dashboard.php?eselon=4" class="waves-effect"><i class="fa fa-dot-circle-o fa-fw" aria-hidden="true"></i>Eselon 4</a></li>
						</ul>

                    </li>
                    <li>
                        <a href="blank.php" class="waves-effect"><i class="fa fa-info fa-fw" aria-hidden="true"></i>Pengantar</a>
                    </li>
                    <li>
                        <a href="basic-table.php" class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Daftar Assessee</a>
                    </li>

                    <li>
                        <a href="rekapitulasi.php" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i>Rekapitulasi</a>
                    </li>

                </ul>

            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>

                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-xs-4">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">ESELON 2</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">29</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-4">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">ESELON 3</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">119</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-4">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Eselon 4</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">413</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                     <div class="col-lg-4 col-sm-4 col-xs-4">
                        <div class="white-box">
                            <h5 class="box-title">Komposisi peserta<br/>berdasarkan level jabatan</h5>
							<hr/>

                            <div id="ct-chart" style="height: 405px;"></div>

                        </div>
                    </div>

                    <div class="col-lg-8 col-sm-8 col-xs-8">
                        <div class="white-box">
                            <h5 class="box-title">Ninecell Summary</h5>
							<hr/>

                            <div id="chartdiv"></div>

                        </div>
                    </div>
                </div>





            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; PPSDM </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>
