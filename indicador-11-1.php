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
                              <strong>Ticket de atencion x hora</strong>
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
                                      <tr>
                                          <th scope="col">8:00</th>
                                          <th scope="col">9:00</th>
                                          <th scope="col">10:00</th>
                                          <th scope="col">11:00</th>
                                          <th scope="col">12:00</th>
                                          <th scope="col">13:00</th>
                                          <th scope="col">14:00</th>
                                          <th scope="col">15:00</th>
                                          <th scope="col">16:00</th>
                                          <th scope="col">17:00</th>
                                          <th scope="col">18:00</th>
                                          <th scope="col">19:00</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>54</td>
                                          <td>23</td>
                                          <td>5</td>
                                          <td>54</td>
                                          <td>54</td>
                                          <td>23</td>
                                          <td>5</td>
                                          <td>54</td>
                                          <td>23</td>
                                          <td>5</td>
                                          <td>54</td>
                                          <td>23</td>

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
                        <strong>Ticket de atencion x hora</strong>
                        </div>
                        <div class="card-body card-block">
                                <div id="lesly" style="min-width: 300px; height: 400px; margin: 0 auto"></div>

                        </div>


                    </div>
                </div>




        </div> <!-- .content -->
        <?php include('footer.php'); ?>
<script>


Highcharts.chart('lesly', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Tickets de atencion x hora'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        allowDecimals: false,
        labels: {
            formatter: function () {
                return this.value + ':00'; // clean, unformatted number for year
            }
        }
    },
    yAxis: {
        title: {
            text: 'N° de tickets generados x hora'
        },
        labels: {
            formatter: function () {
                return this.value ;
            }
        }
    },
    tooltip: {
        pointFormat: 'A las {point.x}:00 <br/> han sido emitidos <b>{point.y:,.0f}</b> tickets'
    },
    plotOptions: {
        area: {
            pointStart: 8,
            marker: {
                enabled: true,
                symbol: 'circle',
                radius: 3,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            },
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Tickets de atención',
        data: [20, 40, 50, 60, 70, 80, 75, 55, 44, 23, 13, 9
        ]
    }]
});

/* Highcharts.chart('lesly2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Ticket de atención. Reporte semanal'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Lunes',
            'Martes',
            'Miércoles',
            'Jueves',
            'Viernes',
            'Sábado',
            'Domingo',
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cantidad de Tickets'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'N° de tickets de atención',
        data: [49, 71, 0, 0, 0, 0, 0]

    }]
});
*/
</script>
