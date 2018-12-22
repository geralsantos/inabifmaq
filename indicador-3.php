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
                            <div class="row form-group">

                                    <div class="form-group col-md-3">
                                        <label for="text-input" class=" form-control-label">Selecciones el día :</label>
                                        <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechafinreal" data-language='es'  />
                                    </div>
                                    <div class="form-group col-md-8 text-left">
                                                <br>
                                        <button type="submit" class="btn btn-success btn-md">
                                            <i class="fa fa-send"></i> Guardar Datos
                                        </button>
                                    </div>
                                </div>
                              <div class="table-responsive">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                <table class="table">
                                  <thead class="thead-dark text-center">
                                      <tr>
                                          <th scope="col">GRUPO</th>
                                          <th scope="col">RUBRO</th>
                                          <th scope="col">MAL FUNCIONAMIENTO APERTURA</th>
                                          <th scope="col">MAL FUNCIONAMIENTO RELEVO</th>
                                          <th scope="col">MAL FUNCIONAMIENTO CIERRE</th>
                                      </tr>
                                  </thead>
                                  <tbody class="text-center">

                                    <tr><td>Infraestructura</td><td>Luminarias</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td>
                                      <td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td>
                                      <td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td>
                                      </tr>
                                    <tr><td>Infraestructura</td><td>Instalacion electrica</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td>
                                      <td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td>
                                      <td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Infraestructura</td><td>Aire acondicionado</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Infraestructura</td><td>SSHH operativos</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Infraestructura</td><td>Requisitos de atencion preferencial</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Biometrico</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Sist Colas</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Internet</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Huellero</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Sistema de citas</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Computadoras & Multifuncionales</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Orden</td><td>Zona de recepcion en orden</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Orden</td><td>Modulos de atencion en orden</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Seguridad</td><td>Servicio operativo</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Limpieza</td><td>Servicio operativo</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Limpieza</td><td>Local limpio</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Exterior</td><td>Ordenadores de colas</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Exterior</td><td>Colas establecidas</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Exterior</td><td>Orientación en colas</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Monitores de video</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Luces de emergencia</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Extintores</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Servicio de Telefonía</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Correo Electrónico</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                    <tr><td>Equipos</td><td>Antivirus</td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td><td>
                                      <select name="select" id="select" class="form-control">
                                          <option value="0">NO</option>
                                          <option value="1">SI</option>
                                      </select></td></tr>
                                      <tr><td>RRHH</td><td>PCM</td><td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    <td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    <td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    </tr>
                                    <tr><td>RRHH</td><td>BN</td><td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    <td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    <td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    </tr>
                                    <tr><td>RRHH</td><td>RENIEC</td><td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    <td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    <td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    </tr>
                                    <tr><td>RRHH</td><td>SUNAT</td><td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    <td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    <td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    </tr>
                                    <tr><td>RRHH</td><td>MTC</td><td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    <td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    <td>
                                    <input type="text" id="" name="" value="6" class="form-control"> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                          </div>
                        </div>
                        <br>

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
            text: 'N° condiciones no conformes / N° condiciones totales <br> Porcentaje'
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
