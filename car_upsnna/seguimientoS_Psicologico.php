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
                        <strong>Seguimiento Psicologico</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Posee plan de intervención</label>
                                    <select name="NNAPlanIntervencion" id="NNAPlanIntervencion" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Descripción de la meta trazada en el PAI</label>
                                    <input type="text" id="NNADesMetaPAI" name="NNADesMetaPAI" placeholder="" class="form-control"> </div>

                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Posee informe técnico evolutivo?</label>
                                    <select name="NNAinformeEvolutivo" id="NNAinformeEvolutivo" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select>  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Descripción del informe evolutivo</label>

                                    <textarea rows="4" cols="50" id="NNADesInforme" name="NNADesInforme" class="form-control">

                                    </textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Cumplimiento del plan de intervención</label>
                                        <select name="NNACumplePlan" id="NNACumplePlan" class="form-control">
                                        <option value="">CUMPLIDA</option>
                                        <option value="">EN PROCESO</option>
                                        <option value="">NO SE EVIDENCIA PROGRESO</option>
                                        </select>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presencia de trastorno depresivo?</label>
                                        <select name="NNATranstornoDepresivo" id="NNATranstornoDepresivo" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Severidad del trastorno depresivo?</label>
                                        <select name="NNASeveridadTranstornoDepresivo" id="NNASeveridadTranstornoDepresivo" class="form-control">
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
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



