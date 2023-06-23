<!DOCTYPE html>
<html class="page" lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="x-ua-compatible" content="IE=edge" />
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="/public/images/apple-touch-icon.png" />
		<!-- <script src="https://kit.fontawesome.com/3e32fed278.js" crossorigin="anonymous"></script> -->
		<link type="text/css" href="/public/styles/iconfonts.css" rel="stylesheet" />
		<link type="text/css" href="/public/styles/style.css" rel="stylesheet" />
		<!-- <link type="text/css" href="/public/styles/nav.css" rel="stylesheet" /> -->
		<script type="text/javascript" src="/public/scripts/jquery.js"></script>
		<script type="text/javascript" src="/public/scripts/index.js"></script>
		<script type="text/javascript" src="/public/scripts/form.js"></script>
		<title><?php echo $title; ?></title>
	</head>

	<body class="page_body">
		<script src="/public/scripts/highcharts/code/highcharts.js"></script>
		<!-- <script src="/style/js/modules/exporting.js"></script> -->
		
		<div class="container">
		  	<div id="header">
		  		<div class="header_logo">
					<a class="logo_link" href="/">
						<img class="logo_img" src="/public/images/apple-touch-icon.png">
					</a>
				</div>
			</div> 

			<div id="nav">
				<div id="nav_wrapper">
					<div class="nav_item">
						<a href="/">Главная</a>
					</div>
					<div class="nav_item">
						<a href="/contact">Контакты</a>
					</div>
					<div class="nav_item">
						<a href="/about">О нас</a>
					</div>
					<div class="nav_item">
						<a href="/login">Авторизация</a>
					</div>
					<div class="nav_item">
						<a href="/register">Регистрация</a>
					</div>
					<button>Lorem Ipsum</button>
					<button>Lorem Ipsum</button>
				</div>
			</div> 
			<div id="aside">Aside</div>  
			<div id="content">
				<div class="content_block">		    
			    	<?php echo $content; ?>    
				</div>
			</div>   
			<div id="section">Section</div>  
			<div id="footer">
				<div class="copy">© 2019-<?=date('Y');?></div>
			</div>
		</div>
  </body>
</html>