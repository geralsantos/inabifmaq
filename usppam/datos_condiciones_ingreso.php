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
                        <strong>Datos de Condiciones de Ingreso del Residente (Derechos)</strong>
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
                            <div class="form-group col-md-2">
                                    <div class=" "><label for="text-input" class=" form-control-label">Documento de Identidad</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">SI</option>
                                        <option value="">NO</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class=" "><label for="text-input" class=" form-control-label">Tipo de Documento</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Dni</option>
                                    <option value="">Carné de extranjeria</option>
                                    <option value="">Pasaporte</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Número de Documento de Identidad</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Saber Leer y Escribir</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nivel Educativo</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Sin Educación</option>
                                    <option value="">Primaria Incompleta</option>
                                    <option value="">Primaria Completa</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Cuenta con aseguramiento en Salud</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">ESSALUD</option>
                                    <option value="">FFAA_PNP</option>
                                    <option value="">Seguro Privado</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Tipo de Pensión</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Sin Clasificación Socioeconómica</option>
                                    <option value="">Pobre Extremo</option>
                                    <option value="">Pobre no Extremo</option>
                                    <option value="">No Pobre</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Clasificación Socioeconómica (SISFOH)</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Sin Clasificación Socioeconómica</option>
                                    <option value="">Pobre Extremo</option>
                                    <option value="">Pobre no Extremo</option>
                                    <option value="">No Pobre</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Cuenta con familiares ubicados</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">SI</option>
                                    <option value="">NO</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Tipo de Parentesco</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Padre</option>
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



