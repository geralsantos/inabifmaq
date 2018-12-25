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
                                    <div class=" "><label for="text-input" class=" form-control-label">Tipo de Documento de Identidad</label>
                                    <select name="NNATipoDoc" id="NNATipoDoc" class="form-control">
                                    <option value="">Dni</option>
                                    <option value="">Carné de extranjeria</option>
                                    <option value="">Pasaporte</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Número de Documento de Identidad</label>
                                    <input type="text" id="NNANumDoc" name="NNANumDoc" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Saber Leer y Escribir</label>
                                    <select name="NNALeeEscribe" id="NNALeeEscribe" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nivel Educativo</label>
                                    <select name="NNANivelEducativo" id="NNANivelEducativo" class="form-control">
                                    <option value="">Sin Educación</option>
                                    <option value="">Primaria Incompleta</option>
                                    <option value="">Primaria Completa</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Tipo de Seguro de Salud</label>
                                    <select name="NNATipoSeguro" id="NNATipoSeguro" class="form-control">
                                    <option value="">ESSALUD</option>
                                    <option value="">FFAA_PNP</option>
                                    <option value="">Seguro Privado</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Clasificación Socioeconómica (SISFOH)</label>
                                    <select name="NNAClasificacionSocioeconomica" id="NNAClasificacionSocioeconomica" class="form-control">
                                    <option value="">Sin Clasificación Socioeconómica</option>
                                    <option value="">Pobre Extremo</option>
                                    <option value="">Pobre no Extremo</option>
                                    <option value="">No Pobre</option>
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



