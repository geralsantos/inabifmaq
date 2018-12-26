<?php include('header.php'); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>USPAM</h1>
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
                        <strong>Datos de Admisión del Residente</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Código/DNI/Apellido Paterno Residente</label>
                                    <input type="text" id="usppamcodigoentidad" name="usppamcodigoentidad" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Movimiento Poblacional</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Nuevo</option>
                                    <option value="">Continuador</option>
                                    <option value="">Reingreso</option>
                                    <option value="">Traslado</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Fecha de Ingreso del Residente</label>
                                    <input type="date" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Institución que lo deriva</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">CEM</option>
                                    <option value="">Comisarias</option>
                                    <option value="">Reingreso</option>
                                    <option value="">Traslado</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Motivo de Ingreso PRINCIPAL</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Problemas economicos que no permite atender a las necesidades básicas </option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                <div class=" "><label for="text-input" class=" form-control-label">Motivo de Ingreso SECUNDARIO</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Problemas economicos que no permite atender a las necesidades básicas </option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Perfil de Ingreso</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Pobreza Extrema</option>
                                    </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Tipo de Documento de Ingreso CAR</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Oficio</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Número de documento Ingreso CAR</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Distrito</option>
                                    </select>
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
        <?php include('footer.php'); ?>



