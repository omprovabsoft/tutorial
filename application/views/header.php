<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
         <link rel="icon" type="image/png" href="<?php echo base_url(); ?>include/publicwebsite/images/icons/ico.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(''); ?>include/admin/1001/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(''); ?>include/admin/1001/css/style.css">
         <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(''); ?>include/admin/1001/font/font.css">
        <script src="<?php echo base_url(''); ?>include/admin/1001/js/jquery.min.js"></script>
        <script src="<?php echo base_url(''); ?>include/admin/1001/js/bootstrap.min.js"></script>
        <script>
          $(document).ready(function(){
            $('[data-toggle="modal"]').tooltip();
          });
</script>
    </head>
    <body>
       <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="javascript:void(0)"><?php echo $title; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" style="font-size: 12px">
                    <li><a href="<?php echo base_url('Home/angularjs'); ?>">ANGULAR JS</a></li>
                    <li><a href="<?php echo base_url('Home/java'); ?>">JAVA</a></li>
                    <li><a href="<?php echo base_url('Home/oops'); ?>">OOPS</a></li>
                    
                    <li><a href="<?php echo base_url('Home/gallary'); ?>">GALARY</a></li>

                    
                </ul>
                 <a style="float: right; text-transform: uppercase;" class="navbar-brand" href="javascript:void(0)">TUTORIAL</a>

                 <?php
                 ?>
            
            </div>
           
        
           </div>
 
</nav>
<br>
<br>
<br>
