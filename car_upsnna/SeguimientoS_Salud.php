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
                        <strong>Seguimiento Salud</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Plan de intervención</label>
                                    <select name="NNAPlanIntervencion" id="NNAPlanIntervencion" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Meta trazada en el PAI</label>
                                    <input type="text" id="NNAMetaPAI" name="NNAMetaPAI" value='Meta' placeholder="" class="form-control">

                                     </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Posee informe técnico evolutivo?</label>
                                    <select name="NNAInformteEvolutivo" id="NNAInformteEvolutivo" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select>  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Cumplimiento del Plan de intervención</label>
                                        <select name="NNACumplePlan" id="NNACumplePlan" class="form-control">
                                        <option value="">CUMPLIDA</option>
                                        <option value="">EN PROCESO</option>
                                        <option value="">NO SE EVIDENCIA PROGRESO</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Control CRED acorde a la Edad?</label>
                                        <select name="NNAControlCRED" id="NNAControlCRED" class="form-control">
                                        <option value="">SI</option>
                                        <option value="">NO</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Esquema de vacunación acorde a la Edad?</label>
                                        <select name="NNAVacuna" id="NNAVacuna" class="form-control">
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
        <?php include('footer.php'); ?>



