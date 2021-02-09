<!DOCTYPE html>
<html>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="<?= base_url('assets/plugins/font-awesome/css/font-awesome.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/plugins/jquery-metrojs/MetroJs.min.css')?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/shape-hover/css/demo.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/shape-hover/css/component.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/owl-carousel/owl.carousel.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/owl-carousel/owl.theme.css')?>" />
    <link href="<?= base_url('assets/plugins/pace/pace-theme-flash.css')?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url('assets/plugins/jquery-slider/css/jquery.sidr.light.css')?>" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url('assets/plugins/jquery-ricksaw-chart/css/rickshaw.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/Mapplic/mapplic/mapplic.css')?>" type="text/css" media="screen">
    <!-- END PLUGIN CSS -->
    <!-- BEGIN PLUGIN CSS -->
    <link href="<?= base_url('assets/plugins/pace/pace-theme-flash.css')?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url('assets/plugins/bootstrapv3/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/plugins/bootstrapv3/css/bootstrap-theme.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/animate.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/plugins/jquery-scrollbar/jquery.scrollbar.css')?>" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="<?= base_url('webarch/css/webarch.css')?>" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
  </head>

  <body class="">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
        <div class="header-seperation">
          <ul class="nav pull-left notifcation-center visible-xs visible-sm">
            <li class="dropdown">
              <a href="#main-menu" data-webarch="toggle-left-side">
                <i class="material-icons">menu</i>
              </a>
            </li>
          </ul>
          <!-- BEGIN LOGO -->
          <a href="#" style="font-size: 22px; color: #fff;    position: relative;
    top: 13px;
    right: -18px;">
          LiveBits ERP
          </a>
          <!-- END LOGO -->
          
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
          <!-- BEGIN CHAT TOGGLER -->
          <div class="pull-right">
            
            <ul class="nav quick-section ">
              <li class="quicklinks">
                <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                  <i class="material-icons">tune</i>
                </a>
                <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  
   <a href="<?= site_url('user') ?>"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out</a>
                                   </li>
                </ul>
              </li>
          
            </ul>
          </div>
          <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
              </div>
            
          </div>
          <!-- END MINI-PROFILE -->
          <!-- BEGIN SIDEBAR MENU -->
          <ul>
            <li class="start  open active "> <a href="<?= site_url('summary');?>"><i style="    margin-left: -54px;" class="material-icons">home</i> <span class="title">Dashboard</span> <span class="selected"></span></a>
              
            </li>
            <li>
              <a href="<?= site_url('site') ?>"> <i class="material-icons">panorama_horizontal</i> <span class="title">Employee Sheet</span></a>
            </li>
            <li>
              <a href="<?=site_url('rent_cont')  ?>"> <i class="material-icons">email</i> <span class="title">Rental Sheet</span>
              </a>
            </li>
            <li>
              <a href="<?= site_url('project') ?>"> <i class="material-icons">invert_colors</i> <span class="title">Miscellaneous </span> </a>
              
            </li>
            <li>
              <a href="<?= site_url('projects') ?>"> <i class="material-icons">airplay</i> <span class="title">Projects</span></a>
               </li>
            
          <div class="clearfix"></div>
          <!-- END SIDEBAR MENU -->
        </div>
      </div>
      <a href="#" class="scrollup">Scroll</a>

      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
          <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>Widget Settings</h3>
          </div>
          <div class="modal-body"> Widget settings form goes here </div>
        </div>
        <div class="clearfix"></div>
        <div class="content sm-gutter">
          <div class="page-title">
          </div>    <div class="wrapper">
        <div class="container">

                    </div>
                    <!--/.sidebar-->
                </div>

                <div class="span3">
                    <div class="sidebar">






                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                        <div class="content">

                            <div class="module message">
                                <div class="module-head">
                                    <h3>Update Record Table</h3>
                                    
                                </div>
                            </div>
                            <div class="module-body table">

                                
    <?php
echo form_open("site/updaterec/");
?>
<h2>Insert Employess Salary</h2>
<?php 
   ?>
<p>
  
  <label for="title">
    Name
  </label>
  <input type="text" name="name" id="name" value="<?php echo $newid->name; ?>"  required>
</p>

<p>
  
  <label for="price">
   price
  </label>
  <input type="text" name="price" id="price" value="<?php echo $newid->price; ?>" required>
</p>
<br>
<label>Employ ID</label>
<input type="number" name="employ_Id" placeholder="Enter Employ Id" value="<?php echo $newid->employ_Id; ?>" required>
<br>
<br>

<label>Select Salary type</label>
<select name="salary_type" value="">
  <option value="<?php echo $newid->salary_type; ?>"><?php echo $newid->salary_type; ?></option>
  <option value="Stipend">Stipend</option>
  <option value="Sallary">Sallary</option>
</select>
<br>
<br>
<label>Select Month </label>
<input type="date" name="salary_month" value="<?php echo $newid->salary_month; ?>">

<br>
<br>
<input type="submit" name="submit" >

<?php

echo form_close();
?>
</div>



                            <script src="<?php echo base_url('');?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
                            <script src="<?php echo base_url('');?>assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
                            <script src="<?php echo base_url('');?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                            <script src="<?php echo base_url('');?>assets/scripts/flot/jquery.flot.js" type="text/javascript"></script>
                            <script src="<?php echo base_url('');?>assets/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('.table-message tbody tr').click(
                                        function() {
                                            $(this).toggleClass('resolved');
                                        }
                                    );
                                });
                            </script>
    </body>