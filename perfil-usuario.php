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
                        <strong>Mi Perfil</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Foto de perfil</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <img class="user-avatar rounded-circle" width="10%" src="images/admin.jpg" alt="User Avatar">
                                    </div>
                                        <!-- <input type="file" id="file-input" name="file-input" class="form-control-file"></div> -->
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Género</label></div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked>Femenino
                                            </label>
                                            &nbsp;
                                            <label for="inline-radio2" class="form-check-label ">
                                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Masculino
                                            </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Nombre</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="text-input" placeholder="" class="form-control" value="Lesly" disabled>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Apellido</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="text-input" placeholder=""  value="Villalobos" class="form-control" disabled >
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Cargo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="cargo" name="cargo" placeholder="" class="form-control" value="Gerente" disabled>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Correo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input" placeholder="" class="form-control" value="user@gmail.com">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Usuario</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" value="lVillalobos" placeholder="" class="form-control" disabled>
                                    <small class="form-text text-muted">Esta será su usuario para ingresar al sistema.</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password-input" class=" form-control-label">Contraseña</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                        <small class="form-text text-muted">Esta será su contraseña para ingresar al sistema.</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Vivel de Usuario</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="select" id="select" class="form-control" disabled>
                                            <option value="1">Super Admin</option>
                                            <option value="2">Registrador</option>
                                            <option value="2">Usuario</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Local</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="select" id="select" class="form-control" disabled>

                                        <option value="1">Lima Norte</option>
                                        <option value="2">Lima Este</option>

                                        </select>
                                    </div>
                                </div>

                                    <div class="row form-group">
                                        <div class="col col-md-12" style="text-align: center">
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-send"></i> Actualizar
                                        </button>

                                    </div>
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
