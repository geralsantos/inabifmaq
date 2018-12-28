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
                        <strong>Egreso del Usuario</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">FECHA DE EGRESO</label>
                                    <input type="date" id="NNAFEgreso" name="NNAFEgreso" placeholder="" class="form-control">
                                     </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">MOTIVO DEL EGRESO</label>
                                    <select name="NNAMotivoEgreso" id="NNAMotivoEgreso" class="form-control">
                                    <option value="">Acogimiento Familiar</option>
                                    <option value="">Adopción</option>
                                    <option value="">Defunción</option>
                                    <option value="">Egreso por mayoría de edad</option>
                                    <option value="">Reinserción familiar</option>
                                    <option value="">Salida no autorizada</option>
                                    <option value="">Traslado a otra institución</option>
                                    <option value="">Traslado a otro CAR del INABIF</option>
                                    <option value=""> Otros</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Detalle del motivo del egreso</label>
                                    <input type="text" id="NNADetalleMotivoEgreso" name="NNADetalleMotivoEgreso" value='Detalle motivo' placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Aseguramiento Universal de Salud-AUS</label>
                                        <select name="NNASaludAUS" id="NNASaludAUS" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Partida de Nacimiento?</label>
                                        <select name="NNAPartidaNacimiento" id="NNAPartidaNacimiento" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">DNI?</label>
                                        <select name="NNATieneDNI" id="NNATieneDNI" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Educación?</label>
                                    <select name="NNAEducacion" id="NNAEducacion" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Reinserción Familiar</label>
                                        <select name="NNAReinsercionFamiliar" id="NNAReinsercionFamiliar" class="form-control">
                                        <<option value="">Padre</option>
                                        <option value="">Madre</option>
                                        <<option value="">Hermano</option>
                                        <option value="">Tío/a</option>
                                        <option value="">primos/as</option>
                                        <option value=""> Abuelos/as</option>
                                        <option value="">Otros</option>
                                        </select> 
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



