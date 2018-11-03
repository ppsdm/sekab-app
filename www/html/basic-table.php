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
<style>
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
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
                    <div class="col-lg-10 col-md-5 col-sm-4 col-xs-12">
                        <h4 class="page-title">
						<a class="btn btn btn-rounded btn-default btn-outline m-r-5" href="basic-table.php"><i class="fa fa-circle m-r-5 text-info"></i>SELURUH PEGAWAI</a>
						<a class="btn btn btn-rounded btn-default btn-outline m-r-5" href="eselon2.php"><i class="fa fa-circle m-r-5 text-inverse"></i>ESELON 2</a>
						<a class="btn btn btn-rounded btn-default btn-outline m-r-5" href="eselon3.php"><i class="fa fa-circle m-r-5 text-inverse"></i>ESELON 3</a>
						<a class="btn btn btn-rounded btn-default btn-outline m-r-5" href="eselon4.php"><i class="fa fa-circle m-r-5 text-inverse"></i>ESELON 4</a>
						</h4>

						</div>

                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
						<h3 class="box-title"></i>CARI SELURUH PEGAWAI</h3>
						<hr/>


        <div class="panel panel-primary filterable">
            <div >
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="NIP" disabled></th>
                        <th><input type="text" class="form-control" placeholder="NAMA" disabled></th>
                        <th><input type="text" class="form-control" placeholder="POSISI" disabled></th>
                    </tr>
                </thead>
                <tbody>
<?
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('setkab.sqlite');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo "<span class='text-danger'>".$db->lastErrorMsg()."</span>";
	  $db->close();
   } else {
      echo "";
   }

   $sql ='select distinct a.id as profile_id, a.nip,a.nama_lengkap, a.jabatan, b.id as project_Activity_id from setkab_assessee a
left join setkab_activity b on a.id = b.assessee_id';

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
?>


                                        <tr>
                                            <td><?=str_replace(' ', '', $row['nip']);?></td>
                                            <td ><?=$row['nama_lengkap'];?></td>
                                            <td ><?=str_replace('<br>','',$row['jabatan']);?></td>
                                            <td>
											<a class="btn btn btn-rounded btn-default btn-outline m-r-5" href="profile.php?profile_id=<?=$row['profile_id'];?>&project_activity_id=<?=$row['project_Activity_id'];?>">
											<i class="ti-check text-success m-r-5"></i>view</a></td>
                                        </tr>
<?
   }
   $db->close();
?>
                </tbody>
            </table>
        </div>


                    </div>
                </div>
            </div>
<!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; PPSDM </footer>
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
	<script>
	/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
	</script>
</body>

</html>
html>
