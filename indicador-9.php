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
                        <strong>Tasa de atención de citas</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-group col-md-2">
                            <label for="text-input" class=" form-control-label">Mes</label>
                                <select name="select" id="select" class="form-control">
                                <option value="1">Enero</option>
                                <option value="2">Febrero</option>
                                <option value="3">Diciembre</option>
                            </select>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th scope="col">SEMANA 1</th>
                                    <th scope="col">SEMANA 2</th>
                                    <th scope="col">SEMANA 3</th>
                                    <th scope="col">SEMAN 4</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
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
                    <strong>Tasa de atención de citas</strong>
                    </div>
                    <!--div class="card-body card-block">
                        <div id="lesly" style="min-width: 900px; height: 400px; margin: 0 auto"></div>
                    </div-->

                    <div class="card-body card-block">
                        <div id="lesly" style="min-width: 900px; height: 400px; margin: 0 auto"></div>
                    </div>

                </div>
            </div>
        </div> <!-- .content -->
<?php include('footer.php'); ?>
<script>


 var chart = Highcharts.chart('lesly', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Tasa de atención de citas'
    },
    subtitle:{
        text:'N° de citas entregadas / N° de citas programadas'
    },
    xAxis: {
        categories: [
        'Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'
        ]
    },
    yAxis: [{
        min: 0,
        title: {
            text: 'N° de citas <br> (porcentaje)'
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
      useHTML: true,
      valueDecimals: 2,
      shared:false,
      formatter: function () {
        var entregadas = chart.series[1].data[this.series.data.indexOf( this.point )].y;
          var programadas = chart.series[0].data[this.series.data.indexOf( this.point )].y;
          console.log(entregadas);
          var total = '';
            total = ('<small> '+this.x+'</small><table><tr><td style="color: '+this.series.color+'">N° de citas entregadas/N° de citas programadas: </td>' +
                '<td style="text-align: right"><b>'+(((entregadas/programadas)*100).toFixed(2))+'%</b></td></tr></table>');
                /*if (this.series.name != "Nivel de Servicio < 20 seg") {
                  recibidas = ('<small> Día '+this.x+'</small><table><tr><td style="color: '+this.series.color+'">'+this.series.name+': </td>' +
                      '<td style="text-align: right"><b>'+this.y+'</b></td></tr></table>');
                }*/
          return total;
      }
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        column: {
            grouping: false,
            shadow: false,
            borderWidth: 0,
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: true
        }
    },
    series: [{
        name: 'N° de citas programadas',
        data: [5, 3, 4, 7],
        color: 'rgba(165,170,217,1)',

        pointPadding: 0.3,
        pointPlacement: 0.
    }, {
        name: 'N° de citas entregadas',
        data: [2, 2, 3, 2],
        color: 'rgba(126,86,134,.9)',

        pointPadding: 0.4,
        pointPlacement: 0
    }]
});

</script>
