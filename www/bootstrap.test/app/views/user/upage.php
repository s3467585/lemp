<!--Страница пользователя -->
<div class="container">
    <div class="dev">
        <div class="dev-stat">
            <div>
                <h3 class="text-center">Данные контроллера</h3>
                <?php 
                  $error=false;
                  if (time() - $vars['devStatus']['sendTime'] > 2100) {
                    echo '<i class="fa-solid fa-toggle-off" style="width: 25px; color: #aa0909;"></i><span class="text-danger" style="color: #aa0909; font-weight: bold">Соединение потеряно</span>';
                    $error = true;
                  } else {
                    echo '<i class="fa-solid fa-toggle-on" style="width: 25px; color: #09aa39"></i><span class="text-success" style="color: #09aa39; font-weight: bold">Соединение установлено</span>';
                }?>
            </div>
            <div class="col col bg-light text-dark rounded-2">
                <p><i class="fa-solid fa-file-arrow-down" style="width: 25px; color: #0c7db1;"></i>Выгрузка: <?php echo clock($vars['devStatus']['sendTime']);?></p>
            </div> 
            <div class="col col bg-light text-dark rounded-2">
                <p><i class="fa-solid fa-plug-circle-check" style="width: 25px; color: #0c7db1;"></i>Включён: <?php echo clock($vars['devStatus']['connectTime']);?></p>
            </div>
            <div class="col col bg-light text-dark rounded-2">
                <p><i class="fa-solid fa-clock-rotate-left" style="width: 25px; color: #0c7db1;"></i>Время работы:
                    <?php
                        if ($error == true) {
                          echo '<span class="text-danger">неизвестно</span>';
                        } else {
                          echo datediff($vars['devStatus']['connectTime'],time());
                        }
                      ?>
                </p>
            </div>
        </div>
        <div class="dev-chart">
            <canvas id="myChart" aria-label="Device Params" role="img"></canvas>
        </div>
    </div>    
    <div class="row">
    </div>
</div>

<script>
       var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($vars['controlParam']['time']);?>,
            datasets: [{ 
                data: <?php echo json_encode($vars['controlParam']['temp0']);?>,
                label: "Total",
                borderColor: "#3e95cd",
                backgroundColor: "#7bb6dd",
                fill: false,}, 
                { 
                data: <?php echo json_encode($vars['controlParam']['temp1']);?>,
                label: "Total",
                borderColor: "#3e95cd",
                backgroundColor: "#7bb6dd",
                fill: false,}, 
                { 
                data: <?php echo json_encode($vars['controlParam']['temp2']);?>,
                label: "Total",
                borderColor: "#3e95cd",
                backgroundColor: "#7bb6dd",
                fill: false,}, 
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
