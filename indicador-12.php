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
                              <strong>Tiempo Promedio de Espera del ciudadano por trámite</strong>
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
                                          <th scope="col">RN</th>
                                          <th scope="col">RENIEC</th>
                                          <th scope="col">MININTER</th>
                                          <th scope="col">MDEA</th>
                                          <th scope="col">SIS</th>
                                          <th scope="col">SUNAT</th>

                                      </tr>
                                  </thead>
                                  <tbody class="text-center">
                                      <tr>
                                          <td>10.7</td>
                                          <td>2.6</td>

                                          <td>7.2</td>
                                          <td>5.6</td>
                                          <td>4.0</td>
                                          <td>1.9</td>

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
                        <strong>
Tiempo promedio de espera del ciudadano por trámite</strong>
                        </div>
                        <div class="card-body card-block">
                            <div id="lesly" style="min-width: 900px; height: 400px; margin: 0 auto"></div>
                        </div>

                    </div>
                </div>



        </div> <!-- .content -->
        <?php include('footer.php'); ?>
<script>




// Create the chart
Highcharts.chart('lesly', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Tiempo Promedio de Espera del ciudadano por Trámite'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Hora de inicio de atención - (Hora de emisión de ticket u Hora de derivación) <br> Promedio de tiempo de espera por entidas'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f} min'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y} min</b> aproximadamente<br/>'
    },
    credits:{
        enabled:false
    },

    "series": [
        {
            "name": "Browsers",
            "colorByPoint": true,
            "data": [
                {
                    "name": "RN",
                    "y": 10.74,
                    "drilldown": "Chrome"
                },
                {
                    "name": "RENIEC",
                    "y": 2.57,
                    "drilldown": "Firefox"
                },
                {
                    "name": "MININTER",
                    "y": 7.23,
                    "drilldown": "Internet Explorer"
                },
                {
                    "name": "MDEA",
                    "y": 5.58,
                    "drilldown": "Safari"
                },
                {
                    "name": "SIS",
                    "y": 4.02,
                    "drilldown": "Edge"
                },
                {
                    "name": "SUNAT",
                    "y": 1.92,
                    "drilldown": "Opera"
                }
            ]
        }
        ]
});

</script>
