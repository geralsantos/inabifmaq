<?php include('header.php'); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>CAR UPSNNA</h1>
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
                        <strong>Datos del Centro de Servicios</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Código de la Entidad</label>
                                    <input type="text" id="NNACodEntidad" name="NNACodEntidad" value='Co10' placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nombre de la Entidad</label>
                                    <input type="text" id="NNANomEntidad" name="NNANomEntidad" value='Entidad Nombre' placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Código de la Línea</label>
                                    <input type="text" id="NNACodLinea" name="NNACodLinea" value='Line001' placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Línea de Intervención</label>
                                    <input type="text" id="NNACodLineaIntervencion" name="NNACodLineaIntervencion" value='Linea Nombre' placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Código del Servicio</label>
                                    <input type="text" id="NNACodServicio" name="NNACodServicio" value='Ser014' placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nombre del Servicio</label>
                                    <input type="text" id="NNANombreServicio" name="NNANombreServicio" value='servicio Nombre' placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Departamento del Centro de Atención</label>
                                    <select name="NNADepartamentoA" id="NNADepartamentoA" class="form-control">
                                        <option value="">Departamento</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Provincia del Centro de Atención</label>
                                    <select name="NNAProvinciaAtencion" id="NNAProvinciaAtencion" class="form-control">
                                        <option value="">Provincia</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Distrito del Centro de Atención</label>
                                    <select name="NNADistritoAtencion" id="NNADistritoAtencion" class="form-control">
                                        <option value="">Distrito</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=""><label for="text-input" class=" form-control-label">Área de residencia del centro de atención</label>
                                        <select name="NNAAreaResidencia" id="NNAAreaResidencia" class="form-control">
                                        <option value="">URBANO</option>
                                        <option value="">RURAL</option>
                                    </select></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class=""><label for="text-input" class=" form-control-label">Código del Centro de Atención</label>
                                    <input type="text" id="NNACodCentroA" name="NNACodCentroA" value='Aten001' placeholder="" class="form-control"></div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class=""><label for="text-input" class=" form-control-label">Nombre del Centro de Atención</label>
                                    <input type="text" id="NNANomCentroA" name="NNANomCentroA" value='Centro A. Nombre' placeholder="" class="form-control"></div>
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

        </div> <!-- .content -->
        <?php include('footer.php'); ?>