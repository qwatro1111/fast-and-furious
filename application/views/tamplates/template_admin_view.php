<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/dist/css/skins/_all-skins.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/dist/css/css.css" rel="stylesheet" type="text/css"/>
        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/dist/js/js.js" type="text/javascript"></script>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="http://fast-and-furious/application/views/admin_home_view.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Fast</b>Furious</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin </b>Fast Furious</span>
                </a>


            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <!-- search form -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active treeview">
                            <a href="http://fast-and-furious/application/views/admin_home_view.php">
                                <i class="fa fa-dashboard"></i> <span>Home</span>

                            </a>

                        </li>
                        <li class="treeview">
                            <a href="http://fast-and-furious/application/views/admin_film_view.php">
                                <i class="fa fa-files-o"></i>
                                <span>Films</span>
                            </a>

                        </li>
                        <li>
                            <a href="http://fast-and-furious/application/views/admin_actors_view.php">
                                <i class="fa fa-th"></i>
                                <span>Actors</span>

                            </a>
                        </li>


                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Home
                    </h1>

                </section>

                <section class="content">
                    <!-- content start -->
                    <?php include 'application/views/' . $content_view; ?>  
                    <!-- content end -->
                </section>
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">

                </div>

            </footer>

            <!-- Control Sidebar -->

        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/application/views/tamplates/dist/js/demo.js"></script>
</body>
</html>
