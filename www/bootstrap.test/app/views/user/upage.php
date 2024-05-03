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
                        <?php if (!preg_match("/time/i",$value)) : ?>

                            <div id="<?= protect($devBindName); ?>-<?= protect($value); ?>-chart" style="width:100%; height:300px;"></div>
                        <?php endif ?>

                    <script type="text/javascript">   

                        var timeData = <?php echo json_encode($vars['userDevParam'][$devBindName]['sensors']['timeChart'], JSON_UNESCAPED_UNICODE); ?>;
                        
                        var sensorData = <?php echo json_encode($vars['userDevParam'][$devBindName]['sensors'][$value], JSON_UNESCAPED_UNICODE); ?>;

                        Highcharts.chart('<?= protect($devBindName); ?>-<?= protect($value); ?>-chart', {
                            chart: {
                                type: 'line'
                            },
                            title: {
                                text: ''
                            },
                            subtitle: {
                                text: '<?php echo $value ?>',
                            },
                            xAxis: {
                                categories: timeData,
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Temperature (°C)44'
                                }
                            },
                            
                            plotOptions: {
                                line: {
                                    dataLabels: {
                                        enabled: true
                                    },
                                    enableMouseTracking: false
                                }
                            },
                            series: [{

                                name: '<?php echo $value ?>',
                                data: sensorData,
                            }]
                        });

                    </script>

                    <?php endforeach; ?>
        
                </div>

                <? endif; ?>

            </div>
        </div>


    <?php endforeach; ?>

</div>



