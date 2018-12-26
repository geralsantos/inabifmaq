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
                        <strong>Datos de Terapia</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que Participa en terapia para la reeducación motriz</label>
                                    <input type="number" id="CarNumReeducaion" name="CarNumReeducaion" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">N° de veces que Participa en terapia para la Psicomotricidad</label>
                                    <input type="number" id="CarParticipaPsicomotricidad" name="CarParticipaPsicomotricidad" placeholder="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que Participa en terapia para la Fisioterapia respiratoria</label>
                                    <input type="number" id="CarFisioterapia" name="CarFisioterapia" placeholder="" class="form-control">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que Participa en terapia para la Deportes Adaptados</label>
                                    <input type="number" id="CarDeportesAdaptados" name="CarDeportesAdaptados" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que Participa de terapia para la comunicación</label>
                                    <input type="number" id="CarComunicacion" name="CarComunicacion" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que Partiicipa de terapia para la reeducación orofacial</label>
                                    <input type="number" id="CarReeducacionOrofacial" name="CarReeducacionOrofacial" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de veces que Participa en terapia del Lenguaje</label>
                                    <input type="number" id="CarTerapiaLenguaje" name="CarTerapiaLenguaje" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">N° de veces que Participa en terapia para el Desarrollo de lenguaje alternativo</label>
                                    <input type="number" id="CarDesarrolloLenguaje" name="CarDesarrolloLenguaje" placeholder="" class="form-control">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">Tipo de lenguaje alternativo</label>
                                   <select name="CarTipoLenguajeAlternativo" id="CarTipoLenguajeAlternativo" class="form-control">
                                        <option value="">Lenguaje de señas</option>
                                        <option value="">gestos</option>
                                        <option value="">lenguaje corporal</option>
                                        <option value="">tableros de comunicación</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">N° de veces que Participa de terapia para el desarrollo de actividades Básicas de la Vida Diaria - ABVD</label>
                                   <input type="number" id="CarDesrrolloActividadesBasicas" name="CarDesrrolloActividadesBasicas" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">N° de veces que Participa en actividades Instrumentales Básicas</label>
                                   <input type="number" id="CarInstrumentalesBasicas" name="CarInstrumentalesBasicas" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class='row'>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">N° de veces que Participa en actividades Instrumentales Complejas</label>
                                   <input type="number" id="CarInstrumentalesComplejas" name="CarInstrumentalesComplejas" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">N° de veces que Participa en actividades de Intervención sensorial</label>
                                   <input type="number" id="CarIntervensionSensorial" name="CarIntervensionSensorial" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">N° de veces que Participa en actividades Senso receptivas</label>
                                   <input type="number" id="CarSensoReceptivas" name="CarSensoReceptivas" placeholder="" class="form-control">
                                </div>
                            </div>

                            
                            <div class='row'>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">N° de veces que Participa en actividades de elaboración de bachas y ortéticos</label>
                                   <input type="number" id="CarElavoracionOrteticos" name="CarElavoracionOrteticos" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">N° de veces que Participa en actividades de adaptaciones de sillas de ruedasl</label>
                                   <input type="number" id="CarAdaptacionSilla" name="CarAdaptacionSilla" placeholder="" class="form-control">
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