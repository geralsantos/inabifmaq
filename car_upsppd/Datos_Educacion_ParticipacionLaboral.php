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
                        <strong>Educación,participación Laboral y fortalecimiento de actividades</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Tipo de de IIEE a la que asiste</label>
                                    <select name="CarTipoIIEE" id="CarTipoIIEE" class="form-control">
                                        <option value="">CEBE</option>
                                        <option value="">CEBA</option>
                                        <option value="">CETPRO</option>
                                        <option value="">CBR inclusivo </option>
                                        <option value="">Otro</option>
                                        <option value="">No Estudia</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Residente se encuentra insertado laboralmente</label>
                                    <select name="CarInsertadoLaboralmente" id="CarInsertadoLaboralmente" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Descriptivo de la participación laboral</label>
                                    <input type="text" id="CarDesParticipacionLa" name="CarDesParticipacionLa" placeholder="" class="form-control">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">NNA participa en actividades de fortalecimiento de habilidades personales y sociales </label>
                                    <select name="CarFortalecimientoHabilidades" id="CarFortalecimientoHabilidades" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Fecha de inicio del NNA en actividades de fortalecimiento de habilidades personales y sociales </label>
                                    <input type="date" id="CarFIActividades" name="CarFIActividades" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Fecha final del NNA en actividades de fortalecimiento de habilidades personales y sociales </label>
                                    <input type="date" id="CarFFActividades" name="CarFFActividades" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">NNA conluyó actividades de fortalecimiento de habilidades personales y sociales </label>
                                    <select name="CarNNAConcluyoHP" id="CarNNAConcluyoHP" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">NNA logró fortalecer sus habilidades personales y sociales</label>
                                    <select name="CarNNAFortaliceHP" id="CarNNAFortaliceHP" class="form-control">
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