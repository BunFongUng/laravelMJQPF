<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karmanta - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Karmanta, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>MJQPF</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('public/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('public/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('public/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('public/css/owl.carousel.css')}}" type="text/css">

    <!-- Custom styles -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{asset('public/js/html5shiv.js')}}"></script>
    <script src="{{asset('public/js/respond.min.js')}}"></script>
    <script src="{{asset('public/js/lte-ie7.js')}}"></script>
    <![endif]-->
</head>

<body>
<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo">MJQ<span>PF</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>
        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{asset('public/images/avatar1_small.jpg')}}">
                            </span>
                        <span class="username">Jhon Doe</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li>
                            <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="#">
                        <i class="icon_house_alt"></i>
                        <span>Menus</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_desktop"></i>
                        <span>Events & News</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_table"></i>
                        <span>Tables</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="basic_table.html">Basic Table</a></li>
                        <li><a class="" href="dynamic_table.html">Dynamic Table</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    @yield('content')
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="{{asset('public/js/jquery.js')}}"></script>
<script src="{{asset('public/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<!-- nice scroll -->
<script src="{{asset('public/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('public/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{asset('public/js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/owl.carousel.js')}}" ></script>
<!-- jQuery full calendar -->
<!--script for this page only-->
<script src="{{asset('public/js/calendar-custom.js')}}"></script>
<!-- custom select -->
<script src="{{asset('public/js/jquery.customSelect.min.js')}}" ></script>
<!--custome script for all page-->
<script src="{{asset('public/js/scripts.js')}}"></script>
<!-- custom script for this page-->
<script src="{{asset('public/js/sparkline-chart.js')}}"></script>
<script src="{{asset('public/js/easy-pie-chart.js')}}"></script>

<script>

    //knob
    $(function() {
        $(".knob").knob({
            'draw' : function () {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
