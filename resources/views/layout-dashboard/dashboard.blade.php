<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard PRO by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="/../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!-- Krajee Bootstrap File Input -->
    <link rel="stylesheet" type="text/css" href="/../assets/css/fileinput.min.css">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="../assets/css/demo.css" rel="stylesheet" /> -->


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="../assets/img/full-screen-image-3.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="{{route('dashboard')}}" class="logo-text">
                Skinny Dope
            </a>
        </div>
		<div class="logo logo-mini">
			<a href="{{route('dashboard')}}" class="logo-text">
				SD
			</a>
		</div>

    	<div class="sidebar-wrapper">

            <div class="user">
                <!-- <div class="photo">
                    <img src="/../assets/img/default-avatar.png" />
                </div> -->
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        {{auth()->user()->full_name}}
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="{{ route('profile') }}">My Profile</a></li>
                            <li><a href="{{ route('profile.logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('layout-dashboard.partials.navigation')
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
				<div class="navbar-minimize">
					<button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
						<i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
						<i class="fa fa-navicon visible-on-sidebar-mini"></i>
					</button>
				</div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Admin</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Add additional links -->
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">


                    <!--      here you can write your content for the main area                     -->
                    @yield('content')



            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <!-- <a href="#">
                                Home
                            </a> -->
                        </li>

                        <!--        here you can add more links for the footer                       -->
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; {{ \Carbon\Carbon::now()->year}} <a href="{{ route('dashboard')}}">Skinny Dope</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
    <!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script src="/../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="/../assets/js/jquery-ui.min.js" type="text/javascript"></script>

    <!-- Krajee Bootstrap File Input -->
    <script src="/../assets/js/fileinput.min.js"></script>
    
	<script src="/../assets/js/bootstrap.min.js" type="text/javascript"></script>


	<!--  Forms Validations Plugin -->
	<script src="/../assets/js/jquery.validate.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="/../assets/js/moment.min.js"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="/../assets/js/bootstrap-datetimepicker.js"></script>

    <!--  Select Picker Plugin -->
    <script src="/../assets/js/bootstrap-selectpicker.js"></script>

	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
	<script src="/../assets/js/bootstrap-checkbox-radio-switch-tags.js"></script>

	<!--  Charts Plugin -->
	<script src="/../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/../assets/js/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
	<script src="/../assets/js/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
	<script src="/../assets/js/jquery-jvectormap.js"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Wizard Plugin    -->
    <script src="/../assets/js/jquery.bootstrap.wizard.min.js"></script>

    <!--  bootstrap Table Plugin    -->
    <script src="/../assets/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
    <script src="/../assets/js/jquery.datatables.js"></script>


    <!--  Full Calendar Plugin    -->
    <script src="/../assets/js/fullcalendar.min.js"></script>

    <!-- Font Awesome -->
    <script src="/../assets/js/fa/theme.js"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="/../assets/js/light-bootstrap-dashboard.js"></script>

    @yield('scripts')

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<!-- <script src="/../assets/js/demo.js"></script> -->


</html>
