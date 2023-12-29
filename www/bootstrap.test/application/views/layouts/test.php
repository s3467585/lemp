<!DOCTYPE html>
<html class="page" lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link href="/public/styles/fontawesome/css/all.min.css" rel="stylesheet">
    <link type="text/css" href="/public/styles/css/test.css" rel="stylesheet">
    <script type="text/javascript" src="/public/lib/jquery/jquery.js"></script>
    <!--     <script type="text/javascript" src="/public/scripts/form.js"></script> -->    
    <script type="text/javascript" src="/public/scripts/test.js"></script>
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
                        <!-- <i class="fas fa-bars"></i> -->
                        <i class="fa-solid fa-angles-left"></i>
                    </a>
                </div>
          </div>
          <div class="main">
            <?php echo $content;?>
            <div class="container">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
            
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
                <h3><?php echo($user['login']) ?></h3>
                <p><?php echo($user['full_name']) ?></p>
                <p><?php echo($user['email']) ?></p>
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