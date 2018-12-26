<?php include('header.php'); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>CAR UPSPPD</h1>
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
                                    <input type="text" id="CarCodEntidad" name="CarCodEntidad" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nombre de la Entidad</label>
                                    <input type="text" id="CarNomEntidad" name="CarNomEntidad" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Código de la Línea</label>
                                    <input type="text" id="CarCodLinea" name="CarCodLinea" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Línea de Intervención</label>
                                    <input type="text" id="CarLineaI" name="CarLineaI" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Código del Servicio</label>
                                    <input type="text" id="CarCodServicio" name="CarCodServicio" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nombre del Servicio</label>
                                    <input type="text" id="CarNomServicio" name="CarNomServicio" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Departamento del Centro de Atención</label>
                                    <select name="CarDepart" id="select" class="form-control">
                                        <option value="">Departamento</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Provincia del Centro de Atención</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Provincia</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Distrito del Centro de Atención</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Distrito</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=""><label for="text-input" class=" form-control-label">Área de residencia del centro de atención</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">URBANO</option>
                                        <option value="">RURAL</option>
                                    </select></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class=""><label for="text-input" class=" form-control-label">Código del Centro de Atención</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"></div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class=""><label for="text-input" class=" form-control-label">Nombre del Centro de Atención</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"></div>
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
        <?php include('../footer.php'); ?>