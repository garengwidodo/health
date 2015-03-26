<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	<!--
	<link href="<?php echo base_url(); ?>assets/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
	-->
	<style type="text/css">
	.skin-blue .main-header .navbar{background-color:#3c8dbc}.skin-blue .main-header .navbar .nav>li>a{color:#fff}.skin-blue .main-header .navbar .nav>li>a:hover,.skin-blue .main-header .navbar .nav>li>a:active,.skin-blue .main-header .navbar .nav>li>a:focus,.skin-blue .main-header .navbar .nav .open>a,.skin-blue .main-header .navbar .nav .open>a:hover,.skin-blue .main-header .navbar .nav .open>a:focus{background:rgba(0,0,0,0.1);color:#f6f6f6}.skin-blue .main-header .navbar .navbar-custom-menu>.nav{margin-right:10px}.skin-blue .main-header .navbar .sidebar-toggle{color:#fff}.skin-blue .main-header .navbar .sidebar-toggle:hover{color:#f6f6f6;background:rgba(0,0,0,0.1)}.skin-blue .main-header .navbar .sidebar-toggle{color:#fff}.skin-blue .main-header .navbar .sidebar-toggle:hover{background-color:#367fa9}@media (max-width:767px){.skin-blue .main-header .navbar .dropdown-menu li.divider{background-color:rgba(255,255,255,0.1)}.skin-blue .main-header .navbar .dropdown-menu li a{color:#fff}.skin-blue .main-header .navbar .dropdown-menu li a:hover{background:#367fa9}}.skin-blue .main-header .logo{background-color:#367fa9;color:#fff;border-bottom:0 solid transparent}.skin-blue .main-header .logo>a{color:#fff}.skin-blue .main-header .logo:hover{background:#357ca5}.skin-blue .main-header li.user-header{background-color:#3c8dbc}.skin-blue .content-header{background:transparent}.skin-blue .user-panel>.info,.skin-blue .user-panel>.info>a{color:#fff}.skin-blue .sidebar-menu>li.header{color:#4b646f;background:#1a2226}.skin-blue .sidebar-menu>li>a{border-left:3px solid transparent;margin-right:1px}.skin-blue .sidebar-menu>li>a:hover,.skin-blue .sidebar-menu>li.active>a{color:#fff;background:#1e282c;border-left-color:#3c8dbc}.skin-blue .sidebar-menu>li>.treeview-menu{margin:0 1px;background:#2c3b41}.skin-blue .wrapper,.skin-blue .main-sidebar,.skin-blue .left-side{background:#222d32}.skin-blue .sidebar a{color:#b8c7ce}.skin-blue .sidebar a:hover{text-decoration:none}.skin-blue .treeview-menu>li>a{color:#8aa4af}.skin-blue .treeview-menu>li.active>a,.skin-blue .treeview-menu>li>a:hover{color:#fff}.skin-blue .sidebar-form{border-radius:3px;border:1px solid #374850;margin:10px 10px}.skin-blue .sidebar-form input[type="text"],.skin-blue .sidebar-form .btn{box-shadow:none;background-color:#374850;border:1px solid transparent;height:35px;-webkit-transition:all .3s cubic-bezier(.32, 1.25, .375, 1.15);-o-transition:all .3s cubic-bezier(.32, 1.25, .375, 1.15);transition:all .3s cubic-bezier(.32, 1.25, .375, 1.15)}.skin-blue .sidebar-form input[type="text"]{color:#666;border-top-left-radius:2px !important;border-top-right-radius:0 !important;border-bottom-right-radius:0 !important;border-bottom-left-radius:2px !important}.skin-blue .sidebar-form input[type="text"]:focus,.skin-blue .sidebar-form input[type="text"]:focus+.input-group-btn .btn{background-color:#fff;color:#666}.skin-blue .sidebar-form input[type="text"]:focus+.input-group-btn .btn{border-left-color:#fff}.skin-blue .sidebar-form .btn{color:#999;border-top-left-radius:0 !important;border-top-right-radius:2px !important;border-bottom-right-radius:2px !important;border-bottom-left-radius:0 !important}.skin-blue.layout-top-nav .main-header>.logo{background-color:#3c8dbc;color:#fff;border-bottom:0 solid transparent}.skin-blue.layout-top-nav .main-header>.logo>a{color:#fff}.skin-blue.layout-top-nav .main-header>.logo:hover{background:#3b8ab8}
	</style>

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
   
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
   
    <!-- jvectormap -->
    <link href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	    
    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.3.min.js"></script>
  </head>
      <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
		<b>Admin</b>LTE
		<i class="ion ion-medkit"></i>
		</a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
               <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo base_url(); ?>assets/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    &nbsp;
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>