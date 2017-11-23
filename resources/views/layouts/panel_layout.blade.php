<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>tas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href="/css/style.css" rel='stylesheet' type='text/css'/>
    <link href="/css/font-awesome.css" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>
    <!-- Mainly scripts -->
    <script src="/js/jquery.metisMenu.js"></script>
    <script src="/js/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <link href="/css/custom.css" rel="stylesheet">
    <script src="/js/custom.js"></script>
    <script src="/js/screenfull.js"></script>
    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }


            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });


        });
    </script>

    <!----->

    <!--pie-chart--->
    <script src="/js/pie-chart.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
    <!--skycons-icons-->
    <script src="/js/skycons.js"></script>
    <!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

    <!----->
    <nav class="navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html">TAS</a></h1>
        </div>
        <div class=" border-bottom">
            <div class="full-left">
                <section class="full-top">
                    <button id="toggle"><i class="fa fa-arrows-alt"></i></button>
                </section>
                <form class=" navbar-left-right">
                    <input type="text" value="Search..." onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Search...';}">
                    <input type="submit" value="" class="fa fa-search">
                </form>
                <div class="clearfix"></div>
            </div>


            <!-- Brand and toggle get grouped for better mobile display -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="drop-men">
                <ul class=" nav_1">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span
                                    class=" name-caret">Kenedy<i class="caret"></i></span><img src="images/arabic_resized.jpg" width="60" height="60"></a>
                        <ul class="dropdown-menu " role="menu">
                            <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                            <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                            <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
                            <li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="clearfix">

            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="index.html" class=" hvr-bounce-to-right"><i
                                        class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('capture.preview')}}" class=" hvr-bounce-to-right"><i
                                        class="fa fa-dashboard nav_icon "></i><span class="nav-label">Captures</span>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="content-main">

            @yield('content')

        </div>
    </div>
</div>
<!---->
<!--scrolling js-->
<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/scripts.js"></script>
<!--//scrolling js-->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>