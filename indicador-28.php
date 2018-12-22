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
                        <strong>Cumplimiento del programa de mantenimiento</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">

                                <div class="form-group col-md-12">
                                    <div class=" "><label for="text-input" class=" form-control-label">Mantenimiento Programado</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <div class=""><label for="text-input" class=" form-control-label">Fecha Inicio Programada</label>
                                        <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechainiprogramada" data-language='es'  /></div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class=""><label for="text-input" class=" form-control-label">Fecha Inicio Real</label>
                                        <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechainireal" data-language='es'  /></div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class=""><label for="text-input" class=" form-control-label">Fecha Fin Programada</label>
                                        <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechafinprogramada" data-language='es'  /></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=""><label for="text-input" class=" form-control-label">Fecha Fin Real</label>
                                        <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechafinreal" data-language='es'  /></div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="form-group col-md-12">
                                <label for="text-input" class=" form-control-label">Observación</label>
                                   <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center" >
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-send"></i> Cargar Datos
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
                        <strong>Cumplimiento del programa de mantenimiento</strong>
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
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th scope="col"> I TRIMESTRE</th>
                                    <th scope="col">II TRIMESTRE</th>
                                    <th scope="col">III TRIMESTRE</th>
                                    <th scope="col">III TRIMESTRE</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>54/67</td>
                                    <td>23/84</td>
                                    <td>55/65</td>
                                    <td>54/67</td>


                                </tr>
                            </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <strong>Cumplimiento del programa de mantenimiento</strong>
                    </div>
                    <div class="card-body card-block">
                        <div id="lesly" style="min-width: 900px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->

        <?php include('footer.php'); ?>
<script>

var chart = Highcharts.chart('lesly', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Cumplimiento del programa de mantenimiento'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['TRIMESTRE I', 'TRIMESTRE II', 'TRIMESTRE III', 'TRIMESTRE IV'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        useHTML: true,
        valueDecimals: 2,
        formatter: function () {
            var ejecutadas = chart.series[0].data[this.series.data.indexOf( this.point )].y;
            var programados = chart.series[1].data[this.series.data.indexOf( this.point )].y
            var total = '';
              total = ('<small> '+this.x+'</small><table><tr><td style="color: '+this.series.color+'">N° de mantenimientos ejecutadas/N° de mantenimientos programadas: </td>' +
                  '<td style="text-align: right"><b>'+(((ejecutadas/programados)*100).toFixed(2))+'%</b></td></tr></table>');
                  /*if (this.series.name != "Nivel de Servicio < 20 seg") {
                    recibidas = ('<small> Día '+this.x+'</small><table><tr><td style="color: '+this.series.color+'">'+this.series.name+': </td>' +
                        '<td style="text-align: right"><b>'+this.y+'</b></td></tr></table>');
                  }*/
            return total;
        }
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'N° de mantenimientos ejecutadas',
        data: [107, 31, 635, 203, 20]
    }, {
        name: 'N° de mantenimientos programados',
        data: [133, 156, 947, 408, 60]
    }]
});
/*
Highcharts.chart('lesly', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Cumplimiento del programa de mantenimiento'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'TRIMESTRE I',
            'TRIMESTRE II',
            'TRIMESTRE III',
            'TRIMESTRE IV'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'N° de mantenimientos ejecutadas / N° de mantenimientos programados',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ''
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'bottom',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Porcentaje de Cumplimiento del programa de mantenimiento',
        data: [90, 31, 77, 44]
    }]
});

*/
/*
Highcharts.chart('lesly', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Cumplimiento del programa de mantenimiento'
    },
    xAxis: {
        categories: [
            'I TRIMESTRE',
            'II TRIMESTRE',
            'III TRIMESTRE',
            'IV TRIMESTRE'
        ]
    },
    yAxis: [{
        min: 0,
        title: {
            text: 'N° de mantenimientos ejecutadas / N° de mantenimientos programados'
        }
    }, {
        title: {
            text: ''
        },
        opposite: true
    }],
    legend: {
        shadow: false
    },
    tooltip: {
        shared: false,
        pointFormat: 'Indicador: <b>{point.y:.1f} %</b>'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        column: {
            grouping: false,
            shadow: false,
            borderWidth: 0
        }
    },
    series: [{
        name: '100%',
        data: [100, 100, 100, 100],
        color: 'rgba(248,161,63,1)',

        pointPadding: 0.35,
        pointPlacement: 0
    }, {
        name: '% Indicador',
        data: [88.9, 77, 88, 68],
        color: 'rgba(186,60,61,.9)',

        pointPadding: 0.4,
        pointPlacement: 0
    }]
});*/

</script>
