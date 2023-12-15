<!DOCTYPE html>
<html class="page" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link type="text/css" href="/public/styles/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/public/styles/fontawesome/css/all.min.css" rel="stylesheet">
    <link type="text/css" href="/public/styles/css/admin.css" rel="stylesheet">
    <script type="text/javascript" src="/public/lib/jquery/jquery.js"></script>
    <script type="text/javascript" src="/public/scripts/index.js"></script>
    <script type="text/javascript" src="/public/scripts/form.js"></script>
    <title><?php echo $title; ?></title>
</head>



<body class="fixed-nav sticky-footer bg-secondary">
        <?php if ($this->route['action'] != 'signin'): ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
                <a class="navbar-brand text-center" href="/sup/administration">АдминПанель</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                        <li class="nav-item">
                            <a class="nav-link" href="/sup/administration">
                            <i class="fa fa-fw fa-user-gear"></i>
                            <span class="nav-link-text">Пользователи</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sup/devices">
                            <i class="fa fa-fw fa-microchip"></i>
                            <span class="nav-link-text">Устройства</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/sup/adduser">
                            <i class="fa fa-fw fa-plus"></i>
                            <span class="nav-link-text">Добавить</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sup/edituser">
                            <i class="fa fa-fw fa-list"></i>
                            <span class="nav-link-text">Редактировать</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sup/deluser">
                            <i class="fa fa-fw fa-list"></i>
                            <span class="nav-link-text">Удалить</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sup/logout">
                            <i class="fa fa-fw fa-sign-out"></i>
                            <span class="nav-link-text">Выход</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        <?php endif; ?>
            
            <!-- Main -->
            <main class="bg-Light">
                <div class="">          
                    <?php echo $content;?>
                </div>
            </main>
    
        <?php if ($this->route['action'] != 'signin'): ?>
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>&copy; 2019-<?=date('Y');?> SovHome</small>
                    </div>
                </div>
            </footer>
        <?php endif; ?>
        <script type="text/javascript" src="/public/styles/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="/public/scripts/highcharts/code/highcharts.js"></script>
    </body>
</html>



