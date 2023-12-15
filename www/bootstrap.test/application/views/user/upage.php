<!--Страница пользователя -->
<div class="row">
  <!-- Боковая панель -->
  <div class="col-4-md gap-0">
      <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none text-center">
          <span class="fs-4">User Homepage</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="/upage" class="nav-link d-flex gap-2 align-items-center" aria-current="page">
              <i class="fa-solid fa-chalkboard-user fa-xl"></i>
              <div>Статус</div>
            </a>
          </li>
          <li>
            <a href="/usettings" class="nav-link d-flex gap-2 align-items-center">
              <div><i class="fa-solid fa-gears fa-xl"></i>&nbsp; Настройки</div>
            </a>
          </li>
        </ul>

        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center gap-2 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user-gear fa-xl"></i>
            <strong><?php echo($_SESSION['autorize']['login']) ?></strong>
          </a>
          <ul class="dropdown-menu text-small shadow" style="">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><?php debug($_SESSION) ?></li>

          </ul>
        </div>
      </div>
  </div>
  <!-- Блок информации -->  
  <div class="col">
    
      <div class="row justify-content-between">
        <h3 class="text-center">Данные контроллера</h3>
        <div class="col col bg-light text-dark rounded-2">
          Соединение: 
        <?php 
          //debug($vars);
          $error=false;
          if (time() - $vars['devaceParam']['connectTime'] > 2100) {
            echo '<span class="text-danger">Потеряно</span>';
            $error = true;
          } else {
            echo '<span class="text-success">Потеряно</span>';
          }?>
        </div>
        <div class="col col bg-light text-dark rounded-2">
          Выгрузка: <?php echo clock($vars['devaceParam']['connectTime']);?>
        </div>
        <div class="col col bg-light text-dark rounded-2">
          Включён: <?php echo clock($vars['devaceParam']['rebootTime']);?>
        </div>
        <div class="col col bg-light text-dark rounded-2">
          Время работы: 
          <?php
            if ($error == true) {
              echo '<span class="text-danger">неизвестно</span>';
            } else {
              echo datediff($vars['devaceParam']['rebootTime'],time());
            }
          ?>
        </div>
      </div>
      

    
    <div class="row">
      
    </div>
    <div class="row">
      <div class="col">
        <div>
      
          <?php 
              $time = $vars['controlParam']['time'];
              $temp0 = $vars['controlParam']['temp0'];
              $temp1 = $vars['controlParam']['temp1'];
              $temp2 = $vars['controlParam']['temp2'];
          ?>
          <script type="text/javascript">
            // Load the fonts
            Highcharts.theme = {
               colors: ["#2b908f", "#90ee7e", "#f45b5b", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
                  "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
               chart: {
                  backgroundColor: {
                     linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
                     stops: [
                        [0, '#2a2a2b'],
                        [1, '#3e3e40']
                     ]
                  },
                  style: {
                     fontFamily: "verdana"
                  },
                  borderRadius: '10',
                  plotBorderColor: '#606063'
               },
               title: {
                  style: {
                     color: '#E0E0E3',
                     fontSize: '16px'
                  }
               },
               subtitle: {
                  style: {
                     color: '#E0E0E3',
                     textTransform: 'uppercase'
                  }
               },
               xAxis: {
                  gridLineColor: '#707073',
                  labels: {
                     style: {
                        color: '#E0E0E3'
                     }
                  },
                  lineColor: '#707073',
                  minorGridLineColor: '#505053',
                  tickColor: '#707073',
                  title: {
                     style: {
                        color: '#A0A0A3'

                     }
                  }
               },
               yAxis: {
                  gridLineColor: '#707073',
                  labels: {
                     style: {
                        color: '#E0E0E3'
                     }
                  },
                  lineColor: '#707073',
                  minorGridLineColor: '#505053',
                  tickColor: '#707073',
                  tickWidth: 1,
                  title: {
                     style: {
                        color: '#A0A0A3'
                     }
                  }
               },
               tooltip: {
                  backgroundColor: 'rgba(0, 0, 0, 0.85)',
                  style: {
                     color: '#F0F0F0'
                  }
               },
               plotOptions: {
                  series: {
                     dataLabels: {
                        color: '#B0B0B3'
                     },
                     marker: {
                        lineColor: '#333'
                     }
                  },
                  boxplot: {
                     fillColor: '#505053'
                  },
                  candlestick: {
                     lineColor: 'white'
                  },
                  errorbar: {
                     color: 'white'
                  }
               },
               legend: {
                  itemStyle: {
                     color: '#E0E0E3'
                  },
                  itemHoverStyle: {
                     color: '#FFF'
                  },
                  itemHiddenStyle: {
                     color: '#606063'
                  }
               },
               credits: {
                  style: {
                     color: '#666'
                  }
               },
               labels: {
                  style: {
                     color: '#707073'
                  }
               },

               drilldown: {
                  activeAxisLabelStyle: {
                     color: '#F0F0F3'
                  },
                  activeDataLabelStyle: {
                     color: '#F0F0F3'
                  }
               },

               navigation: {
                  buttonOptions: {
                     symbolStroke: '#DDDDDD',
                     theme: {
                        fill: '#505053'
                     }
                  }
               },

               // scroll charts
               rangeSelector: {
                  buttonTheme: {
                     fill: '#505053',
                     stroke: '#000000',
                     style: {
                        color: '#CCC'
                     },
                     states: {
                        hover: {
                           fill: '#707073',
                           stroke: '#000000',
                           style: {
                              color: 'white'
                           }
                        },
                        select: {
                           fill: '#000003',
                           stroke: '#000000',
                           style: {
                              color: 'white'
                           }
                        }
                     }
                  },
                  inputBoxBorderColor: '#505053',
                  inputStyle: {
                     backgroundColor: '#333',
                     color: 'silver'
                  },
                  labelStyle: {
                     color: 'silver'
                  }
               },

               navigator: {
                  handles: {
                     backgroundColor: '#666',
                     borderColor: '#AAA'
                  },
                  outlineColor: '#CCC',
                  maskFill: 'rgba(255,255,255,0.1)',
                  series: {
                     color: '#7798BF',
                     lineColor: '#A6C7ED'
                  },
                  xAxis: {
                     gridLineColor: '#505053'
                  }
               },

               scrollbar: {
                  barBackgroundColor: '#808083',
                  barBorderColor: '#808083',
                  buttonArrowColor: '#CCC',
                  buttonBackgroundColor: '#606063',
                  buttonBorderColor: '#606063',
                  rifleColor: '#FFF',
                  trackBackgroundColor: '#404043',
                  trackBorderColor: '#404043'
               },

               // special colors for some of the
               legendBackgroundColor: 'rgba(0, 0, 0, 0.5)',
               background2: '#505053',
               dataLabelsColor: '#B0B0B3',
               textColor: '#C0C0C0',
               contrastTextColor: '#F0F0F3',
               maskColor: 'rgba(255,255,255,0.3)'
            };

            // Apply the theme
            Highcharts.setOptions(Highcharts.theme);
            $(function () {
            $('#container_gr').highcharts({
               chart: {
                  type: 'spline'
               },
               title: {
                  text: 'Температурные показатели'
               },
               xAxis: {
                  categories: [
                  <?php 
                  foreach ($time as $value) {
                     echo '\''.$value.'\',';
                  }?>]
               },
               yAxis: {
                  title: {
                     text: 't °C'
                  }
               },
               plotOptions: {
                  spline: {
                     dataLabels: {
                        enabled: true
                     },
                     enableMouseTracking: false
                  }
               },
               series: [{
                  name: 'Н/В',
                  data: [
                  <?php 
                  foreach ($temp0 as $value) {
                     echo $value.',';
                  } ?>]
               }, {
                    name: 'Подача',
                    data: [
                    <?php
                    foreach ($temp1 as $value) {
                     echo $value.',';
                  }?>]
                }, {
                    name: 'Обратка',
                    data: [
                    <?php
                    foreach ($temp2 as $value) {
                     echo $value.',';
                  }?>]
                }]
            });
            });
          </script>
          <div class="">
            <!--Блок с графиком данных контролера -->
            <div id="container_gr"></div>
         </div>
        </div>
      </div>
    </div> 
  </div>
</div> 













    
  