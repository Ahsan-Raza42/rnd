<!doctype html>
<html lang="en">
    
 
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="Bdtask">
        <title>Research & development | Evyol Group</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon.png">
        <!--Global Styles(used by all pages)-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <link href="<?php echo base_url();?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/plugins/typicons/src/typicons.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
        <!--Third party Styles(used by this page)--> 
        <link href="<?php echo base_url();?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
         <link href="<?php echo base_url();?>/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/plugins/select2-bootstrap4/dist/select2-bootstrap4.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/plugins/jquery.sumoselect/sumoselect.min.css" rel="stylesheet">
       
        <!--Start Your Custom Style Now-->
        <link href="<?php echo base_url();?>/assets/dist/css/style.css" rel="stylesheet">
        <!--Start Your Custom Style Now-->
        <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">
           <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
        <style >
        
 
            html {
            user-select: none;
        }
.model_title{

text-transform: uppercase;
  font-weight: 1200;
  display: block;
  padding: 25px 15px;
  text-align: center;
  font-size: 20px;
  color:white;
  background-color: #37a000; border-color: #37a000; 

}
.panel-title{
text-transform: uppercase;
  font-weight: 600;
  display: block;
  padding: 10px 15px;
  font-size: 12px;
  color:white;
  background-color: #37a000; border-color: #37a000; 
}
 table{
        width: 100%;
        max-width: 100%;
        background-color: transparent;
       border: 1px solid #ddd;
    
    }
    th,td{

        padding: 1.3%;
        background-color: transparent;
            border: 1px solid #ddd;
            padding: 5px;
    }
    th{
        color: White;
          background-color: #37a000;
           border-color: #37a000;
    }
 
        </style>
    </head>
    <body class="fixed">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav class="sidebar sidebar-bunker">
                <div class="sidebar-header" style="background-color: white;">
                    <!--<a href="index.html" class="logo"><span>bd</span>task</a>-->
                    <a href="index" class="logo"><img src="<?php echo base_url();?>/assets/img/logo.png" alt="Evyol Group"></a>
                </div><!--/.sidebar header-->
                <div class="profile-element d-flex align-items-center flex-shrink-0">
                    <div class="avatar online">
                        <img src="<?php echo base_url();?>/assets/img/evyol.png" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-text">
                        <h6 class="m-0">Evyol Group</h6>
                        <span><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="34514c5559445851745359555d581a575b59">[email&#160;protected]</a></span>
                    </div>
                </div><!--/.profile element-->
                <form class="search sidebar-form" action="#" method="get" >
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search...">
                        <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
                    </div>
                </form><!--/.search-->
                <div class="sidebar-body">
                    <nav class="sidebar-nav">
                        <ul class="metismenu">
                            <li class="nav-label">Main Menu</li>
                            <li class="mm-active">
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-home-outline mr-2"></i>
                                    Dashboard
                                </a>
                                <ul class="nav-second-level">

                                    <li class=""><a href="index">Dashboard</a></li>
                              
                                </ul>
                            </li>
                            <li class="  ">
                              
                                 <a class="has-arrow material-ripple" href="#">
                                      <i class="typcn typcn-clipboard mr-2"></i>
                                    Trial Initiation
                                </a>
                                <ul class="nav-second-level">

                                    <li class=" "><a <?php // if(base_url(uri_string()) == base_url(uri_string().'/in'))  { echo 'mm-active'; } ?> href="in">Trial Initiation</a></li> 
                                        <li class=" "><a href="view">Manage Trial Initiation</a></li>.
                                        
                                     
                                </ul>
                            </li>
                            <li class="  ">
                              
                                 <a class="has-arrow material-ripple" href="#">
                                      <i class="typcn typcn-messages mr-2"></i>
                                    Data Enter
                                </a>
                                <ul class="nav-second-level">

                                    <li class=" "><a  href="entry">Data Entry</a></li> 
                                        <li class=" "><a href="Insert_view">Manage Data Entry</a></li>.
                                        
                                     
                                </ul>
                            </li> 
                              <li class="  ">
                              
                                 <a class="has-arrow material-ripple" href="#">
                                      <i class=" fas fa-bug mr-2 "></i>
                                   Adult insect
                                </a>
                                <ul class="nav-second-level">

                                    <li class=" "><a  href="adult_insect">Adult Insect Enter</a></li> 
                                        <li class=" "><a href="Insert_view">Manage Data Entry</a></li>.
                                        
                                     
                                </ul>
                            </li>
                            
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-chart-pie-outline mr-2"></i>
                                    Charts
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="charts_flot.html">Flot Chart</a></li>
                                    <li><a href="charts_Js.html">Chart js</a></li>
                                    <li><a href="charts_morris.html">Morris Charts</a></li>
                                    <li><a href="charts_sparkline.html">Sparkline Charts</a></li>
                                    <li><a href="charts_am.html">Am Charts</a></li>
                                    <li><a href="charts_apex.html">Chart Apex</a></li>
                                </ul>
                            </li>
                            <li><a href="chat.html"><i class="typcn typcn-messages mr-2"></i> Chat</a></li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-mail mr-2"></i>
                                    Mailbox
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="mailbox.html">Mailbox</a></li>
                                    <li><a href="mailbox_details.html">Mailbox Details</a></li>
                                    <li><a href="compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-archive mr-2"></i>
                                    Tables
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="tables_bootstrap.html">Bootstrap tables</a></li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Data tables</a>
                                        <ul class="nav-third-level">
                                            <li><a href="tables_data_basic.html">Basic initialization</a></li>
                                            <li><a href="tables_data_sources.html">Data sources</a></li>
                                            <li><a href="tables_data_api.html">API</a></li>
                                            <li><a href="tables_data_styling.html">Styling</a></li>
                                            <li><a href="tables_data_advanced.html">Advanced initialization</a></li>
                                            <li><a href="tables_data_bootstrap4.html">Bootstrap4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="tables_foo.html">FooTable</a></li>
                                    <li><a href="tables_jsgrid.html">Jsgrid table</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-clipboard mr-2"></i>
                                    Forms
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="forms_basic.html">Basic Forms</a></li>
                                    <li><a href="forms_input_group.html">Input group</a></li>
                                    <li><a href="forms_mask.html">Form Mask</a></li>
                                    <li><a href="forms_touchspin.html">Touchspin</a></li>
                                    <li><a href="forms_select.html">Select</a></li>
                                    <li><a href="forms_cropper.html">Cropper</a></li>
                                    <li><a href="forms_file_upload.html">Forms File Upload</a></li>
                                    <li><a href="forms_editor_ck.html">CK Editor</a></li>
                                    <li><a href="forms_editor_summernote.html">Summernote</a></li>
                                    <li><a href="forms_wizard.html">Form Wizaed</a></li>
                                    <li><a href="forms_editor_markdown.html">Markdown</a></li>
                                    <li><a href="forms_editor_trumbowyg.html">Trumbowyg</a></li>
                                    <li><a href="forms_editor_wysihtml5.html">Wysihtml5</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">Components</li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-coffee mr-2"></i>
                                    UI Elements
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="ui_buttons.html">Buttons</a></li>
                                    <li><a href="ui_badges.html">Badges</a></li>
                                    <li><a href="ui_spinners.html">Spinners</a></li>
                                    <li><a href="ui_tabs.html">Tab</a></li>
                                    <li><a href="ui_notification.html">Notification</a></li>
                                    <li><a href="ui_tree_view.html">Tree View</a></li>
                                    <li><a href="ui_progressbars.html">Progressber</a></li>
                                    <li><a href="ui_list_view.html">List View</a></li>
                                    <li><a href="ui_ratings.html">Ratings</a></li>
                                    <li><a href="ui_datetime_picker.html">Date & Time Picker</a></li>
                                    <li><a href="ui_typography.html">Typography</a></li>
                                    <li><a href="ui_modals.html">Modals</a></li>
                                    <li><a href="ui_icheck_toggle_pagination.html">iCheck, Toggle, pagination</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-world-outline mr-2"></i>
                                    Maps
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="maps_amcharts.html">Amcharts Map</a></li>
                                    <li><a href="maps_gmaps.html">gMaps</a></li>
                                    <li><a href="maps_data.html">Data Maps</a></li>
                                    <li><a href="maps_jvector.html">Jvector Maps</a></li>
                                    <li><a href="maps_google.html">Google map</a></li>
                                    <li><a href="maps_snazzy.html">Snazzy Map</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-info-large-outline mr-2"></i>
                                    Icons
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="icons_bootstrap.html">Bootstrap Icons</a></li>
                                    <li><a href="icons_fontawesome.html">Fontawesome Icon</a></li>
                                    <li><a href="icons_flag.html">Flag Icons</a></li>
                                    <li><a href="icons_material.html">Material Icons</a></li>
                                    <li><a href="icons_weather.html">Weather Icons </a></li>
                                    <li><a href="icons_line.html">Line Icons</a></li>
                                    <li><a href="icons_pe.html">Pe Icons</a></li>
                                    <li><a href="icon_socicon.html">Socicon Icons</a></li>
                                    <li><a href="icons_typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>
                            <li><a href="widgets.html"><i class="typcn typcn-gift mr-2"></i>Widgets</a></li>
                            <li><a href="calender.html"><i class="typcn typcn-calendar-outline mr-2"></i>Calendar</a></li>
                            <li class="nav-label">Extra</li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-device-tablet mr-2"></i>
                                    App Views
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="invoice2.html">Invoice two</a></li>
                                    <li><a href="timeline_horizontal.html">Horizontal timeline</a></li>
                                    <li><a href="timeline_vertical.html">Vertical timeline</a></li>
                                    <li><a href="pricing.html">Pricing Table</a></li>
                                    <li><a href="range_slider.html">Range Slider</a></li>
                                    <li><a href="carousel.html">Carousel</a></li>
                                    <li><a href="code_editor.html">Code editor</a></li>
                                    <li><a href="gridSystem.html">Grid System</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-book mr-2"></i>
                                    Authentication
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="user_profile.html">Profile</a></li>
                                    <li><a href="forget_password.html">Forget password</a></li>
                                    <li><a href="lockscreen.html">Lockscreen</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="505.html">505 Error</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-flow-merge mr-2"></i>
                                    Multi Level Menu
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="#">Menu Item</a></li>
                                    <li><a href="#">Menu Item - 2</a></li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Level - 2</a>
                                        <ul class="nav-third-level">
                                            <li><a href="#">Menu Item</a></li>
                                            <li>
                                                <a class="has-arrow" href="#" aria-expanded="false">Level - 3</a>
                                                <ul class="nav-fourth-level">
                                                    <li><a href="#">Level - 4</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="blank-page.html"><i class="typcn typcn-bookmark mr-2"></i>Blank page</a></li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-puzzle-outline mr-2"></i>
                                    Layouts
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="layouts_layout.html">Layout</a></li>
                                    <li><a href="layouts_fixed.html">Fixed layout</a></li>
                                    <li><a href="layouts_fixed-without__navbar.html">Fixed layout without navbar</a></li>
                                </ul>
                            </li>
                            <li><a href="changelog.html"><i class="typcn typcn-attachment-outline mr-2"></i>Changelog<span class="badge badge-success ml-auto">v1.1.0</span></a></li>
                            <li><a href="#"><i class="typcn typcn-support mr-2"></i>Documentation</a></li>
                        </ul>
                    </nav>
                </div><!-- sidebar-body -->
            </nav>
            <!-- Page Content  -->
            <div class="content-wrapper">
                <div class="main-content">
                    <nav class="navbar-custom-menu navbar navbar-expand-lg m-0">
                        <div class="sidebar-toggle-icon" id="sidebarCollapse">
                            sidebar toggle<span></span>
                        </div><!--/.sidebar toggle icon-->
                        <div class="d-flex flex-grow-1">
                            <ul class="navbar-nav flex-row align-items-center ml-auto">
                                <li class="nav-item dropdown quick-actions">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <i class="typcn typcn-th-large-outline"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <div class="nav-grid-row row">
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-cog-outline d-block"></i>
                                                <span>Settings</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-group-outline d-block"></i>
                                                <span>Users</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-puzzle-outline d-block"></i>
                                                <span>Components</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-chart-bar-outline d-block"></i>
                                                <span>Profits</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-time d-block"></i>
                                                <span>New Event</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-edit d-block"></i>
                                                <span>Tasks</span>
                                            </a>
                                        </div>
                                    </div>
                                </li><!--/.dropdown-->
                                <li class="nav-item">
                                    <a class="nav-link" href="chat.html"><i class="typcn typcn-messages"></i></a>
                                </li>
                                <li class="nav-item dropdown notification">
                                    <a class="nav-link dropdown-toggle badge-dot" href="#" data-toggle="dropdown">
                                        <i class="typcn typcn-bell"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <h6 class="notification-title">Notifications</h6>
                                        <p class="notification-text">You have 2 unread notification</p>
                                        <div class="notification-list">
                                            <div class="media new">
                                                <div class="img-user"><img src="<?php echo base_url();?>/assets/img/avatar.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</h6>
                                                    <span>Mar 15 12:32pm</span>
                                                </div>
                                            </div><!--/.media -->
                                            <div class="media new">
                                                <div class="img-user online"><img src="<?php echo base_url();?>/assets/img/avatar2.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6><strong>Joyce Chua</strong> just created a new blog post</h6>
                                                    <span>Mar 13 04:16am</span>
                                                </div>
                                            </div><!--/.media -->
                                            <div class="media">
                                                <div class="img-user"><img src="<?php echo base_url();?>/assets/img/avatar3.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6><strong>Althea Cabardo</strong> just created a new blog post</h6>
                                                    <span>Mar 13 02:56am</span>
                                                </div>
                                            </div><!--/.media -->
                                            <div class="media">
                                                <div class="img-user"><img src="<?php echo base_url();?>/assets/img/avatar4.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6><strong>Adrian Monino</strong> added new comment on your photo</h6>
                                                    <span>Mar 12 10:40pm</span>
                                                </div>
                                            </div><!--/.media -->
                                        </div><!--/.notification -->
                                        <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
                                    </div><!--/.dropdown-menu -->
                                </li><!--/.dropdown-->
                                <li class="nav-item dropdown user-menu">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <!--<img src="<?php echo base_url();?>/assets/img/user2-160x160.png" alt="">-->
                                        <i class="typcn typcn-user-add-outline"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <div class="dropdown-header d-sm-none">
                                            <a href="#" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                                        </div>
                                        <div class="user-header">
                                            <div class="img-user">
                                                <img src="<?php echo base_url();?>/assets/img/avatar-1.jpg" alt="">
                                            </div><!-- img-user -->
                                            <h6>Ahsan</h6>
                                            <span><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="fb9e839a968b979ebb9c969a9297d5989496">[email&#160;protected]</a></span>
                                        </div><!-- user-header -->
                                        <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                                        <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                                        <a href="#" class="dropdown-item"><i class="typcn typcn-arrow-shuffle"></i> Activity Logs</a>
                                        <a href="#" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                                        <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-key-outline"></i> Sign Out</a>
                                    </div><!--/.dropdown-menu -->
                                </li>
                            </ul><!--/.navbar nav-->
                            <div class="nav-clock">
                                <div class="time">
                                    <span class="time-hours"></span>
                                    <span class="time-min"></span>
                                    <span class="time-sec"></span>
                                </div>
                            </div><!-- nav-clock -->
                        </div>
                    </nav><!--/.navbar-->
                      <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <div class="header-icon text-success mr-3"><i class="typcn typcn-spiral"></i></div>
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Dashboard</h1>
                                    <small>From now on you will start your activities.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?=  $this->renderSection('content');?>


                     <footer class="footer-content">
                    <div class="footer-text d-flex align-items-center justify-content-between">
                        <div class="copy">© 2018 Bdtask Responsive Bootstrap 4 Dashboard Template</div>
                        <div class="credit">Designed by: <a href="#">Bdtask</a></div>
                    </div>
                </footer><!--/.footer content-->
                <div class="overlay"></div>
            </div><!--/.wrapper-->
        </div>
        <!--Global script(used by all pages)-->
        <script data-cfasync="false" src="<?php echo base_url();?>/assets/js/email-decode.min.js"></script><script src="<?php echo base_url();?>/assets/plugins/jQuery/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <!-- Third Party Scripts(used by this page)-->
        <script src="<?php echo base_url();?>/assets/plugins/chartJs/Chart.min.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/sparkline/sparkline.min.js"></script>
        
        <!--Page Active Scripts(used by this page)-->
        <script src="<?php echo base_url();?>/assets/js/pages/dashboard.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="<?php echo base_url();?>/assets/js/sidebar.js"></script>

 <script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.min.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

        <script src="<?php echo base_url();?>/assets/dist/js/pages/demo.select2.js"></script>
        <script src="<?php echo base_url();?>/assets/dist/js/pages/demo.jquery.sumoselect.js"></script>
        <script src="<?php echo base_url();?>/assets/dist/js/pages/newsletter.active.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/select2/dist/js/select2.min.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/jquery.sumoselect/jquery.sumoselect.min.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/modals/classie.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/modals/modalEffects.js"></script>
            
  <script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
</script>
 <script type="text/javascript">
     
      var dp= $("#datepicker").datepicker({
     format: "yyyy",
     viewMode: "years", 
     minViewMode: "years",
     autoclose:true
  });   
//changeYear event trigger's
dp.on('changeYear', function (e) {    
   //do something here
   alert("Year changed ");
});
 </script>
  <script type="text/javascript">
        $(document).ready(function(){
 
            $('#protocol_number').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('home/get_trial_data');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                       
                        var html = '';
                        var htmls ='';
                        var htmlo ='';
                        var htmlp ='';
                        var htmlw ='';
                        var i;
                        for(i=0; i<data.length; i++){
                         html += '<option value='+data[i].c_name+'>'+data[i].c_name+'</option>';
                         htmls += '<option value='+data[i].type+'>'+data[i].type+'</option>'; 
                         htmlo += '<option value='+data[i].location+'>'+data[i].location+'</option>'; 
                         htmlp += '<option value='+data[i].year+'>'+data[i].year+'</option>';
                         htmlw += '<option value='+data[i].crop_id+'>'+data[i].crop_id+'</option>';
                        }                       
                        $('#crop').html(html);
                        $('#weed').html(htmls);
                        $('#locs').html(htmlo);
                        $('#year').html(htmlp);
                        $('#crop_id').html(htmlw);
                        
                        
 
                    }
                });
                return false;
            }); 
             
        });
    </script>
     <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<!-- this script is used for enter leaf in modle -->

<script>  
$(document).ready(function(){ 
 
 var count = 0;

 $('#user_dialog').dialog({
  autoOpen:false,
  width:400
 });

 $('#add').click(function(){
  $('#user_dialog').dialog('option', 'title', 'ADD LEAF');
  $('#leaf_no').val('');
  $('#upper').val('');
  $('#middle').val('');
  $('#lower').val('');
  $('#error_leaf_no').text('');
  $('#error_upper').text('');
  $('#error_middle').text('');
  $('#leaf_no').css('border-color', '');
  $('#upper').css('border-color', '');
  $('#middle').css('border-color', '');
  $('#lower').css('border-color', '');
  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_leaf_no = '';
  var error_upper = '';
  var error_middle = '';
  var error_lower = '';
  var leaf_no = '';
  var upper = '';
  var middle = '';
  var lower = '';
  if($('#leaf_no').val() == '')
  {
   error_leaf_no = 'Leaf no is required';
   $('#error_leaf_no').text(error_leaf_no);
   $('#leaf_no').css('border-color', '#cc0000');
   leaf_no = '';
  }
  else
  {
   error_leaf_no = '';
   $('#error_leaf_no').text(error_leaf_no);
   $('#leaf_no').css('border-color', '');
   leaf_no = $('#leaf_no').val();
  } 
  if($('#upper').val() == '')
  {
   error_upper = 'Upper Leaf is required';
   $('#error_upper').text(error_upper);
   $('#upper').css('border-color', '#cc0000');
   upper = '';
  }
  else
  {
   error_upper = '';
   $('#error_upper').text(error_upper);
   $('#upper').css('border-color', '');
   upper = $('#upper').val();
  } 

  if($('#middle').val() == '')
  {
   error_middle = 'Middle Leaf is required';
   $('#error_middle').text(error_middle);
   $('#middle').css('border-color', '#cc0000');
   middle = '';
  }
  else
  {
   error_middle = '';
   $('#error_middle').text(error_middle);
   $('#middle').css('border-color', '');
   middle = $('#middle').val();
  }
   if($('#lower').val() == '')
  {
   error_lower = 'Lower no is required';
   $('#error_lower').text(error_lower);
   $('#lower').css('border-color', '#cc0000');
   lower = '';
  }
  else
  {
   error_lower = '';
   $('#error_lower').text(error_lower);
   $('#lower').css('border-color', '');
   lower = $('#lower').val();
  } 
  if(error_leaf_no != '' || error_upper != '' || error_upper != ''|| error_lower != '')
  {
   return false;
  }
  else
  {
   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td>'+leaf_no+' <input type="hidden" name="hidden_leaf_no[]" id="leaf_no'+count+'" class="leaf_no" value="'+leaf_no+'" /></td>';
    output += '<td>'+upper+' <input type="hidden" name="hidden_upper[]" id="upper'+count+'" value="'+upper+'" /></td>';
     output += '<td>'+middle+' <input type="hidden" name="hidden_middle[]" id="middle'+count+'" value="'+middle+'" /></td>';
     output += '<td>'+lower+' <input type="hidden" name="hidden_lower[]" id="lower'+count+'" value="'+lower+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output = '<td>'+leaf_no+' <input type="hidden" name="hidden_leaf_no[]" id="leaf_no'+row_id+'" class="leaf_no" value="'+leaf_no+'" /></td>';
    output += '<td>'+upper+' <input type="hidden" name="hidden_upper[]" id="upper'+row_id+'" value="'+upper+'" /></td>';
      output += '<td>'+middle+' <input type="hidden" name="hidden_middle[]" id="middle'+row_id+'" value="'+middle+'" /></td>';
       output += '<td>'+lower+' <input type="hidden" name="hidden_lower[]" id="lower'+row_id+'" value="'+lower+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
  }
 });

 $(document).on('click', '.view_details', function(){
  var row_id = $(this).attr("id");
  var leaf_no = $('#leaf_no'+row_id+'').val();
  var upper = $('#upper'+row_id+'').val();
  var middle = $('#middle'+row_id+'').val();
  var lower = $('#lower'+row_id+'').val();
  $('#leaf_no').val(leaf_no);
  $('#upper').val(upper);
  $('#middle').val(middle);
  $('#lower').val(lower);
  $('#save').text('Edit');
  $('#hidden_row_id').val(row_id);
  $('#user_dialog').dialog('option', 'title', 'Edit Leaf');
  $('#user_dialog').dialog('open');
 });

 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this row data?"))
  {
   $('#row_'+row_id+'').remove();
  }
  else
  {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });

 $('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.leaf_no').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"<?php echo site_url('home/insert_leaf');?>",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#user_data').find("tr:gt(0)").remove();
     $('#action_alert').html('<p>LEAF Inserted Successfully</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Please Add atleast one LEAF</p>');
   $('#action_alert').dialog('open');
  }
 });
 
});  
</script> <!-- 
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </body>

<!-- Mirrored from bhulua.thememinister.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jan 2020 04:41:26 GMT -->
</html>