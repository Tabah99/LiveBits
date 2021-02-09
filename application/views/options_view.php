<!DOCTYPE html>
<html>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>LiveBits - Office Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="<?= base_url('assets/plugins/font-awesome/css/font-awesome.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/assets/plugins/jquery-metrojs/MetroJs.min.css')?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('../assets/plugins/shape-hover/css/demo.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('../assets/plugins/shape-hover/css/component.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/plugins/owl-carousel/owl.carousel.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/plugins/owl-carousel/owl.theme.css')?>" />
    <link href="<?= base_url('/assets/plugins/pace/pace-theme-flash.css')?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url('/assets/plugins/jquery-slider/css/jquery.sidr.light.css')?>" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/jquery-ricksaw-chart/css/rickshaw.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/Mapplic/mapplic/mapplic.css')?>" type="text/css" media="screen">
    <!-- END PLUGIN CSS -->
    <!-- BEGIN PLUGIN CSS -->
    <link href="<?= base_url('/assets/plugins/pace/pace-theme-flash.css')?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url('/assets/plugins/bootstrapv3/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/assets/plugins/bootstrapv3/css/bootstrap-theme.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?= base_url('/assets/plugins/animate.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')?>" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="<?= base_url('/assets/webarch/css/webarch.css')?>" rel="stylesheet" type="text/css" />
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

                <div class="span9">
                    <div class="content">

                        <div class="module message">
                            <div class="module-head">
                                <h3 style="display: contents;">Employee Record Table</h3>
                                




                                                <div class="pull-right">
                                    <a href="#" class="btn btn-primary" id="myBtn" data-toggle="modal" data-target="#myModal">Create Entity
                                    </a>
                                </div>
                                <hr>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Modal Header</h4>
                                            </div>
                                            <div class="modal-body">
                                                                                            <?php
                        echo form_open('site/create');
                        ?>
                        <h2>Insert Employess Salary</h2>
                        <p>

                            <label for="title">
                                Name
                            </label>
                            <input type="text" name="name" id="name" required>
                        </p>

                        <p>

                            <label for="price">
                                price
                            </label>
                            <input type="text" name="price" id="price" required>
                        </p>
                        <br>
                        <label>Employ ID</label>
                        <input type="number" name="employ_Id" placeholder="Enter Employ Id" required>
                        <br>
                        <br>

                        <label>Select Salary type</label>
                        <select name="salary_type">
                            <option value="Stipend">Stipend</option>
                            <option value="Sallary">Sallary</option>
                        </select>
                        <br>
                        <br>
                        <label>Select Date </label>
                        <input type="date" name="salary_month">
                        <br>
                        <br>
                        <input type="submit" name="submit">

                        <?php

                        echo form_close();

                        ?>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal" data-target="#myModal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module-body table">

                        <table class="table table-hover no-more-tables">
                            <tbody>
                                <tr class="heading">

                                    <td class="cell-title">Employee Name</td>
                                    <td class="cell-status hidden-phone hidden-tablet">Details</td>
                                    <td class="cell-time align-right">Employee ID</td>
                                </tr>
                                <?php

                                if (isset($records)) {
                                    foreach ($records as $rows) {
                                ?>
                                        <tr class="task">

                                            <td class="cell-title">
                                                <div><?php echo $rows->name; ?></div>
                                            </td>
                                            <td class="cell-status hidden-phone hidden-tablet">
                                                <a href="<?= site_url('site/getDetails/' . $rows->employ_Id) ?>" class="btn btn-primary"> Details </a></h6>
                                            </td>
                                            <td class="cell-time align-right "><?php echo $rows->employ_Id; ?></td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h6>No records Found</h6>";
                                }

                                ?>

                            </tbody>
                        </table>
                       


                    </div>

<!-- BEGIN CORE JS FRAMEWORK-->
    <script src="<?= base_url('assets/plugins/pace/pace.min.js')?>" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="<?= base_url('assets/plugins/jquery/jquery-1.11.3.min.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/bootstrapv3/js/bootstrap.min.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/jquery-block-ui/jqueryblockui.min.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/jquery-unveil/jquery.unveil.min.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/jquery-validation/js/jquery.validate.min.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/bootstrap-select2/select2.min.js')?>" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?= base_url('assets/webarch/js/webarch.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/chat.js')?>" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src=" <?= base_url('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/jquery-ricksaw-chart/js/raphael-min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-ricksaw-chart/js/d3.v2.js')?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-sparkline/jquery-sparkline.js')?>"></script>
    <script src="<?= base_url('assets/plugins/skycons/skycons.js')?>"></script>
    <script src="<?= base_url('assets/plugins/owl-carousel/owl.carousel.min.js')?>" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="<?= base_url('assets/plugins/jquery-gmap/gmaps.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/Mapplic/js/jquery.easing.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/Mapplic/js/jquery.mousewheel.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/Mapplic/js/hammer.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/Mapplic/mapplic/mapplic.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/jquery-flot/jquery.flot.js')?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/jquery-metrojs/MetroJs.min.js')?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?= base_url('assets/js/dashboard_v2.js')?>" type="text/javascript"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="../../www.gstatic.com/firebasejs/7.24.0/firebase-analytics.js"></script>

    <script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyDaflsWYusjtsDkIyXPWuxpgYg9vYVelAM",
        authDomain: "webarch-38d59.firebaseapp.com",
        databaseURL: "https://webarch-38d59.firebaseio.com",
        projectId: "webarch-38d59",
        storageBucket: "webarch-38d59.appspot.com",
        messagingSenderId: "604319374989",
        appId: "1:604319374989:web:bb8e838658a5405d03ccc4",
        measurementId: "G-1P9DBV3T3N"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    </script>
  </body>

</html>