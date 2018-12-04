<!-- Layout de registro -->


<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DWASH - Login</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="imagenes/dwash.png">
        <link rel="icon" type="image/png" sizes="16x16" href="imagenes/dwash.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body class="bg-white">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas"> <!-- Imagen que aparece al cargar la página -->
                <img src="imagenes/dwash.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>


        
<div class="widget has-shadow">
        <div class="widget-header bordered no-actions d-flex align-items-center">
            <h4>Registrar cuenta </h4>
        </div>
        <div class="widget-body">
            <form class="needs-validation" enctype="multipart/form-data">
                <!-- NOMBRE DE USUARIO -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nombre de usuario</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" required name="usuario">
                    </div>
                </div>

                <!-- NOMBRE -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nombre </label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" placeholder="Nombre" required name="nombre">
                    </div>
                </div>

                <!-- APELLIDOS -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Apellidos </label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" placeholder="Apellidos" required name="apellidos">
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Correo electrónico</label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Correo electrónico" required name="correo">
                            <span class="input-group-addon addon-orange"><i class="la la-at"></i></span>
                        </div>
                    </div>
                </div>
                <!-- CONTRASEÑA -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Contraseña</label>
                    <div class="col-lg-5">
                        <input type="password" class="form-control" placeholder="Ingrese la contraseña" required name="password">                       
                    </div>
                </div>

                <!-- TELÉFONO -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Teléfono</label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <span class="input-group-addon addon-primary">
                                <i class="la la-phone"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Número de teléfono" name="telefono">
                        </div>
                    </div>
                </div>


                <!-- FOTO -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Foto</label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <span class="input-group-addon addon-secondary">
                                <i class="la la-file-photo-o"></i>
                            </span>
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>
                </div>
               

                
                <div class="text-center">
                    <button class="btn btn-gradient-02" type="submit" name="guardar">Guardar datos</button>
                    <button class="btn btn-shadow" type="reset">Borrar</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Form -->


    
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="{{asset('assets/vendors/js/app/app.min.js')}}"></script>
        <?php // {{ asset(") }}?>
        <!-- End Page Vendor Js -->
    </body>
</html>


