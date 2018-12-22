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
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tasa de Reactivación de Tickets</strong>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col col-md-1 col-sm-2"><label for="select" class=" form-control-label">Fecha:</label></div>
                                <div class="col-12 col-md-3  col-sm-8">
                                  <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechafinreal" data-language='es'  />
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                <thead class="thead-dark">
                                    <tr class="text-center">
                                        <th scope="col">LUNES</th>
                                        <th scope="col">MARTES</th>
                                        <th scope="col">MIERCOLES</th>
                                        <th scope="col">JUEVES</th>
                                        <th scope="col">VIERNES</th>
                                        <th scope="col">SABADO</th>
                                        <th scope="col">DOMINGO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>54/67</td>
                                        <td>23/84</td>
                                        <td>5/20</td>
                                        <td>54/67</td>
                                        <td>54/67</td>
                                        <td>23/84</td>
                                        <td>5/20</td>

                                    </tr>
                                </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
        <div class="content mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <strong>Tasa de Reactivación de Tickets</strong>
                    </div>
                    <div class="card-body card-block">
                        <div id="lesly" style="min-width: 900px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->
 <?php include('footer.php'); ?>
<script>



Highcharts.chart('lesly', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Tasa de Reactivación de Tickets'
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    xAxis: {
        categories: [
            'Lunes',
            'Martes',
            'Miércoles',
            'Jueves',
            'Viernes',
            'Sábado',
            'Domingo'
        ],
        plotBands: [{ // visualize the weekend
            from: 4.5,
            to: 6.5,
            color: 'rgba(68, 170, 213, .2)'
        }]
    },
    yAxis: {
        title: {
            text: 'N° de tickets reactivados / N° de tickets totales'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' tickets'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5,
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Porcentaje de la tasa de Reactivación de Tickets',
        data: [1, 3, 4, 3, 3, 5, 4]
    }]
});
</script>
