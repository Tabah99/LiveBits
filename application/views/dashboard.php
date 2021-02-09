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
            <li class="start  open active "> <a href="<?= site_url('summary');?>"><i style="margin-left: -54px;" class="material-icons">home</i> <span class="title">Dashboard</span> <span class="selected"></span></a>
              
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
        <div class="content sm-gutter">
          <div class="page-title">
          </div>
          <!-- BEGIN DASHBOARD TILES -->
          <div class="row" style="margin-top: 75px">
            <div class="col-md-4 col-vlg-3 col-sm-6">
              <div class="tiles green m-b-10">
                <div class="tiles-body">
                  <div class="controller">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                  <div class="tiles-title text-black">Miscellaneous </div>
                  <div class="widget-stats">
                    <div class=""><?php foreach ($price as $key) {
        
    } ?>
                      <span class="item-title">Miscellaneous Amount</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $key->price;?>" data-animation-duration="700">0</span>
    

    
  
                    </div>
                  </div>
           
                </div>
              </div>
            </div>
            <div class="col-md-4 col-vlg-3 col-sm-6">
              <div class="tiles blue m-b-10">
                <div class="tiles-body">
                  <div class="controller">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div><?php foreach ($salary as $key) {
            
        }
        ?>
                  <div class="tiles-title text-black">Total Salary Given </div>
                  <div class="widget-stats">
                    <div class="">
                      <span class="item-title">Total Salary</span> <span class="item-count animate-number semi-bold" data-value="<?=
                     $key->salary; ?>" data- animation-duration="700">0</span>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 col-vlg-3 col-sm-6">
              <div class="tiles purple m-b-10">
                <div class="tiles-body">
                  <div class="controller">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
       <?php            foreach ($total as $key) {
            # code...
        }

     ?>
                  <div class="tiles-title text-black">Total Rent </div>
                  <div class="widget-stats">
                    <div class="">
                      <span class="item-title">Total Rent</span> <span class="item-count animate-number semi-bold" data-value="<?=     $key->total;
 ?>" data-animation-duration="700">0</span>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 col-vlg-3 col-sm-6">
              <div class="tiles  yellow m-b-10">
                <div class="tiles-body">
                  <div class="controller">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
       <?php            foreach ($outsrc as $key) {
        
    }
    


     ?>
                  <div class="tiles-title text-black">Total Out Sourced </div>
                  <div class="widget-stats">
                    <div class="">
                      <span class="item-title">Out Sourced Amount</span> <span class="item-count animate-number semi-bold" data-value="<?= $key->outsrc;
 ?>" data-animation-duration="700">0</span>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
           <div class="col-md-4 col-vlg-3 col-sm-6">
              <div class="tiles red m-b-10">
                <div class="tiles-body">
                  <div class="controller">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
       <?php            foreach ($profit as $key) {
        
    }
    


     ?>
                  <div class="tiles-title text-black">Projects Earning (Profit)</div>
                  <div class="widget-stats">
                    <div class="">
                      <span class="item-title">Profit</span> <span class="item-count animate-number semi-bold" data-value="<?= $key->profit;
 ?>" data-animation-duration="700">0</span>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
           <div class="col-md-4 col-vlg-3 col-sm-6">
              <div class="tiles orange m-b-10">
                <div class="tiles-body">
                  <div class="controller">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
       <?php            foreach ($da as $key) {
        
    }
    


     ?>
                  <div class="tiles-title text-black">Projects Amount
</div>
                  <div class="widget-stats">
                    <div class="">
                      <span class="item-title">Projects Amount
</span> <span class="item-count animate-number semi-bold" data-value="<?= $key->da;
 ?>" data-animation-duration="700">0</span>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            
            
                <!-- BEGIN BLOG POST WITH IMAGE -->
              </div>
            </div>
          </div>

      <!-- END CHAT -->
    </div>
    <!-- END CONTAINER -->
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
    <script src="<?= base_url('webarch/js/webarch.js')?>" type="text/javascript"></script>
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
    <script type="text/javascript" src="<?= base_url('https://maps.google.com/maps/api/js?sensor=true')?>"></script>
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
    <script src="../../www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>

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