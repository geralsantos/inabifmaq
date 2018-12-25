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
                        <strong>Datos Familiares y Sociales del Residente</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Cuenta con Familiares Ubicados</label>
                                    <select name="NNACuentaFamilia" id="NNACuentaFamilia" class="form-control">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Tipo de Parentesco</label>
                                    <select name="NNATipoParentesco" id="NNATipoParentesco" class="form-control">
                                    <option value="">Padre</option>
                                    <option value="">Madre</option>
                                    <option value="">Hermano/a</option>
                                    <option value="">Tio/a</option>
                                    </select> </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Tipo de Familia del Usuario</label>
                                    <select name="NNATipoFamilia" id="NNATipoFamilia" class="form-control">
                                    <option value="">Nuclear</option>
                                    <option value="">Extensa</option>
                                    <option value="">Mononuclear</option>
                                    </select>  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Problemática Familiar</label>
                                    <select name="NNAProblematicaFamiliar" id="NNAProblematicaFamiliar" class="form-control">
                                    <option value="">Ausentismo de madre por trabajo</option>
                                    <option value="">Conductual</option>
                                    <option value="">Experiencia en Calle</option>
                                    <option value="">Conductual</option>
                                    <option value="">Violencia Sexual</option>
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



