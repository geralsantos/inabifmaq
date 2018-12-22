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
                        <strong>Nivel de ejecución del plan de acción del centro MAC</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">

                                <div class="form-group col-md-7">
                                    <div class=" "><label for="text-input" class=" form-control-label">Acción Programada</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class=""><label for="text-input" class=" form-control-label">Meta</label><input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class=""><label for="text-input" class=" form-control-label">Resultado de Meta</label>
                                        <input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control"> </div>
                                </div>
                               <!--  <div class="form-group col-md-2">
                                    <div class=""><label for="text-input" class=" form-control-label">Brecha</label>
                                        <div class="input-group mb-2">
                                        <input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control"><div class="input-group-prepend">
                                        <div class="input-group-text">%</div>
                                    </div> </div></div>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <div class=""><label for="text-input" class=" form-control-label">Fecha Inicio Programada</label>
                                        <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechainiprogramada" data-language='es'  /></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=""><label for="text-input" class=" form-control-label">Fecha Inicio Real</label>
                                        <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechainireal" data-language='es'  /></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=""><label for="text-input" class=" form-control-label">Fecha Fin Programada</label>
                                        <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechafinprogramada" data-language='es'  /></div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class=""><label for="text-input" class=" form-control-label">Fecha Fin Real</label>
                                        <input type="text" class="datepicker-here form-control" id="datepicker" name="dtpfechafinreal" data-language='es'  /></div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="form-group col-md-12">
                                <label for="text-input" class=" form-control-label">Observación</label>
                                   <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>

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
                        <strong>Nivel de ejecución del plan de acción del centro MAC</strong>
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
                                    <th scope="col"> I TRIMESTRE</th>
                                    <th scope="col">II TRIMESTRE</th>
                                    <th scope="col">III TRIMESTRE</th>
                                    <th scope="col">III TRIMESTRE</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>54/67</td>
                                    <td>23/84</td>
                                    <td>55/65</td>
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
                    <strong>Nivel de ejecución del plan de acción del centro MAC</strong>
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
        type: 'bar'
    },
    title: {
        text: 'Nivel de ejecución del plan de acción del centro MAC'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['TRIMESTRE I', 'TRIMESTRE II', 'TRIMESTRE III', 'TRIMESTRE IV'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        useHTML: true,
        valueDecimals: 2,
        formatter: function () {
            var ejecutadas = chart.series[0].data[this.series.data.indexOf( this.point )].y;
            var programados = chart.series[1].data[this.series.data.indexOf( this.point )].y
            var total = '';
              total = ('<small> '+this.x+'</small><table><tr><td style="color: '+this.series.color+'">N° de acciones realizadas/N° de acciones programadas: </td>' +
                  '<td style="text-align: right"><b>'+(((ejecutadas/programados)*100).toFixed(2))+'%</b></td></tr></table>');
                  /*if (this.series.name != "Nivel de Servicio < 20 seg") {
                    recibidas = ('<small> Día '+this.x+'</small><table><tr><td style="color: '+this.series.color+'">'+this.series.name+': </td>' +
                        '<td style="text-align: right"><b>'+this.y+'</b></td></tr></table>');
                  }*/
            return total;
        }
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'N° acciones realizadas',
        data: [107, 31, 635, 203]
    }, {
        name: 'N° acciones programadas',
        data: [133, 156, 947, 408]
    }]
});

</script>


