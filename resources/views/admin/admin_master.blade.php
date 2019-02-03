<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>@yield('titel_ber')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="Mosaddek" name="author" />
        <link href="{{URL::to('public/back_end/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/assets/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/assets/bootstrap/css/bootstrap-fileupload.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/css/style.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/css/style-responsive.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/css/style-default.css')}}" rel="stylesheet" id="style_color" />
        <link href="{{URL::to('public/back_end/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link rel="stylesheet" href="{{URL::to('public/back_end/assets/data-tables/DT_bootstrap.css')}}" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/back_end/assets/bootstrap-daterangepicker/daterangepicker.css')}}" />
        <link rel="stylesheet" href="{{URL::to('public/back_end/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/back_end/assets/bootstrap-timepicker/compiled/timepicker.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/back_end/assets/bootstrap-datepicker/css/datepicker.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/back_end/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/back_end/assets/chosen-bootstrap/chosen/chosen.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/back_end/assets/jquery-tags-input/jquery.tagsinput.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/back_end/assets/clockface/css/clockface.css')}}" />
        <link href="{{URL::to('public/back_end/assets/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/back_end/assets/uniform/css/uniform.default.css')}}" />

        <!--        check delete confarnation-->
        <script type="text/javascript">
            function checkDelete()
            {
            chk = confirm('Are Your Sure to Delete This ?');
            if (chk)
            {
            return true;
            }
            else{
            return false;
            }

            }
        </script>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="fixed-top">
        <!-- BEGIN HEADER -->
        <div id="header" class="navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!--BEGIN SIDEBAR TOGGLE-->
                    <div class="sidebar-toggle-box hidden-phone">
                        <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                    </div>
                    <!--END SIDEBAR TOGGLE-->
                    <!-- BEGIN LOGO -->
                    <a class="brand" href="{{URL::to('/dashboard')}}">

                        <!-- <img src="{{URL::to('public/back_end/img/logo.png')}}" alt="Metro Lab" /> -->
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="arrow"></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <div id="top_menu" class="nav notify-row">
                        <!-- BEGIN NOTIFICATION -->
                        <ul class="nav top-menu">
                            <!-- BEGIN SETTINGS -->
                            <!--  <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                     <i class="icon-tasks"></i>
                                     <span class="badge badge-important">6</span>
                                 </a>
                                 <ul class="dropdown-menu extended tasks-bar">
                                     <li>
                                         <p>You have 6 pending tasks</p>
                                     </li>
                                     <li>
                                         <a href="#">
                                             <div class="task-info">
                                                 <div class="desc">Dashboard v1.3</div>
                                                 <div class="percent">44%</div>
                                             </div>
                                             <div class="progress progress-striped active no-margin-bot">
                                                 <div class="bar" style="width: 44%;"></div>
                                             </div>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             <div class="task-info">
                                                 <div class="desc">Database Update</div>
                                                 <div class="percent">65%</div>
                                             </div>
                                             <div class="progress progress-striped progress-success active no-margin-bot">
                                                 <div class="bar" style="width: 65%;"></div>
                                             </div>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             <div class="task-info">
                                                 <div class="desc">Iphone Development</div>
                                                 <div class="percent">87%</div>
                                             </div>
                                             <div class="progress progress-striped progress-info active no-margin-bot">
                                                 <div class="bar" style="width: 87%;"></div>
                                             </div>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             <div class="task-info">
                                                 <div class="desc">Mobile App</div>
                                                 <div class="percent">33%</div>
                                             </div>
                                             <div class="progress progress-striped progress-warning active no-margin-bot">
                                                 <div class="bar" style="width: 33%;"></div>
                                             </div>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             <div class="task-info">
                                                 <div class="desc">Dashboard v1.3</div>
                                                 <div class="percent">90%</div>
                                             </div>
                                             <div class="progress progress-striped progress-danger active no-margin-bot">
                                                 <div class="bar" style="width: 90%;"></div>
                                             </div>
                                         </a>
                                     </li>
                                     <li class="external">
                                         <a href="#">See All Tasks</a>
                                     </li>
                                 </ul>
                             </li> -->
                            <!-- END SETTINGS -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!--  <li class="dropdown" id="header_inbox_bar">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                     <i class="icon-envelope-alt"></i>
                                     <span class="badge badge-important">5</span>
                                 </a>
                                 <ul class="dropdown-menu extended inbox">
                                     <li>
                                         <p>You have 5 new messages</p>
                                     </li>
                                     <li>
                                         <a href="#">
                                             <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
                                             <span class="subject">
                                                 <span class="from">Jonathan Smith</span>
                                                 <span class="time">Just now</span>
                                             </span>
                                             <span class="message">
                                                 Hello, this is an example msg.
                                             </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
                                             <span class="subject">
                                                 <span class="from">{{Session::get('admin_name')}}</span>
                                                 <span class="time">10 mins</span>
                                             </span>
                                             <span class="message">
                                                 Hi, Jhon Doe Bhai how are you ?
                                             </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
                                             <span class="subject">
                                                 <span class="from">Jason Stathum</span>
                                                 <span class="time">3 hrs</span>
                                             </span>
                                             <span class="message">
                                                 This is awesome dashboard.
                                             </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
                                             <span class="subject">
                                                 <span class="from">Jondi Rose</span>
                                                 <span class="time">Just now</span>
                                             </span>
                                             <span class="message">
                                                 Hello, this is metrolab
                                             </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">See all messages</a>
                                     </li>
                                 </ul>
                             </li> -->
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- <li class="dropdown" id="header_notification_bar">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <i class="icon-bell-alt"></i>
                                    <span class="badge badge-warning">7</span>
                                </a>
                                <ul class="dropdown-menu extended notification">
                                    <li>
                                        <p>You have 7 new notifications</p>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            Server #3 overloaded.
                                            <span class="small italic">34 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-warning"><i class="icon-bell"></i></span>
                                            Server #10 not respoding.
                                            <span class="small italic">1 Hours</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            Database overloaded 24%.
                                            <span class="small italic">4 hrs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success"><i class="icon-plus"></i></span>
                                            New user registered.
                                            <span class="small italic">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                            Application error.
                                            <span class="small italic">10 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">See all notifications</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- END NOTIFICATION DROPDOWN -->

                        </ul>
                    </div>
                    <!-- END  NOTIFICATION -->
                    <div class="top-nav ">
                        <ul class="nav pull-right top-menu" >
                            <!-- BEGIN SUPPORT -->
                            <li class="dropdown mtop5">

                                <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                                    <i class="icon-comments-alt"></i>
                                </a>
                            </li>
                            <li class="dropdown mtop5">
                                <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                                    <i class="icon-headphones"></i>
                                </a>
                            </li>
                            <!-- END SUPPORT -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{URL::to('public/back_end/img/avatar1_small.jpg')}}" alt="">
                                    <span class="username">{{Session::get('admin_name')}}</span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout">
                                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                                    <li><a href="{{URL::to('/logout')}}"><i class="icon-key"></i> Log Out</a></li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                </div>
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div id="container" class="row-fluid">
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar-scroll">
                <div id="sidebar" class="nav-collapse collapse">

                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <div class="navbar-inverse">
                        <form class="navbar-search visible-phone">
                            <input type="text" class="search-query" placeholder="Search" />
                        </form>
                    </div>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="sidebar-menu">
                        <li class="sub-menu active">
                            <a class="" href="{{URL::to('/dashboard')}}">
                                <i class="icon-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <!-- <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-book"></i>

                                <span>Category</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{URL::to('/add-category')}}">
                                        Add Category
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{URL::to('/manage-category')}}">
                                        
                                        Manage Category
                                    </a>
                                </li>
                                
                            </ul>
                        </li> -->

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-book"></i>

                                <span>Category</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="{{URL::to('/add-category')}}">
                                        Add Category
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="{{URL::to('/manage-category')}}">

                                        Manage Category
                                    </a>
                                </li>

                            </ul>
                        </li>



                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-cogs"></i>
                                <span>Product</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li>
                                    <a class="" href="{{URL::to('/add-product')}}">
                                        Add Product
                                    </a>

                                </li>
                                <li>
                                    <a class="" href="{{URL::to('/manage-product')}}">
                                        Manage Product
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-dashboard"></i>
                                <span>Manufacture</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li>
                                    <a class="" href="{{URL::to('/add-manufacture')}}">
                                        Add Manufacture
                                    </a>

                                </li>
                                <li>
                                    <a class="" href="{{URL::to('/manage-manufacture')}}">
                                        Manage Manufacture
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="{{url('/manage-order')}}" class="">
                                <i class="icon-th"></i>
                                <span>Order</span>

                            </a>
                        </li>

                        <!-- <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-fire"></i>
                                <span>Icons</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="font_awesome.html">Font Awesome</a></li>
                                <li><a class="" href="glyphicons.html">Glyphicons</a></li>
                            </ul>
                        </li> -->

                        <!-- <li class="sub-menu">
                            <a class="" href="javascript:;">
                                <i class="icon-trophy"></i>
                                <span>Portlets</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a href="general_portlet.html" class=""> General Portlet</a></li>
                                <li><a href="draggable_portlet.html" class="">Draggable Portlet</a></li>
                            </ul>
                        </li> -->

                        <!--  <li class="sub-menu">
                             <a class="" href="javascript:;">
                                 <i class="icon-map-marker"></i>
                                 <span>Maps</span>
                                 <span class="arrow"></span>
                             </a>
                             <ul class="sub">
                                 <li><a href="vector_map.html" class="">Vector Maps</a></li>
                                 <li><a href="google_map.html" class="">Google Map</a></li>
                             </ul>
                         </li> -->


                        <!-- <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-file-alt"></i>
                                <span>Sample Pages</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="blank.html">Blank Page</a></li>
                                <li><a class="" href="blog.html">Blog</a></li>
                                <li><a class="" href="timeline.html">Timeline</a></li>
                                <li><a class="" href="profile.html">Profile</a></li>
                                <li><a class="" href="about_us.html">About Us</a></li>
                                <li><a class="" href="contact_us.html">Contact Us</a></li>
                            </ul>
                        </li> -->

                        <!-- <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-glass"></i>
                                <span>Extra</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="lock.html">Lock Screen</a></li>
                                <li><a class="" href="invoice.html">Invoice</a></li>
                                <li><a class="" href="pricing_tables.html">Pricing Tables</a></li>
                                <li><a class="" href="search_result.html">Search Result</a></li>
                                <li><a class="" href="faq.html">FAQ</a></li>
                                <li><a class="" href="404.html">404 Error</a></li>
                                <li><a class="" href="500.html">500 Error</a></li>
                            </ul>
                        </li> -->


                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->  
            <div id="main-content">
                <!-- BEGIN PAGE CONTAINER-->
                <div class="container-fluid">


                    @yield('content')


                </div>

                <!-- END PAGE CONTAINER-->
            </div>
            <!-- END PAGE -->  
        </div>
        <!-- END CONTAINER -->

        <!-- BEGIN FOOTER -->
        <div id="footer">
            2017 &copy; E-commerce.
        </div>
        <!-- END FOOTER -->

        <!-- BEGIN JAVASCRIPTS -->
        <!-- Load javascripts at bottom, this will reduce page load time -->
        <script  src="{{URL::to('public/back_end/js/jquery-1.8.3.min.js')}}"></script>
        <script  src="{{URL::to('public/back_end/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script type="text/javascript"  src="{{URL::to('public/back_end/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js')}}"></script>
        <script type="text/javascript"  src="{{URL::to('public/back_end/assets/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script  src="{{URL::to('public/back_end/assets/fullcalendar/fullcalendar/fullcalendar.min.js')}}"></script>
        <script  src="{{URL::to('public/back_end/assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="js/jquery.blockui.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/uniform/jquery.uniform.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/data-tables/jquery.dataTables.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/data-tables/DT_bootstrap.js')}}"></script>
        <!-- ie8 fixes -->
        <!--[if lt IE 9]>
        <script  src="{{URL::to('public/back_end/js/excanvas.js')}}"></script>
        <script  src="{{URL::to('public/back_end/js/respond.js')}}"></script>
        <![endif]-->

        <script  src="{{URL::to('public/back_end/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}" type="text/javascript"></script>
        <script  src="{{URL::to('public/back_end/js/jquery.sparkline.js')}}" type="text/javascript"></script>
        <script  src="{{URL::to('public/back_end/assets/chart-master/Chart.js')}}"></script>
        <script  src="{{URL::to('public/back_end/js/jquery.scrollTo.min.js')}}"></script>


        <!--common script for all pages-->
        <script  src="{{URL::to('public/back_end/js/common-scripts.js')}}"></script>
        <script src="{{URL::to('public/back_end/js/dynamic-table.js')}}"></script>

        <!--script for this page only-->

        <script  src="{{URL::to('public/back_end/js/easy-pie-chart.js')}}"></script>
        <script  src="{{URL::to('public/back_end/js/sparkline-chart.js')}}"></script>
        <script  src="{{URL::to('public/back_end/js/home-page-calender.js')}}"></script>
        <script  src="{{URL::to('public/back_end/js/home-chartjs.js')}}"></script>

        <script type="text/javascript" src="{{URL::to('public/back_end/assets/bootstrap-daterangepicker/date.js')}}"></script> 
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
        <script src="{{URL::to('public/back_end/assets/fancybox/source/jquery.fancybox.pack.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/clockface/js/clockface.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/chosen-bootstrap/chosen/chosen.jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')}}"></script>
        <script src="{{URL::to('public/back_end/js/jQuery.dualListBox-1.3.js')}}" language="javascript" type="text/javascript"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/bootstrap/js/bootstrap-fileupload.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/back_end/assets/ckeditor/ckeditor.js')}}"></script>

        <!-- END JAVASCRIPTS -->   
        <script src="{{URL::to('public/back_end/js/editable-table.js')}}"></script>

        <script src="{{URL::to('public/back_end/js/form-component.js')}}"></script>
        <script>
            jQuery(document).ready(function () {
            EditableTable.init();
            });
        </script>
        <script language="javascript" type="text/javascript">

            $(function () {

            $.configureBoxes();
            });

        </script>
    </body>
    <!-- END BODY -->
</html>