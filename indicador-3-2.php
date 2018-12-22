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
                        <strong>Incumplimiento de condiciones mínimas de funcionamiento de centro MAC </strong>
                        <h6>Formuario de Carga de Datos</h6>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="text-input" class=" form-control-label">Fecha de Registro</label>
                                        <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechafinreal" data-language='es'  />
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="select" class=" form-control-label">Grupo</label>
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">RRHH</option>
                                            <option value="1">Orden</option>
                                            <option value="2">Equipos</option>
                                            <option value="3">Seguridad</option>
                                            <option value="3">RRHH</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="select" class=" form-control-label">Rubro</label>
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">PCM</option>
                                            <option value="1">BN</option>
                                            <option value="2">RENIEC</option>
                                            <option value="3">SUNAT</option>
                                            <option value="3">MTC</option>
                                        </select>
                                    </div>
                                </div>

                           <!--      <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="select" class=" form-control-label">Mal funcionamiento en Apertura</label>
                                        <select name="select" id="select" class="form-control">
                                            <option value="1">No</option>
                                            <option value="2">Si</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="text-input" class=" form-control-label">Observación</label>
                                        <textarea id="txtobservacion" name="txtobservacion" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="select" class=" form-control-label">Mal funcionamiento en Relevo</label>
                                        <select name="select" id="select" class="form-control">
                                            <option value="1">No</option>
                                            <option value="2">Si</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="text-input" class=" form-control-label">Observación</label>
                                        <textarea id="txtobservacion" name="txtobservacion" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                         <label for="select" class=" form-control-label">Mal funcionamiento en Cierre</label>
                                        <select name="select" id="select" class="form-control">
                                            <option value="1">No</option>
                                            <option value="2">Si</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="text-input" class=" form-control-label">Observación</label>
                                        <textarea id="txtobservacion" name="txtobservacion" class="form-control"></textarea>
                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="text-input" class=" form-control-label">N° de Personas Programadas en Turno Apertura</label>
                                        <input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="text-input" class=" form-control-label">Observación</label>
                                        <textarea id="txtobservacion" name="txtobservacion" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="text-input" class=" form-control-label">N° de Personas Programadas en Turno Relevo</label>
                                        <input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="text-input" class=" form-control-label">Observación</label>
                                        <textarea id="txtobservacion" name="txtobservacion" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="text-input" class=" form-control-label">N° de Personas Programadas en Turno Cierre</label>
                                        <input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="text-input" class=" form-control-label">Observación</label>
                                        <textarea id="txtobservacion" name="txtobservacion" class="form-control"></textarea>
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
                        <strong>Incumplimiento de condiciones mínimas de funcionamiento del Centro MAC</strong>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-md-1 col-sm-12">
                                <label for="select" class=" form-control-label">Fecha:</label>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechafinreal" data-language='es'  />
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col"></th>
                                <th scope="col">Lunes 2/10</th>
                                <th scope="col">Martes 3/10</th>
                                <th scope="col">Miércoles 4/10</th>
                                <th scope="col">Jueves 5/10</th>
                                <th scope="col">Viernes 6/10</th>
                                <th scope="col">Sábado 7/10</th>
                                <th scope="col">Domingo 8/10</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">Apertura</th>
                                <td>28/30</td>
                                <td>25/30</td>
                                <td>22/30</td>
                                <td>28/30</td>
                                <td>25/30</td>
                                <td>22/30</td>
                                <td>28/30</td>
                                </tr>
                                <tr>
                                <th scope="row">Relevo</th>
                                <td>16/30</td>
                                <td>21/30</td>
                                <td>24/30</td>
                                <td>12/30</td>
                                <td>25/30</td>
                                <td>26/30</td>
                                <td>17/30</td>
                                </tr>
                                <tr>
                                <th scope="row">Cierre</th>
                                <td>28/30</td>
                                <td>25/30</td>
                                <td>22/30</td>
                                <td>28/30</td>
                                <td>25/30</td>
                                <td>22/30</td>
                                <td>28/30</td>
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
                    <strong>Incumplimiento de condiciones mínimas de funcionamiento de centro MAC</strong>
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
        text: 'Incumplimiento de condiciones mínimas de funcionamiento de centro MAC'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Lunes 2/10',
            'Martes 3/10',
            'Miércoles 4/10',
            'Jueves 5/10',
            'Viernes 6/10',
            'Sábado 7/10',
            'Domingo 8/10'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'N° condiciones no conformes / N° condiciones totales'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} % </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    credits: {
        enabled: false
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
        name: 'Apertura',
        data: [49, 71, 66, 77, 55, 77, 44]

    }, {
        name: 'Relevo',
        data: [83.6, 78.8, 55,88, 66, 25.5, 88]

    }, {
        name: 'Cierre',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0]

    }]
});
</script>
