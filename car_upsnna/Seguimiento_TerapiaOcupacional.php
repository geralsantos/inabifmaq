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
                        <strong>Terapia Ocupacional y de lenguaje</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nº Talleres Educativos</label>
                                    <input type="number" id="NNATallerEducativo" name="NNATallerEducativo" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nº Campañas Preventivo  - Promocionales</label>
                                    <input type="number" id="NNAPreventivo" name="NNAPreventivo" placeholder="" class="form-control">
                                     </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Nº Atención en Terapia Física</label>
                                    <input type="number" id="NNATerapiaFisica" name="NNATerapiaFisica" placeholder="" class="form-control">  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Terapia Ocupacional</label>
                                    <input type="number" id="NNATerapiaOcupacional" name="NNATerapiaOcupacional" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Terapia de Lenguaje</label>
                                    <input type="number" id="NNATerapiaLengua" name="NNATerapiaLengua" placeholder="" class="form-control">
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



