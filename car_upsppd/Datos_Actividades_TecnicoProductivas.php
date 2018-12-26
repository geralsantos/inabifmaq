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
                        <strong>Actividades tecnico productivas</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que Participa en el taller de Biohuerto</label>
                                    <input type="number" id="CarNumBiohuerto" name="CarNumBiohuerto" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">N° de veces que Participa en el taller de Manualidades</label>
                                    <input type="number" id="CarNumManualidades" name="CarNumManualidades" placeholder="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que Participa en el taller de Panadería- repostería</label>
                                    <input type="number" id="CarNumReposteria" name="CarNumReposteria" placeholder="" class="form-control">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que participa de paseos o caminatas</label>
                                    <input type="number" id="CarNumPaseos" name="CarNumPaseos" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que participa de Visitas culturales</label>
                                    <input type="number" id="CarNumVCulturales" name="CarNumVCulturales" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que participa de Actividades cívicas y protocolares</label>
                                    <input type="number" id="CarNumACivicas" name="CarNumACivicas" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que participa en deporte Fútbol</label>
                                    <input type="number" id="CarNumFutbol" name="CarNumFutbol" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que participa en deporte Natación</label>
                                    <input type="number" id="CarNumNatacion" name="CarNumNatacion" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">N° de veces que participa en Otros deportes</label>
                                   <input type="number" id="CarNumODeportes" name="CarNumODeportes" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                               
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">N° de veces que participa en actividades de enseñanza del Manejo de Dinero</label>
                                   <input type="number" id="CArNumMDinero" name="CArNumMDinero" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">N° de veces que participa en activisades para la toma de decisiones con apoyo</label>
                                   <input type="number" id="CarNumTDecisiones" name="CarNumTDecisiones" placeholder="" class="form-control">
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