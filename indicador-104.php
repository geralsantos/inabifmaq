<?php include('header.php'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                         <h1>TABLERO INDICADORES MAC</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <strong>Atenciones totales diarias y acumuladas</strong>
                    <h6>Formulario de Cargas de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <label for="text-input" class=" form-control-label">Año</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="1">2018</option>
                                        <option value="2">2017</option>
                                        <option value="3">2016</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Mes</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Diciembre</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">

                                        <label for="text-input" class=" form-control-label">Adjuntar archivo excel</label>

                                        <input type="file" id="file-input" name="file-input" class="form-control-file">
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-12 text-center" >
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-send"></i> Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Atenciones totales diarias y acumuladas</strong>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col col-md-1 col-sm-2"><label for="select" class=" form-control-label">Año:</label></div>
                            <div class="col-12 col-md-3  col-sm-8">
                                <select name="select" id="select" class="form-control">
                                    <option value="1">2018</option>
                                    <option value="2">2017</option>
                                    <option value="3">2016</option>
                                </select>
                            </div>
                            <div class="col col-md-1 col-sm-2"><label for="select" class=" form-control-label">Mes:</label></div>
                            <div class="col-12 col-md-3  col-sm-8">
                                <select name="select" id="select" class="form-control">
                                    <option value="1">Enero</option>
                                    <option value="2">2017</option>
                                    <option value="3">2016</option>
                                </select>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <div class="row">
                            <div class="col-lg-12 ">
                                <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Enero (Promedio)</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Llamadas Recibidas</td>
                                    <td>6587</td>
                                    </tr>
                                    <tr>
                                    <td>Llamadas Atendidas</td>
                                    <td>4553</td>
                                    </tr>
                                    <tr>
                                    <td>Nivel de Servicio < 20 seg</td>
                                    <td>2379</td>
                                    </tr>
                                    <tr>
                                    <td>Nivel de Servicio(%) < 20 seg</td>
                                    <td>36.11%</td>

                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <strong>Atenciones totales diarias y acumuladas</strong>
                    </div>
                    <div class="card-body card-block">
                        <div id="lesly" style="min-width: 900px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->
        <?php include('footer.php'); ?>

<script>
Highcharts.createElement('link', {
    href: 'https://fonts.googleapis.com/css?family=Dosis:400,600',
    rel: 'stylesheet',
    type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

Highcharts.theme = {
    colors: ['#7cb5ec', '#f7a35c', '#586675'],
    chart: {
        backgroundColor: null,
        style: {
            fontFamily: 'Dosis, sans-serif'
        }
    },
    title: {
        style: {
            fontSize: '16px',
            fontWeight: 'bold',
            textTransform: 'uppercase'
        }
    },
    tooltip: {
        borderWidth: 0,
        backgroundColor: 'rgba(219,219,216,0.8)',
        shadow: false
    },
    legend: {
        itemStyle: {
            fontWeight: 'bold',
            fontSize: '13px'
        }
    },
    xAxis: {
        gridLineWidth: 1,
        labels: {
            style: {
                fontSize: '12px'
            }
        }
    },
    yAxis: {
        minorTickInterval: 'auto',
        title: {
            style: {
                textTransform: 'uppercase'
            }
        },
        labels: {
            style: {
                fontSize: '12px'
            }
        }
    },
    plotOptions: {
        candlestick: {
            lineColor: '#404048'
        }
    },


    // General
    background2: '#F0F0EA'

};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);
var chart = Highcharts.chart('lesly', {
    title: {
        text: 'Atenciones Totales Diarias y Acumuladas'
    },
    xAxis: {
        categories: ['01', '02', '03', '04', '05','06','07','08','09','10','11', '12', '13', '14', '15','16','17','18','19','20','21', '22', '23', '24', '25','26','27','28','29','30']
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    labels: {
        items: [{
            html: 'Conocer el Nivel de Atención',
            style: {
                left: '50px',
                top: '18px',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
            }
        }]
    },
    plotOptions: {
        column: {
            grouping: false,
            shadow: false,
            borderWidth: 0,
            dataLabels: {
                enabled: true
            },
        },
        spline: {
            dataLabels: {
                enabled: true
            },
        }
    },
    tooltip: {
        useHTML: true,
        headerFormat: '<small>{point.key}</small><table>',
        pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
            '<td style="text-align: right"><b>{point.percentage}</b></td></tr>',
        footerFormat: '</table>',
        valueDecimals: 2,
        formatter: function () {
            var recibidas = chart.series[0].data[this.series.data.indexOf( this.point )].y;
            var nivel_servicio = this.y;
              recibidas = ('<small> Día '+this.x+'</small><table><tr><td style="color: '+this.series.color+'">'+this.series.name+': </td>' +
                  '<td style="text-align: right"><b>'+(((nivel_servicio/recibidas)*100).toFixed(2))+'%</b></td></tr></table>');
                  if (this.series.name != "Nivel de Servicio < 20 seg") {
                    recibidas = ('<small> Día '+this.x+'</small><table><tr><td style="color: '+this.series.color+'">'+this.series.name+': </td>' +
                        '<td style="text-align: right"><b>'+this.y+'</b></td></tr></table>');
                  }
            return recibidas;
        }
    },
    credits:{
        enabled:false
    },
    series: [{
        type: 'column',
        name: 'Llamadas Recibidas',
        data: [1879, 980, 262, 1926, 1540,1879, 980, 262, 1926, 1540,1879, 980, 262, 1926, 1540,1879, 980, 262, 1926, 1540,1879, 980, 262, 1926, 1540,1879, 980, 262, 1926, 1540],
    }, {
        type: 'column',
        name: 'Llamadas Atendidas',
        pointPadding: 0.2,
        data: [1151, 791, 235, 1226, 1150,1151, 791, 235, 1226, 1150,1151, 791, 235, 1226, 1150,1151, 791, 235, 1226, 1150,1151, 791, 235, 1226, 1150,1151, 791, 235, 1226, 1150]
    }, {
        type: 'spline',
        name: 'Nivel de Servicio < 20 seg',
        data: [1442, 1542, 1214, 1533, 1648,1442, 1542, 1214, 1533, 1648,1442, 1542, 1214, 1533, 1648,1442, 1542, 1214, 1533, 1648,1442, 1542, 1214, 1533, 1648,791, 235, 1226, 1150,1151], /*este resultado es con la columna (Llamadas Atendidas<20seg / Llamadas recibidas) * 100*/
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }

    }/*, {
        type: 'column',
        name: 'Llamadas Atendidas < 20 seg',
        pointPadding: 0.2,
        data: [442, 542, 214, 533, 648],
        visible: false,
        showInLegend: false,
    }*/
    /*, {
        type: 'pie',
        name: 'Total consumption',
        data: [{
            name: 'Jane',
            y: 13,
            color: Highcharts.getOptions().colors[0] // Jane's color
        }, {
            name: 'John',
            y: 23,
            color: Highcharts.getOptions().colors[1] // John's color
        }, {
            name: 'Joe',
            y: 19,
            color: Highcharts.getOptions().colors[2] // Joe's color
        }],
        center: [185, 70],
        size: 100,
        showInLegend: false,
        dataLabels: {
            enabled: false
        }
    }*/]
});


/*
Highcharts.chart('lesly', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Average Monthly Temperature and Rainfall in Tokyo'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: [{
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}°C',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Temperature',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Rainfall',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} mm',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 120,
        verticalAlign: 'top',
        y: 100,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || 'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'Rainfall',
        type: 'column',
        yAxis: 1,
        data: [86.0, 74.8, 86.2, 83.1, 94.9, 32.7, 38.0, 32.1, 55.6, 72.0, 83.3],
        tooltip: {
            valueSuffix: ' mm'
        }

    }, {
        name: 'Temperature',
        type: 'spline',
        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
        tooltip: {
            valueSuffix: '°C'
        }
    }]
});*/

</script>
