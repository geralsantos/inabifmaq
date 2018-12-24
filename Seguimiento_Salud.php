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
                        <strong>Salud</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Plan de intervención de salud</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Diagnóstico Psiquiátrico 1 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                   </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Diagnóstico Psiquiátrico 2 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Diagnóstico Psiquiátrico 3 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Diagnóstico Neurológico 1 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Diagnóstico Neurológico 2 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Diagnóstico Neurológico 3 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"> 
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Diagnóstico  Crónico 1 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text-input" class=" form-control-label">Diagnóstico  Crónico 2 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label"> Diagnóstico  Crónico 3 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Diagnóstico  Agudo 1 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                        
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Diagnóstico  Agudo 2 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Diagnóstico  Agudo 3 (CIE-10)</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Residente presenta VIH ?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Residente presenta ETS?</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Residente presenta HEPATITIS A?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                <label for="text-input" class=" form-control-label">Residente presenta HEPATITIS B?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Residente presenta Caries dental?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">DISCAPACIDAD</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                        </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Presenta discapacidad física?</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">No</option>
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                        </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Presenta discapacidad intelectual?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">No</option>
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Presenta discapacidad sensorial?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">No</option>
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Presenta discapacidad mental?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">No</option>
                                        <option value="">Leve</option>
                                        <option value="">Moderada</option>
                                        <option value="">Severa</option>
                                    </select> 
                                </div>
                                
                            </div>

                            <div class='row'>
                            <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">SIS</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">ESSALUD</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Otro tipo de Seguro de Salud?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">ESSALUD</option>
                                        <option value="">FFAA_PNP</option>
                                        <option value="">Seguro Privado</option>
                                        <option value="">Seguro Integral de Salud(SIS)</option>
                                        <option value="">Otro</option>
                                        <option value="">No Tiene)</option>
                                    </select> 
                                    
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">CONADIS?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                            </div>

                            <div class='row'>
                            <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Medicina General</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Cirugía General</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Traumatología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Odontología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class='row'>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Medicina Interna</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº  Atención en Cardiovascular</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº  Atención en Dermatología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Endocrinología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class='row'>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Gastroenterologíaa</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Gíneco-obstetricia</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Hematología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Nefrología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>

                             <div class='row'>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Infectología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Inmunología y Alergias</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Reumatología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Neumología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Neurología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Oftalmología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Otorrinolaringología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Oncología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class='row'>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Psiquiatría</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Cirugía </label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Traumatología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Urología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class='row'>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Odontología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Nutrición </label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Pedriatría/CRED</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Medicina Física y Rehabilitación</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class='row'>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Ginecología del niño y adolescente</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Nº Atención en Psicología</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Total de atenciones</label>
                                    <input type="number" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Usuario hospitalizado</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                            </div>

                            <div class='row'>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Atendido por Emergencia hospitale?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Inscrito en CRED ?</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="text-input" class=" form-control-label">Carné de inmunización?</label>
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



