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
	<!-- <link href="/public/assets/lib/bootstrap/bootstrap.min.css" rel="stylesheet"> -->

	<!-- link css -->
	<link href="/public/assets/styles/fontawesome/css/all.min.css" rel="stylesheet">
	<link type="text/css" href="/public/assets/styles/css/default.css" rel="stylesheet">
	<link type="text/css" href="/public/assets/styles/scss/default.css" rel="stylesheet">
	<!-- link jqeru -->
	<script type="text/javascript" src="/public/assets/lib/jquery/jquery.js"></script>
	<script type="text/javascript" src="/public/assets/js/index.js"></script>
	<script type="text/javascript" src="/public/assets/js/form.js"></script>
	<script type="text/javascript" src="/public/assets/js/default.js"></script>
	<!-- Title -->
	<title><?php echo $title; ?></title>
</head>

<body class="content">
	<div class="container">
		<!-- Header -->
		<header class="header">
			<div class="header__wrapper">
				<!-- Logo -->
				<div class="header__logo">
					<a href="#"><img class="header__logo__img" height="30px" src="/public/assets/img/logo-5.svg" alt="logo"></a>
				</div>
				<!-- Navbar -->
				<nav class="nav">
					<ul class="">
						<li class=""><a class="" aria-current="page" href="/">Главная</a></li>
						<li class=""><a class="" aria-current="page" href="/about">Подробнее</a></li>
						<li class=""><a class="" aria-current="page" href="/mail">Контакты</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>

		<!-- Main -->
		<main class="">
			<?php echo $content; ?>
		</main>
		<!-- Foter -->
		<footer>
			<a href="http://sovhome.ru/">
				<span>
					<!-- Copyright -->
					&copy; 2019-<?= date('Y'); ?> sovhome</span></a>
			</a>
		</footer>
	</div>
	<script src="/public/assets/lib/bootstrap/bootstrap.min.js"></script>
	<script src="/public/assets/js/chart.umd.min.js"></script>
</body>

</html>