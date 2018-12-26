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
                        <strong>Egreso - Datos Generales</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Código/DNI/Apellido Paterno Residente</label>
                                    <input type="text" id="pamcodigoentidad" name="pamcodigoentidad" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Fecha_egreso</label>
                                    <input type="date" id="CarFEgreso" name="CarFEgreso" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Motivo del egreso</label>
                                    <select name="CarMotivoEgreso" id="CarMotivoEgreso" class="form-control">
                                        <option value="">Retiro voluntario</option>
                                        <option value="">Reinserción en entorno familiar</option>
                                        <option value="">Traslado a una entidad de salud,</option>
                                        <option value="">Traslado a otra Entidad</option>
                                        <option value="">Fallecimiento</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Retiro voluntario</label>
                                    <select name="CarTrasladoCar" id="CarTrasladoCar" class="form-control">
                                        <option value="">Independencia</option>
                                        <option value="">Maltrato</option>
                                        <option value="">Otros</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Reinserción familiar</label>
                                    <select name="CarTrasladoEstablecimiento" id="CarTrasladoEstablecimiento" class="form-control">
                                        <option value="">Hiijo(a)</option>
                                        <option value="">Hermano(a)</option>
                                        <option value="">Nieto (a)</option>
                                        <option value="">Otros(as)</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Traslado a una entidad de salud  </label>
                                    <select name="CarDefuncion" id="CarDefuncion" class="form-control">
                                        <option value="">ESSALUD</option>
                                        <option value="">MINSA</option>
                                        <option value="">Otros</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Traslado a otra Entidad </label>
                                    <select name="CarReinsercionFamiliar" id="CarReinsercionFamiliar" class="form-control">
                                        <option value="">Otro CAR del INABIF</option>
                                        <option value="">Otro CAR público </option>
                                        <option value="">Otro CAR privado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Fallecimiento</label>
                                    <select name="CarRetiroVoluntario" id="CarRetiroVoluntario" class="form-control">
                                        <option value="">Muerte natural</option>
                                        <option value="">Muerte violenta</option>
                                        <option value="">Muerte súbita</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Cumplimiento de restitución de derechos Aseguramiento a Salud</label>
                                    <select name="CarAseguramiento" id="CarAseguramiento" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">Cumplimiento de restitución de derechos Documento Nacional de Identidad - DNI</label>
                                   <select name="CarConstanciaNacimiento" id="CarConstanciaNacimiento" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">Cumplimiento de restitución de derechos Reinserción Familiar</label>
                                   <select name="CarCarnetConadis" id="CarCarnetConadis" class="form-control">
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
        <?php include('../footer.php'); ?>