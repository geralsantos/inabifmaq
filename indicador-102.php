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
                      <strong>Control de Asistencia</strong>
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
                          <thead class="thead-dark text-center">
                              <tr>
                                  <th scope="col">TURNO</th>
                                  <th scope="col">Entidad 1</th>
                                  <th scope="col">Entidad 2</th>
                                  <th scope="col">Entidad 3</th>
                                  <th scope="col">Entidad 4</th>
                                  <th scope="col">Entidad 5</th>
                              </tr>
                          </thead>
                          <tbody class="text-center">
                              <tr>
                                  <td>Turno 1</td>
                                  <td>5</td>
                                  <td>3</td>
                                  <td>4</td>
                                  <td>7</td>
                                  <td>2</td>
                              </tr>
                              <tr>
                                  <td>Turno 2</td>
                                  <td>5</td>
                                  <td>2</td>
                                  <td>3</td>
                                  <td>2</td>
                                  <td>1</td>
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
                    <strong>Control de Asistencia</strong>
                    </div>
                    <div class="card-body card-block">

                        <div id="lesly" style="min-width: 900px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>

<script>


Highcharts.chart('lesly', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Control de Asistencia'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Entidad 1',
            'Entidad 2',
            'Entidad 3',
            'Entidad 4',
            'Entidad 5'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'N° de Personas que tienen Hora de asistencia mayor o igual a la hora inicio de turno'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
            }
        }
    },
    series: [{
        name: 'Turno 1',
        data: [49, 71, 66, 77, 55]

    }, {
        name: 'Turno 2',
        data: [83, 78, 55,88, 66 ]

    }]
});
</script>
