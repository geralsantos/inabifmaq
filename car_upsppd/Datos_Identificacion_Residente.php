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
                        <strong>Datos de Identificación del Residente</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Apellido Paterno</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Apellido Materno</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nombre</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">País de Procedencia</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">País</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Departamento de Procedencia</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Departamento</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Departamento de Nacimiento</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Departamento</option>
                                    </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Provincia de Procedencia</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Provincia</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Distrito de Procedencia</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Distrito</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Sexo</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Hombre</option>
                                    <option value="">Mujer</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id=""  placeholder="DD-MM-YYYY" v-model="fecha_fin_real"  data-language='es'  />
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Edad</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Lengua Materna</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Quechua</option>
                                    <option value="">Aymará</option>
                                    <option value="">Ashaninka</option>
                                    <option value="">Otra lengua nativa</option>
                                    <option value="">Castellano</option>
                                    <option value="">Portugués</option>
                                    </select>
                                    </div>
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



