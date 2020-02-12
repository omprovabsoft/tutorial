<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PAIRAKUTTI ADMIN</title>
	 <link rel="icon" type="image/png" href="http://careersolution.org.in/public_include/images/icon.png">


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('include/sbadmin/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('include/sbadmin/');?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('include/sbadmin/');?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('include/sbadmin/');?>vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('include/sbadmin/');?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	  <!-- DataTables CSS -->
    <link href="<?php echo base_url('include/sbadmin/');?>vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
</head>
<body>

<?php
       $str= $_SERVER['PHP_SELF'];
	   $setting_time=$this->session->userdata('setting_time');
	   $setting_date=$this->session->userdata('setting_date');
	   $setting_date_time=$this->session->userdata('setting_date_time');
		?>
		
    <div id="wrapper">

      <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><b>ADMIN CONTROL - PAIRAKUTTI</b> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="font-weight: bold;">
   
		<!--	<li><a href="<?php //echo base_url('Dashboard/lists/user_registered'); ?>">USERS</a></li>
			    <li><a href="<?php// echo base_url('Dashboard/lists/slider_image'); ?>">SLIDER</a></li>
			    <li><a href="<?php// echo base_url('Dashboard/lists/courses'); ?>">COURSE</a></li>
			
			<li><a href="<?php //echo base_url('Dashboard/lists/congratulations'); ?>">CONGRATES</a></li>
			<li><a href="<?php //echo base_url('Dashboard/lists/results'); ?>">RESULTS</a></li>
			<li><a href="<?php //echo base_url('Dashboard/lists/news'); ?>">NEWS</a></li>
			<li><a href="<?php// echo base_url('Dashboard/lists/gallery'); ?>">GALLERY</a></li>
			-->
          </ul>
         </li>
		
      
	  
        
      </ul>
    </div>
  </div>

</nav>
  <br> <br>
