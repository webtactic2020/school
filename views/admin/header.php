<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>School | Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/admin/img/favicon.ico');?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/bootstrap.min.css');?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/font-awesome.min.css');?>">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/adminpro-custon-icon.css');?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/meanmenu.min.css');?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/jquery.mCustomScrollbar.min.css');?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/animate.css');?>">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/data-table/bootstrap-table.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/data-table/bootstrap-editable.css');?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/normalize.css');?>">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/c3.min.css');?>">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/form/all-type-forms.css');?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/style.css');?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/responsive.css');?>">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url('assets/admin/js/vendor/modernizr-2.8.3.min.js');?>"></script>
    <style type="text/css">
        .sidebar-header img {
     border-radius: 1%; 
    width: 21%;
}

.materialdesign .left-custom-menu-adp-wrap ul.left-sidebar-menu-pro li a:visited {
    background: linear-gradient(to bottom, #9f5bdc 0%, #fe66cc 100%);
}
.materialdesign .left-custom-menu-adp-wrap ul.left-sidebar-menu-pro li a:visited {
    background: linear-gradient(to bottom, #9f5bdc 0%, #fe66cc 100%);
}



@media only screen and (max-width: 700px) {
  .mean-container .mean-bar {
    z-index: 998!important;
}

}
    </style>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="<?= base_url('Main_c/index')?>"><img src="<?= base_url('assets/images/logo.png');?>" alt="" />
                    </a>
                    <?php if ($this->session->userdata('fname')!=''){?><h3> <?php echo $this->session->userdata('fname') ?> <?php echo $this->session->userdata('pname') ?> <?php echo $this->session->userdata('lname') ?></h3> <?php } ?>
                    <?php if ($this->session->userdata('utype')=='t'){ ?> <p>Teacher</p> <?php }else{ ?> <p>Admin</p> <?php } ?>
                    <strong><?php echo $this->session->userdata('utype') ?></strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
         
             <!--                  <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Register User</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="basic-form-element.html" class="dropdown-item">Basic Elements</a>
                                <a href="advance-form-element.html" class="dropdown-item">Advance Elements</a>
                                <a href="password-meter.html" class="dropdown-item">Password Meter</a>
                                <a href="multi-upload.html" class="dropdown-item">Multi Upload</a>
                                <a href="tinymc.html" class="dropdown-item">Text Editor</a>
                                <a href="dual-list-box.html" class="dropdown-item">Dual List Box</a>
                            </div>
                        </li> -->
                                  <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?= base_url('Main_c/index')?>" class="dropdown-item">Home</a>
                               <!--  <a href="dashboard-2.html" class="dropdown-item">Dashboard v.2</a>
                                <a href="analytics.html" class="dropdown-item">Analytics</a>
                                <a href="widgets.html" class="dropdown-item">Widgets</a> -->
                            </div>
                         </li>
                          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Class / Section</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?= base_url('Main_c/add_class')?>" class="dropdown-item">Add/View Class</a>
                                 <a href="<?= base_url('Main_c/add_section')?>" class="dropdown-item">Add/View Section</a>
                                 <!-- <a href="<?= base_url('Main_c/view_section')?>" class="dropdown-item">View Section</a> -->
                               
                            </div>
                        </li>
                           <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i></i> <span class="mini-dn">curriculum</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?= base_url('Main_c/view_curriculum')?>" class="dropdown-item">View curriculum</a>
                                 <a href="<?= base_url('Main_c/add_Subjects')?>" class="dropdown-item">Add/View Subjects</a>
                                <!--  <a href="<?= base_url('Main_c/view_Subjects')?>" class="dropdown-item">View Subjects</a> -->
                                 <a href="<?= base_url('Main_c/add_Subjectsunits')?>" class="dropdown-item">Add Units</a>
                                 <a href="<?= base_url('Main_c/view_Subjectsunits')?>" class="dropdown-item">View Units</a>
                                 <a href="<?= base_url('Main_c/add_Topics')?>" class="dropdown-item">Add Topics</a>
                                 <!-- <a href="<?= base_url('Main_c/view_Topics')?>" class="dropdown-item">View Topics</a> -->
                               
                               <!--  <a href="dashboard-2.html" class="dropdown-item">Dashboard v.2</a>
                                <a href="analytics.html" class="dropdown-item">Analytics</a>
                                <a href="widgets.html" class="dropdown-item">Widgets</a> -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Manage User</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?= base_url('Main_c/register')?>" class="dropdown-item">Add User</a>
                                 <a href="<?= base_url('Main_c/view_register')?>" class="dropdown-item">View Students</a>
                                 <a href="<?= base_url('Main_c/view_register_teacher')?>" class="dropdown-item">View Teacher</a>
                               <!--  <a href="dashboard-2.html" class="dropdown-item">Dashboard v.2</a>
                                <a href="analytics.html" class="dropdown-item">Analytics</a>
                                <a href="widgets.html" class="dropdown-item">Widgets</a> -->
                            </div>
                        </li>
                           <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">Projects</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                 <a href="<?= base_url('Main_c/addpro')?>" class="dropdown-item">Add</a>
                                 <a href="<?= base_url('Main_c/view_project')?>" class="dropdown-item">View/assign</a>
                                 <!-- <a href="<?= base_url('Main_c/view_pending')?>" class="dropdown-item">Assigned</a> -->
                                 <a href="<?= base_url('Main_c/view_feedback')?>" class="dropdown-item">Evaluation</a>
                               <!--  <a href="dashboard-2.html" class="dropdown-item">Dashboard v.2</a>
                                <a href="analytics.html" class="dropdown-item">Analytics</a>
                                <a href="widgets.html" class="dropdown-item">Widgets</a> -->
                            </div>
                        </li>
                         <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Notice</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                 <a href="<?= base_url('Main_c/add_notice')?>" class="dropdown-item">Add</a>
                                 <a href="<?= base_url('Main_c/view_notice')?>" class="dropdown-item">View</a>
                               
                               <!--  <a href="dashboard-2.html" class="dropdown-item">Dashboard v.2</a>
                                <a href="analytics.html" class="dropdown-item">Analytics</a>
                                <a href="widgets.html" class="dropdown-item">Widgets</a> -->
                            </div>
                        </li>
        <!--             <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">Assign Project</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                 <a href="<?= base_url('Main_c/view_project')?>" class="dropdown-item">Project List</a>
                                 <a href="<?= base_url('Main_c/view_project')?>" class="dropdown-item">View</a>
                               <!--  <a href="dashboard-2.html" class="dropdown-item">Dashboard v.2</a>
                                <a href="analytics.html" class="dropdown-item">Analytics</a>
                                <a href="widgets.html" class="dropdown-item">Widgets</a> -->
                            </div>
                        </li> -->
                 
          
                      <!--   
                       <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="dashboard.html" class="dropdown-item">Dashboard v.1</a>
                                <a href="dashboard-2.html" class="dropdown-item">Dashboard v.2</a>
                                <a href="analytics.html" class="dropdown-item">Analytics</a>
                                <a href="widgets.html" class="dropdown-item">Widgets</a>
                            </div>
                        </li>
                      <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Mailbox</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="inbox.html" class="dropdown-item">Inbox</a>
                                <a href="view-mail.html" class="dropdown-item">View Mail</a>
                                <a href="compose-mail.html" class="dropdown-item">Compose Mail</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Interface</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="google-map.html" class="dropdown-item">Google Map</a>
                                <a href="data-maps.html" class="dropdown-item">Data Maps</a>
                                <a href="pdf-viewer.html" class="dropdown-item">Pdf Viewer</a>
                                <a href="x-editable.html" class="dropdown-item">X-Editable</a>
                                <a href="code-editor.html" class="dropdown-item">Code Editor</a>
                                <a href="tree-view.html" class="dropdown-item">Tree View</a>
                                <a href="preloader.html" class="dropdown-item">Preloader</a>
                                <a href="images-cropper.html" class="dropdown-item">Images Cropper</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Miscellaneous</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="profile.html" class="dropdown-item">Profile</a>
                                <a href="contact-client.html" class="dropdown-item">Contact Client</a>
                                <a href="contact-client-v.1.html" class="dropdown-item">Contact Client v.1</a>
                                <a href="project-list.html" class="dropdown-item">Project List</a>
                                <a href="project-details.html" class="dropdown-item">Project Details</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Charts</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                                <a href="bar-charts.html" class="dropdown-item">Bar Charts</a>
                                <a href="line-charts.html" class="dropdown-item">Line Charts</a>
                                <a href="area-charts.html" class="dropdown-item">Area Charts</a>
                                <a href="rounded-chart.html" class="dropdown-item">Rounded Charts</a>
                                <a href="c3.html" class="dropdown-item">C3 Charts</a>
                                <a href="sparkline.html" class="dropdown-item">Sparkline Charts</a>
                                <a href="peity.html" class="dropdown-item">Peity Charts</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Data Tables</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="static-table.html" class="dropdown-item">Static Table</a>
                                <a href="data-table.html" class="dropdown-item">Data Table</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Forms Elements</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="basic-form-element.html" class="dropdown-item">Basic Elements</a>
                                <a href="advance-form-element.html" class="dropdown-item">Advance Elements</a>
                                <a href="password-meter.html" class="dropdown-item">Password Meter</a>
                                <a href="multi-upload.html" class="dropdown-item">Multi Upload</a>
                                <a href="tinymc.html" class="dropdown-item">Text Editor</a>
                                <a href="dual-list-box.html" class="dropdown-item">Dual List Box</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">App views</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                                <a href="notifications.html" class="dropdown-item">Notifications</a>
                                <a href="alerts.html" class="dropdown-item">Alerts</a>
                                <a href="modals.html" class="dropdown-item">Modals</a>
                                <a href="buttons.html" class="dropdown-item">Buttons</a>
                                <a href="tabs.html" class="dropdown-item">Tabs</a>
                                <a href="accordion.html" class="dropdown-item">Accordion</a>
                                <a href="tab-menus.html" class="dropdown-item">Tab Menus</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Pages</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="login.html" class="dropdown-item">Login</a>
                                <a href="register.html" class="dropdown-item">Register</a>
                                <a href="captcha.html" class="dropdown-item">Captcha</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                                <a href="contact.html" class="dropdown-item">Contacts</a>
                                <a href="review.html" class="dropdown-item">Review</a>
                                <a href="order.html" class="dropdown-item">Order</a>
                                <a href="comment.html" class="dropdown-item">Comment</a>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="<?= base_url('assets/admin/img/logo/log.png')?>" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="<?= base_url('Main_c/index')?>" class="nav-link">Home</a>
                                        </li>
                                     <!--    <li class="nav-item"><a href="#" class="nav-link">About</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                            <div role="menu" class="dropdown-menu animated flipInX">
                                                <a href="#" class="dropdown-item">Company Info</a>
                                                <a href="#" class="dropdown-item">Documentation</a>
                                                <a href="#" class="dropdown-item">Expert Backend</a>
                                                <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                <a href="#" class="dropdown-item">Contact Support</a>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item dropdown">
                                           
                                          <!--   <div role="menu" class="author-message-top dropdown-menu animated flipInX">
                                                <div class="message-single-top">
                                                    <h1>Message</h1>
                                                </div>
                                                <ul class="message-menu">
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/message/1.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/message/4.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/message/3.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/message/2.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="message-view">
                                                    <a href="#">View All Messages</a>
                                                </div>
                                            </div> -->
                                        </li>
                                        <li class="nav-item"><!-- <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a> -->
                                           <!--  <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                                <div class="notification-single-top">
                                                    <h1>Notifications</h1>
                                                </div>
                                                <ul class="notification-menu">
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-checked-pro"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-cloud-computing-down"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-shield"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-analytics-arrow"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notification-view">
                                                    <a href="#">View All Notification</a>
                                                </div>
                                            </div> -->
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <?php if ($this->session->userdata('fname')!=''){?><span class="admin-name"></span> <?php echo $this->session->userdata('fname') ?> <?php echo $this->session->userdata('pname') ?> <?php echo $this->session->userdata('lname') ?><?php } ?>
                                                
                                                <i class="fa fa-bell-o" aria-hidden="true"></i>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                           <!--      <li><a href="#">My Account</a>
                                                </li>
                                                <li><a href="#">My Profile</a>
                                                </li>
                                                <li><a href="#">User Billing</a>
                                                </li>
                                                <li><a href="#">Settings</a>
                                                </li> -->
                                                <li><a href="<?= base_url('Usersignin_c/logout')?>">Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-setting-open"> <!--<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>

                                             <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
                                                <ul class="nav nav-tabs custon-set-tab">
                                                    <li class="active"><a data-toggle="tab" href="#Notes">Notes</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="Notes" class="tab-pane fade in active">
                                                        <div class="notes-area-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                                                <p>You have 10 new message.</p>
                                                            </div>
                                                            <div class="notes-list-area notes-menu-scrollbar">
                                                                <ul class="notes-menu-list">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/5.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/1.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/2.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/3.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/4.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/5.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/6.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/1.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/2.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/notification/3.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Projects" class="tab-pane fade">
                                                        <div class="projects-settings-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                                                <p> You have 20 projects. 5 not completed.</p>
                                                            </div>
                                                            <div class="project-st-list-area project-st-menu-scrollbar">
                                                                <ul class="projects-st-menu-list">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Web Development</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">1 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 28%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Software Development</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">2 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl">
                                                                                    <p>Completion with: 68%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 68%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Graphic Design</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">3 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 78%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 78%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Web Design</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">4 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl2">
                                                                                    <p>Completion with: 38%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Business Card</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">5 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 28%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Ecommerce Business</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">6 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl">
                                                                                    <p>Completion with: 68%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 68%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Woocommerce Plugin</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">7 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 78%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 78%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Wordpress Theme</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">9 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl2">
                                                                                    <p>Completion with: 38%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Settings" class="tab-pane fade">
                                                        <div class="setting-panel-area">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                <p> You have 20 Settings. 5 not completed.</p>
                                                            </div>
                                                            <ul class="setting-panel-list">
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Show notifications</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                    <label class="onoffswitch-label" for="example">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Disable Chat</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                    <label class="onoffswitch-label" for="example3">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Enable history</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                    <label class="onoffswitch-label" for="example4">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Show charts</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                    <label class="onoffswitch-label" for="example7">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Update everyday</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                    <label class="onoffswitch-label" for="example2">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Global search</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                    <label class="onoffswitch-label" for="example6">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Offline users</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                    <label class="onoffswitch-label" for="example5">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
                 <!-- Breadcome start-->
     
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area" style="margin-top: 81px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li> <a href="<?= base_url('Main_c/index')?>" class="dropdown-item">Home</a>
                                                </li>
                                           
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Class / Section <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li> <a href="<?= base_url('Main_c/add_class')?>" class="dropdown-item">Add/View Class</a>
                                                </li>
                                                <li><a href="<?= base_url('Main_c/add_section')?>" class="dropdown-item">Add/View Section</a>
                                                </li>
                                            <!--     <li><a href="compose-mail.html">Compose Mail</a>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Curriculum <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="<?= base_url('Main_c/view_curriculum')?>" class="dropdown-item">View curriculum</a>
                                                </li>
                                                <li> <a href="<?= base_url('Main_c/add_Subjects')?>" class="dropdown-item">Add/View Subjects</a>
                                                </li>
                                                <li><a href="<?= base_url('Main_c/add_Subjectsunits')?>" class="dropdown-item">Add Units</a>
                                                </li>
                                                <li><a href="<?= base_url('Main_c/view_Subjectsunits')?>" class="dropdown-item">View Units</a>
                                                </li>
                                                <li><a href="<?= base_url('Main_c/add_Topics')?>" class="dropdown-item">Add Topics</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Manage User <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li>  <a href="<?= base_url('Main_c/register')?>" class="dropdown-item">Add User</a>
                                                </li>
                                                <li><a href="<?= base_url('Main_c/view_register')?>" class="dropdown-item">View Students</a>
                                                </li>
                                                <li> <a href="<?= base_url('Main_c/view_register_teacher')?>" class="dropdown-item">View Teacher</a>
                                                </li>
                                         
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Projects <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li>  <a href="<?= base_url('Main_c/addpro')?>" class="dropdown-item">Add</a>
                                                </li>
                                                <li><a href="<?= base_url('Main_c/view_project')?>" class="dropdown-item">View/assign</a>
                                                </li>
                                                <li><a href="<?= base_url('Main_c/view_feedback')?>" class="dropdown-item">Evaluation</a>
                                                </li>
                                          
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Notice <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="<?= base_url('Main_c/add_notice')?>" class="dropdown-item">Add</a>
                                 
                                                </li>
                                                <li><a href="<?= base_url('Main_c/view_notice')?>" class="dropdown-item">View</a>
                                                </li>
                                            </ul>
                                        </li>
                               
                                   <!--      <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="captcha.html">Captcha</a>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a>
                                                </li>
                                                <li><a href="contact.html">Contacts</a>
                                                </li>
                                                <li><a href="review.html">Review</a>
                                                </li>
                                                <li><a href="order.html">Order</a>
                                                </li>
                                                <li><a href="comment.html">Comment</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
              
            