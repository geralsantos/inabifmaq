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
                              <strong>Ratio de atenciónpor numero de tickets emitidos</strong>
                          </div>
                          <div class="card-body">
                              <div class="row form-group">
                                  <div class="col col-md-1 col-sm-2"><label for="select" class=" form-control-label">Fecha:</label></div>
                                  <div class="col-12 col-md-3  col-sm-8">
                                    <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechafinreal" data-language='es'  />
                                  </div>
                              </div>

                              <div class="table-responsive">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">N°&nbsp;Servicios&nbsp;1</th>
                                                        <th scope="col">N°&nbsp;Servicios&nbsp;2</th>
                                                        <th scope="col">N°&nbsp;Servicios&nbsp;3</th>
                                                        <th scope="col">N°&nbsp;Servicios&nbsp;4</th>
                                                        <th scope="col">N°&nbsp;Servicios&nbsp;5</th>
                                                        <th scope="col">N°&nbsp;Servicios&nbsp;6</th>
                                                        <th scope="col">N°&nbsp;Servicios&nbsp;7</th>
                                                        <th scope="col">N°&nbsp;Servicios&nbsp;8</th>
                                                        <th scope="col">N°&nbsp;Servicios&nbsp;9</th>
                                                        <th scope="col">N°&nbsp;Servicios&nbsp;10</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                            <td>54</td>
                                                            <td>33</td>
                                                            <td>25</td>
                                                            <td>14</td>
                                                            <td>10</td>
                                                            <td>5</td>
                                                            <td>4</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>0</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                              </div>

                          </div>
                      </div>
                  </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <strong>Ratio de atención por número de tickets emitidos</strong>
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
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Ratio de atención por número de tickets emitidos'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} personas ',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Cantidad de Personas',
        colorByPoint: true,
        data: [{
            name: '1 Servicio',
            y: 54,
            sliced: true,
            selected: true
        }, {
            name: '2 Servicios',
            y: 33
        }, {
            name: '3 Servicios',
            y: 25
        }, {
            name: '4 Servicios',
            y: 14
        }, {
            name: '5 Servicios',
            y: 10
        },
        {
            name: '6 Servicios',
            y: 5
        }, {
            name: '7 Servicios',
            y: 4
        }, {
            name: '8 Servicios',
            y: 1
        }]
    }]
});
</script>
