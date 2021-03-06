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
                        <strong>Salud Mental</strong>
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
                                    <div class=" "><label for="text-input" class=" form-control-label">Terapia Fisica y de Rehabilitación </label>
                                        <select name="select" id="select" class="form-control">
                                        <option value="">SI</option>
                                            <option value="">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Arte (Música, Danza y Teatro)</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">SI</option>
                                            <option value="">NO</option>
                                        </select> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class=" "><label for="text-input" class=" form-control-label">N° de Veces que Participa Arte en el Mes</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">1</option>
                                    <option value="">30</option>
                                        </select> </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class=" "><label for="text-input" class=" form-control-label">Dibujo y Pintura</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">SI</option>
                                        <option value="">NO</option>
                                    </select>
                                    </div>
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
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">Manualidades</label>
                                    <select name="select" id="select" class="form-control">
                                        <option value="">SI</option>
                                        <option value="">NO</option>
                                    </select> 
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
                                    <div class=" "><label for="text-input" class=" form-control-label">Otros</label>
                                    <select name="select" id="select" class="form-control">
                                    <option value="">SI</option>
                                    <option value="">NO</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text-input" class=" form-control-label">N° de Veces que Participa Arte</label>
                                        <select name="select" id="select" class="form-control">
                                            <option value="">1</option>
                                            <option value="">30</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <div class=""><label for="text-input" class=" form-control-label">Centro Poblado del Centro de Atención</label>
                                    <input type="text" id="txtaccionprogramada" name="txtaccionprogramada" placeholder="" class="form-control">
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