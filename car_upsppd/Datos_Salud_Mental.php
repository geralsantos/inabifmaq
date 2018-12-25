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
                        <strong>Datos de Salud Mental</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Trastornos neurologicos?</label>
                                    <select name="CarTrastornosNeurologico" id="CarTrastornosNeurologico" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        <option value="">No Sabe</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">ESPECIFICAR TRASTORNO NEUROLÓGICO PRINCIPAL</label>
                                    <select name="CarNeurologicoPrincipal" id="CarNeurologicoPrincipal" class="form-control">
                                        <option value="">del CIE10</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Tipo de trastorno de conducta </label>
                                    <select name="CarTrastornoConduta" id="CarTrastornoConduta" class="form-control">
                                        <option value="">Agresivo</option>
                                        <option value="">Se autolesiona</option>
                                        <option value="">agitación motora</option>
                                        <option value="">disocial</option>
                                        <option value="">Neghativismo</option>
                                        <option value=""> Desafiante</option>
                                        <option value=""> No se sabe</option>
                                        <option value=""> No presenta transtorno</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presenta dificultades para el habla?</label>
                                    <select name="CarDificultadHabla" id="CarDificultadHabla" class="form-control">
                                        <option value="">No habla</option>
                                        <option value="">Pide las necesidades básicas</option>
                                        <option value="">Pide mas que las necesidades basicas</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Si no habla, que método utiliza para comunicarse?</label>
                                    <select name="CarMetodoHabla" id="CarMetodoHabla" class="form-control">
                                        <option value="">gestos</option>
                                        <option value="">sonidos</option>
                                        <option value="">escritura</option>
                                        <option value="">no se hace entender</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Presenta dificultades para comprender lo que se le dice?</label>
                                    <select name="CarComprension" id="CarComprension" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Tipo de dificultad que presenta</label>
                                    <select name="CarDificultadPresenta" id="CarDificultadPresenta" class="form-control">
                                        <option value="">Disfacia de tipo receptivo</option>
                                        <option value=""> Afasia</option>
                                        <option value="">Otro</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Realiza actividades de la vida diaria?</label>
                                    <select name="CarRealizaActividades" id="CarRealizaActividades" class="form-control">
                                        <option value="">Come solo </option>
                                        <option value="">se viste solo</option>
                                        <option value="">Acude al baño solo</option>
                                        <option value="">Se baña solo</option>
                                        <option value="">Todas las anteriores</option>
                                        <option value="">Ninguno</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                   <label for="text-input" class=" form-control-label">Especificar (como, en qué forma, otros).</label>
                                   <input type="text" id="CarEspeficicarActividades" name="CarEspeficicarActividades" placeholder="" class="form-control">
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