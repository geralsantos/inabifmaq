<?php include('header.php'); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>USPAM</h1>
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
                        <strong>Actividades Sociales</strong>
                        <h6>Formulario de Carga de Datos</h6>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Código/DNI/Apellido Paterno Residente</label>
                                    <input type="text" id="usppamcodigoentidad" name="usppamcodigoentidad" placeholder="" class="form-control"> </div>
                                </div>
                            </div>

                            <div class="row">
                                
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Atención Social  </label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">SI</option>
                                            <option value="">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Visitas de Familiares</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">SI</option>
                                            <option value="">NO</option>
                                        </select> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">N°  de visitas al mes</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">1</option>
                                    <option value="">30</option>
                                        </select> </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Visitas de Amigos</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">SI</option>
                                        <option value="">NO</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">N°  de visitas al mes</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">1</option>
                                    <option value="">30</option>
                                        </select> </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Descriptivo de la persona que los visita</label>
                                    <input type="text" id="usppamcodigoentidad" name="usppamcodigoentidad" placeholder="" class="form-control"> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">N° de Veces que Participa Arte</label>
                                        <select name="select" id="select" class="form-control">
                                            <option value="">1</option>
                                            <option value="">30</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">Aseguramiento de la Universidad</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">SI</option>
                                    <option value="">NO</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Fecha de Emisión de la Obtención del Seguro</label>
                                    <input type="date" id="usppamcodigoentidad" name="usppamcodigoentidad" placeholder="" class="form-control"> 
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <div class=""><label for="text-input" class="form-control-label">Documento Nacional de Identidad - DNI</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">SI</option>
                                    <option value="">NO</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=""><label for="text-input" class=" form-control-label">Área de residencia del centro de atención</label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">URBANO</option>
                                        <option value="">RURAL</option>
                                    </select></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class=""><label for="text-input" class=" form-control-label">Código del Centro de Atención</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"></div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class=""><label for="text-input" class=" form-control-label">Nombre del Centro de Atención</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control"></div>
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