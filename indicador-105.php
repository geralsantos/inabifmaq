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
                    <strong>Atenciones totales acumuladas</strong>
                    <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row">
                                <div class="form-group col-md-2">
                                    <label for="text-input" class=" form-control-label">Año</label>
                                    <select id="anio" v-model="anio" class="form-control">
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="text-input" class=" form-control-label">Mes</label>
                                    <select id="mes" v-model="mes" class="form-control" >
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Centro MAC</label>
                                    <select name="select" v-model="id_centro_mac" id="select" class="form-control">
                                        <option value="0">Seleccione</option>
                                        <option value="1">N° de Visitas Portal</option>
                                        <option value="2">Chat Atendidos</option>
                                        <option value="3">Redes Sociales</option>
                                        <option value="4">E-mails Atendidos</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de Atenciones</label>
                                    <input v-model="nro_atenciones"  type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                                </div>
                                
                            </div>

                                <div class="row form-group">
                                    <div class="col col-md-12" style="text-align: center">
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
                        <strong>Atenciones totales acumuladas
            </strong>
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
                                <th scope="col"></th>
                                    <th scope="col">Enero</th>
                                    <th scope="col">Febrero</th>
                                    <th scope="col">Marzo</th>
                                    <th scope="col">Abril</th>
                                    <th scope="col">Mayo</th>
                                    <th scope="col">Junio</th>
                                    <th scope="col">Julio</th>
                                    <th scope="col">Agosto</th>
                                    <th scope="col">Septiembre</th>
                                    <th scope="col">Octubre</th>
                                    <th scope="col">Noviembre</th>
                                    <th scope="col">Diciembre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                <td class="col">N° de Visitas Portal</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>84</td>
                                </tr>
                                <tr class="text-center">
                                <td>Chats Atendidos</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>84</td>
                                </tr>
                                <tr class="text-center">
                                <td>Redes Sociales</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>84</td>
                                </tr>
                                <tr class="text-center">
                                <td>E-mails Atendidos</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>84</td>
                                    <td>5</td>
                                    <td>54</td>
                                    <td>84</td>
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
                    <strong>Atenciones totales acumuladas</strong>
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
    chart: {
        type: 'column'
    },
    title: {
        text: 'Atenciones totales acumuladas'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'N° de Atenciones'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} atenciones</b></td></tr>',
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
        name: 'N° de Visitas Portal',
        data: [49, 71, 106, 129, 45, 32, 132, 78, 34, 42, 92, 87]

    }, {
        name: 'Chat Atendidos',
        data: [83, 78, 98, 93, 83, 78, 98, 93,83, 78, 98, 93]

    }, {
        name: 'Redes Sociales',
        data: [48, 38, 39, 41, 100, 56, 76, 88, 33, 22, 77, 66]

    }, {
        name: 'E-mails Atendidos',
        data: [42, 33, 34, 39, 52, 75, 57, 60, 47, 39, 46, 51]

    }]
});

</script>
