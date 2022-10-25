<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Dashplex - Laravel Admin Panel Dashboard Template">
	    <meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin dashboard, dashboard ui, backend, admin panel, admin template, dashboard template, admin, bootstrap, laravel, laravel admin panel, php admin panel, php admin dashboard, laravel admin template, laravel dashboard, laravel admin panel"/>

		<!-- FAVICON -->
		<link rel="icon" href="{{asset('assets/img/brand/favicon.ico')}}" type="image/x-icon" />
   
		<!-- TITLE -->
		<title> Dashplex - Laravel Bootstrap5 Premium Dashboard Template</title>

        <!-- BOOTSTRAP CSS -->
	    <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
       
		<!-- ICONS CSS -->
        <link href="{{asset('assets/web-fonts/icons.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/web-fonts/plugin.css')}}" rel="stylesheet"/>
       
        <!-- APP CSS & APP SCSS -->
        @vite(['resources/sass/app.scss' , 'resources/css/app.css'])

        @yield('styles')

	</head>

	<body class="main-body leftmenu ltr light-theme">

		<!--- GLOBAL LOADER -->
		<div id="global-loader" >
			<img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="loader">
		</div>
		<!--- END GLOBAL LOADER -->

		<!-- PAGE -->
		@yield('switcher-icon')
		@yield('switcher-icon1')
		@yield('switcher-icon2')

			@yield('content')

		</div>
		<!-- END PAGE -->

		<!-- SCRIPTS -->

        @include('layouts.components.custom-scripts')

		<!-- STICKY JS-->
        <script src="{{asset('assets/sticky.js')}}"></script>

		<!-- APP JS -->
		@vite('resources/js/app.js')


		<!-- END SCRIPTS -->

	</body>
</html>
