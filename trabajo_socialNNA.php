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
                        <strong>Trabajo Social</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Fase de Intervención</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Primera Fase</option>
                                    <option value="">Segunda Fase</option>
                                    <option value="">Tercera Fase</option>
                                    <option value="">Cuarta Fase</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Estado del Usuario</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Activo</option>
                                    <option value="">Inactivo</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Plan de Intervención Social</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select>  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Situación Legal del NNA</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">No</option>
                                        <option value="">Leve</option>
                                        <option value="">Leve</option>
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">El NNA cuenta con familia ubicada?</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">SI</option>
                                        <option value="">NO</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">El NNA cuenta con soporte familiar?</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Persona que brinda soporte familiar</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Abuelo/a</option>
                                        <option value="">Hermana/o</option>
                                        <option value="">Madre/Padre</option>
                                        <option value="">Primo/a</option>
                                        <option value="">Tio/a</option>
                                        <option value="">Otros</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Tipo de Familia</label>
                                        <select name="select" id="select" class="form-control">
                                        <<option value="">Nuclear</option>
                                        <option value="">Extensa</option>
                                        <<option value="">MonoNuclear</option>
                                        <option value="">Homoparental</option>
                                        <option value="">Ensamblada</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Problematica Familiar</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Violencia</option>
                                        <option value="">Prostitución</option>
                                        <option value="">Delincuencia</option>
                                        <option value="">Privado de su libertad</option>
                                        <option value="">Salud mental</option>
                                        <option value="">Multi problemática</option>
                                        <option value="">Disgregada</option>
                                        <option value="">Otros</option>
                                        </select> 
                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label"> Familia Cuenta con Clasificación SISFOH</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Resultado de la Clasificación</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">POBRE EXTREMO</option>
                                        <option value="">POBRE</option>
                                        <option value="">NO POBRE</option>
                                        </select> 
                                        
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">N° visitas familiar recibe cada NNA</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">N° participaciones en escuela de padres </label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">N° consejerias y orientaciones a la familia</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Familia usa redes de soporte familiar?</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº de consejerias y orientaciones al residente </label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Charlas Preventivo  - Promocionales </label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Visitas Domiciliarias</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Plan de Reinserción familiar</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Residente cuenta con DNI?</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Residente cuenta con AUS/SIS?</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Residente cuenta con carnet del CONADIS?</label>
                                        <select name="select" id="select" class="form-control">
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
        <?php include('footer.php'); ?>



