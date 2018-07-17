<script>

    function required()
    {
        var  jumlah = document.getElementById("jumlah");

        var validasiAngka = /^[0-9]+$/;

        if(jumlah.value.match(validasiAngka)){
        }else{
            alert ("Nilai harus dalam bentuk angka");
            return false;
        }

        return true ;
    }


</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibl" content="IE=edge">
    <title>Absensi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url()?>Home/tampil" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Admin</b>Absen</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>SISTEM  </b>ABSENSI</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="navbar-custom-menu">
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <!-- search form -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header" style="color:white;">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> <span>Data Absen</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                                 </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="<?php echo base_url()?>Home/tampilmahasiswa"><i class="glyphicon glyphicon-record"></i> Data Mahasiswa</a></li>
                      <li><a href="<?php echo base_url()?>Home/tampildosen"><i class="glyphicon glyphicon-record"></i> Data Dosen</a></li>
                      <li class="treeview">
                        <a href="#"><i class="glyphicon glyphicon-record"></i> Presensi
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="<?php echo base_url()?>Home/tampillaporandosen"><i class="fa fa-circle-o"></i> Presensi Dosen</a></li>
                          <li><a href="<?php echo base_url()?>Home/inputpresensiMahasiswa"><i class="fa fa-circle-o"></i> Presensi Mahasiswa</a></li>
                        </ul>
                      </li>
            <li class="treeview">
                <li class="treeview">
                  <a href="#"><i class="glyphicon glyphicon-record"></i> Laporan
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url()?>Home/tampillaporandosen"><i class="fa fa-circle-o"></i> Laporan Dosen</a></li>
                    <li><a href="<?php echo base_url()?>Home/tampillaporan"><i class="fa fa-circle-o"></i> Laporan Mahasiswa</a></li>
                  </ul>
                </li>
              <!-- </ul> -->
            </li>
            <li></ul>
                    <!-- <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>Home/tampilmahasiswa"><i class="glyphicon glyphicon-record"></i> Data Mahasiswa</a></li>
                        <li><a href="<?php echo base_url()?>Home/tampildosen"><i class="glyphicon glyphicon-record"></i> Data Dosen</a></li>
                        <li><a href="<?php echo base_url()?>Home/tampilunas"><i class="glyphicon glyphicon-record"></i> Presensi</a></li>
                        <li><a href="<?php echo base_url()?>Home/tampilunas"><i class="glyphicon glyphicon-record">  <span class="pull-right-container">
                                   <i class="fa fa-angle-left pull-right"></i>
                                   </span></i> Laporan</a>
                        </li>
                    </ul> -->
                </li>

                <li>
                    <a href="<?php echo base_url()?>login/logout">
                        <i class="glyphicon glyphicon-log-out"></i>
                        Sign Out
            <span class="pull-right-container">
            </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    <div class="box-header with-border">
                        <center><h3 class="box-title">Sistem Informasi Absensi</h3></center>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="box-body">
                        <center>
                            Admin Absensi
                        </center>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <center>
                          Tugas Akhir 2018
                        </center>
                    </div>
                </div>
                <div class="box">
                </div>
                <div class="box">
                    <center><h1>SELAMAT DATANG!</h1></center>
                    <BR><center><h1>Sistem Presensi ini dibuat untuk menyelesaikan</h1></center>
                      <BR><center><h1>proyek tugas akhir jurusan Teknik Elektro</h1></center>
                        <BR><center><h1>di Politeknik Negeri Jakarta</h1></center>
                          <BR><center><h1></h1></center>
                            <BR><center><h1></h1></center>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2017-2018 <a href="https://adminlte.io">Tim TA Bu Pur 2018</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>
</body>
</html>
