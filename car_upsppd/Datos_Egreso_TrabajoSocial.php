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
                        <strong>Egreso - Trabajo Social</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Posee plan de intervención nutricional  individual?</label>
                                    <select name="CarIntervencionNutricional" id="CarIntervencionNutricional" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Descripción de la meta trazada en el PII</label>
                                    <input type="text" id="CarDesMetaPII" name="CarDesMetaPII" placeholder="" class="form-control">
                                    
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Posee informe técnico evolutivo?</label>
                                    <select name="CarInformeEvolutivo" id="CarInformeEvolutivo" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Descripción del informe evolutivo</label>
                                    <input type="text" id="CarDesInforme" name="CarDesInforme" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Cumplimiento del plan de intervención</label>
                                    <select name="CarCumplePlan" id="CarCumplePlan" class="form-control">
                                        <option value="">Residente logra el objetivo trazado</option>
                                        <option value="">En proceso</option>
                                        <option value="">Residente no logra el objetivo trazado</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Ubicación de la familia</label>
                                    <select name="CarUbicacionFamilia" id="CarUbicacionFamilia" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                               <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Participación activa de la familia</label>
                                    <select name="CarParticipacionfamilia" id="CarParticipacionfamilia" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Posibilidad de Reinserción</label>
                                    <select name="CarPosibilidadReinsercion" id="CarPosibilidadReinsercion" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Posibilidad de Colocación Laboral</label>
                                    <select name="CarColocacionLaboral" id="CarColocacionLaboral" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
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
        <?php include('../footer.php'); ?>