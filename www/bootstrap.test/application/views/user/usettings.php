<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>SovHome</h3>
                <strong>SH</strong>
            </div>

            <ul class="list-unstyled components">
                <li>    
                    <a href="/upage">
                        <i class="fa-solid fa-chalkboard-user fa-xl"></i>
                        Статус
                    </a>
                    <a href="/usettings">
                        <i class="fa-solid fa-gears fa-xl"></i>
                        Параметры
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Pages
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="/logout">
                        <i class="fa-solid fa-right-from-bracket fa-xl"></i>
                        Выход
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="row flex-column g-1 mb-2">
                <h3 >Данные контроллера: <?php echo($vars['devStatus']['devName']) ?></h3>
                <div class="col text-dark rounded-2">
                    Соединение: 
                    <?php 
                      debug($vars);
                      $error=false;
                      if (time() - $vars['devStatus']['connectTime'] > 2100) {
                        echo '<span class="text-danger">потеряно</span>';
                        $error = true;
                      } else {
                        echo '<span class="text-success">установлено</span>';
                    }?>
                </div>
                <div class="col text-dark rounded-2">
                    Время работы: 
                    <?php
                        if ($error == true) {
                          echo '<span class="text-danger">неизвестно</span>';
                        } else {
                          echo datediff($vars['devStatus']['sendTime'],time());
                        }
                      ?>
                </div>
                <div class="col text-dark rounded-2">
                    Выгрузка: <?php echo clock($vars['devStatus']['connectTime']);?>
                </div>
                <div class="col text-dark rounded-2">
                    Включён: <?php echo clock($vars['devStatus']['sendTime']);?>
                </div>

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
                           <div>
                              <canvas id="myChart"></canvas>
                           </div>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="line"></div>

            <h3>Vrem</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
        </div>
    </div>
</body>

<script>
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
</script>