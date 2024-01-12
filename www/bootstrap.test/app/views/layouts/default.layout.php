<!DOCTYPE html>
<html class="page" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<!-- Llink icons -->
	<link rel="icon" href="/public/assets/img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="/public/assets/img/apple-touch-icon.png" />
	<!-- link bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- link css -->
	<link href="/public/assets/styles/fontawesome/css/all.min.css" rel="stylesheet">
	<link type="text/css" href="/public/assets/styles/css/style.css" rel="stylesheet">
	<!-- link jqeru -->
	<script type="text/javascript" src="/public/assets/lib/jquery/jquery.js"></script>
	<script type="text/javascript" src="/public/assets/js/index.js"></script>
	<script type="text/javascript" src="/public/assets/js/form.js"></script>
	<!-- Title -->
	<title><?php echo $title; ?></title>
</head>

<body>
	<div class="container-xl">
		<!-- Header -->	
		<header class="d-flex flex-column flex-md-row align-items-center py-2 mb-4 border-bottom">
      		<a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
      			<img class ="mx-auto d-block" height="50px" src="/public/assets/img/logo.png" >
	 			<span class="fs-4 px-3">SovHome</span>
      		</a>
		    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
			    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/">Главная</a>
			    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Подробности</a>
			    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Связаться</a>    
			</nav>
	    </header>	
		<!-- Main -->
		<!-- <main class="container-fluid container-sm"> --> 
		<main class=""> 
			<?php echo $content;?>
		</main>

		<!-- Foter -->
		<div class="container-xl fixed-bottom">
			<footer class="footer mt-auto py-3 bg-Light text-center border-top">
				<span class="text-muted">&copy; 2019-<?=date('Y');?> SovHome</span>
			</footer>
		</div>

		
	<!-- 		<script type="text/javascript" src="/public/assets/styles/bootstrap/bootstrap.bundle.min.js"></script> -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
			<script src="/public/assets/js/chart.umd.min.js"></script>
	</div>
</body>
</html>







	
	
