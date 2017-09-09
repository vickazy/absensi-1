<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin pencatatan hutang</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>


    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
    <script src="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?php echo base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap color picker -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- datatables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url()?>manager/frm_manager" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Admin</b>panel</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>HUUU</b> TANG</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
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
                        <i class="glyphicon glyphicon-user"></i> <span>Hutang</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                                 </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>hutang/tampil"><i class="glyphicon glyphicon-record"></i> + Data Hutang </a></li>
                        <li><a href="<?php echo base_url()?>hutang/tampilblunas"><i class="glyphicon glyphicon-record"></i> Hutang Belum Lunas </a></li>
                        <li><a href="<?php echo base_url()?>hutang/tampilunas"><i class="glyphicon glyphicon-record"></i> Hutang Lunas</a></li>
                    </ul>
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <center><h3 class="box-title"> PENCATATAN HUTANG</h3></center>
                    <div class="box-tools pull-right">
                    </div>
                </div>
                <div class="box-body">
                    <center>
                        ADMIN PANEL HUTANG
                    </center>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <center>
                       U NEVER FORGET
                    </center>
                </div>

            </div>
            <div class="box">
                <div class="col-md-13">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">BELUM LUNAS</h3>
                        </div>
                        <form class="form-horizontal">
                            <div class="box-body">

                                <table id="example1" class="table table-bordered table-striped data">
                                    <thead>
                                    <tr>
                                    <tr style="background-color: darkslateblue">
                                        <th><center><strong><font style="color: #ffffff">NAMA</font></strong></center></th>
                                        <th><center><strong><font style="color: #ffffff">KEBUTUHAN</font></strong></center></th>
                                        <th><center><strong><font style="color: #ffffff">JUMLAH </font></strong></center></th>
                                        <th><center><strong><font style="color: #ffffff">TANGGAL</font></strong></center></th>
                                        <th><center><strong><font style="color: #ffffff">KETERANGAN</font></strong></center></th>
                                        <th><center><strong><font style="color: #ffffff">AKSI</font></strong></center></th>
                                    </tr>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $id = 1;
                                    foreach ($blunas->result() as $value) {
                                        ?>
                                        <tr>
                                            <td><center><strong><font style="color: #000000"><?php echo $value->nama; ?></font></strong></center></td>
                                            <td><center><strong><font style="color: #000000"><?php echo $value->untuk; ?></font></strong></center></td>
                                            <td><center><strong><font style="color: #000000"><?php echo $value->jumlah; ?></font></strong></center></td>
                                            <td><center><strong><font style="color: #000000"><?php echo $value->tanggal; ?></font></strong></center></td>
                                            <td><center><strong><font style="color: #000000"><?php echo $value->keterangan; ?></font></strong></center></td>
                                            <th>
                                                <center>
                                                    <a class="btn btn-info" href="<?php echo base_url() ?>hutang/pelunasan/<?php echo $value->id ?>" >Lunas</a>
                                                </center>
                                            </th>
                                        </tr>
                                        <?php $id++;  } ?>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->

                            <!-- /.box-footer -->
                        </form>
                    </div>

                    <!-- /.box -->
                    <!-- general form elements disabled -->
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2017-2018 <a href="https://adminlte.io">Ginfa Ghifary Yahya</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()?>assets/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url()?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<!-- Page script -->
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>
</body>
</html>
