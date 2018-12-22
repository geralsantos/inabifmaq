<?php include('header.php') ?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>USUARIOS</h1>
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
                        <strong>Registro de Usuario</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Género</label></div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Femenino
                                            </label>
                                            &nbsp;
                                            <label for="inline-radio2" class="form-check-label ">
                                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Masculino
                                            </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Por favor, ingrese nombre.</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Apellido</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Por favor, ingrese apellido.</small> </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cargo</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Por favor, ingrese apellido.</small> </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Correo</label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Por favor, ingrese correo electrónico.</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Usuario</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Por favor,nombre de usuario.</small></div>
                                </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Contraseña</label></div>
                                    <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Por favor, ingrese contraseña.</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Nivel de Usuario</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="select" id="select" class="form-control">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Super Admin</option>
                                        <option value="2">Registrador</option>
                                        <option value="3">Usuario</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Local</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="select" id="select" class="form-control">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Lima Norte</option>
                                        <option value="2">Lima Este</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12" style="text-align: center">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-send"></i> Registrar
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Borrar
                                    </button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>



        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>

    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>


</body>
</html>
