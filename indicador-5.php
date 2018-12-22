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
                            <strong>Efectividad de las acciones implementadas sobre incidencias</strong>
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
                                <thead class="thead-dark text-center">
                                    <tr>
                                    <th scope="col"></th>
                                        <th scope="col">Enero</th>
                                        <th scope="col">Febrero</th>
                                        <th scope="col">Marzo</th>
                                        <th scope="col">Abril</th>
                                        <th scope="col">Mayo</th>
                                        <th scope="col">Junio</th>
                                        <th scope="col">Julio</th>
                                        <th scope="col">Agosto</th>
                                        <th scope="col">Septiembre</th>
                                        <th scope="col">Octubre</th>
                                        <th scope="col">Noviembre</th>
                                        <th scope="col">Diciembre</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                    <td >Turno 1</td>
                                        <td>54/67</td>
                                        <td>23/84</td>
                                        <td>5/20</td>
                                        <td>54/67</td>
                                        <td>54/67</td>
                                        <td>23/84</td>
                                        <td>5/20</td>
                                        <td>54/67</td>
                                        <td>23/84</td>
                                        <td>5/20</td>
                                        <td>54/67</td>
                                        <td>23/84</td>

                                    </tr>
                                    <tr>
                                    <td>Turno 2</td>
                                        <td>54/67</td>
                                        <td>23/84</td>
                                        <td>5/20</td>
                                        <td>54/67</td>
                                        <td>54/67</td>
                                        <td>23/84</td>
                                        <td>5/20</td>
                                        <td>54/67</td>
                                        <td>23/84</td>
                                        <td>5/20</td>
                                        <td>54/67</td>
                                        <td>23/84</td>

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
                        <strong>Efectividad de las acciones implementadas sobre incidencias</strong>
                        </div>
                        <div class="card-body card-block">
                                <div id="lesly" style="min-width: 900px; height: 400px; margin: 0 auto"></div>
                        </div>

                    </div>
                </div>



        </div> <!-- .content -->
<?php include('footer.php'); ?>
<script>



var chart= Highcharts.chart('lesly', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Efectividad de las acciones implementadas sobre incidencias'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'N° incidentes resueltos / N° incidentes identificados <br> Porcentaje'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} % </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true,

    },
    credits:{
        enabled:false
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
            dataLabels: {
               enabled: true
           },
           enableMouseTracking: true
        }
    },
    series: [{
        name: 'Turno 1',
        data: [49, 71, 66, 55, 50, 33, 30,44,55,12]

    }, {
        name: 'Turno 2',
        data: [83, 78, 66, 77, 44, 84, 44,66,33,22]

    }]
});
</script>
