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
                            <strong>Nivel de satisfacción de la información brindada al ciudadano</strong>
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
                                    <div class="form-group col-md-2">
                                        <label for="text-input" class=" form-control-label">Trimestre</label>
                                            <select name="select" id="select" class="form-control">
                                            <option value="1">I Trimestre</option>
                                            <option value="2">Febrero</option>
                                            <option value="3">Diciembre</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="text-input" class=" form-control-label">Encuestados Satisfechos</label><input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="text-input" class=" form-control-label">Total Encuestados</label>
                                        <input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control">

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
                            <strong>Nivel de satisfacción de la información brindada al ciudadano</strong>
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
                                        <th scope="col">TRIMESTRE I</th>
                                        <th scope="col">TRIMESTRE II</th>
                                        <th scope="col">TRIMESTRE III</th>
                                        <th scope="col">TRIMESTRE IV</th>

                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>54/67</td>
                                        <td>23/84</td>
                                        <td>5/20</td>
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
                        <strong>Nivel de satisfacción de la información brindada al ciudadano</strong>
                        </div>

                        <div class="card-body card-block">
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
        type: 'areaspline'
    },
    title: {
        text: 'Nivel de satisfacción de la información brindada al ciudadano'
    },
    subtitle: {
            text: ''
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
            'Trimestre I',
            'Trimestre II',
            'Trimestre III',
            'Trimestre IV'
        ]

    },
    yAxis: {
        title: {
            text: 'N° de ciudadanos satisfechos con la información / N° total de ciudadanos encuestados'
        }
    },
    tooltip: {
        shared: false,
        valueSuffix: '%'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5,
            dataLabels: {
               enabled: true
           },
           enableMouseTracking: true
        }
    },
    series: [{
        name: 'Indicador',
        data: [34.6, 44.8, 33.2, 66.2],
        color: 'rgba(69,172,224)'
    }]
});
</script>
