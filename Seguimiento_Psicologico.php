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
                        <strong>Seguimiento Psicologico</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Plan de Intervención psicológico</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Durante el periodo ha presentado </label>
                                    <select name="select" id="select" class="form-control">
                                    <option value=""> Problemas del aprendizaje</option>
                                    <option value="">Retraso en el Desarrollo psicomotor</option>
                                    <option value="">Trastorno de Estrés Post Traumático</option>
                                    <option value="">problemas de Autoestima</option>
                                    <option value="">Diagnóstico depresivo</option>
                                    <option value="">Diagnóstico de Ansiedad</option>
                                    <option value="">trastorno del comportamiento</option>
                                    </select> </div>        
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">PRINCIPAL PERFIL ACTUAL</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Trastorno de comportamiento</option>
                                    <option value="">Consumidores de sustancias psicoactivas</option>
                                    <option value="">Experiencia Vida en Calle</option>
                                    <option value="">Víctima de Explotación sexual</option>
                                    <option value="">Víctima de trata por explotación sexual</option>
                                    <option value="">Víctima de trata por mendicidad</option>
                                    <option value="">Víctima de trata por explotación laboral</option>
                                    <option value="">Víctima de trata por comercialización de órganos</option>
                                    <option value="">Víctima de trata por venta de niños/as</option>
                                    <option value="">trastorno disocial</option>
                                    <option value="">Víctima de violencia sexual</option>
                                    <option value="">Presunto infractor</option>
                                    <option value="">Víctima de maltrato físico y/o psicológico</option>
                                    <option value="">Abandono</option>
                                    </select>  
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Intervenciones terapéutica individual</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Intervenciones terapéutica grupal</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Consejerías y orientaciones psicológica</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Consejerías y orientaciones a la familia2</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Charlas Preventivo  - Promocionales Psicológicos</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones  Taller de Liderazgo</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones Taller de Autoestima</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones  Taller de Sexualidad</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones   Taller de prevención del embarazo en adolescentes</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones  Taller de Igualdad de Género</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones  Taller de Violencia Familiar</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº participaciones en sesiones Taller de Salud mental</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
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



