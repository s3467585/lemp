<!doctype html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link type="text/css" href="/public/styles/bootstrap/bootstrap.min.css" rel="stylesheet">
    <title><?php echo $code; ?></title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="px-4 py-5 my-5 text-center text-white">
            <h1 class="display-5 fw-bold"><?php echo $code;?></h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4"><?php echo $message;?></p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="/" class="btn btn-lg btn-secondary fw-bold border-white text-dark bg-white">На главную</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>