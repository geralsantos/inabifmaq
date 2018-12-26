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
                        <strong>Egreso - Nutrición</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Posee plan de intervención nutricional  individual?</label>
                                    <select name="CarPlanIntervencion" id="CarPlanIntervencion" class="form-control">
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
                                    <select name="CarInformeTecnico" id="CarInformeTecnico" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Descripción del informe evolutivo</label>
                                    <input type="text" id="CarDesInformEvolutivo" name="CarDesInformEvolutivo" placeholder="" class="form-control">
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
                                    <label for="text-input" class=" form-control-label">Estado nutricional (imc)</label>
                                    <select name="CarEstadoNutricional" id="CarEstadoNutricional" class="form-control">
                                        <option value="">Adelgazado</option>
                                        <option value="">Normal</option>
                                        <option value="">Sobrepeso</option>
                                        <option value="">Obeso</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Peso (Kg.)</label>
                                    <input type="number" id="CarPeso" name="CarPeso" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Talla (m)</label>
                                    <input type="number" id="CarTalla" name="CarTalla" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">Hemoglobina (gr./dl)</label>
                                   <input type="number" id="CarHemoglobina" name="CarHemoglobina" placeholder="" class="form-control">
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