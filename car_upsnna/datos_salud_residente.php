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
                        <strong>Datos de Salud del Residente</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Discapacidad</label>
                                    <select name="NNADiscapacidad" id="NNADiscapacidad" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Presenta Discapacidad Física</label>
                                    <select name="NNADiscapacidadFisica" id="NNADiscapacidadFisica" class="form-control">
                                    <option value="">No</option>
                                    <option value="">Leve</option>
                                    <option value="">Moderada</option>
                                    <option value="">Severa</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Presenta Discapacidad Intelectual</label>
                                    <select name="NNADiscapacidadIntelectual" id="NNADiscapacidadIntelectual" class="form-control">
                                    <option value="">Nuclear</option>
                                    <option value="">Extensa</option>
                                    <option value="">Mononuclear</option>
                                    </select>  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presenta Discapacidad Sensorial</label>
                                        <select name="NNADiscapacidadSensorial" id="NNADiscapacidadSensorial" class="form-control">
                                        <option value="">No</option>
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presenta Discapacidad Mental</label>
                                        <select name="NNADiscapacidadMental" id="NNADiscapacidadMental" class="form-control">
                                        <option value="">No</option>
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">El Dx es Certificado</label>
                                        <select name="NNADxCertificado" id="NNADxCertificado" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Tiene Carnet del CONADIS</label>
                                        <select name="NNACarnetConadis" id="NNACarnetConadis" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        <option value="">S/D</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Trastorno Neurológico</label>
                                        <select name="NNATranstornoNeurologico" id="NNATranstornoNeurologico" class="form-control">
                                        <<option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Especificar Trastorno Neurológico Principal</label>
                                        <select name="NNAEspecificaTranstornoNeurologico" id="NNAEspecificaTranstornoNeurologico" class="form-control">
                                        <option value="">Epilepsia</option>
                                        <option value="">Alzheimer</option>
                                        <option value="">Accidente cerebrovascular</option>
                                        <option value="">Migraña</option>
                                        <option value="">Esclerosis Múltiple</option>
                                        <option value="">Parkinson</option>
                                        <option value="">Infecciones Neurológica</option>
                                        <option value="">Traumatismo Encefálo Craneano</option>
                                        <option value="">Otros</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Solo a menor 36 meses ¿Recibió atenciones de CRED en el último mes? </label>
                                        <select name="NNACRED" id="NNACRED" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Solo a menor de 5 años ¿Recibió vacunas en el último mes? ¿Recibió vacunas según esquema de vacunación?</label>
                                        <select name="NNAVacunas" id="NNAVacunas" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Patología Crónica 1</label>
                                        <select name="NNAPatologia1" id="NNAPatologia1" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Diagnósticos 1 según CIE 10 </label>
                                        <select name="NNADesPatologia1" id="NNADesPatologia1" class="form-control">
                                        <option value="">VIH</option>
                                        <option value="">TBC</option>
                                        <option value="">Hepatitis</option>
                                        <option value="">Insuficiencia Renal</option>
                                        <option value="">Hipertensión</option>
                                        <option value="">DCI</option>
                                        <option value="">Diabetes</option>
                                        <option value="">Cancer</option>
                                        <option value="">Estreñimiento</option>
                                        <option value="">Otros</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Patología Crónica 2</label>
                                        <select name="NNAPatologia2" id="NNAPatologia2" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Diagnósticos 3 según CIE 10 </label>
                                        <select name="NNADiagnostico3" id="NNADiagnostico3" class="form-control">
                                        <option value="">VIH</option>
                                        <option value="">TBC</option>
                                        <option value="">Hepatitis</option>
                                        <option value="">Insuficiencia Renal</option>
                                        <option value="">Hipertensión</option>
                                        <option value="">DCI</option>
                                        <option value="">Diabetes</option>
                                        <option value="">Cancer</option>
                                        <option value="">Estreñimiento</option>
                                        <option value="">Otros</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Presenta Transtorno de Comportamiento y/o disociales</label>
                                        <select name="NNATrastornoComportamiento" id="NNATrastornoComportamiento" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Tipo de Transtorno </label>
                                        <select name="NNaTipoTranstorno" id="NNaTipoTranstorno" class="form-control">
                                        <option value="">Ninguna</option>
                                        <option value="">Transtorno Depresivo</option>
                                        <option value="">Transtornos Disociales</option>
                                        <option value="">Transtornos por Deficit de Atención</option>
                                        <option value="">Transtornos por Abuso de Sustancias</option>
                                        <option value="">Transtornos de Conducta Alimentaria</option>
                                        <option value="">Transtornos de la personalidad</option>
                                        <option value="">Demencia</option>
                                        <option value="">Otros</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Gestante</label>
                                        <select name="NNAGestante" id="NNAGestante" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Semanas de Gestación </label>
                                    <input type="number" id="NNASemanaGestacion" name="NNASemanaGestacion" value='2' placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Ha Acudido a Control Parental</label>
                                        <select name="NNAControlParental" id="NNAControlParental" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">NNA tiene hijos </label>
                                        <select name="NNATieneHijos" id="NNATieneHijos" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Número de hijos de residentes en los CAR</label>
                                    <input type="number" id="NNANumHijos" name="NNANumHijos" value='2' placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nivel de Hemoglobina (gr./dl.) </label>
                                    <input type="text" id="NNANivelHemoglobina" name="NNANivelHemoglobina" value='2.5' placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Presenta Anemia</label>
                                        <select name="NNAAnemia" id="NNAAnemia" class="form-control">
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Peso (kg.)</label>
                                    <input type="number" id="NNAAnemia" name="NNAAnemia" value='50.80' placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Talla (mt)</label>
                                    <input type="number" id="NNATalla" name="NNATalla" value='1.50' placeholder="" class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Estado Nutricional (Peso para la talla) </label>
                                    <select name="NNAEstadoNutricionalPeso" id="NNAEstadoNutricionalPeso" class="form-control">
                                        <option value="">Bajo Peso</option>
                                        <option value="">Normal</option>
                                        <option value="">Sobrepeso</option>
                                        <option value="">Obesidad</option>
                                        <option value="">Obesidad Mórbida</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Estado Nutricional (Talla para la edad) </label>
                                    <select name="NNAEstadoNutricionalTalla" id="NNAEstadoNutricionalTalla" class="form-control">
                                        <option value="">Baja Talla</option>
                                        <option value="">Normal</option>
                                        <option value="">Alto</option>
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



