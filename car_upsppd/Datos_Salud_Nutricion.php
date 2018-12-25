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
                        <strong>Datos de salud y nutricion del Usuario</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">DISCAPACIDAD</label>
                                    <select name="CarDiscapacidad" id="CarDiscapacidad" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presenta discapacidad física</label>
                                    <select name="CarDiscapacidadFisica" id="CarDiscapacidadFisica" class="form-control">
                                        <option value="">NO</option>
                                        <option value="">LEVE</option>
                                        <option value="">MODERADA</option>
                                        <option value="">SEVERA</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presenta discapacidad intelectual</label>
                                    <select name="CarDiscapacidadIntelectual" id="CarDiscapacidadIntelectual" class="form-control">
                                        <option value="">NO</option>
                                        <option value="">LEVE</option>
                                        <option value="">MODERADA</option>
                                        <option value="">SEVERA</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presenta discapacidad sensorial</label>
                                    <select name="CarDiscapacidadSensorial" id="CarDiscapacidadSensorial" class="form-control">
                                        <option value="">NO</option>
                                        <option value="">LEVE</option>
                                        <option value="">MODERADA</option>
                                        <option value="">SEVERA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presenta discapacidad mental</label>
                                    <select name="CarDiscapacidadMental" id="CarDiscapacidadMental" class="form-control">
                                        <option value="">NO</option>
                                        <option value="">LEVE</option>
                                        <option value="">MODERADA</option>
                                        <option value="">SEVERA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">El Dx es certtificado?</label>
                                    <select name="CarDxCertificado" id="CarDxCertificado" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Tiene carnet del CONADIS?</label>
                                    <select name="CarCarnetConadis" id="CarCarnetConadis" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        <option value="">Se desconoce</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Movilidad</label>
                                    <select name="CarMovilidad" id="CarMovilidad" class="form-control">
                                        <option value="">Camina</option>
                                        <option value="">Camina con torpeza</option>
                                        <option value="">Camina con apoyo</option>
                                        <option value="">Se moviliza con silla de ruedas</option>
                                        <option value="">Lo trasladan en silla de ruedas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Motivo de dificultad con el desplazamiento</label>
                                    <select name="CarDificultadDesplazamiento" id="CarDificultadDesplazamiento" class="form-control">
                                        <option value="">Musculo esqueléticas</option>
                                        <option value="">Neurológicas</option>
                                        <option value="">Cardiovasculares</option>
                                        <option value="">Pulmonares</option>
                                        <option value="">Factores psicológicos</option>
                                        <option value="">Otros</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Dificultad que presenta para movimiento de brazos y cuerpo</label>
                                    <select name="CarDificultadBrazoCuerpo" id="CarDificultadBrazoCuerpo" class="form-control">
                                        <option value="">Monoplejia(afecta un solo miembro del cuerpo)</option>
                                        <option value="">Diplejia  (Afecta las extremidades inferiores-Piernas)</option>
                                        <option value="">Hermano/a</option>
                                        <option value="">Triplejia(Afecta un miembro superior-brazo, y las extremidades inferiores-piernas)</option>
                                        <option value="">Hemiplejia (afecta el lado izquierdo o derecho del cuerpo)</option>
                                        <option value=""> cuadriplejia (afecta las cuatro extremidades del cuerpo)</option>
                                        <option value="">Ninguna</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Patología 1</label>
                                    <select name="CarPatologica1" id="CarPatologica1" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        <option value="">No se sabe</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Tipo de patología</label>
                                    <select name="CarTipoPatologia1" id="CarTipoPatologia1" class="form-control">
                                    <option value="">Enfermedad pulmonar crónica tal como asma, bronquitis o enfisema</option>
                                    <option value="">Hipertensión</option>
                                    <option value="">Diabetes</option>
                                    <option value="">Depresión </option>
                                    <option value="">Cáncer o un tumor maligno</option>
                                    <option value="">Enfermedad cardiaca congestiva u otros problemas del corazón</option>
                                    <option value="">Derrame o hemorragia cerebral</option>
                                    <option value=""> Artritis, reumatismo o artrosis </option>
                                    <option value="">Osteoporosis (perdida de calcio en los huesos)</option>
                                    <option value="">Insuficiencia renal crónica (problemas de riñón)</option>
                                    <option value="">Enfermedades del sistema nervioso, Alzheimer o pérdida de memoria</option>
                                    <option value="">TBC</option>
                                    <option value="">Otro (Especifique)</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Especifique</label>
                                    <input type="text" id="CarEspecifiquePato1" name="CarEspecifiquePato1" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Patología 2</label>
                                    <select name="CarPatologia2" id="CarPatologia2" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        <option value="">No se sabe</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Tipo de patología</label>
                                    <select name="CarTipoPatologia2" id="CarTipoPatologia2" class="form-control">
                                    <option value="">Enfermedad pulmonar crónica tal como asma, bronquitis o enfisema</option>
                                    <option value="">Hipertensión</option>
                                    <option value="">Diabetes</option>
                                    <option value="">Depresión </option>
                                    <option value="">Cáncer o un tumor maligno</option>
                                    <option value="">Enfermedad cardiaca congestiva u otros problemas del corazón</option>
                                    <option value="">Derrame o hemorragia cerebral</option>
                                    <option value=""> Artritis, reumatismo o artrosis </option>
                                    <option value="">Osteoporosis (perdida de calcio en los huesos)</option>
                                    <option value="">Insuficiencia renal crónica (problemas de riñón)</option>
                                    <option value="">Enfermedades del sistema nervioso, Alzheimer o pérdida de memoria</option>
                                    <option value="">TBC</option>
                                    <option value="">Otro (Especifique)</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Especifique</label>
                                    <input type="text" id="CarEspecifiquePato2" name="CarEspecifiquePato2" placeholder="" class="form-control">
                                </div>
                            </div>

                             <div class="row">
                                <div class="form-group col-md-3">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nivel de Hemoglobina</label>
                                    <input type="number" id="CarNivelHemoglobina" name="CarNivelHemoglobina" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">PRESENTA ANEMIA?</label>
                                    <select name="CarAnemia" id="CarAnemia" class="form-control">
                                    <option value="">Leve</option>
                                    <option value="">Moderada</option>
                                    <option value="">Severa</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Peso (Kg.)</label>
                                    <input type="number" id="CarPeso" name="CarPeso" placeholder="" class="form-control">
                                </div>

                                 <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Talla (m)</label>
                                    <input type="number" id="CarTalla" name="CarTalla" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class='row'>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Estado nutricional (imc) </label>
                                    <select name="CarEstadoNutricional" id="CarEstadoNutricional" class="form-control">
                                    <option value="">Bajo peso</option>
                                    <option value="">Normal</option>
                                    <option value="">Sobre peso</option>
                                    <option value="">Obesidad</option>
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