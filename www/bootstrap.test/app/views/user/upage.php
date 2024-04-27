<!--Страница пользователя -->
<div class="cards">

    <?php if (empty($devBindNames)) : ?>
        <div class="card">
            <div class="card-name">
                <h3 class="text-center">Контроллеры не определены</h3>
            </div>
        </div>
    <?php else : ?>

    <?php endif; ?>

    <?php foreach ($devBindNames as $key => $devBindName) : ?>
        <div class="card">
            <div class="card-name">
                <h3 class="text-center">Контроллер: <?= protect($devBindName); ?></h3>
            </div>
            <div class="dev">
                <div class="dev-stat">
                    <div class="dev-status">
                        <?php
                        $error = false;
                        if (time() - $vars['userDevStatus'][$devBindName]['sendTime'] > 2100) {
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
                                echo datediff(time() - $vars['userDevStatus'][$devBindName]['upTime'], time());
                                echo '<span>';
                            }
                            ?>
                        </span>
                    </div>
                    <div class="dev-power-on">
                        <span><i class="fa-solid fa-plug-circle-check"></i>
                            <p>Включён: <?php echo clock($vars['userDevStatus'][$devBindName]['connectTime']); ?>
                        </span>
                    </div>
                    <div class="dev-unload">
                        <span><i class="fa-solid fa-file-arrow-down"></i>
                            <p>Выгрузка: <?php echo clock($vars['userDevStatus'][$devBindName]['sendTime']); ?>
                        </span>
                    </div>
                </div>
                <?php if (!empty($vars['userDevParam'][$devBindName])) : ?>
                    <div class="dev-chart">
                        <?php foreach ($vars['userDevSensors'][$devBindName] as $sensor => $value) : ?>
                            <?php if ($value !== 'time') : ?>
                                <canvas id="<?= protect($devBindName); ?>-<?= protect($value); ?>-Chart" aria-label="Device Params" role="img"> </canvas>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </div>

                    <script>
                        
                        const Time = <?php echo json_encode($vars['userDevParam'][$devBindName]['sensors']['time'], JSON_UNESCAPED_UNICODE); ?>;

                        <?php foreach ($vars['userDevSensors'][$devBindName] as $sensor => $value) : ?>
                            <?php if ($value !== 'time') : ?>
                                //Setup                   
                                var data = {
                                    labels: Time,
                                    datasets: [
                                        {
                                            type: 'line',
                                            label: '<?php echo protect($value) ?>',
                                            data: <?php echo json_encode($vars['userDevParam'][$devBindName]['sensors'][$value], JSON_UNESCAPED_UNICODE); ?>,
                                            borderWidth: 3,
                                            cubicInterpolationMode: 'monotone',
                                        },
                                        
                                    ]

                                };

                                //Config
                                var config = {
                                    type: 'scatter',
                                    data: data,
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: true,
                                        scales: {
                                            x: {
                                                type: 'time',
                                                

                                                
                                            },
                                            y: {
                                                beginAtZero: true
                                            },
                                        }
                                    },
                                };

                                //Render init block
                                var myChart = new Chart(
                                    document.getElementById('<?= protect($devBindName); ?>-<?= protect($value); ?>-Chart'), config
                                );
                            <?php endif ?>
                        <?php endforeach; ?>
                    </script>

                <?php endif; ?>
            </div>
        </div>


    <?php endforeach; ?>