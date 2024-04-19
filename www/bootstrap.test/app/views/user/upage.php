<!--Страница пользователя -->
<div class="cards">

    <div class="card">
        <div class="card-name">
            <h3 class="text-center">Данные контроллера</h3>
        </div>
        <div class="dev">
            <div class="dev-stat">
                <div class="dev-status">
                    <?php
                    $error = false;
                    if (time() - $vars['devStatus']['sendTime'] > 2100) {
                        echo '<span><i class="fa-solid fa-toggle-off text-danger"></i><p>Соединение:</p><span class="text-danger">потеряно</span>';
                        $error = true;
                    } else {
                        echo '<span><i class="fa-solid fa-toggle-on text-success"></i><p>Соединение:</p><span class="text-success">установлено</span>';
                    } ?>
                </div>
                <div class="dev-uptime">
                    <span><i class="fa-solid fa-clock-rotate-left"></i>
                        <p>Время работы:</p>
                        <?php
                        if ($error == true) {
                            echo '<span class="text-danger">неизвестно</span>';
                        } else {
                            echo '<span class="text-success">';
                            echo datediff(time() - $vars['devStatus']['upTime'], time());
                            echo '<span>';
                        }
                        ?>
                    </span>
                </div>
                <div class="dev-power-on">
                    <span><i class="fa-solid fa-plug-circle-check"></i>
                        <p>Включён: <?php echo clock($vars['devStatus']['connectTime']); ?>
                    </span>
                </div>
                <div class="dev-unload">
                    <span><i class="fa-solid fa-file-arrow-down"></i>
                        <p>Выгрузка: <?php echo clock($vars['devStatus']['sendTime']); ?>
                    </span>
                </div>
            </div>
            <div class="dev-chart">
                <canvas id="myChart" aria-label="Device Params" role="img"></canvas>
            </div>


        </div>
    </div>

    

    <div class="card">
        <div class="card-name">
            <h3 class="text-center">Данные контроллера</h3>
        </div>
        <div class="dev">
            <div class="dev-stat">
                <div class="dev-status">
                    <?php
                    $error = false;
                    if (time() - $vars['devStatus']['sendTime'] > 2100) {
                        echo '<span><i class="fa-solid fa-toggle-off text-danger"></i><p>Соединение:</p><span class="text-danger">потеряно</span>';
                        $error = true;
                    } else {
                        echo '<span><i class="fa-solid fa-toggle-on text-success"></i><p>Соединение:</p><span class="text-success">установлено</span>';
                    } ?>
                </div>
                <div class="dev-uptime">
                    <span><i class="fa-solid fa-clock-rotate-left"></i>
                        <p>Время работы:</p>
                        <?php
                        if ($error == true) {
                            echo '<span class="text-danger">неизвестно</span>';
                        } else {
                            echo '<span class="text-success">';
                            echo datediff($vars['devStatus']['connectTime'], time());
                            echo '<span>';
                        }
                        ?>
                    </span>
                </div>
                <div class="dev-power-on">
                    <span><i class="fa-solid fa-plug-circle-check"></i>
                        <p>Включён: <?php echo clock($vars['devStatus']['connectTime']); ?>
                    </span>
                </div>
                <div class="dev-unload">
                    <span><i class="fa-solid fa-file-arrow-down"></i>
                        <p>Выгрузка: <?php echo clock($vars['devStatus']['sendTime']); ?>
                    </span>
                </div>
            </div>
            <div class="dev-chart">
                <?php d($vars['devParam']); ?>
            </div>


        </div>
    </div>

    <!-- <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script> -->
    <div class="card">
<?php echo json_encode($vars['devParam']['json']); ?>
    </div>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($vars['devParam']['sendtime']); ?>,
                datasets: [{
                        data: <?php echo json_encode($vars['devParam']['temp0']); ?>,
                        label: "Total",
                        borderColor: "#3e95cd",
                        backgroundColor: "#7bb6dd",
                        fill: false,
                    },
                    {
                        data: <?php echo json_encode($vars['devParam']['temp1']); ?>,
                        label: "Total",
                        borderColor: "#3e95cd",
                        backgroundColor: "#7bb6dd",
                        fill: false,
                    },
                    {
                        data: <?php echo json_encode($vars['devParam']['temp2']); ?>,
                        label: "Total",
                        borderColor: "#3e95cd",
                        backgroundColor: "#7bb6dd",
                        fill: false,
                    },
                ],
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                elements: {
                    point: {
                        radius: 3,
                        hoverRadius: 6,
                        pointStyle: 'rect',
                        borderWidth: 1,
                    },
                    bar: {
                        backgroundColor: '#ff0000',
                    },
                },
                plugins: {
                    colors: {
                        enabled: true,
                        forceOverride: true,
                    },
                    legend: {
                        display: true,
                        position: 'right',
                        onHover: 'handleHover',
                        onLeave: 'handleLeave',
                        labels: {
                            usePointStyle: true,
                            boxWidth: 80,
                            fontColor: 'rgb(60, 180, 100)'
                        }
                    }
                }

            }
        });
    </script>