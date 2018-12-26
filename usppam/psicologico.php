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
                        <strong>Seguimiento Psicologico</strong>
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
                                    <div class=" "><label for="text-input" class=" form-control-label">Posee plan de Intervención psicológico</label>
                                    <select name="NNAPlanintervencion" id="NNAPlanintervencion" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Descripción de la meta trazada en el pai </label>
                                    <input type="text" id="NNANunTerapiaIndividual" name="NNANunTerapiaIndividual" placeholder="" class="form-control">
                                    </div>        
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Posee informe técnico evolutivo</label>
                                    <select name="NNAPlanintervencion" id="NNAPlanintervencion" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Descripción del informe evolutivo </label>
                                    <input type="text" id="NNANunTerapiaIndividual" name="NNANunTerapiaIndividual" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Cumplimiento del plan de intervención</label>
                                    <select name="NNAPlanintervencion" id="NNAPlanintervencion" class="form-control">
                                    <option value="">Residente logra el objetivo trazado </option>
                                    <option value="">En proceso</option>
                                    <option value="">Residente no logra el objetivo trazado</option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Deteriorio del área cognitiva</label>
                                    <select name="NNAPlanintervencion" id="NNAPlanintervencion" class="form-control">
                                    <option value="">Leve </option>
                                    <option value="">Moderada</option>
                                    <option value="">Severa</option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Presencia de transtorno depresivo</label>
                                    <select name="NNAPlanintervencion" id="NNAPlanintervencion" class="form-control">
                                    <option value="">SI </option>
                                    <option value="">NO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Severidad del transtorno depresivo</label>
                                    <select name="NNAPlanintervencion" id="NNAPlanintervencion" class="form-control">
                                    <option value="">Leve </option>
                                    <option value="">Moderada</option>
                                    <option value="">Severa</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones  Taller de Liderazgo</label>
                                    <input type="number" id="NNANumTallerLiderazgo" name="NNANumTallerLiderazgo" placeholder="" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones Taller de Autoestima</label>
                                    <input type="number" id="NNANunTallerAutoestima" name="NNANunTallerAutoestima" placeholder="" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones  Taller de Sexualidad</label>
                                    <input type="number" id="NNANumTallerSexual" name="NNANumTallerSexual" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones   Taller de prevención del embarazo en adolescentes</label>
                                    <input type="number" id="NNAPrevencionEmbarazo" name="NNAPrevencionEmbarazo" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones  Taller de Igualdad de Género</label>
                                    <input type="number" id="NNANumIgualdadGenero" name="NNANumIgualdadGenero" placeholder="" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones  Taller de Violencia Familiar</label>
                                    <input type="number" id="NNANumViolenciaFamiliar" name="NNANumViolenciaFamiliar" placeholder="" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones Taller de Salud mental</label>
                                    <input type="number" id="NNANumSaludMental" name="NNANumSaludMental" placeholder="" class="form-control">
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



