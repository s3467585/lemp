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
	<link href="/public/assets/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
	<!-- link css -->
	<link href="/public/assets/styles/fontawesome/css/all.min.css" rel="stylesheet">
	<link type="text/css" href="/public/assets/styles/css/default.css" rel="stylesheet">
	<!-- link jqeru -->
	<script type="text/javascript" src="/public/assets/lib/jquery/jquery.js"></script>
	<script type="text/javascript" src="/public/assets/js/index.js"></script>
	<script type="text/javascript" src="/public/assets/js/form.js"></script>
	<!-- Title -->
	<title><?php echo $title; ?></title>
</head>

<body class="bg-primary">	
	<div class="container-xxl px-0">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-sm text-white rounded-bottom rounded-30 shadow">
			<div class="container-fluid">
	  			<a class="navbar-brand d-flex align-items-center" href="/">
	  			<img class ="" height="30px" src="/public/assets/img/logo-5.svg" alt="logo">
	  			<span class="fs-4 px-3 text-white text-uppercase">SovHome</span></a>
	    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      		<span class="navbar-toggler-icon"></span>
	    		</button>
	    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	      			<ul class="navbar-nav ms-auto d-flex">
	        			<li class="nav-item">
	          				<a class="nav-link text-white active" aria-current="page" href="/">Главная</a>
	       				</li>
	       				<li class="nav-item">
	          				<a class="nav-link text-white active" aria-current="page" href="/about">Подробнее</a>
	       				</li>
	       				<li class="nav-item">
	          				<a class="nav-link text-white active" aria-current="page" href="/mail">Контакты</a>
	       				</li>
	      			</ul>
	    		</div>
	  		</div>
		</nav>
		<!-- Header -->	
		<!-- <header class="d-flex flex-column flex-md-row align-items-center py-2 mb-4 border-bottom">
      		<a  href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
      			<img class ="mx-auto d-block" height="50px" src="/public/assets/img/logo.svg" >
	 			
      		</a>
		    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
			    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/">Главная</a>
			    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Подробности</a>
			    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Связаться</a>    
			</nav>
	    </header>	 -->
		<!-- Main --> 
		<main class=""> 
			<?php echo $content;?>
		</main>

		<!-- Foter -->
		<footer class="footer py-3 text-white text-center text-start rounded-top rounded-30 shadow">
			<!-- Copyright -->
			<span>&copy; 2019-<?=date('Y');?></span>
				<a class="text-white link-underline link-underline-opacity-0" href="http://sovhome.ru/"> 
					<span class="fs-5 ms-2">sovhome</span></a>
				</a>
		</footer>
	</div>
	<script src="/public/assets/lib/bootstrap/bootstrap.min.js"></script>
	<script src="/public/assets/js/chart.umd.min.js"></script>
</body>
</html>







	
	
