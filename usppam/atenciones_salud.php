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
                        <strong>Atenciones Salud</strong>
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
                                    <div class=" "><label for="text-input" class=" form-control-label">Residente tuvo salida a hospitales en el mes</label>
                                    <select name="NNAPlanIntervencion" id="NNAPlanIntervencion" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Número de salidas a hospitales</label>
                                    <input type="number" id="NNAPsiquiatrico1" name="NNAPsiquiatrico1" placeholder="" class="form-control">
                                   </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">N° de atenciones en CARDIOVASCULAR</label>
                                    <input type="number" id="NNAPsiquiatrico2" name="NNAPsiquiatrico2" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de atenciones en NEFROLOGÍA</label>
                                    <input type="number" id="NNAPsiquiatrico3" name="NNAPsiquiatrico3" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">N° de atenciones en ONCOLOGÍA</label>
                                    <input type="number" id="NNANeurologico1" name="NNANeurologico1" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en NEUROCIRUGÍA</label>
                                    <input type="number" id="NNANeurologico2" name="NNANeurologico2" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en DERMATOLOGÍA</label>
                                    <input type="number" id="NNANeurologico3" name="NNANeurologico3" placeholder="" class="form-control"> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en ENDOCRINOLOGÍA</label>
                                    <input type="number" id="NNACronico1" name="NNACronico1" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en GASTROENTEROLOGIA</label>
                                    <input type="number" id="NNACronico2" name="NNACronico2" placeholder="" class="form-control">
                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label"> Nº atenciones en HEMATOLOGIA</label>
                                    <input type="number" id="NNACronico3" name="NNACronico3" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en INMUNOLOGIA</label>
                                    <input type="number" id="NNAAgudo1" name="NNAAgudo1" placeholder="" class="form-control">
                                        
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en MEDICINA FISICA Y REHABILITACION</label>
                                    <input type="number" id="NNAAgudo2" name="NNAAgudo2" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en NEUMOLOGIA</label>
                                    <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en NUTRICION</label>
                                    <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en NEUROLOGIA</label>
                                    <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en OFTALMOLIGIA</label>
                                    <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº atenciones en OTORRINOLARINGOLOGIA</label>
                                    <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en PSIQUIATRIA</label>
                                        <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en TRAUMATOLOGIA</label>
                                    <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en UROLOGIA</label>
                                    <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en ODONTOLOGIA</label>
                                    <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Medicina general y/o Geriatrica</label>
                                    <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atenciones en Otros servicios</label>
                                    <input type="number" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
                                </div>
                                
                            </div>

                            <div class='row'>
                            <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Residente fue hospitalizado en el periodo</label>
                                    <select name="NNASIS" id="NNASIS" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Motivo de la hospitalización</label>
                                    <input type="text" id="NNAAgudo3" name="NNAAgudo3" placeholder="" class="form-control">
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



