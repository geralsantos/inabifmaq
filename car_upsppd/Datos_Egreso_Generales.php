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
                        <strong>Egreso - Datos Generales</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Fecha_egreso</label>
                                    <input type="date" id="CarFEgreso" name="CarFEgreso" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Motivo del egreso</label>
                                    <select name="CarMotivoEgreso" id="CarMotivoEgreso" class="form-control">
                                        <option value="">Traslado a otro CAR</option>
                                        <option value="">Fallecimiento</option>
                                        <option value="">Reinserción Familiar</option>
                                        <option value="">Vida Independiente</option>
                                        <option value="">Otro</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Traslado</label>
                                    <select name="CarTrasladoCar" id="CarTrasladoCar" class="form-control">
                                        <option value="">ESSALUD</option>
                                        <option value="">MINSA</option>
                                        <option value="">Otros</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Traslado a un establecimiento de salud por un periodo prolongado</label>
                                    <select name="CarTrasladoEstablecimiento" id="CarTrasladoEstablecimiento" class="form-control">
                                        <option value="">ESSALUD</option>
                                        <option value="">MINSA</option>
                                        <option value="">Otros</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Defunción </label>
                                    <select name="CarDefuncion" id="CarDefuncion" class="form-control">
                                        <option value="">Muerte natural</option>
                                        <option value="">Muerte violenta</option>
                                        <option value="">Muerte súbita</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Reinserción familiar</label>
                                    <select name="CarReinsercionFamiliar" id="CarReinsercionFamiliar" class="form-control">
                                        <option value="">Padre</option>
                                        <option value="">Madre</option>
                                        <option value="">Hermano/a</option>
                                        <option value="">Tío/a</option>
                                        <option value="">primos/as</option>
                                        <option value="">Abuelos/as</option>
                                        <option value="">Otros/as</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Retiro Voluntario</label>
                                    <select name="CarRetiroVoluntario" id="CarRetiroVoluntario" class="form-control">
                                        <option value="">Vida Independencia</option>
                                        <option value="">Maltrato</option>
                                        <option value="">Otros</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">ASEGURAMIENTO A SALUD</label>
                                    <select name="CarAseguramiento" id="CarAseguramiento" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">CONSTANCIA DE NACIMIENTO</label>
                                   <select name="CarConstanciaNacimiento" id="CarConstanciaNacimiento" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">Carnet del CONADIS</label>
                                   <select name="CarCarnetConadis" id="CarCarnetConadis" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label"> DNI</label>
                                   <select name="CarTieneDni" id="CarTieneDni" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">Restitución Familiar</label>
                                   <select name="CarRestitucionF" id="CarRestitucionF" class="form-control">
                                        <option value="">Participación Familiar</option>
                                        <option value="">Reinserción Familiar</option>
                                        <option value="">Ninguno</option>
                                        <option value="">Otro</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">Cumplimiento de restitución de derechos al egreso</label>
                                   <select name="CarCumResDerEgreso" id="CarCumResDerEgreso" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">AUS</label>
                                   <select name="CarAus" id="CarAus" class="form-control">
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