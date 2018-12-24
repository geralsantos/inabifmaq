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
                        <strong>Seguimiento - Educación</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Plan de Intervención Educativo?</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Matriculado en el sistema educativo</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Regular</option>
                                    <option value="">CEBA</option>
                                    <option value="">CEBE</option>
                                    <option value="">CEPTRO</option>
                                    </select> </div>
                                   
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nivel que cursa?</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Inicial</option>
                                    <option value="">Primaria</option>
                                    <option value="">Secundaria</option>
                                    <option value="">Superior Universitario</option>
                                    <option value="">Superior Tecnológica</option>
                                    <option value="">Superior Artística</option>
                                    <option value="">Superior Pedagógica</option>
                                    </select>  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Grado </label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">1-Grado</option>
                                        <option value="">2-Grado</option>
                                        <option value="">3-Grado</option>
                                        <option value="">4-Grado</option>
                                        <option value="">5-Grado</option>
                                        <option value="">6-Grado</option>
                                        </select> 
                                        
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Acude en el mes al centro de estudios?</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">SI</option>
                                        <option value="">NO</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de días de asistencia</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de sesiones de reforzamiento escolar</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de consejerías y orientaciones - Área educativa</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Se encuentran participando de entrenamiento profesional/técnico</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Inserciones Laborales </option>
                                        <option value="">Practicas profesionales o técnicas</option>
                                        <option value="">programa de entrenamiento no remunerado</option>
                                        </select> 
                                        
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Especificar la actividad / oficio</label>
                                        <textarea name="" id=""></textarea>
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



