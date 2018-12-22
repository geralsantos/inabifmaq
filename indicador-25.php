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
                    <strong>Nivel de desempeño del personal</strong>
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
                                    <label for="text-input" class=" form-control-label">Trimestre</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="1">Trimestre I</option>
                                        <option value="2">Trimestre II</option>
                                        <option value="2">Trimestre III</option>
                                        <option value="2">Trimestre IV</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class=" "><label for="text-input" class=" form-control-label">DNI</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class=""><label for="text-input" class=" form-control-label">Nota</label><input type="number" id="txtmeta" name="txtmeta" placeholder="" class="form-control"> </div>
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
                        <strong>Nivel de desempeño del personal</strong>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                        <div class="form-group col-md-3">
                            <label for="text-input" class=" form-control-label">Año</label>
                            <select name="select" id="select" class="form-control">
                                <option value="1">2018</option>

                            </select>
                        </div>
                      <div class="form-group col-md-3">
                          <label for="text-input" class=" form-control-label">Trimestre</label>
                          <select name="select" id="select" class="form-control">
                              <option value="1">I TRIMESTRE</option>
                              <option value="2">II TRIMESTRE</option>
                              <option value="3">III TRIMESTRE</option>
                              <option value="4">IV TRIMESTRE</option>
                          </select>
                      </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th></th>
                                    <th scope="col">Trimestre&nbsp;I</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td scope="col">Promedio</td>
                                    <td>15.6</td>


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
                    <strong>Nivel de Desempeño del Personal</strong>
                    </div>
                    <div class="card-body card-block">

                        <div id="lesly" style="min-width: 900px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>

        </div> <!-- .content -->
        <?php include('footer.php'); ?>
<script>

Highcharts.chart('lesly', {
    title: {
        text: 'Nivel de desempeño del personal'
    },
    xAxis: {
        categories: ['0','1', '2', '3', '4', '5','6','7','8','9', '10', '11', '12', '13','14','15','16','17', '18', '19', '20']
    },
    yAxis: [{

        title: {
            text: 'N° de Personas'
        }
    }],

    labels: {
        items: [{
            html: 'Puntaje de la evaluación de desempeño',
            style: {
                left: '50px',
                top: '18px',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
            }
        }]
    },
    series: [{
        type: 'column',
        name: 'Puntaje de Evaluación',
        data: [1,1,3,4,4,3,6,7,7,7,8,9,14,15,16,10,13,9,8,7,2]
    }, {
        type: 'spline',
        name: 'Curva',
        data: [1,1,3,4,4,3,6,7,7,7,8,9,14,15,16,10,13,9,8,7,2],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[8],
            fillColor: 'red'
        }
    }]
});


/* var data = [3.5, 3, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3, 3, 4, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3, 3.8, 3.2, 3.7, 3.3, 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2, 3, 2.2, 2.9, 2.9, 3.1, 3, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3, 2.8, 3, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3, 3.4, 3.1, 2.3, 3, 2.5, 2.6, 3, 2.6, 2.3, 2.7, 3, 2.9, 2.9, 2.5, 2.8, 3.3, 2.7, 3, 2.9, 3, 3, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3, 2.5, 2.8, 3.2, 3, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3, 2.8, 3, 2.8, 3.8, 2.8, 2.8, 2.6, 3, 3.4, 3.1, 3, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3, 2.5, 3, 3.4, 3];

Highcharts.chart('lesly', {
    title: {
        text: 'Nivel de Desempeño del Personal'
    },
    credits: {
        enabled: false
    },
    xAxis: [{
        title: { text: 'Notas' },
        alignTicks: false
    }, {
        title: { text: 'Personal' },
        alignTicks: false,
        opposite: true
    }],

    yAxis: [{
        title: { text: 'Notas' }
    }, {
        title: { text: 'Cantidad Personal' },
        opposite: true
    }],

    series: [{
        name: 'Cantidad Personal',
        type: 'histogram',
        xAxis: 1,
        yAxis: 1,
        baseSeries: 's1',
        zIndex: -1
    }, {
        name: 'Notas',
        type: 'scatter',
        data: data,
        id: 's1',
        marker: {
            radius: 1.5
        }
    }]
}); */
/*
var data = [17.4,18,11,19,13];

Highcharts.chart('lesly2', {

    title: {
        text: 'Nivel de desempeño del personal'
    },

    xAxis: [{
        title: {
            text: 'Data'
        },
        alignTicks: false
    }, {
        title: {
            text: 'Notas'
        },
        alignTicks: false,
        opposite: true
    }],

    yAxis: [{
        title: { text: 'Data' }
    }, {
        title: { text: '' },
        opposite: true
    }],

    series: [{
        name: 'Notas',
        type: 'bellcurve',
        xAxis: 1,
        yAxis: 1,
        baseSeries: 1,
        zIndex: -1
    }, {
        name: 'Data',
        type: 'scatter',
        data: data,
        marker: {
            radius: 1.5
        }
    }]
});

Highcharts.chart('lesly', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Nivel de desempeño del personal'
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    xAxis: {
        categories: [
            'Ene-Feb-Mar',
            'Abr-May-Jun',
            'Jul-Ago-Sep',
            'Oct-Nov-Dic'
        ],
        plotBands: [{ // visualize the weekend
            from: 4.5,
            to: 6.5,
            color: 'rgba(68, 170, 213, .2)'
        }]
    },
    yAxis: {
        title: {
            text: 'Puntaje'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' puntos'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'Puntaje de la evaluación de desempeño ',
        data: [31, 53, 74, 23]
    }]
});*/
</script>
