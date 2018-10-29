<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nirwan Adi Praesta">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Kementerian Kesehatan Republik Indonesia</title>
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
                        <h4 class="page-title">Profile page</h4> </div>
                </div>

				
<?
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('kemenkes.sqlite');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo "<span class='text-danger'>".$db->lastErrorMsg()."</span>";
   } else {
      echo "";
   }

   $sql ='select * from kemenkes_master_profile where profile_id = "'.$_GET['profile_id'].'"';
//echo $sql;
   $result  = $db->query($sql);
   $row = array(); 
       $i = 0;

         while($res = $result->fetchArray(SQLITE3_ASSOC)){

             $i++;

              $row[$i]['first_name'] = $res['first_name'];
              $row[$i]['nip'] = $res['nip'];
              $row[$i]['profile_id'] = $res['profile_id'];
              $row[$i]['unit'] = $res['unit'];
              $row[$i]['level'] = $res['level'];
              $row[$i]['rumpun'] = $res['rumpun'];
              $row[$i]['satuan_kerja'] = $res['satuan_kerja'];
              $row[$i]['current_position'] = $res['current_position'];
              $row[$i]['home_address'] = $res['home_address'];
              $row[$i]['birthplace'] = $res['birthplace'];
              $row[$i]['education'] = $res['education'];
           
          }

          //print_r($row);
   $db->close();
?> 				
				
				
                <div class="row">
                    <div class="col-md-3 col-xs-15">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="photos/<?=$row[1]['profile_id'];?>.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="photos/<?=$row[1]['profile_id'];?>.jpg" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white"><?=$row[1]['first_name'];?></h4> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
							<center><h4><?=$row[1]['nip'];?><h4></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">Nama Lengkap</label>
                                    <div class="col-md-12">
                                        <input type="text" disabled placeholder="<?=$row[1]['first_name'];?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">NIP</label>
                                    <div class="col-md-12">
                                        <input type="email"  disabled placeholder="<?=$row[1]['nip'];?>" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                </div>
                               <div class="form-group">
                                    <label class="col-md-12">Jabatan</label>
                                    <div class="col-md-12">
                                        <input type="text" disabled placeholder="<?=$row[1]['current_position'];?>" class="form-control form-control-line"> </div>
                                </div>
                               <div class="form-group">
                                    <label class="col-md-12">Unit</label>
                                    <div class="col-md-12">
                                        <input type="text" disabled placeholder="<?=$row[1]['unit'];?>" class="form-control form-control-line"> </div>
                                </div>
								                               <div class="form-group">
                                    <label class="col-md-12">Rumpun</label>
                                    <div class="col-md-12">
                                        <input type="text" disabled placeholder="<?=$row[1]['rumpun'];?>" class="form-control form-control-line"> </div>
                                </div>
                               <div class="form-group">
                                    <label class="col-md-12">Alamat</label>
                                    <div class="col-md-12">
                                        <input type="text" disabled placeholder="<?=$row[1]['home_address'];?>" class="form-control form-control-line"> </div>
                                </div>
								                               <div class="form-group">
                                    <label class="col-md-12">Pendidikan</label>
                                    <div class="col-md-12">
                                        <input type="text" disabled placeholder="<?=$row[1]['education'];?>" class="form-control form-control-line"> </div>
                                </div>
                               <div class="form-group">
                                    <label class="col-md-12">Satuan Kerja</label>
                                    <div class="col-md-12">
                                        <input type="text" disabled placeholder="<?=$row[1]['satuan_kerja'];?>" class="form-control form-control-line"> </div>
                                </div>								
                                <div class="form-group">
                                    <div class="col-sm-12">
<!--online									
  <a  target="_blank" class="btn btn-success" href="javascript:window.open('http://projects.ppsdm.com/index.php/projects/activity/pdf?id=<?=$_GET['project_activity_id'];?>', '', 'width=800,height=600')">
    View Report
  </a>
 !-->
 
   <a  target="_blank" class="btn btn-success" href="reports/<?=$_GET['project_activity_id'];?>.pdf">
    View Report
  </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; PPSDM </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
