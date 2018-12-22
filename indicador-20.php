<?php include('header.php'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">

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
                    <strong>Cumplimiento de los programas de capacitación/entrenamiento del personal</strong>
                    <h6>Formulario de Cargas de Datos</h6>
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
                                        <option value="1">Trimestre I</option>
                                        <option value="2">Trimestre II</option>
                                        <option value="3">Trimestre III</option>
                                        <option value="3">Trimestre III</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <div class=""><label for="text-input" class=" form-control-label">Capacitaciones ejecutadas</label><input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=""><label for="text-input" class=" form-control-label">Capacitaciones programadas</label>
                                        <input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control"> </div>
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
                        <strong>Cumplimiento de los programas de capacitación/entrenamiento del personal</strong>
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

                                    <th scope="col">Trimestre&nbsp;I</th>
                                    <th scope="col">Trimestre&nbsp;II</th>
                                    <th scope="col">Trimestre&nbsp;III</th>
                                    <th scope="col">Trimestre&nbsp;IV</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">

                                    <td>54/67</td>
                                    <td>23/84</td>
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
                    <strong>Cumplimiento de los programas de capacitación/entrenamiento del personal</strong>
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


var chart = Highcharts.chart('lesly', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Cumplimiento de los programas de capacitación/entrenamiento del personal'
    },
    xAxis: {
        categories: [
            'I TRIMESTRE',
            'II TRIMESTRE',
            'III TRIMESTRE',
            'IV TRIMESTRE'
        ]
    },
    yAxis: [{
        min: 0,
        title: {
            text: 'N° de capacitaciones ejecutadas / N° capacitaciones programadas'
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
            total = ('<small> '+this.x+'</small><table><tr><td style="color: '+this.series.color+'">N° de capacitaciones ejecutadas/N° capacitaciones programadas: </td>' +
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
            dataLabels:{
              enabled: true
            }
        }
    },
    series: [{
        name: 'N° de citas programadas',
        data: [120, 200, 70, 356],
        color: 'rgba(248,161,63,1)',

        pointPadding: 0.35,
        pointPlacement: 0
    }, {
        name: 'N° de citas entregadas',
        data: [88.9, 77.4, 59.3, 100],
        color: 'rgba(186,60,61,.9)',

        pointPadding: 0.4,
        pointPlacement: 0
    }]
});
</script>
