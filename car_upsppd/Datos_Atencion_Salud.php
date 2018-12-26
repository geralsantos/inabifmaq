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
                        <strong>Datos de Salud Mental</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en Medicina General por profesional del CAR</label>
                                    <input type="number" id="CarNumAtencionesMG" name="CarNumAtencionesMG" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Residente tuvo salidad a hospitales en el mes</label>
                                    <select name="CarSalidaMes" id="CarSalidaMes" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Número de salidas a hospitales</label>
                                    <input type="number" id="CarNunSalidas" name="CarNunSalidas" placeholder="" class="form-control">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en CARDIOVASCULAR</label>
                                    <input type="number" id="CarNumACardiovascular" name="CarNumACardiovascular" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en NEFROLOGÍA</label>
                                    <input type="number" id="CarANefrologia" name="CarANefrologia" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en ONCOLOGÓA</label>
                                    <input type="number" id="CarAOncologia" name="CarAOncologia" placeholder="" class="form-control">
                                </div>

                            </div>
                            
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en NEUROCIRUGÍA</label>
                                    <input type="number" id="CarANeurocirugia" name="CarANeurocirugia" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en DERMATOLOGÍA</label>
                                    <input type="number" id="CarNumDermatologia" name="CarNumDermatologia" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en ENDOCRINOLOGÍA</label>
                                    <input type="number" id="CarAEncornologia" name="CarAEncornologia" placeholder="" class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en GASTROENTEROLOGIA</label>
                                    <input type="number" id="CarAGastroenterologia" name="CarAGastroenterologia" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en GINECO-OBSTETRICIA</label>
                                    <input type="number" id="CarAGinecoObstretica" name="CarAGinecoObstretica" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en INFECTO-CONTAGIOSAS</label>
                                    <input type="number" id="CarAInfectoContagiosas" name="CarAInfectoContagiosas" placeholder="" class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en CARDIOVASCULAR</label>
                                    <input type="number" id="CarACardiovascular" name="CarACardiovascular" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en INMUNOLOGIA</label>
                                    <input type="number" id="CarAInmunologia" name="CarAInmunologia" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en MEDICINA FISICA Y REHABILITACION</label>
                                    <input type="number" id="CarAMedicinaFisica" name="CarAMedicinaFisica" placeholder="" class="form-control">
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en NEUMOLOGIA</label>
                                    <input type="number" id="CarANeumologia" name="CarANeumologia" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en NUTRICION</label>
                                    <input type="number" id="CarAnutricion" name="CarAnutricion" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en NEUROLOGIA</label>
                                    <input type="number" id="CarANeurologia" name="CarANeurologia" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en OFTALMOLOGIA</label>
                                    <input type="number" id="CarAOftamologia" name="CarAOftamologia" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en OTORRINOLARINGOLOGIA</label>
                                    <input type="number" id="CarAOtorrinoloringologia" name="CarAOtorrinoloringologia" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en PEDIATRIA</label>
                                    <input type="number" id="CarAPedriatria" name="CarAPedriatria" placeholder="" class="form-control">
                                </div>
                            </div>   

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en PSIQUIATRIA</label>
                                    <input type="number" id="CarAPsiquiatria" name="CarAPsiquiatria" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en QUIRURGICA</label>
                                    <input type="number" id="CarAQuirurgica" name="CarAQuirurgica" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en TRAUMATOLOGIA</label>
                                    <input type="number" id="CarATraumologia" name="CarATraumologia" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en UROLOGIA</label>
                                    <input type="number" id="CarAUrologia" name="CarAUrologia" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en ODONTOLOGIA</label>
                                    <input type="number" id="CarAOdontologia" name="CarAOdontologia" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en Otros servicios</label>
                                    <input type="number" id="CarAServicios" name="CarAServicios" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Recibe tratamiento con psicofármacos</label>
                                    <select name="CarTratamientoPsicofarmaco" id="CarTratamientoPsicofarmaco" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Residente fue hospitalizado en el periodo</label>
                                    <select name="CarHopitalizadoP" id="CarHopitalizadoP" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Número de hospitalizaciones</label>
                                    <input type="number" id="CarNumHospitalizaciones" name="CarNumHospitalizaciones" placeholder="" class="form-control">
                                </div>
                            </div>  

                            <div class='row'>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Motivo de la hospitalización</label>
                                    <input type="text" id="CarMotivoHospitalizacion" name="CarMotivoHospitalizacion" placeholder="" class="form-control">
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