<!DOCTYPE html>
<html class="page" lang="ru">
<head>
	<!-- <meta HTTP-EQUIV="refresh" CONTENT="20"> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="/public/styles/fontawesome/css/all.min.css" rel="stylesheet">
	<link type="text/css" href="/public/styles/css/main.css" rel="stylesheet">
	
	
	<script type="text/javascript" src="/public/lib/jquery/jquery.js"></script>
	<script type="text/javascript" src="/public/lib/highchart/highcharts.js"></script>
	<script type="text/javascript" src="/public/lib/highchart/modules/exporting.js"></script>

	<script type="text/javascript" src="/public/scripts/index.js"></script>
	<script type="text/javascript" src="/public/scripts/form.js"></script>
	
	<title><?php echo $title; ?></title>
</head>

<body>
	
	
	<!-- Header -->		
	<div class="container-xl">
		<header class="d-flex flex-wrap align-items-center justify-content-between py-2 border-bottom bg-Light divider">
			<a href="/" class="navbar-brand d-flex gap-2 justify-content-between align-items-center col-md-2 text-dark text-decoration-none">
				<img class =""src="apple-touch-icon.png" width="50px" height="50px">
				SovHome
			</a>
			<ul class="nav col-auto justify-content-center">
				<li class="nav-item">
					<a href="/" class="nav-link px-2" aria-current="page">Главная</a>
				</li>
				<li class="nav-item">
					<a href="/about" class="nav-link px-2 link-dark">О проекте</a>
				</li>
				<li class="nav-item">
					<a href="/mail" class="nav-link px-2 link-dark">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<i class="fa-regular fa-envelope"></i>
					</a>
					
					<?php if (isset($_SESSION['autorize']) OR isset($_SESSION['admin']) ) { 
							if (isset($_SESSION['admin'])){
								$login =  $_SESSION['admin']['login'];		
							} else {
								$login = $_SESSION['autorize']['login'];
							}	
					?>
						<li class="nav-item">
							<a href="/upage" class="nav-link px-2 link-dark" aria-current="page"><?php echo($login) ?>
							</a>
						</li>
						<li class="nav-item">
							<a href="/logout" class="nav-link px-2 link-dark" aria-current="page">Выход </a>
						</li>
					<?php } ?>
				</li>
			</ul>
		</header>
	</div>

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





















































		<!-- <div class="container">
			<div class="header">
				
				<div class="header_time">
					<a href="https://time.is/Sovetskiy,_Khanty-Mansia" id="time_is_link" rel="nofollow" ></a>
						<span id="_z44a" ></span>
						<script src="//widget.time.is/ru.js"></script>
						<script>time_is_widget.init({_z44a:{id:"Sovetskiy__Khanty-Mansia_z44a", template:"Время: <b>TIME</b><br>Сегодня: <b>DATE</b><br>SUN", time_format:"hours:minutes", date_format:"dayname, dnum monthname year г", sun_format:"<b>восход:</b> srhour:srminute <b>закат:</b> sshour:ssminute", coords:"61.3613900,63.5841700"}});</script>		
	            </div>
			</div>	
		
			
			<div id="nav">Nav
					
			</div> 
			
			<div id="aside">Aside
			</div>  
			
			<div id="content">Content
				
			</div>

			<div id="section">Section
			</div>  
			
			<div class="footer">
				
            </div>
		</div>		
	-->




















		<!-- <!-- <div class="wrapper">
			<div class="container">
				<header class="header">
						<div class="header_menu">
								
								<a href="/">Главная</a>
								<a href="/contact">Контакты</a>
								<a href="/about">О нас</a>
								<a href="/login">Авторизация</a>
								<a href="/register">Регистрация</a>


								<!-- <button>Lorem Ipsum</button>
								<button>Lorem Ipsum</button>
								<button>Lorem Ipsum</button> -->
						<!-- </div>
						<div class="header_contenet">
							<div class="header_logo">
								<a class="logo_link" href="/">
									<img class="logo_img" src="/public/images/apple-touch-icon.png">
								</a>
							</div>
							
							<div class="header_time">
									<a href="https://time.is/Sovetskiy,_Khanty-Mansia" id="time_is_link" rel="nofollow" ></a>
									<span id="_z44a" ></span>
									<script src="//widget.time.is/ru.js"></script>
									<script>time_is_widget.init({_z44a:{id:"Sovetskiy__Khanty-Mansia_z44a", template:"Время: <b>TIME</b><br>Сегодня: <b>DATE</b><br>SUN", time_format:"hours:minutes", date_format:"dayname, dnum monthname year г", sun_format:"<b>восход:</b> srhour:srminute <b>закат:</b> sshour:ssminute", coords:"61.3613900,63.5841700"}});</script>		
				            </div>
						</div>
					
				</header>
			</div>

			
		</div> --> 
<!-- 		<script type="text/javascript" src="/public/styles/bootstrap/bootstrap.bundle.min.js"></script> -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<script src="/public/scripts/chart.umd.min.js"></script>

	</body>
	</html>







	
	
