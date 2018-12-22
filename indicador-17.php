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
                        <strong>Tasa de reclamos y quejas</strong>
                        <h6>Formulario de Carga de Datos</h6>
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
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Mes</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Diciembre</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-7">
                                    <div class=""><label for="text-input" class=" form-control-label">N° Quejas y Reclamos</label><input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control"> </div>
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
                        <strong>Tasa de reclamos y quejas</strong>
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
                                <tr>

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
                            <tbody>

                                <tr>

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
                    <strong>Tasa de reclamos y quejas</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-1 col-sm-2">
                                <label for="select" class=" form-control-label">Año:</label>
                            </div>
                            <div class="col-12 col-md-2  col-sm-8">
                                <select name="select" id="select" class="form-control">
                                    <option value="1">2018</option>
                                    <option value="2">2017</option>
                                    <option value="3">2016</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div id="lesly" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->
        <?php include('footer.php'); ?>
<script>






Highcharts.chart('lesly', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Tasa de reclamos y quejas'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'N° de quejas y reclamos / N° de tickets totales <br> Porcentaje'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Tasa de reclamos y quejas: <b>{point.y:.1f} %</b>'
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Population',
        data: [
            ['Enero', 24.2],
            ['Febrero', 20.8],
            ['Marzo', 14.9],
            ['Abril', 13.7],
            ['Mayo', 13.1],
            ['Junio', 12.7],
            ['Julio', 12.4],
            ['Agosto', 12.2],
            ['Septiembre', 12.0],
            ['Octubre', 11.7],
            ['Noviembre', 11.5],
            ['Diciembre', 11.2]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f} %', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
</script>
