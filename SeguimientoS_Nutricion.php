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
                        <strong>Seguimiento - Nutricion</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Plan de intervención</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Meta trazada en el PAI</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                     </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Posee informe técnico evolutivo?</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select>  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Cumplimiento del Plan de intervención</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">CUMPLIDA</option>
                                        <option value="">EN PROCESO</option>
                                        <option value="">NO SE EVIDENCIA PROGRESO</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">ESTADO NUTRICIONALl (Peso para la Talla)</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Bajo peso</option>
                                        <option value="">Normal</option>
                                        <option value="">Sobpreso</option>
                                        <option value="">Obesidad</option>
                                        <option value="">Obesidad mórbida</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">ESTADO NUTRICIONAL  (Talla para la Edad)</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Baja Talla</option>
                                        <option value="">Normal</option>
                                        <option value="">Alto</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Hemoglobina(gr./dl.)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Análisis de la Hemoglobina</label>
                                        <select name="select" id="select" class="form-control">
                                        <<option value="">Normal</option>
                                        <option value="">Anemia Leve</option>
                                        <<option value="">Anemia moderada</option>
                                        <option value="">Homoparental</option>
                                        <option value="">Anemia severa</option>
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



