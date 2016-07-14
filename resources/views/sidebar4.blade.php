
<html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WebSchool</title>
		 <!-- Vendor CSS -->
        <link href="{{URL::to('assets')}}/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">

    <link href="{{URL::to('assets')}}/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">

    <link href="{{URL::to('assets')}}/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="{{URL::to('assets')}}/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="{{URL::to('assets')}}/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">       
            
        <!-- CSS -->
         <link href="{{URL::to('assets')}}/css/app.min.1.css" rel="stylesheet">

    <link href="{{URL::to('assets')}}/css/app.min.2.css" rel="stylesheet">
        

        <link type="text/css" rel="stylesheet" href="{{URL::to('assets')}}/sidebar/materialadmin.css" />
        <link type="text/css" rel="stylesheet" href="{{URL::to('assets')}}/sidebar/font-awesome.min.css" /> 
         <!--Font Awesome Icon Font
       <!-- <link type="text/css" rel="stylesheet" href="{{URL::to('assets')}}/sidebar/theme-default/bootstrap.css" />
       
        <link type="text/css" rel="stylesheet" href="{{URL::to('assets')}}/sidebar/material-design-iconic-font.min.css" /> 
		-->
	<style>
        
        #position
        {
            text-align:center;
            padding: 11px;}
        
        </style>
	</head>

	<body class="menubar-hoverable header-fixed ">
        <!-- BEGIN HEADER-->
		        
         
 <!--Top Header-->
        
                <header id="header" data-current-skin="blue">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                <a data-toggle="menubar" href="javascript:void(0);">    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div> </a>
                </li>

                <li class="logo hidden-xs">
                    <a href="index.html">WebSchool</a>
                </li>

              <li class="pull-right">
                    <ul class="top-menu">
    <!-- Message-->       
                      <li class="dropdown">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-email"></i>
                                <i class="tmn-counts">6</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview">
                                    <div class="lv-header">
                                        Messages
                                    </div>
                                    <div class="lv-body">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </li>
   <!--End Message-->
   <!--Notification-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-notifications"></i>
                                <i class="tmn-counts">9</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview" id="notifications">
                                    <div class="lv-header">
                                        Notification

                                        <ul class="actions">
                                            <li class="dropdown">
                                                <a href="" data-clear="notification">
                                                    <i class="zmdi zmdi-check-all"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lv-body">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a class="lv-footer" href="">View Previous</a>
                                </div>

                            </div>
                        </li>
   <!--End Notification-->
   <!--Task-->
                        <li class="dropdown hidden-xs">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-view-list-alt"></i>
                                <i class="tmn-counts">2</i>
                            </a>
                            <div class="dropdown-menu pull-right dropdown-menu-lg">
                                <div class="listview">
                                    <div class="lv-header">
                                        Tasks
                                    </div>
                                    <div class="lv-body">
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                    <span class="sr-only">95% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Google Chrome Extension</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Social Intranet Projects</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Youtube Client App</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </li>
   <!--End Task-->
                       
                    </ul>
                </li>
            </ul>
        </header>
    <!--End Top Header-->
        <div id="base">
        <section id="main" data-layout="layout-1">
            
   <!-- BEGIN MENUBAR-->
        
        <div id="menubar" class="menubar-inverse ">
           
            <div class="menubar-scroll-panel">
 <div class="c-overflow" style="height:600px;">
                <!-- BEGIN MAIN MENU -->
                <ul id="main-menu" class="gui-controls">

                    <!-- BEGIN DASHBOARD -->
                    <li class="active" id="1">
                        <a href="" >
                            <div class="gui-icon" ><i class="zmdi zmdi-tab zmdi-hc-fw" id="position"></i></div>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <!--end /menu-li -->
                    <!-- END DASHBOARD -->
                   
                    <!-- BEGIN Teachers -->
                    <li id="2">
                        <a href="">
                            <div class="gui-icon" ><i class="zmdi zmdi-tab zmdi-hc-fw" id="position"></i></div>
                            
                            <span class="title">Other</span>
                        </a>
                    </li>
                    <!--end /menu-li -->
                    <!-- END Teachers -->



                 



                   

                    <li id="3">
                        <a href="">
                            <div class="gui-icon"><i class="md md-assignment"></i></div>
                            <span class="title">{{ trans('admin.Pratice Paper') }}</span>
                        </a>
                    </li>

                    <!-- BEGIN Class -->
                    <li id="4">
                        <a href="">
                            <div class="gui-icon"><i class="md md-style"></i></div>
                            <span class="title">{{ trans('dashboard.Class') }}</span>
                        </a>
                    </li>
                    <!--end /menu-li -->
                    <!-- END Class -->
                   
                    <!-- BEGIN Section -->
                    <li>
                        <a href="">
                            <div class="gui-icon"><i class="md md-view-module"></i></div>
                            <span class="title">{{ trans('admin.Sections') }}</span>
                        </a>
                    </li>
                    <!--end /menu-li -->
                    <!-- END section -->
                 


                    <!--end /menu-li -->
                    <!-- END MArks -->

               
                    <!-- BEGIN Board -->
                    <li>
                        <a href="">
                            <div class="gui-icon"><i class="md md-check-box-outline-blank"></i></div>
                            <span class="title">{{ trans('admin.Boards') }}</span>
                        </a>
                    </li>
                    <!--end /menu-li -->
                    <!-- END Board -->
                 

 <!-- BEGIN ContactUs -->
                    <li>
                        <a href="">
                            <div class="gui-icon"><i class="md md-quick-contacts-mail
"></i></div>
                            <span class="title">{{ trans('dashboard.Contact Us') }}</span>
                        </a>
                    </li>
                    <!--end /menu-li -->
                    <!-- END ContactUs -->


                    
                    <li>
                        <a href="">
                            <div class="gui-icon"><i class="md md-settings-backup-restore"></i></div>
                            <span class="title">{{ trans('dashboard.Go to back page') }}</span>
                        </a>
                    </li>
                 

                </ul>
                <!--end .main-menu -->
                <!-- END MAIN MENU -->

                <div class="menubar-foot-panel">
                    hg
                </div>

            </div>
            <!--end .menubar-scroll-panel-->
            </div>
        </div>
        <!--end #menubar-->
        <!-- END MENUBAR -->

<section id="content">
             
                    @yield('content')
              
</section>
        </section>
        <!--end #base-->
		<!-- END BASE -->
</div>
		<!-- BEGIN JAVASCRIPT -->

		<script src="{{URL::to('assets')}}/sidebar/jquery-1.11.2.min.js"></script>
		
		
	
       
		
		<!-- Put App.js last in your javascript imports -->
		

       
        @yield('page_footer')
        <script src="{{URL::to('assets')}}/sidebar/App.min.js"></script>
         <!-- Javascript Libraries -->
       
        <script src="{{URL::to('assets')}}/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="{{URL::to('assets')}}/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="{{URL::to('assets')}}/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="{{URL::to('assets')}}/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="{{URL::to('assets')}}/vendors/sparklines/jquery.sparkline.min.js"></script>
        <script src="{{URL::to('assets')}}/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        
        <script src="{{URL::to('assets')}}/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="{{URL::to('assets')}}/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
        <script src="{{URL::to('assets')}}/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
        <script src="{{URL::to('assets')}}/vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="{{URL::to('assets')}}/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="{{URL::to('assets')}}/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
        <script src="{{URL::to('assets')}}/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="{{URL::to('assets')}}/js/flot-charts/curved-line-chart.js"></script>
        <script src="{{URL::to('assets')}}/js/flot-charts/line-chart.js"></script>
        <script src="{{URL::to('assets')}}/js/charts.js"></script>
        
        <script src="{{URL::to('assets')}}/js/charts.js"></script>
        <script src="{{URL::to('assets')}}/js/functions.js"></script>
        <script src="{{URL::to('assets')}}/js/demo.js"></script>
        <script>
            $('#main-menu').on('click', 'li', function(){
                $('#main-menu > li').removeClass('active');
                $(this).addClass('active');
            });
        </script>

        
	</body>
</html>
