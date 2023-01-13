<!DOCTYPE html>
<html class="page" lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="/style/img/apple-touch-icon.png" />
		<link rel="stylesheet" href="/style/alt.style.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<title>SovHome</title>
	</head>
	<body class="page_body">
		<header class="header">
			<div class="header_logo">
				<a class="logo_link" href="../index.php">
					<img class="logo_imag" src="/style/img/apple-touch-icon.png">
				</a>
			</div>
			<div class="header_login">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной 
				
			</div>
			<div class="header_time">
					<a href="https://time.is/Sovetskiy,_Khanty-Mansia" id="time_is_link" rel="nofollow" ></a>
					<span id="_z44a" ></span>
					<script src="//widget.time.is/ru.js"></script>
					<script>time_is_widget.init({_z44a:{id:"Sovetskiy__Khanty-Mansia_z44a", template:"<b>Время</b>:TIME <br> DATE <br> SUN", time_format:"hours:minutes", date_format:"dayname, dnum monthname year г", sun_format:"<b>восход:</b> srhour:srminute <b>закат:</b> sshour:ssminute", coords:"61.3613900,63.5841700"}});</script>			
		</header>

		<main class="main">
      		<section class="main_section">
        		<h1>ДАНЫЕ КОНТРОЛЕРА</h1>
                	<div class="text">Соединение: 
                			<?php 
                				$error=false;
                				if (time() - $ard['connection'] > 2100) {
                					echo '<font color=#faf7f7>Потеряно</font>';
                					$error = true;
                				} else {
                					echo 'Активно';
                			}?><br>
                		Выгрузка: <?php echo clock($ard['connection']);?><br>
                		Включён: <?php echo clock($ard['reboot']);?><br>
                		Время работы: 
                			<?php 
                				if ($error == true) {
                					echo '<font color=#faf7f7>not connected </font>';
                				} else {
                					echo datediff($ard['reboot'],time());
                					//var_dump($ard);
                				}
                			?>
                    </div>
      		</section>
      		<section>
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
					$('#container').highcharts({
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

				<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto; margin-top: 5px; margin-bottom: 5px;">
				</div>
      		</section>
    	</main>
    	<footer class="footer">
      		Подвал
    	</footer>
		
	</body>
</html>