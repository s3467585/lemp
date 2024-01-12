<!DOCTYPE html>
<html class="page" lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <!-- Llink icons -->
    <link rel="icon" href="/public/assets/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/public/assets/assets/img/apple-touch-icon.png" />
    <!-- link bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- link CSS -->
    <link href="/public/assets/styles/fontawesome/css/all.min.css" rel="stylesheet">
    <link type="text/css" href="/public/assets/styles/css/user.css" rel="stylesheet">
    <!-- link JS -->
    <script type="text/javascript" src="/public/assets/lib/jquery/jquery.js"></script>
    <!--     <script type="text/javascript" src="/public/assets/js/form.js"></script> -->
    <!-- <script type="text/javascript" src="/public/assets/lib/highchart/highcharts.js"></script> -->
    <!-- <script type="text/javascript" src="/public/assets/lib/highchart/modules/exporting.js"></script> -->
    <script type="text/javascript" src="/public/assets/js/test.js"></script>
    <script type="text/javascript" src="/public/assets/js/index.js"></script>
    <script type="text/javascript" src="/public/assets/js/form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <img src="/public/assets/img/logo_1.png" alt="profile_picture">
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
                    <a href="/" >
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#"  class="active">
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
                <li>
                    <a href="logout">
                        <span class="icon"><i class="fas fa-sign-out"></i></span>
                        <span class="item">Выход</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>

</html>

		