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
                        <strong>Egreso - Terapia fisica</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Posee plan de intervención médico  individual?</label>
                                    <select name="CarPlanIntervension" id="CarPlanIntervension" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Descripción de la meta trazada en el PII</label>
                                    <input type="text" id="CarDesMetaPII" name="CarDesMetaPII" placeholder="" class="form-control">
                                    
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Posee informe técnico evolutivo</label>
                                    <select name="CarinformeEvolutivo" id="CarinformeEvolutivo" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Descripción del informe evolutivo</label>
                                    <input type="text" id="CarDesInformeEvolutivo" name="CarDesInformeEvolutivo" placeholder="" class="form-control">
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
                                    <label for="text-input" class=" form-control-label">Desarrollo de capacidades básicas para el lenguaje</label>
                                    <select name="CarDesarrolloCapacidades" id="CarDesarrolloCapacidades" class="form-control">
                                        <option value="">respiración</option>
                                        <option value="">fortalecimiento de músculos de cabeza, cuello y boca</option>
                                        <option value="">Otros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Mejora de la emisión de fonemas?</label>
                                    <select name="CarMejoraEmision" id="CarMejoraEmision" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Mejora del lenguaje comprensivo?</label>
                                    <select name="CarManejoLenguaje" id="CarManejoLenguaje" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">Construcción o elaboración de oraciones</label>
                                   <select name="CarElavoraOraciones" id="CarElavoraOraciones" class="form-control">
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