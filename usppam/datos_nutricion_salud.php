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
                        <strong>Datos de Salud y Nutrición del Residente</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Código/DNI/Apellido Paterno Residente</label>
                                    <input type="text" id="usppamcodigoentidad" name="usppamcodigoentidad" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Discapacidad</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Presenta Discapacidad Física</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">No</option>
                                    <option value="">Leve</option>
                                    <option value="">Moderada</option>
                                    <option value="">Severa</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Presenta Discapacidad Intelectual</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Nuclear</option>
                                    <option value="">Extensa</option>
                                    <option value="">Mononuclear</option>
                                    </select>  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presenta Discapacidad Sensorial</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">No</option>
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presenta Discapacidad Mental</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">No</option>
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">El Dx es Certificado</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Tiene Carnet del CONADIS</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        <option value="">Se desconoce</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Grado Dependencia de la PAM</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Autovalente</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Motivo de Dificultad con el Desplazamiento</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Musculoesqueletica</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Enfermedad de Ingreso 1</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">SI</option>
                                        <option value="">NO</option>
                                       
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Tipo de Patología </label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Enfermedad pulmonar crónica tal como asma</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Enfermedad de Ingreso 1</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">SI</option>
                                        <option value="">NO</option>
                                       
                                        </select> 
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Tipo de Patología </label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Enfermedad pulmonar crónica tal como asma</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Nivel de Hemoglobina</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Presenta Anemia</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Peso (kg.)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Talla (mt)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Estado Nutricional (IMC) </label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Normal</option>
                                        <option value="">Desnutrición</option>
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



