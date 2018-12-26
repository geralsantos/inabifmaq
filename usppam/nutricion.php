<?php include('header.php'); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>USPPAM</h1>
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
                        <strong>Seguimiento - Nutricion</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Código/DNI/Apellido Paterno Residente</label>
                                    <input type="text" id="pamcodigoentidad" name="pamcodigoentidad" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Posee plan de intervención en Nutrición</label>
                                    <select name="NNAPlanIntervencion" id="NNAPlanIntervencion" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Meta trazada en el PAI</label>
                                    <input type="text" id="NNAMetaPAI" name="NNAMetaPAI" placeholder="" class="form-control">
                                     </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Posee informe técnico evolutivo?</label>
                                    <select name="NNAInformeTecnico" id="NNAInformeTecnico" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select>  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Informe evolutivo</label>
                                    <input type="text" id="NNAMetaPAI" name="NNAMetaPAI" placeholder="" class="form-control">
                                     </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Cumplimiento del plan de intervención</label>
                                    <select name="NNAPlanIntervencion" id="NNAPlanIntervencion" class="form-control">
                                    <option value="">Residente logra el objetivo trazado</option>
                                    <option value="">En proceso</option>
                                    <option value="">Residente no logra el objetivo trazado</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Estado nutricional</label>
                                        <select name="NNANutricionalTalla" id="NNANutricionalTalla" class="form-control">
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
                                    <input type="number" id="NNAHemoglobina" name="NNAHemoglobina" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Talla (m)</label>
                                    <input type="number" id="NNAHemoglobina" name="NNAHemoglobina" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Hemoglobina (gr./dl)</label>
                                    <input type="number" id="NNAHemoglobina" name="NNAHemoglobina" placeholder="" class="form-control">
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



