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
                        <strong>Actividades Sociorecreativas</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">N° Arte (Musica, danza, teatro)</label>
                                    <input type="number" id="NNAArte" name="NNAArte" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">N° Biohuerto</label>
                                    <input type="number" id="NNABiohuerto" name="NNABiohuerto" placeholder="" class="form-control">  </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" ">
                                    <label for="text-input" class=" form-control-label">N° Calzado y Zapatería</label>
                                    <input type="number" id="NNAZapateria" name="NNAZapateria" placeholder="" class="form-control"> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° Carpintería y Tallado en madera</label>
                                    <input type="number" id="NNACarpinteria" name="NNACarpinteria" placeholder="" class="form-control"> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° Cerámica</label>
                                    <input type="number" id="NNACeramica" name="NNACeramica" placeholder="" class="form-control"> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° Crianza de animales</label>
                                    <input type="number" id="NNACrianzaAnimales" name="NNACrianzaAnimales" placeholder="" class="form-control"> 
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° Dibujo y pintura</label>
                                    <input type="number" id="NNAPintura" name="NNAPintura" placeholder="" class="form-control"> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° Tejidos y Telares</label>
                                    <input type="number" id="NNATejidos" name="NNATejidos" placeholder="" class="form-control"> 
                                        
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° Futbol /Voley/ Artes marciales /Natación /Atletismo, entre otros</label>
                                    <input type="number" id="NNADeportes" name="NNADeportes" placeholder="" class="form-control"> 
                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Talleres Productivos (Cosmetología, electricidad, electrónica, mecánica, computación, ensamblaje, costura, vestido, panadería y reportería).</label>
                                    <input type="number" id="NNATalleres" name="NNATalleres" placeholder="" class="form-control">
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



