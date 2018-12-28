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
                        <strong>Datos de Admisión del Residente</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Movimiento Poblacional</label>
                                    <select name="NNAMovimientoPoblacional" id="NNAMovimientoPoblacional" class="form-control">
                                    <option value="">Nuevo</option>
                                    <option value="">Continuador</option>
                                    <option value="">Reingreso</option>
                                    <option value="">Traslado</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Apellido Materno</label>
                                    <input type="text" id="NNAApellidoMaterno" value='Perez' name="NNAApellidoMaterno" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nombre</label>
                                    <input type="text" id="NNANombre" name="NNANombre" value='Carlos ' placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">País de Procedencia</label>
                                    <select name="NNAPaisProcedencia" id="NNAPaisProcedencia" class="form-control">
                                        <option value="">País</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Departamento de Procedencia</label>
                                    <select name="NNADepartementoProcedencia" id="NNADepartementoProcedencia" class="form-control">
                                        <option value="">Departamento</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Departamento de Nacimiento</label>
                                    <select name="NNADepartamentoNacimiento" id="NNADepartamentoNacimiento" class="form-control">
                                        <option value="">Departamento</option>
                                    </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Provincia de Nacimiento</label>
                                    <select name="NNAProvinciaNacimiento" id="NNAProvinciaNacimiento" class="form-control">
                                        <option value="">Provincia</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Distrito de Nacimiento</label>
                                    <select name="NNADistritoNacimiento" id="NNADistritoNacimiento" class="form-control">
                                        <option value="">Distrito</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Sexo</label>
                                    <select name="NNASexo" id="NNASexo" class="form-control">
                                    <option value="">Hombre</option>
                                    <option value="">Mujer</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="NNAFNacimiento" name="NNAFNacimiento"  placeholder="DD-MM-YYYY" v-model="fecha_fin_real"  data-language='es'  />
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Edad (Años)</label>
                                    <input type="number" id="NNAEdad" name="NNAEdad" value='12' placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Lengua Materna</label>
                                    <select name="NNALenguaMAterna" id="NNALenguaMAterna" class="form-control">
                                    <option value="">Quechua</option>
                                    <option value="">Castellano</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Número o Código del Documento</label>
                                    <input type="text" id="NNACodigoDocumento" name="NNACodigoDocumento" value='89654514' placeholder="" class="form-control">
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



