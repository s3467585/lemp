<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <!-- Link ICONS -->
    <link rel="icon" href="/public/assets/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/public/assets/assets/img/apple-touch-icon.png" />
    <!-- Link FONT ICONS -->
    <link href="/public/assets/styles/fontawesome/css/all.min.css" rel="stylesheet">
    <!-- Link CSS -->
    <link type="text/css" href="/public/assets/styles/scss/user-page.css" rel="stylesheet">
    <!-- Link JS -->
    <script type="text/javascript" src="/public/assets/lib/jquery/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!--     <script type="text/javascript" src="/public/assets/js/form.js"></script> -->
    <title><?php echo $title; ?></title>
</head>

<body>



    <!-- SIDE-BAR -->
    <div class="side-bar">
        <!-- TOP SID-BAR LOGO  -->
        <div>
            <div class="page-name">
                <i id="brand" class="fa-brands fa-ubuntu"></i>
                <span class="side-bar-span">SoveHome</span>
            </div>
            <!-- <button class="btn">
                <i name="add" class="fa-solid fa-plus"></i>
                <span class="side-bar-span">Create new</span>
            </button> -->
        </div>

        <nav class="nav">
            <ul>
                <li>
                    <a id="active" href="/" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="side-bar-span item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="side-bar-span item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/sup/administration">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="side-bar-span item">Пользователи</span>
                    </a>
                </li>
                <li>
                    <a href="/sup/devices">
                        <span class="icon"><i class="fas fa-microchip"></i></span>
                        <span class="side-bar-span item">Устройства</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="side-bar-span item">Perfomance</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="side-bar-span item">Development</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="side-bar-span item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="side-bar-span item">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="side-bar-span item">Настройки</span>
                    </a>
                </li>

            </ul>
        </nav>

        <div>
            <!-- separator -->
            <div class="line"></div>

            <!-- color-scheme mode -->
            <div class="color-scheme">
                <div class="info">
                    <i class="fa-solid fa-moon"></i>
                    <span class="side-bar-span">Drak Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circle">

                        </div>
                    </div>
                </div>
            </div>
            <!-- USER INFO -->
            <div class="user">
                <?php if (isset($_SESSION['autorize']) or isset($_SESSION['admin'])) {
                    if (isset($_SESSION['admin'])) {
                        $user =  $_SESSION['admin'];
                    } else {
                        $user = $_SESSION['autorize'];
                    }
                ?>
                    <img src="/public/assets/img/index-s.jpg" alt="">
                    <div class="user-info">
                        <div class="user-data">
                            <span class="side-bar-span name"><?php echo ($user['login']) ?></span>
                            <span class="side-bar-span email"><?php echo ($user['email']) ?></span>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                <?php } ?>
            </div>
            <!-- LOGOFF -->
            <div class="logoff">
                <a href="logout" class="active">
                    <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></i></span>
                    <span class="side-bar-span item">Выйти</span>
                </a>
            </div>
        </div>
    </div>


    <main>
        <div class="wrapper">
            <div class="top-menu">
                <!-- TIME IFO -->
                <div class="time-info">
                    <a href="https://time.is/Yekaterinburg" id="time_is_link" rel="nofollow"></a>
                    <span id="Yekaterinburg_z44a"></span>
                    <script src="//widget.time.is/ru.js"></script>
                    <script>
                        time_is_widget.init({
                            Yekaterinburg_z44a: {
                                template: "Время: TIME<br>Сегодня: DATE",
                                date_format: "dayname daynum.monthnum.yy"
                            }
                        });
                    </script>
                </div>
                <!-- MENU TOGLE small screens-->
                <div class="menu-togle">
                    <i class="open fa-solid fa-bars"></i>
                    <i class="close fa-solid fa-xmark"></i>
                </div>
            </div>
            <!-- SECTION -->
            <section>
                <?php echo $content; ?>
            </section>
            <!-- FOOTER -->
            <footer>
                <!-- COPY -->
                <div class="copy">
                    <small>&copy; 2019-<?= date('Y'); ?> SovHome</small>
                </div>
            </footer>
        </div>
    </main>

    <script type="text/javascript" src="/public/assets/js/user-page.js"></script>
</body>

</html>