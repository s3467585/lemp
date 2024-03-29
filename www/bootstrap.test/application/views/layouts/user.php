<!DOCTYPE html>
<html class="page" lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link href="/public/styles/fontawesome/css/all.min.css" rel="stylesheet">
    <link type="text/css" href="/public/styles/css/user.css" rel="stylesheet">
    <script type="text/javascript" src="/public/lib/jquery/jquery.js"></script>
    <!--     <script type="text/javascript" src="/public/scripts/form.js"></script> -->
    <script type="text/javascript" src="/public/lib/highchart/highcharts.js"></script>
    <!-- <script type="text/javascript" src="/public/lib/highchart/modules/exporting.js"></script> -->
    <script type="text/javascript" src="/public/scripts/test.js"></script>
    <script type="text/javascript" src="/public/scripts/index.js"></script>
    <script type="text/javascript" src="/public/scripts/form.js"></script>
    <title>
        <?php echo $title; ?>
    </title>
</head>

<body>
    <div class="wrapper">
        <!--Top menu -->
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a>
                    	<i class="fa-solid fa-angles-left"></i>
                    </a>
                </div>
            </div>
            <!-- Main -->
            <div class="main">
                <?php echo $content;?>
            </div>
            <!-- Footer -->
                <footer class="">
                    <span>&copy; 2019-<?=date('Y');?> SovHome</span>
                </footer>
	        </div>
        <div class="sidebar">
            <!--profile image & text-->
            <div class="profile">
                <?php if (isset($_SESSION['autorize']) OR isset($_SESSION['admin']) ) { 
                    if (isset($_SESSION['admin'])){
                        $user =  $_SESSION['admin']; 
                    } else {
                        $user = $_SESSION['autorize'];
                    }   
                    ?>
                <img src="/public/img/logo_1.png" alt="profile_picture">
                <h3>
                    <?php echo($user['login']) ?>
                </h3>
                <p>
                    <?php echo($user['full_name']) ?>
                </p>
                <p>
                    <?php echo($user['email']) ?>
                </p>
                <?php } ?>
            </div>
            <!--menu item-->
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/sup/administration">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Пользователи</span>
                    </a>
                </li>
                <li>
                    <a href="/sup/devices">
                        <span class="icon"><i class="fas fa-microchip"></i></span>
                        <span class="item">Устройства</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Perfomance</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Development</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Настройки</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script>
    </script>
</body>

</html>
<!-- Foter -->
<!-- <div class="container-xl fixed-bottom">
		<footer class="footer mt-auto py-3 bg-Light text-center border-top">
			<span class="text-muted">&copy; 2019-<?=date('Y');?> SovHome</span>
		</footer>
	</div> -->
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
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
		<script src="/public/scripts/chart.umd.min.js"></script>