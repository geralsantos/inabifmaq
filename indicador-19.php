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
                    <strong>Porcentaje de inducción al personal en la estrategia MAC</strong>
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
                                    <label for="text-input" class=" form-control-label">Semestre</label>
                                    <select id="mes" v-model="mes" class="form-control" >
                                        <option value="1">Semestre I</option>
                                        <option value="2">Semestre II</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-7">
                                    <div class=""><label for="text-input" class=" form-control-label">N° de personal al que se le impartió la inducción</label><input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control"> </div>
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
                        <strong>Porcentaje de inducción al personal en la estrategia MAC</strong>
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
                                    <th scope="col">Semestre I</th>
                                    <th scope="col">Semestre II</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">

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
                    <strong>Porcentaje de inducción al personal en la estrategia MAC</strong>
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
        type: 'column'
    },
    title: {
        text: 'Porcentaje de inducción al personal en la estrategia MAC al personal'
    },
    xAxis: {
        categories: [
        'I SEMESTRE',
            'II SEMESTRE'
        ]
    },
    yAxis: [{
        min: 0,
        title: {
            text: 'N° de personal al que se le impartió la inducción / N° total de personal'
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
        pointFormat: 'Porcentaje Porcentaje de inducción al personal: <b>{point.y:.1f} %</b>'
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
        name: 'N° total de personal',
        data: [100, 100],
        color: 'rgba(248,161,63,1)',

        pointPadding: 0.35,
        pointPlacement: 0
    }, {
        name: 'N° de personal al que se le impartió la inducción',
        data: [88.9, 77],
        color: 'rgba(186,60,61,.9)',

        pointPadding: 0.4,
        pointPlacement: 0
    }]
});
</script>
