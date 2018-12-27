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
                        <strong>Datos de Admisión Del Usuario</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Movimiento Poblacional</label>
                                    <select name="CarMPoblacional" id="CarMPoblacional" class="form-control">
                                        <option value="">NUEVO</option>
                                        <option value="">CONTINUADOR</option>
                                        <option value="">REINGRESO</option>
                                        <option value="">TRASLADO DE OTRO CAR</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Fecha de Reingreso del usuario</label>
                                    <input type="date" id="CarFIngreso" name="CarFIngreso" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Fecha de reingreso del usuario (en caso no aplique marcar 99/99/9999)</label>
                                    <input type="date" id="CarFReingreso" name="CarFReingreso" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Institución que lo derivó</label>
                                    <select name="CarIDerivo" id="CarIDerivo" class="form-control">
                                        <option value="">Fiscalía</option>
                                        <option value="">Juzgado</option>
                                        <option value="">Unidad de Protección Especial</option>
                                        <option value=""> Otros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Motivo de ingreso (acorde al expediente)</label>
                                    <select name="CarMotivoI" id="CarMotivoI" class="form-control">
                                        <option value="">Riesgo de desprotección</option>
                                        <option value="">Situación de desprotección</option>
                                    </select>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Tipo de documento de ingreso al CAR</label>
                                    <select name="CarTipoDoc" id="CarTipoDoc" class="form-control">
                                        <option value="">Oficio</option>
                                        <option value="">Acta</option>
                                        <option value="">Resolución</option>
                                        <option value="">Otros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Número del documento de ingreso al car</label>
                                    <input type="number" id="CarNumDoc" name="CarNumDoc" placeholder="" class="form-control">
                                    </div>
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