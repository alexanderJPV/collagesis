<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
	<!-- SideBar -->
	@include('admin.plantilla.sidebar')
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		@include('admin.plantilla.header')		
		<!-- NavBar header-->
		@yield('legend')
		@yield('content')
	</section>

	<!--====== Scripts -->
	<script src="/js/jquery-3.1.1.min.js"></script>
	<script src="/js/sweetalert2.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/material.min.js"></script>
	<script src="/js/ripples.min.js"></script>
	<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="/js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>