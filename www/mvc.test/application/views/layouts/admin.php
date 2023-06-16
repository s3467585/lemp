<!DOCTYPE html>
<html class="page" lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="x-ua-compatible" content="IE=edge" />
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="/public/images/apple-touch-icon.png" />
		<link type="text/css" href="/public/syles/admin.css" rel="stylesheet">
		<script type="text/javascript" src="/public/scripts/jquery.js"></script>
		<script type="text/javascript" src="/public/scripts/form.js"></script>
		<title><?php echo $title; ?></title>
	</head>

	<body class="page_body">
		<script src="/public/scripts/highcharts/code/highcharts.js"></script>
		<!-- <script src="/style/js/modules/exporting.js"></script> -->
		<div class="wrapper">
			<header class="header">
				<div class="container">
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
						<div class="header_menu">
							
							<a href="/">Главная</a>
							<a href="/contact">Контакты</a>
							<a href="/about">О нас</a>
							<a href="/login">Авторизация</a>
							<a href="/register">Регистрация</a>


							<!-- <button>Lorem Ipsum</button>
							<button>Lorem Ipsum</button>
							<button>Lorem Ipsum</button> -->
						</div>
						<div class="header_user">
							<!--Профиль пользователя -->
						    <form clas="header_fotm" action="../modules/logout.php" method="POST">
						    	<div class="text">Ваш логин:</div>
						    	<div class="text"><?= $_SESSION['user']['login'] ?></div>
						        <!-- <text>Ваш логин:</text>
						        <text><?= $_SESSION['user']['login'] ?></text> -->
						        <button type="submit">Выти</button>
						    </form>
						</div>
					</div>
				</div>
			</header>


			<div class="main">

			    <div class="container">

			    	<?php echo $content; ?> 

				</div>
	
			</div>
    

			


			<footer class="footer">
                <div class="container">
                    <div class="copy">© 2019-<?=date('Y');?><?=$copy;?><br><br>
                        <h2> ПОДВАЛ </h2>
                    </div>
                    <?=$metrika;?>
                </div>
            </footer>
        </div>
    </body>
</html>







	
	
